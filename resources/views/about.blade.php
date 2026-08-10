@extends('layouts.app')

@section('title', 'About Us - InstantPayment Solutions')

@section('content')
<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('homepage/about-hero.png') }}'); background-size: cover; background-position: center; min-height: 450px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    {{-- <h1 class="text-anime-style-2 text-white" data-cursor="-opaque">{{ __('About InstantPayment Solutions') }}</h1> --}}
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('about us') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Company Profile Section Start -->
<div class="about-company" style="padding: 100px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image-box wow fadeInUp">
                    <img src="{{ asset('Solutioons/building-tanzania-digital-payment-future.png') }}" alt="Building Tanzania's digital payment future" class="img-fluid rounded shadow-lg" style="width: 100%; max-width: 440px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-title">
                        <h3>{{ __('Our Story') }}</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">{{ __("Building Tanzania's Payment Future") }}</h2>
                    </div>

                    <div class="about-body">
                        <p>{{ __('For the past 3 years, InstantPayment Solutions has been providing trusted payment infrastructure for businesses, banks, and institutions across Tanzania.') }}</p>

                        <p>{{ __('We combine innovation, security, and reliability to deliver seamless payment experiences that power growth and digital transformation.') }}</p>

                        <p>{!! __('We exist to simplify financial interactions, eliminate inefficiencies, and drive the nation\'s transition toward a fully digitized, cashless economy. Our solutions are not just about speed, but also about :strong — ensuring that every payment tells a story of progress and opportunity.', ['strong' => '<strong>' . __('trust, security, and inclusivity') . '</strong>']) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Company Profile Section End -->

<!-- Our Values Section Start -->
<div class="our-values" style="padding: 100px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">{{ __('Our Values') }}</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">{{ __('Commitment to Excellence') }}</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('Our team is guided by a strong commitment to integrity, responsibility, and excellence') }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="values-image wow fadeInUp">
                    <img src="{{ asset('homepage/INSP(27of113) (1).jpg') }}" alt="Our Values" class="img-fluid rounded shadow">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="values-content wow fadeInUp" data-wow-delay="0.2s">
                    <p class="lead mb-4">{{ __('Living by our Code of Good Conduct is not optional; it is the foundation of our culture and the promise we extend to our partners, regulators, and customers.') }}</p>

                    <div class="value-item mb-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="icon-box" style="background: #ea2429; color: white; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-shield-alt fa-2x"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4>{{ __('Integrity') }}</h4>
                                <p>{{ __('By holding ourselves accountable, we safeguard the trust placed in us and ensure our operations are compliant, transparent, and sustainable.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="value-item mb-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="icon-box" style="background: #ea2429; color: white; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-users fa-2x"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4>{{ __('Responsibility') }}</h4>
                                <p>{{ __('We take ownership of our actions and their impact on our customers, partners, and the communities we serve.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="value-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="icon-box" style="background: #ea2429; color: white; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-star fa-2x"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4>{{ __('Excellence') }}</h4>
                                <p>{{ __('We strive for the highest standards in everything we do, continuously improving our services and solutions.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Values Section End -->

<!-- Our Priorities Section Start -->
<div class="our-priorities" style="padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">{{ __('Our Focus') }}</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">{{ __('Three Strategic Priorities') }}</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">{{ __('As we continue to grow, we remain focused on these key areas') }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="priority-item text-center wow fadeInUp" data-wow-delay="0.2s" style="padding: 40px; background: white; border-radius: 10px; box-shadow: 0 5px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                    <div class="icon-box mb-3">
                        <i class="fas fa-lightbulb fa-4x" style="color: #ea2429;"></i>
                    </div>
                    <h3>{{ __('Innovation') }}</h3>
                    <p>{{ __("Creating solutions that respond to real-time needs and drive technological advancement in Tanzania's payment ecosystem.") }}</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="priority-item text-center wow fadeInUp" data-wow-delay="0.4s" style="padding: 40px; background: white; border-radius: 10px; box-shadow: 0 5px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                    <div class="icon-box mb-3">
                        <i class="fas fa-handshake fa-4x" style="color: #ea2429;"></i>
                    </div>
                    <h3>{{ __('Partnership') }}</h3>
                    <p>{{ __('Collaborating with regulators, banks, and businesses to build a stronger, more integrated financial ecosystem for all stakeholders.') }}</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="priority-item text-center wow fadeInUp" data-wow-delay="0.6s" style="padding: 40px; background: white; border-radius: 10px; box-shadow: 0 5px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                    <div class="icon-box mb-3">
                        <i class="fas fa-chart-line fa-4x" style="color: #ea2429;"></i>
                    </div>
                    <h3>{{ __('Impact') }}</h3>
                    <p>{{ __("Driving financial inclusion and contributing to Tanzania's vision of a cashless, digital economy that benefits everyone.") }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Priorities Section End -->

<!-- Our Punchline Section Start -->
<div class="punchline-section" style="padding: 80px 0; background: #f8f9fa; border-top: 1px solid #f0f0f0; border-bottom: 1px solid #f0f0f0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mb-4 wow fadeInUp" style="font-size: 48px; font-weight: bold; color: #ea2429;">{{ __('Safe, Secure & Reliable') }}</h2>
                <p class="lead wow fadeInUp" data-wow-delay="0.2s" style="color: #555;">{{ __('Together, with discipline and vision, we will shape the future of payments and build a company that is not only profitable but also meaningful in the lives of the people we serve.') }}</p>
            </div>
        </div>
    </div>
</div>
<!-- Our Punchline Section End -->

{{--<!-- Team/Gallery Section Start -->--}}
{{--<div class="team-gallery" style="padding: 100px 0; background: #f8f9fa;">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="section-title text-center">--}}
{{--                    <h3 class="wow fadeInUp">Our Team</h3>--}}
{{--                    <h2 class="text-anime-style-2" data-cursor="-opaque">The People Behind Innovation</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-lg-3 col-md-4 col-6 mb-4">--}}
{{--                <div class="team-image wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                    <img src="{{ asset('homepage/INSP(6of113).jpg') }}" alt="Team" class="img-fluid rounded shadow">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-4 col-6 mb-4">--}}
{{--                <div class="team-image wow fadeInUp" data-wow-delay="0.2s">--}}
{{--                    <img src="{{ asset('homepage/INSP(25of113).jpg') }}" alt="Team" class="img-fluid rounded shadow">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-4 col-6 mb-4">--}}
{{--                <div class="team-image wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                    <img src="{{ asset('homepage/INSP(27of113) (1).jpg') }}" alt="Team" class="img-fluid rounded shadow">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-4 col-6 mb-4">--}}
{{--                <div class="team-image wow fadeInUp" data-wow-delay="0.4s">--}}
{{--                    <img src="{{ asset('homepage/HGA_5249 (1).jpg') }}" alt="Team" class="img-fluid rounded shadow">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Team/Gallery Section End -->--}}

<!-- CTA Section Start -->
<div class="cta-section" style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ __("Join Us in Shaping Tanzania's Payment Future") }}</h2>
                <p class="mb-0">{{ __('Partner with InstantPayment Solutions for safe, secure, and reliable payment infrastructure') }}</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="{{ url('/contact') }}" class="btn-default">{{ __('Contact Us Today') }}</a>
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End -->

@endsection
