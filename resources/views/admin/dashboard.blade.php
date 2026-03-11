@extends('admin.layout')

@section('page-title', 'Dashboard')

@section('content')
<div class="row g-4 mb-4">
    <!-- Total Users -->
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Total Users</p>
                        <h3 class="fw-bold">{{ $stats['total_users'] }}</h3>
                    </div>
                    <div class="bg-primary bg-opacity-10 p-3 rounded">
                        <i class="fas fa-users text-primary fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Posts -->
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Blog Posts</p>
                        <h3 class="fw-bold">{{ $stats['total_posts'] }}</h3>
                        <small class="text-muted">{{ $stats['published_posts'] }} published</small>
                    </div>
                    <div class="bg-success bg-opacity-10 p-3 rounded">
                        <i class="fas fa-blog text-success fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contacts -->
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Contacts</p>
                        <h3 class="fw-bold">{{ $stats['total_contacts'] }}</h3>
                        <small class="text-muted">{{ $stats['unread_contacts'] }} unread</small>
                    </div>
                    <div class="bg-warning bg-opacity-10 p-3 rounded">
                        <i class="fas fa-envelope text-warning fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Visitors -->
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Visitors Today</p>
                        <h3 class="fw-bold">{{ $stats['today_visitors'] }}</h3>
                        <small class="text-muted">{{ $stats['total_visitors'] }} total</small>
                    </div>
                    <div class="bg-danger bg-opacity-10 p-3 rounded">
                        <i class="fas fa-chart-line text-danger fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <!-- Recent Contacts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Recent Contacts</h5>
            </div>
            <div class="card-body">
                @forelse($recent_contacts as $contact)
                    <div class="d-flex justify-content-between align-items-start mb-3 pb-3 border-bottom">
                        <div class="flex-fill">
                            <h6 class="mb-1">{{ $contact->name }}</h6>
                            <p class="text-muted small mb-1">{{ $contact->email }}</p>
                            <p class="small mb-0">{{ Str::limit($contact->message, 60) }}</p>
                        </div>
                        <div class="ms-3 text-end">
                            @if(!$contact->is_read)
                                <span class="badge bg-danger rounded-circle p-1">&nbsp;</span>
                            @endif
                            <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-sm btn-outline-primary mt-1">View</a>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">No contacts yet.</p>
                @endforelse
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-link">View All Contacts</a>
            </div>
        </div>
    </div>

    <!-- Popular Posts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Popular Blog Posts</h5>
            </div>
            <div class="card-body">
                @forelse($popular_posts as $post)
                    <div class="d-flex justify-content-between align-items-start mb-3 pb-3 border-bottom">
                        <div class="flex-fill">
                            <h6 class="mb-1">{{ $post->title }}</h6>
                            <p class="text-muted small mb-0">{{ $post->views }} views</p>
                        </div>
                        <a href="{{ route('admin.blog-posts.edit', $post) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                    </div>
                @empty
                    <p class="text-muted">No published posts yet.</p>
                @endforelse
                <a href="{{ route('admin.blog-posts.index') }}" class="btn btn-link">View All Posts</a>
            </div>
        </div>
    </div>
</div>

<!-- Recent Visitors -->
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Recent Visitors</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>IP Address</th>
                        <th>URL</th>
                        <th>Location</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recent_visitors as $visitor)
                        <tr>
                            <td>{{ $visitor->ip_address }}</td>
                            <td>{{ Str::limit($visitor->url, 50) }}</td>
                            <td>{{ $visitor->city ? $visitor->city . ', ' : '' }}{{ $visitor->country ?? 'Unknown' }}</td>
                            <td>{{ $visitor->created_at->diffForHumans() }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No visitors tracked yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <a href="{{ route('admin.visitors.index') }}" class="btn btn-link">View All Visitors</a>
    </div>
</div>
@endsection
