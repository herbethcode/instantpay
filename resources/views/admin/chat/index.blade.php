@extends('admin.layout')

@section('page-title', 'Live Chat')

@section('content')
<div class="mb-4">
    <h2 class="mb-0">Live Chat Conversations</h2>
    <p class="text-muted mb-0">Conversations started by visitors through the website chat widget.</p>
</div>

@if($error)
    <div class="alert alert-danger">{{ $error }}</div>
@endif

<div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Visitor</th>
                        <th>Last message</th>
                        <th>Messages</th>
                        <th>Updated</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($conversations as $conv)
                        <tr>
                            <td>
                                @if($conv['handled_by'] === 'human')
                                    <span class="badge bg-warning text-dark">With agent</span>
                                @else
                                    <span class="badge bg-secondary">Bot</span>
                                @endif
                            </td>
                            <td class="fw-medium">{{ $conv['title'] ?: 'Conversation ' . substr($conv['id'], 0, 8) }}</td>
                            <td class="text-muted">{{ \Illuminate\Support\Str::limit($conv['last_message'], 80) }}</td>
                            <td>{{ $conv['message_count'] }}</td>
                            <td class="text-muted">{{ \Illuminate\Support\Carbon::parse($conv['updated_at'])->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('admin.chat.show', $conv['id']) }}" class="btn btn-sm btn-outline-primary">Open</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">No conversations yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
