@extends('admin.layout')

@section('page-title', 'Blog Posts')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Blog Posts</h2>
        <small class="text-muted">Sorted by latest first</small>
    </div>
    <a href="{{ route('admin.blog-posts.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>Create New Post
    </a>
</div>

<div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Images</th>
                        <th>Comments</th>
                        <th>Views</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <td>
                                <div class="fw-medium">{{ $post->title }}</div>
                                <small class="text-muted">{{ Str::limit($post->excerpt, 60) }}</small>
                            </td>
                            <td>{{ $post->user->name }}</td>
                            <td>
                                <span class="badge {{ $post->status === 'published' ? 'bg-success' : 'bg-warning' }}">
                                    {{ ucfirst($post->status) }}
                                </span>
                            </td>
                            <td>
                                <span class="badge bg-info">
                                    <i class="fas fa-image"></i> {{ $post->images->count() }}
                                </span>
                            </td>
                            <td>
                                <span class="badge bg-secondary">
                                    <i class="fas fa-comments"></i> {{ $post->allComments->count() }}
                                </span>
                            </td>
                            <td>{{ $post->views }}</td>
                            <td>
                                <small>{{ $post->created_at->format('M d, Y') }}</small>
                                <br>
                                <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                            </td>
                            <td>
                                <a href="{{ route('admin.blog-posts.edit', $post) }}" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                                <form action="{{ route('admin.blog-posts.destroy', $post) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-4 text-muted">
                                No blog posts yet. <a href="{{ route('admin.blog-posts.create') }}">Create your first post</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-3">
    {{ $posts->links() }}
</div>
@endsection
