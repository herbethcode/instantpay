@php
    $bubbleStyles = [
        'user' => 'align-self: flex-end; background: #1e293b; color: #fff; border-radius: 14px 14px 4px 14px;',
        'agent' => 'align-self: flex-start; background: #fff5f5; color: #1c1c1e; border: 1px solid #ea2429; border-radius: 14px 14px 14px 4px;',
        'assistant' => 'align-self: flex-start; background: #f1f5f9; color: #1c1c1e; border-radius: 14px 14px 14px 4px;',
    ];
    $labels = [
        'user' => 'Visitor',
        'agent' => 'You (agent)',
        'assistant' => 'Bot',
    ];
@endphp
<div style="max-width: 75%; padding: 10px 14px; {{ $bubbleStyles[$message['role']] ?? $bubbleStyles['assistant'] }}">
    <div style="font-size: 11px; opacity: 0.6; margin-bottom: 2px;">{{ $labels[$message['role']] ?? ucfirst($message['role']) }}</div>
    <div style="white-space: pre-wrap; word-break: break-word;">{{ $message['content'] }}</div>
</div>
