@extends('layouts.app')

@section('title', $post->title . ' - InstantPay Blog')

@section('content')
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">{{ Str::limit($post->title, 60) }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($post->title, 40) }}</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Single Post Start -->
<div class="page-single-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post Featured Image Start -->
                @if($post->activeImages->first())
                <div class="post-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('storage/' . $post->activeImages->first()->image_path) }}" alt="{{ $post->title }}">
                    </figure>
                    @if($post->activeImages->first()->caption)
                    <p class="text-center text-muted mt-2"><small><em>{{ $post->activeImages->first()->caption }}</em></small></p>
                    @endif
                </div>
                @elseif($post->featured_image)
                <div class="post-image">
                    <figure class="image-anime reveal">
                        <img src="{{ $post->featured_image }}" alt="{{ $post->title }}">
                    </figure>
                </div>
                @endif
                <!-- Post Featured Image End -->

                <!-- Post Meta Info -->
                <div class="post-item-meta mb-4">
                    <ul>
                        <li><i class="fa-solid fa-calendar-days"></i> {{ $post->published_at->format('d M, Y') }}</li>
                        <li><i class="fa-solid fa-user"></i> {{ $post->user->name }}</li>
                        <li><i class="fa-solid fa-eye"></i> {{ $post->views }} views</li>
                        <li><i class="fa-solid fa-comments"></i> {{ $post->approvedComments->count() }} comments</li>
                    </ul>
                </div>

                <!-- Post Single Content Start -->
                <div class="post-content">
                    <!-- Post Entry Start -->
                    <div class="post-entry">
                        @if($post->excerpt)
                        <p class="wow fadeInUp lead">{{ $post->excerpt }}</p>
                        @endif

                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            {!! nl2br(e($post->content)) !!}
                        </div>
                    </div>
                    <!-- Post Entry End -->

                    <!-- Additional Post Images -->
                    @if($post->activeImages->count() > 1)
                    <div class="post-gallery mt-4 mb-4">
                        <h3 class="mb-3">Gallery</h3>
                        <div class="row g-3">
                            @foreach($post->activeImages->skip(1) as $image)
                            <div class="col-md-6">
                                <figure class="image-anime">
                                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->caption ?? $post->title }}" class="img-fluid rounded">
                                </figure>
                                @if($image->caption)
                                <p class="text-center text-muted mt-2"><small><em>{{ $image->caption }}</em></small></p>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Post Social Links Start -->
                    <div class="post-tag-links mt-5">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <!-- Post Social Links Start -->
                                <div class="post-social-sharing wow fadeInUp">
                                    <p class="mb-2"><strong>Share this post:</strong></p>
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blog.show', $post->slug)) }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(route('blog.show', $post->slug)) }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(route('blog.show', $post->slug)) }}&text={{ urlencode($post->title) }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Post Social Links End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post Single Content End -->

                <!-- Comments Section Start -->
                <div class="post-comments mt-5">
                    <h3 class="mb-4">Comments ({{ $post->approvedComments->count() }})</h3>

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show">
                        <strong>Please fix the following errors:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    <!-- Comments List Start -->
                    @forelse($post->approvedComments as $comment)
                    <div class="comment-item mb-4 p-4 bg-light rounded">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 20px;">
                                    {{ strtoupper(substr($comment->user ? $comment->user->name : $comment->author_name, 0, 1)) }}
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">{{ $comment->user ? $comment->user->name : $comment->author_name }}</h5>
                                <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                <p class="mt-2 mb-0">{{ $comment->content }}</p>

                                <!-- Replies -->
                                @if($comment->replies->count() > 0)
                                <div class="replies mt-3 ms-4">
                                    @foreach($comment->replies->where('is_approved', true) as $reply)
                                    <div class="reply-item mb-3 p-3 bg-white rounded">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                    {{ strtoupper(substr($reply->user ? $reply->user->name : $reply->author_name, 0, 1)) }}
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">{{ $reply->user ? $reply->user->name : $reply->author_name }}</h6>
                                                <small class="text-muted">{{ $reply->created_at->diffForHumans() }}</small>
                                                <p class="mt-2 mb-0">{{ $reply->content }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-muted">No comments yet. Be the first to comment!</p>
                    @endforelse
                    <!-- Comments List End -->

                    <!-- Comment Form Start -->
                    <div class="comment-form mt-5">
                        <h4 class="mb-4">Leave a Comment</h4>
                        <form action="{{ route('blog.comment.store', $post) }}" method="POST">
                            @csrf
                            
                            @guest
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Your Name *</label>
                                    <input type="text" name="author_name" class="form-control @error('author_name') is-invalid @enderror" value="{{ old('author_name') }}" required>
                                    @error('author_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Your Email *</label>
                                    <input type="email" name="author_email" class="form-control @error('author_email') is-invalid @enderror" value="{{ old('author_email') }}" required>
                                    @error('author_email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            @endguest

                            <div class="mb-3">
                                <label class="form-label">Your Comment *</label>
                                <textarea name="content" rows="5" class="form-control @error('content') is-invalid @enderror" required>{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn-default">Submit Comment</button>
                            <p class="text-muted mt-2"><small>Your comment will be reviewed before being published.</small></p>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>
                <!-- Comments Section End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- About Author Widget -->
                    <div class="sidebar-widget mb-4">
                        <h3>About Author</h3>
                        <div class="author-box p-3 bg-light rounded">
                            <div class="d-flex align-items-center">
                                <div class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px; font-size: 24px;">
                                    {{ strtoupper(substr($post->user->name, 0, 1)) }}
                                </div>
                                <div>
                                    <h5 class="mb-1">{{ $post->user->name }}</h5>
                                    <small class="text-muted">{{ ucfirst($post->user->role) }}</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Posts Widget -->
                    @if($recentPosts->count() > 0)
                    <div class="sidebar-widget mb-4">
                        <h3>Recent Posts</h3>
                        @foreach($recentPosts as $recentPost)
                        <div class="recent-post-item mb-3 p-3 bg-light rounded">
                            <a href="{{ route('blog.show', $recentPost->slug) }}" class="text-decoration-none">
                                <h6 class="mb-1">{{ Str::limit($recentPost->title, 50) }}</h6>
                                <small class="text-muted">{{ $recentPost->published_at->format('M d, Y') }}</small>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>
<!-- Page Single Post End -->
@endsection
