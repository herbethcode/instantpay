@extends('layouts.app')

@section('title', 'Blog - InstantPay')

@section('content')
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Our Blog</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">blog</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Blog Page Start -->
<div class="page-blog">
    <div class="container">
        <div class="row">
            @forelse($posts as $post)
            <div class="col-lg-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="{{ route('blog.show', $post->slug) }}" data-cursor-text="View">
                            <figure class="image-anime">
                                @if($post->activeImages->first())
                                    <img src="{{ asset('storage/' . $post->activeImages->first()->image_path) }}" alt="{{ $post->title }}">
                                @elseif($post->featured_image)
                                    <img src="{{ $post->featured_image }}" alt="{{ $post->title }}">
                                @else
                                    <img src="{{ asset('images/post-1.jpg') }}" alt="{{ $post->title }}">
                                @endif
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Tag Start -->
                        <div class="post-item-meta">
                            <ul>
                                <li><i class="fa-solid fa-calendar-days"></i> {{ $post->published_at->format('d M, Y') }}</li>
                                <li><i class="fa-solid fa-user"></i> {{ $post->user->name }}</li>
                                @if($post->approvedComments->count() > 0)
                                <li><i class="fa-solid fa-comments"></i> {{ $post->approvedComments->count() }}</li>
                                @endif
                            </ul>
                        </div>
                        <!-- Post Item Tag End -->

                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                            @if($post->excerpt)
                            <p>{{ Str::limit($post->excerpt, 120) }}</p>
                            @else
                            <p>{{ Str::limit(strip_tags($post->content), 120) }}</p>
                            @endif
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Readmore Button Start-->
                        <div class="post-item-btn">
                            <a href="{{ route('blog.show', $post->slug) }}" class="readmore-btn">read more</a>
                        </div>
                        <!-- Post Item Readmore Button End-->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    <h4>No blog posts available yet.</h4>
                    <p>Please check back soon for new content!</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination Start -->
        @if($posts->hasPages())
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination-wrap">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
        @endif
        <!-- Pagination End -->
    </div>
</div>
<!-- Blog Page End -->
@endsection
