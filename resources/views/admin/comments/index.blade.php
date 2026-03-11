@extends('admin.layout')

@section('page-title', 'Comments Management')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Blog Post Comments</h2>
</div>

<div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Post</th>
                        <th>Author</th>
                        <th>Comment</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($comments as $comment)
                        <tr class="{{ !$comment->is_approved ? 'table-warning' : '' }}">
                            <td>
                                <small class="fw-medium">{{ Str::limit($comment->blogPost->title, 40) }}</small>
                            </td>
                            <td>
                                @if($comment->user)
                                    {{ $comment->user->name }}
                                @else
                                    {{ $comment->author_name ?? 'Guest' }}
                                    <br>
                                    <small class="text-muted">{{ $comment->author_email }}</small>
                                @endif
                            </td>
                            <td>
                                <div>{{ Str::limit($comment->content, 80) }}</div>
                                @if($comment->parent_id)
                                    <small class="text-muted">
                                        <i class="fas fa-reply"></i> Reply to comment
                                    </small>
                                @endif
                            </td>
                            <td>
                                <span class="badge {{ $comment->is_approved ? 'bg-success' : 'bg-warning' }}">
                                    {{ $comment->is_approved ? 'Approved' : 'Pending' }}
                                </span>
                            </td>
                            <td>
                                <small>{{ $comment->created_at->format('M d, Y') }}</small>
                                <br>
                                <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                            </td>
                            <td>
                                @if(!$comment->is_approved)
                                    <form action="{{ route('admin.comments.approve', $comment) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm btn-success mb-1">
                                            <i class="fas fa-check"></i> Approve
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('admin.comments.unapprove', $comment) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm btn-warning mb-1">
                                            <i class="fas fa-times"></i> Unapprove
                                        </button>
                                    </form>
                                @endif
                                <form action="{{ route('admin.comments.destroy', $comment) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger mb-1" onclick="return confirm('Delete this comment?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">
                                No comments yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-3">
    {{ $comments->links() }}
</div>
@endsection
