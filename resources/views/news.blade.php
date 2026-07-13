@extends('layouts.app')

@section('title', 'Latest News & Updates - InstantPayment Solutions')

@section('content')
<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('homepage/HGA_5249 (1).jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2 text-white" data-cursor="-opaque">{{ __('Latest News & Updates') }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('news') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- News Intro Section Start -->
<div class="news-intro" style="padding: 100px 0 60px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">{{ __("What's New") }}</h3>
                    <h2 class="text-anime-style-2 mb-4" data-cursor="-opaque">{{ __('Company News & Product Updates') }}</h2>
                    <p class="lead wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; margin: 0 auto;">{{ __('Stay up to date with announcements, partnerships, and new features from InstantPayment Solutions.') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News Intro Section End -->

@php
    $newsItems = [
        [
            'tag' => __('Partnership'),
            'date' => __('July 2026'),
            'title' => __('InstantPay Named Technical Partner for SGR Tanzania'),
            'excerpt' => __('We are proud to power tokenized, tap-to-pay ticketing for SGR passengers, combining speed, security, and loyalty rewards in a single smart card.'),
            'icon' => 'fa-handshake',
        ],
        [
            'tag' => __('Product Update'),
            'date' => __('June 2026'),
            'title' => __('VegaPay Wearables Now Available'),
            'excerpt' => __('Our new line of tokenized rings, bracelets, and key fobs brings secure, contactless payments to everyday accessories.'),
            'icon' => 'fa-icons',
        ],
        [
            'tag' => __('Expansion'),
            'date' => __('May 2026'),
            'title' => __('InstantPay Expanding to Zanzibar'),
            'excerpt' => __('We are bringing our full suite of payment solutions to the Islands, connecting more businesses and people across Tanzania.'),
            'icon' => 'fa-map-location-dot',
        ],
        [
            'tag' => __('Company News'),
            'date' => __('April 2026'),
            'title' => __('Empowering Over 15+ Tanzanian Merchants'),
            'excerpt' => __('A milestone moment: we now serve more than 15+ active merchants across Tanzania with reliable, secure payment infrastructure.'),
            'icon' => 'fa-store',
        ],
        [
            'tag' => __('Product Update'),
            'date' => __('March 2026'),
            'title' => __('New Mobile Money Integrations Live'),
            'excerpt' => __('Tigo Pesa, M-Pesa, HaloPesa, and Airtel Money are now unified under a single API for real-time collections and payouts.'),
            'icon' => 'fa-mobile-screen',
        ],
    ];
@endphp

<!-- News List Section Start -->
<div class="news-list-section" style="padding: 0 0 100px;">
    <div class="container">
        <div class="row">
            @foreach($newsItems as $index => $item)
            <div class="col-lg-6 mb-4">
                <div class="news-card wow fadeInUp" data-wow-delay="{{ $index * 0.1 }}s" style="background: white; border-radius: 15px; padding: 35px; height: 100%; box-shadow: 0 5px 25px rgba(0,0,0,0.07);">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-box me-3" style="background: #fff5f5; color: #ea2429; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas {{ $item['icon'] }} fa-lg"></i>
                        </div>
                        <div>
                            <span class="badge" style="background: #fff5f5; color: #ea2429; padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500;">{{ $item['tag'] }}</span>
                            <div class="text-muted mt-1" style="font-size: 0.85rem;">{{ $item['date'] }}</div>
                        </div>
                    </div>
                    <h4 class="mb-2">{{ $item['title'] }}</h4>
                    <p class="text-muted mb-0">{{ $item['excerpt'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- News List Section End -->

<!-- CTA Section Start -->
<div class="cta-section" style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ __('Want the Latest Updates in Your Inbox?') }}</h2>
                <p class="mb-0">{{ __('Subscribe to our newsletter below to get news and product announcements as they happen.') }}</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="{{ url('/blog') }}" class="btn-default">{{ __('Read Our Blog') }}</a>
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End -->

@endsection
