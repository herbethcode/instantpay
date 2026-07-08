@extends('layouts.app')

@section('title', 'FAQ - InstantPayment Solutions')

@section('content')
<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('homepage/HGA_5249 (1).jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2 text-white" data-cursor="-opaque">{{ __('Frequently Asked Questions') }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('faq') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- FAQ Intro Section Start -->
<div class="faq-intro" style="padding: 100px 0 60px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">{{ __('Got Questions?') }}</h3>
                    <h2 class="text-anime-style-2 mb-4" data-cursor="-opaque">{{ __("We've Got Answers") }}</h2>
                    <p class="lead wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; margin: 0 auto;">{{ __("Find quick answers to the most common questions about our payment solutions. Can't find what you're looking for?") }} <a href="{{ url('/contact') }}">{{ __('Contact our team') }}</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Intro Section End -->

@php
    $faqGroups = [
        [
            'title' => __('General'),
            'icon' => 'fa-circle-info',
            'items' => [
                [
                    'q' => __('What is InstantPayment Solutions?'),
                    'a' => __("InstantPayment Solutions (InstantPay) is Tanzania's premier digital payment provider, offering card processing, POS hardware, mobile money, e-commerce, and cross-border payment infrastructure for businesses and institutions."),
                ],
                [
                    'q' => __('Which areas do you operate in?'),
                    'a' => __('We operate across Tanzania, including Dar es Salaam and Zanzibar, with plans to expand our footprint across East Africa.'),
                ],
                [
                    'q' => __('How do I get started with InstantPay?'),
                    'a' => __('Simply contact our team through the Contact page or call us directly. We will guide you through onboarding based on the solution that fits your business.'),
                ],
            ],
        ],
        [
            'title' => __('Payments & Transactions'),
            'icon' => 'fa-credit-card',
            'items' => [
                [
                    'q' => __('Which payment methods do you support?'),
                    'a' => __('We support card payments (Visa, Mastercard, UnionPay, American Express), mobile money (Tigo Pesa, M-Pesa, HaloPesa, Airtel Money), QR payments, and digital wallets.'),
                ],
                [
                    'q' => __('How fast are transactions processed?'),
                    'a' => __('All transactions are processed in real time, with automated reconciliation and instant confirmation for both merchants and customers.'),
                ],
                [
                    'q' => __('Can I accept international payments?'),
                    'a' => __('Yes. Our cross-border payment infrastructure supports inbound and outbound transfers at competitive rates across East Africa and beyond.'),
                ],
            ],
        ],
        [
            'title' => __('For Merchants'),
            'icon' => 'fa-store',
            'items' => [
                [
                    'q' => __('What POS devices do you offer?'),
                    'a' => __('We provide MiniPOS (mPOS) portable devices and Standard POS countertop terminals, both supporting contactless, chip, and magnetic stripe transactions.'),
                ],
                [
                    'q' => __('How long does settlement take?'),
                    'a' => __('Settlement is fast and automated, with funds typically available within 24 hours of transaction processing.'),
                ],
                [
                    'q' => __('Do you offer e-commerce integration?'),
                    'a' => __('Yes, we offer branded online checkout, Pay-by-Link, and API integrations for online stores, subscription platforms, and digital services.'),
                ],
            ],
        ],
        [
            'title' => __('Security & Compliance'),
            'icon' => 'fa-shield-halved',
            'items' => [
                [
                    'q' => __('How secure are transactions on your platform?'),
                    'a' => __('All transactions use bank-grade, end-to-end encryption, real-time fraud monitoring, and PCI-DSS compliant infrastructure.'),
                ],
                [
                    'q' => __('Is my card data stored on your devices?'),
                    'a' => __('No sensitive card data is stored on POS or wearable devices. We use advanced tokenization technology to protect every transaction.'),
                ],
            ],
        ],
        [
            'title' => __('Support'),
            'icon' => 'fa-headset',
            'items' => [
                [
                    'q' => __('What support do you offer after onboarding?'),
                    'a' => __('We provide 24/7 technical support and monitoring, plus dedicated account managers for larger merchants and partners.'),
                ],
                [
                    'q' => __('How can I contact support?'),
                    'a' => __('You can reach us via the Contact page, by phone, or by email, and our team will respond within 24 hours.'),
                ],
            ],
        ],
    ];
@endphp

<!-- FAQ Accordion Section Start -->
<div class="faq-accordion-section" style="padding: 0 0 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                @foreach($faqGroups as $groupIndex => $group)
                <div class="faq-group mb-5 wow fadeInUp" data-wow-delay="{{ $groupIndex * 0.1 }}s">
                    <h3 class="mb-3" style="color: #ea2429;"><i class="fas {{ $group['icon'] }} me-2"></i> {{ $group['title'] }}</h3>
                    <div class="accordion" id="faqAccordion{{ $groupIndex }}">
                        @foreach($group['items'] as $itemIndex => $item)
                        @php $collapseId = 'faq-' . $groupIndex . '-' . $itemIndex; @endphp
                        <div class="accordion-item" style="border-radius: 10px; overflow: hidden; margin-bottom: 12px; border: 1px solid #eee;">
                            <h2 class="accordion-header" id="heading-{{ $collapseId }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $collapseId }}" aria-expanded="false" aria-controls="collapse-{{ $collapseId }}">
                                    {{ $item['q'] }}
                                </button>
                            </h2>
                            <div id="collapse-{{ $collapseId }}" class="accordion-collapse collapse" aria-labelledby="heading-{{ $collapseId }}" data-bs-parent="#faqAccordion{{ $groupIndex }}">
                                <div class="accordion-body text-muted">
                                    {{ $item['a'] }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- FAQ Accordion Section End -->

<!-- CTA Section Start -->
<div class="cta-section" style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ __('Still Have Questions?') }}</h2>
                <p class="mb-0">{{ __('Our team is ready to help with anything not covered here.') }}</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="{{ url('/contact') }}" class="btn-default">{{ __('Contact Us') }}</a>
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End -->

@endsection
