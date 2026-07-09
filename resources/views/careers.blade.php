@extends('layouts.app')

@section('title', 'Careers - InstantPayment Solutions')

@section('content')
<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('homepage/careers-profile.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2 text-white" data-cursor="-opaque">{{ __('Careers') }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('careers') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Careers Intro Section Start -->
<div class="careers-intro" style="padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">{{ __('Join Our Team') }}</h3>
                    <h2 class="text-anime-style-2 mb-4" data-cursor="-opaque">{{ __("Build Tanzania's Payment Future With Us") }}</h2>
                    <p class="lead wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; margin: 0 auto;">{{ __("We're always looking for talented, passionate individuals who share our vision of transforming Tanzania's digital payment ecosystem. Explore our open positions below.") }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Careers Intro Section End -->

<!-- Why Work With Us Section Start -->
<div class="why-work-with-us" style="padding: 0 0 80px; background: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card text-center wow fadeInUp" style="background: #f8f9fa; padding: 40px 30px; border-radius: 15px; height: 100%;">
                    <div class="icon-box mb-3" style="display: inline-flex; align-items: center; justify-content: center; width: 70px; height: 70px; background: #fff5f5; border-radius: 50%; color: #ea2429;">
                        <i class="fas fa-briefcase fa-2x"></i>
                    </div>
                    <h4>{{ __('Career Growth') }}</h4>
                    <p class="mb-0 text-muted">{{ __('Clear paths for advancement and professional development') }}</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card text-center wow fadeInUp" data-wow-delay="0.2s" style="background: #f8f9fa; padding: 40px 30px; border-radius: 15px; height: 100%;">
                    <div class="icon-box mb-3" style="display: inline-flex; align-items: center; justify-content: center; width: 70px; height: 70px; background: #fff5f5; border-radius: 50%; color: #ea2429;">
                        <i class="fas fa-hand-holding-usd fa-2x"></i>
                    </div>
                    <h4>{{ __('Competitive Benefits') }}</h4>
                    <p class="mb-0 text-muted">{{ __('Market-leading compensation and comprehensive benefits') }}</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card text-center wow fadeInUp" data-wow-delay="0.4s" style="background: #f8f9fa; padding: 40px 30px; border-radius: 15px; height: 100%;">
                    <div class="icon-box mb-3" style="display: inline-flex; align-items: center; justify-content: center; width: 70px; height: 70px; background: #fff5f5; border-radius: 50%; color: #ea2429;">
                        <i class="fas fa-rocket fa-2x"></i>
                    </div>
                    <h4>{{ __('Innovation Hub') }}</h4>
                    <p class="mb-0 text-muted">{{ __('Work with cutting-edge payment technologies') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Work With Us Section End -->

<!-- Open Positions Section Start -->
<div class="open-positions" style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-5">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">{{ __('Open Positions') }}</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">{{ __('Current Opportunities') }}</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse($jobOpenings as $index => $job)
            <div class="col-lg-12 mb-3">
                <div class="job-card wow fadeInUp" data-wow-delay="{{ $index * 0.1 }}s" style="background: white; border-radius: 12px; padding: 30px; box-shadow: 0 5px 20px rgba(0,0,0,0.06);">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h4 class="mb-2">{{ $job->title }}</h4>
                            <p class="mb-2 text-muted">{{ $job->description }}</p>
                            <div class="job-meta">
                                <span class="badge me-2" style="background: #fff5f5; color: #ea2429; padding: 6px 14px; border-radius: 20px; font-weight: 500;"><i class="fas fa-building me-1"></i> {{ $job->department }}</span>
                                <span class="badge me-2" style="background: #fff5f5; color: #ea2429; padding: 6px 14px; border-radius: 20px; font-weight: 500;"><i class="fas fa-map-marker-alt me-1"></i> {{ $job->location }}</span>
                                <span class="badge" style="background: #fff5f5; color: #ea2429; padding: 6px 14px; border-radius: 20px; font-weight: 500;"><i class="fas fa-clock me-1"></i> {{ $job->type }}</span>
                            </div>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                            <a href="mailto:careers@instantpay.co.tz?subject={{ urlencode($job->title) }}" class="btn-default">{{ __('Apply Now') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-12">
                <p class="text-center text-muted py-4">{{ __('No open positions right now — check back soon, or send us a speculative CV below.') }}</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
<!-- Open Positions Section End -->

<!-- CTA Section Start -->
<div class="cta-section" style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ __("Don't See a Role That Fits?") }}</h2>
                <p class="mb-0">{{ __("We're always interested in meeting talented people. Send us your CV and we'll reach out when a matching role opens up.") }}</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="mailto:careers@instantpay.co.tz?subject=Speculative%20Application" class="btn-default">{{ __('Send Your CV') }}</a>
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End -->

@endsection
