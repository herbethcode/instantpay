@extends('layouts.app')

@section('title', 'About Us - InstantPayment Solutions')

@section('content')
<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('homepage/HGA_5249 (1).jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2 text-white" data-cursor="-opaque">About InstantPayment Solutions</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about us</li>
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
                    <img src="{{ asset('homepage/INSP(25of113).jpg') }}" alt="InstantPayment Solutions" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-title">
                        <h3>Our Story</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Building Tanzania's Payment Future</h2>
                    </div>

                    <div class="about-body">
                        <p>At InstantPayment Solutions, we were founded on the belief that Tanzania deserves an instant, reliable, and secure payment ecosystem that keeps pace with the speed of life. Our journey began <strong>3 years ago</strong> with a clear purpose: to bridge the gap in digital payments and empower businesses, individuals, and institutions to transact seamlessly anytime, anywhere.</p>

                        <p>We exist to simplify financial interactions, eliminate inefficiencies, and drive the nation's transition toward a fully digitized, cashless economy. Our solutions are not just about speed, but also about <strong>trust, security, and inclusivity</strong> — ensuring that every payment tells a story of progress and opportunity.</p>
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
                    <h3 class="wow fadeInUp">Our Values</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Commitment to Excellence</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Our team is guided by a strong commitment to integrity, responsibility, and excellence</p>
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
                    <p class="lead mb-4">Living by our Code of Good Conduct is not optional; it is the foundation of our culture and the promise we extend to our partners, regulators, and customers.</p>

                    <div class="value-item mb-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="icon-box" style="background: #ea2429; color: white; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-shield-alt fa-2x"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4>Integrity</h4>
                                <p>By holding ourselves accountable, we safeguard the trust placed in us and ensure our operations are compliant, transparent, and sustainable.</p>
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
                                <h4>Responsibility</h4>
                                <p>We take ownership of our actions and their impact on our customers, partners, and the communities we serve.</p>
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
                                <h4>Excellence</h4>
                                <p>We strive for the highest standards in everything we do, continuously improving our services and solutions.</p>
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
                    <h3 class="wow fadeInUp">Our Focus</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Three Strategic Priorities</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">As we continue to grow, we remain focused on these key areas</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="priority-item text-center wow fadeInUp" data-wow-delay="0.2s" style="padding: 40px; background: white; border-radius: 10px; box-shadow: 0 5px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                    <div class="icon-box mb-3">
                        <i class="fas fa-lightbulb fa-4x" style="color: #ea2429;"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>Creating solutions that respond to real-time needs and drive technological advancement in Tanzania's payment ecosystem.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="priority-item text-center wow fadeInUp" data-wow-delay="0.4s" style="padding: 40px; background: white; border-radius: 10px; box-shadow: 0 5px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                    <div class="icon-box mb-3">
                        <i class="fas fa-handshake fa-4x" style="color: #ea2429;"></i>
                    </div>
                    <h3>Partnership</h3>
                    <p>Collaborating with regulators, banks, and businesses to build a stronger, more integrated financial ecosystem for all stakeholders.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="priority-item text-center wow fadeInUp" data-wow-delay="0.6s" style="padding: 40px; background: white; border-radius: 10px; box-shadow: 0 5px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                    <div class="icon-box mb-3">
                        <i class="fas fa-chart-line fa-4x" style="color: #ea2429;"></i>
                    </div>
                    <h3>Impact</h3>
                    <p>Driving financial inclusion and contributing to Tanzania's vision of a cashless, digital economy that benefits everyone.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Priorities Section End -->

<!-- Our Punchline Section Start -->
<div class="punchline-section" style="padding: 80px 0; background: linear-gradient(135deg, #ea2429, #8b0000);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white mb-4 wow fadeInUp" style="font-size: 48px; font-weight: bold;">Safe, Secure & Reliable</h2>
                <p class="text-white lead wow fadeInUp" data-wow-delay="0.2s">Together, with discipline and vision, we will shape the future of payments and build a company that is not only profitable but also meaningful in the lives of the people we serve.</p>
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
                <h2 class="mb-3">Join Us in Shaping Tanzania's Payment Future</h2>
                <p class="mb-0">Partner with InstantPayment Solutions for safe, secure, and reliable payment infrastructure</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="{{ url('/contact') }}" class="btn-default">Contact Us Today</a>
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End -->

@endsection
