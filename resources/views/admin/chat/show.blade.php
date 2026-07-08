@extends('admin.layout')

@section('page-title', 'Conversation')

@section('content')
@php
    $conv = $conversation;
@endphp

<div class="mb-4 d-flex justify-content-between align-items-start">
    <div>
        <a href="{{ route('admin.chat.index') }}" class="text-decoration-none small">&larr; Back to Live Chat</a>
        <h2 class="mb-0 mt-1">{{ $conv['title'] ?: 'Conversation ' . substr($conv['id'], 0, 8) }}</h2>
        <p class="text-muted mb-0">Visitor ID: <code>{{ $conv['external_user_id'] ?: 'unknown' }}</code></p>
    </div>
    <div>
        @if($conv['handled_by'] === 'human')
            <span class="badge bg-warning text-dark mb-2">You're handling this conversation</span>
            <form action="{{ route('admin.chat.handoff', $conv['id']) }}" method="POST">
                @csrf
                <input type="hidden" name="handled_by" value="bot">
                <button type="submit" class="btn btn-sm btn-outline-secondary">Hand back to bot</button>
            </form>
        @else
            <span class="badge bg-secondary mb-2">Bot is replying</span>
            <form action="{{ route('admin.chat.handoff', $conv['id']) }}" method="POST">
                @csrf
                <input type="hidden" name="handled_by" value="human">
                <button type="submit" class="btn btn-sm btn-outline-primary">Take over conversation</button>
            </form>
        @endif
    </div>
</div>

<div class="card mb-3">
    <div class="card-body">
        <div id="chat-transcript" style="max-height: 55vh; overflow-y: auto; display: flex; flex-direction: column; gap: 10px;">
            @foreach($conv['messages'] as $m)
                @include('admin.chat._message', ['message' => $m])
            @endforeach
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.chat.reply', $conv['id']) }}" method="POST" class="d-flex gap-2">
            @csrf
            <input type="text" name="message" class="form-control" placeholder="Type a reply to this visitor…" required autocomplete="off">
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
        <p class="text-muted small mt-2 mb-0">Sending a reply automatically takes over the conversation — the bot will stay quiet until you hand it back.</p>
    </div>
</div>

@push('scripts')
<script>
(function () {
    var transcript = document.getElementById('chat-transcript');
    var renderedCount = {{ count($conv['messages']) }};
    var messagesUrl = @json(route('admin.chat.messages', $conv['id']));

    function bubbleStyle(role) {
        if (role === 'user') {
            return 'align-self: flex-end; background: #1e293b; color: #fff; border-radius: 14px 14px 4px 14px;';
        }
        if (role === 'agent') {
            return 'align-self: flex-start; background: #fff5f5; color: #1c1c1e; border: 1px solid #ea2429; border-radius: 14px 14px 14px 4px;';
        }
        return 'align-self: flex-start; background: #f1f5f9; color: #1c1c1e; border-radius: 14px 14px 14px 4px;';
    }

    function roleLabel(role) {
        if (role === 'user') return 'Visitor';
        if (role === 'agent') return 'You (agent)';
        return 'Bot';
    }

    function appendMessage(m) {
        var wrap = document.createElement('div');
        wrap.style.cssText = 'max-width: 75%; padding: 10px 14px; ' + bubbleStyle(m.role);
        var label = document.createElement('div');
        label.style.cssText = 'font-size: 11px; opacity: 0.6; margin-bottom: 2px;';
        label.textContent = roleLabel(m.role);
        var text = document.createElement('div');
        text.style.cssText = 'white-space: pre-wrap; word-break: break-word;';
        text.textContent = m.content;
        wrap.appendChild(label);
        wrap.appendChild(text);
        transcript.appendChild(wrap);
    }

    function poll() {
        fetch(messagesUrl, { headers: { 'Accept': 'application/json' } })
            .then(function (res) { return res.ok ? res.json() : null; })
            .then(function (data) {
                if (!data || !data.messages) return;
                if (data.messages.length > renderedCount) {
                    data.messages.slice(renderedCount).forEach(appendMessage);
                    renderedCount = data.messages.length;
                    transcript.scrollTop = transcript.scrollHeight;
                }
            })
            .catch(function () { /* ignore transient errors, try again next tick */ });
    }

    transcript.scrollTop = transcript.scrollHeight;
    setInterval(poll, 4000);
})();
</script>
@endpush
@endsection
