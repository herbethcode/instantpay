@extends('layouts.app')

@section('title', 'InstantPayment Solutions - Safe, Secure & Reliable Payment Solutions in Tanzania')

@section('content')

<!-- Hero Section Start -->
<div class="hero" style="position: relative; padding: 0; overflow: hidden;">
    <!-- Hero Slider Start -->
    <div class="hero-slider">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="hero-slide" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('homepage/HGA_5249 (1).jpg') }}'); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="hero-content">
                                        <h3 class="text-white mb-3 wow fadeInUp">InstantPayment Solutions</h3>
                                        <h1 class="text-white mb-4 wow fadeInUp" data-wow-delay="0.2s" style="font-size: 58px; line-height: 1.2; font-weight: bold;"><span style="color: #ea2429;">Safe, Secure</span><br>& Reliable</h1>
                                        <p class="text-white lead mb-4 wow fadeInUp" data-wow-delay="0.4s" style="font-size: 1.2rem;">Tanzania's premier digital payment solution - Instant, reliable, and secure payment ecosystem.</p>
                                        <div class="hero-buttons d-flex gap-3 flex-wrap wow fadeInUp" data-wow-delay="0.6s">
                                            <a href="{{ url('/services') }}" class="btn-default">Explore Services</a>
                                            <a href="{{ url('/contact') }}" class="btn-default" style="background: transparent; border: 2px solid white; color: white;">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="hero-slide" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('homepage/INSP(27of113) (1).jpg') }}'); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="hero-content">
                                        <h3 class="text-white mb-3 wow fadeInUp">VegaPay Wearables</h3>
                                        <h1 class="text-white mb-4 wow fadeInUp" data-wow-delay="0.2s" style="font-size: 58px; line-height: 1.2; font-weight: bold;">Payment on <span style="color: #ea2429;">Your Wrist</span></h1>
                                        <p class="text-white lead mb-4 wow fadeInUp" data-wow-delay="0.4s" style="font-size: 1.2rem;">Innovative wearable payment solutions with secure tokenization technology.</p>
                                        <div class="hero-buttons d-flex gap-3 flex-wrap wow fadeInUp" data-wow-delay="0.6s">
                                            <a href="{{ url('/services') }}" class="btn-default">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="hero-slide" style="background: linear-gradient(rgba(0,0,0,0.28), rgba(0,0,0,0.28)), url('{{ asset('homepage/INSP(25of113).jpg') }}'); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="hero-content">
                                        <h3 class="text-white mb-3 wow fadeInUp">Card POS Solutions</h3>
                                        <h1 class="text-white mb-4 wow fadeInUp" data-wow-delay="0.2s" style="font-size: 58px; line-height: 1.2; font-weight: bold;">Accept Payments <span style="color: #ea2429;">Anywhere</span></h1>
                                        <p class="text-white lead mb-4 wow fadeInUp" data-wow-delay="0.4s" style="font-size: 1.2rem;">Quick and secure payment terminals for businesses of all sizes.</p>
                                        <div class="hero-buttons d-flex gap-3 flex-wrap wow fadeInUp" data-wow-delay="0.6s">
                                            <a href="{{ url('/services#pos') }}" class="btn-default">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="hero-slide" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('homepage/INSP(6of113).jpg') }}'); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="hero-content">
                                        <h3 class="text-white mb-3 wow fadeInUp">Cross-Border Payments</h3>
                                        <h1 class="text-white mb-4 wow fadeInUp" data-wow-delay="0.2s" style="font-size: 58px; line-height: 1.2; font-weight: bold;">Connect <span style="color: #ea2429;">East Africa</span></h1>
                                        <p class="text-white lead mb-4 wow fadeInUp" data-wow-delay="0.4s" style="font-size: 1.2rem;">Seamless international payments supporting regional financial integration.</p>
                                        <div class="hero-buttons d-flex gap-3 flex-wrap wow fadeInUp" data-wow-delay="0.6s">
                                            <a href="{{ url('/services#crossborder') }}" class="btn-default">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <div class="hero-slide" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('homepage/INSP(25of113).jpg') }}'); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="hero-content">
                                        <h3 class="text-white mb-3 wow fadeInUp">Our Team</h3>
                                        <h1 class="text-white mb-4 wow fadeInUp" data-wow-delay="0.2s" style="font-size: 58px; line-height: 1.2; font-weight: bold;"><span style="color: #ea2429;">Innovation</span> Driven<br>by People</h1>
                                        <p class="text-white lead mb-4 wow fadeInUp" data-wow-delay="0.4s" style="font-size: 1.2rem;">3 years of excellence in digital payment solutions across Tanzania.</p>
                                        <div class="hero-buttons d-flex gap-3 flex-wrap wow fadeInUp" data-wow-delay="0.6s">
                                            <a href="{{ url('/about') }}" class="btn-default">About Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Navigation -->
            <div class="hero-slider-nav">
                <div class="hero-button-prev"><i class="fas fa-chevron-left"></i></div>
                <div class="hero-button-next"><i class="fas fa-chevron-right"></i></div>
            </div>

            <!-- Slider Pagination -->
            <div class="hero-slider-pagination"></div>
        </div>
    </div>
    <!-- Hero Slider End -->

    <!-- Hero Stats Overlay -->
    <div class="hero-stats-overlay" style="position: absolute; bottom: 50px; left: 0; right: 0; z-index: 10;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6 mb-3">
                    <div style="background: rgba(234, 36, 41, 0.9); padding: 25px 20px; border-radius: 10px; backdrop-filter: blur(10px); text-align: center;">
                        <h3 class="text-white mb-0" style="font-size: 36px; font-weight: bold;"><span class="counter">3</span>+</h3>
                        <p class="text-white mb-0">Years Experience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-3">
                    <div style="background: rgba(234, 36, 41, 0.9); padding: 25px 20px; border-radius: 10px; backdrop-filter: blur(10px); text-align: center;">
                        <h3 class="text-white mb-0" style="font-size: 36px; font-weight: bold;"><span class="counter">1000</span>+</h3>
                        <p class="text-white mb-0">Merchants</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-3">
                    <div style="background: rgba(234, 36, 41, 0.9); padding: 25px 20px; border-radius: 10px; backdrop-filter: blur(10px); text-align: center;">
                        <h3 class="text-white mb-0" style="font-size: 36px; font-weight: bold;"><span class="counter">99.9</span>%</h3>
                        <p class="text-white mb-0">Uptime</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-3">
                    <div style="background: rgba(234, 36, 41, 0.9); padding: 25px 20px; border-radius: 10px; backdrop-filter: blur(10px); text-align: center;">
                        <h3 class="text-white mb-0" style="font-size: 36px; font-weight: bold;"><span class="counter">24</span>/7</h3>
                        <p class="text-white mb-0">Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hero-swiper {
    width: 100%;
    height: 100%;
}

.hero-slider-nav {
    position: absolute;
    width: 100%;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    padding: 0 50px;
    display: flex;
    justify-content: space-between;
    pointer-events: none;
}

.hero-button-prev,
.hero-button-next {
    width: 50px;
    height: 50px;
    background: rgba(234, 36, 41, 0.8);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    cursor: pointer;
    pointer-events: all;
    transition: all 0.3s;
}

.hero-button-prev:hover,
.hero-button-next:hover {
    background: rgba(234, 36, 41, 1);
    transform: scale(1.1);
}

.hero-slider-pagination {
    position: absolute;
    bottom: 120px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
}

.hero-slider-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: rgba(255, 255, 255, 0.5);
    opacity: 1;
    margin: 0 5px;
}

.hero-slider-pagination .swiper-pagination-bullet-active {
    background: #ea2429;
    width: 30px;
    border-radius: 6px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var heroSwiper = new Swiper('.hero-swiper', {
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        navigation: {
            nextEl: '.hero-button-next',
            prevEl: '.hero-button-prev',
        },
        pagination: {
            el: '.hero-slider-pagination',
            clickable: true,
        },
    });
});
</script>
<!-- Hero Section End -->

<!-- About Section Start -->
<div class="about-us" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image-box wow fadeInUp">
                    <div class="about-image" style="position: relative;">
                        <img src="{{ asset('homepage/INSP(25of113).jpg') }}" alt="About InstantPayment Solutions" class="img-fluid rounded shadow-lg" style="border-radius: 20px !important;">
                        <div style="position: absolute; bottom: -30px; right: -30px; z-index: 2;">
                            <img src="{{ asset('homepage/INSP(27of113) (1).jpg') }}" alt="Team" class="img-fluid rounded shadow-lg" style="width: 250px; height: 250px; object-fit: cover; border: 5px solid white; border-radius: 15px;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content wow fadeInUp" data-wow-delay="0.2s" style="padding-left: 30px;">
                    <div class="section-title">
                        <h3 class="wow fadeInUp" style="color: #ea2429;">About Us</h3>
                        <h2 class="text-anime-style-2 mb-4" data-cursor="-opaque">Building Tanzania's Digital Payment Future</h2>
                    </div>

                    <div class="about-body">
                        <p style="font-size: 1.1rem; line-height: 1.8;">At InstantPayment Solutions, we were founded on the belief that Tanzania deserves an <strong>instant, reliable, and secure</strong> payment ecosystem that keeps pace with the speed of life.</p>

                        <p style="font-size: 1.1rem; line-height: 1.8;">Our journey began <strong>3 years ago</strong> with a clear purpose: to bridge the gap in digital payments and empower businesses, individuals, and institutions to transact seamlessly anytime, anywhere.</p>

                        <div class="mission-box mt-4 p-4" style="background: #f8f9fa; border-left: 4px solid #ea2429; border-radius: 10px;">
                            <h5 style="color: #ea2429; margin-bottom: 15px;"><i class="fas fa-bullseye"></i> Our Mission</h5>
                            <p class="mb-0">We exist to simplify financial interactions, eliminate inefficiencies, and drive the nation's transition toward a fully digitized, cashless economy. Our solutions are not just about speed, but also about <strong>trust, security, and inclusivity</strong> — ensuring that every payment tells a story of progress and opportunity.</p>
                        </div>

                        <div class="about-btn mt-4">
                            <a href="{{ url('/about') }}" class="btn-default">Learn More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Our Values Section Start -->
<div class="our-values" style="padding: 100px 0; background: linear-gradient(135deg, #f8f9fa, #ffffff);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">Our Foundation</h3>
                    <h2 class="text-anime-style-2 mb-3" data-cursor="-opaque">Built on Strong Values</h2>
                    <p class="wow fadeInUp lead" data-wow-delay="0.2s" style="max-width: 700px; margin: 0 auto;">Our team is guided by a strong commitment to integrity, responsibility, and excellence</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-card wow fadeInUp" style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 5px 30px rgba(0,0,0,0.08); height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="icon-box mb-4" style="background: linear-gradient(135deg, #ea2429, #c41e22); color: white; width: 80px; height: 80px; border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-shield-alt fa-3x"></i>
                    </div>
                    <h3 style="color: #ea2429; margin-bottom: 20px;">Integrity</h3>
                    <p style="font-size: 1rem; line-height: 1.8; color: #666;">By holding ourselves accountable, we safeguard the trust placed in us and ensure our operations are compliant, transparent, and sustainable.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-card wow fadeInUp" data-wow-delay="0.2s" style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 5px 30px rgba(0,0,0,0.08); height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="icon-box mb-4" style="background: linear-gradient(135deg, #ea2429, #c41e22); color: white; width: 80px; height: 80px; border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    <h3 style="color: #ea2429; margin-bottom: 20px;">Responsibility</h3>
                    <p style="font-size: 1rem; line-height: 1.8; color: #666;">We take ownership of our actions and their impact on our customers, partners, and the communities we serve across Tanzania.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-card wow fadeInUp" data-wow-delay="0.4s" style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 5px 30px rgba(0,0,0,0.08); height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="icon-box mb-4" style="background: linear-gradient(135deg, #ea2429, #c41e22); color: white; width: 80px; height: 80px; border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-star fa-3x"></i>
                    </div>
                    <h3 style="color: #ea2429; margin-bottom: 20px;">Excellence</h3>
                    <p style="font-size: 1rem; line-height: 1.8; color: #666;">We strive for the highest standards in everything we do, continuously improving our services and innovative solutions.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Values Section End -->

<!-- Our Priorities Section Start -->
<div class="our-priorities" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-5">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">Our Focus</h3>
                    <h2 class="text-anime-style-2 mb-3" data-cursor="-opaque">Three Strategic Priorities</h2>
                    <p class="wow fadeInUp lead" data-wow-delay="0.2s">As we continue to grow, we remain focused on these key areas</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="priority-card text-center wow fadeInUp" style="padding: 50px 30px; background: linear-gradient(135deg, #fff5f5, #ffffff); border-radius: 15px; box-shadow: 0 5px 30px rgba(234,36,41,0.1); height: 100%;">
                    <div class="icon-box mb-4">
                        <i class="fas fa-lightbulb fa-4x" style="color: #ea2429;"></i>
                    </div>
                    <h3 style="color: #ea2429; margin-bottom: 20px; font-size: 28px;">Innovation</h3>
                    <p style="font-size: 1.05rem; line-height: 1.8; color: #555;">Creating solutions that respond to real-time needs and drive technological advancement in Tanzania's payment ecosystem.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="priority-card text-center wow fadeInUp" data-wow-delay="0.2s" style="padding: 50px 30px; background: linear-gradient(135deg, #fff5f5, #ffffff); border-radius: 15px; box-shadow: 0 5px 30px rgba(234,36,41,0.1); height: 100%;">
                    <div class="icon-box mb-4">
                        <i class="fas fa-handshake fa-4x" style="color: #ea2429;"></i>
                    </div>
                    <h3 style="color: #ea2429; margin-bottom: 20px; font-size: 28px;">Partnership</h3>
                    <p style="font-size: 1.05rem; line-height: 1.8; color: #555;">Collaborating with regulators, banks, and businesses to build a stronger, more integrated financial ecosystem for all.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="priority-card text-center wow fadeInUp" data-wow-delay="0.4s" style="padding: 50px 30px; background: linear-gradient(135deg, #fff5f5, #ffffff); border-radius: 15px; box-shadow: 0 5px 30px rgba(234,36,41,0.1); height: 100%;">
                    <div class="icon-box mb-4">
                        <i class="fas fa-chart-line fa-4x" style="color: #ea2429;"></i>
                    </div>
                    <h3 style="color: #ea2429; margin-bottom: 20px; font-size: 28px;">Impact</h3>
                    <p style="font-size: 1.05rem; line-height: 1.8; color: #555;">Driving financial inclusion and contributing to Tanzania's vision of a cashless, digital economy that benefits everyone.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Priorities Section End -->

<!-- Services Section Start -->
<div class="our-services" style="padding: 100px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-5">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">Our Services</h3>
                    <h2 class="text-anime-style-2 mb-3" data-cursor="-opaque">Comprehensive Payment Solutions</h2>
                    <p class="wow fadeInUp lead" data-wow-delay="0.2s">From POS terminals to cross-border payments, we provide complete digital payment infrastructure</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card wow fadeInUp" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="service-image" style="height: 250px; overflow: hidden;">
                        <img src="{{ asset('Solutioons/image_1.png') }}" alt="POS Solutions" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="service-content" style="padding: 30px;">
                        <div class="icon-box mb-3" style="background: #fff5f5; color: #ea2429; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-credit-card fa-2x"></i>
                        </div>
                        <h3 style="color: #333; margin-bottom: 15px;">Card POS Solutions</h3>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">Accept payments quickly and securely with contactless, chip, and swipe transactions. Simple setup with competitive pricing.</p>
                        <a href="{{ url('/services#pos') }}" class="service-link" style="color: #ea2429; font-weight: 600; text-decoration: none;">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card wow fadeInUp" data-wow-delay="0.2s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="service-image" style="height: 250px; overflow: hidden;">
                        <img src="{{ asset('Solutioons/api_image.png') }}" alt="Payment APIs and Mobile Money" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="service-content" style="padding: 30px;">
                        <div class="icon-box mb-3" style="background: #fff5f5; color: #ea2429; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-mobile-alt fa-2x"></i>
                        </div>
                        <h3 style="color: #333; margin-bottom: 15px;">Payment APIs & Mobile Money</h3>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">Seamless integration with mobile wallets, operator APIs, and digital platforms for real-time collections, payouts, and smooth operations.</p>
                        <a href="{{ url('/services#mobile-money') }}" class="service-link" style="color: #ea2429; font-weight: 600; text-decoration: none;">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card wow fadeInUp" data-wow-delay="0.4s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="service-image" style="height: 250px; overflow: hidden;">
                        <img src="{{ asset('Solutioons/Ecommerce.png') }}" alt="E-Commerce" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="service-content" style="padding: 30px;">
                        <div class="icon-box mb-3" style="background: #fff5f5; color: #ea2429; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </div>
                        <h3 style="color: #333; margin-bottom: 15px;">E-Commerce Checkout</h3>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">Streamline your online sales with quick integration, multiple payment options, and secure checkout processes.</p>
                        <a href="{{ url('/services#ecommerce') }}" class="service-link" style="color: #ea2429; font-weight: 600; text-decoration: none;">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card wow fadeInUp" data-wow-delay="0.8s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="service-image" style="height: 250px; overflow: hidden;">
                        <img src="{{ asset('Solutioons/image_2.png') }}" alt="Cross-Border Payments" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="service-content" style="padding: 30px;">
                        <div class="icon-box mb-3" style="background: #fff5f5; color: #ea2429; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-globe-africa fa-2x"></i>
                        </div>
                        <h3 style="color: #333; margin-bottom: 15px;">Cross-Border Payments</h3>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">Secure, efficient, and cost-effective cross-border payment solutions supporting regional financial integration.</p>
                        <a href="{{ url('/services#crossborder') }}" class="service-link" style="color: #ea2429; font-weight: 600; text-decoration: none;">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card wow fadeInUp" data-wow-delay="1s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="service-image" style="height: 250px; overflow: hidden;">
                        <img src="{{ asset('Solutioons/weareble.jpeg') }}" alt="Wearable Payments" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="service-content" style="padding: 30px;">
                        <div class="icon-box mb-3" style="background: #fff5f5; color: #ea2429; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-watch fa-2x"></i>
                        </div>
                        <h3 style="color: #333; margin-bottom: 15px;">Wearable Payments</h3>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">Innovative wearable payment solutions with rings, bracelets, and key fobs using secure tokenization technology.</p>
                        <a href="{{ url('/services#wearables') }}" class="service-link" style="color: #ea2429; font-weight: 600; text-decoration: none;">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Services Section End -->

<!-- Featured Solutions Section Start -->
<div class="featured-solutions" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-5">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">Innovation in Action</h3>
                    <h2 class="text-anime-style-2 mb-3" data-cursor="-opaque">Featured Solutions</h2>
                    <p class="wow fadeInUp lead" data-wow-delay="0.2s">Transforming how Tanzania pays with cutting-edge technology</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5 pb-5">
            <div class="col-lg-6">
                <div class="solution-image wow fadeInUp" style="position: relative;">
                    <img src="{{ asset('homepage/HGA_5249 (1).jpg') }}" alt="InstantPay Platform" class="img-fluid rounded shadow-lg" style="border-radius: 20px !important;">
                    <div style="position: absolute; top: 20px; left: 20px; background: rgba(234,36,41,0.9); color: white; padding: 10px 20px; border-radius: 50px; backdrop-filter: blur(10px);">
                        <i class="fas fa-bolt"></i> Instant Payments
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="solution-content wow fadeInUp" data-wow-delay="0.2s" style="padding-left: 40px;">
                    <h3 style="color: #ea2429; font-size: 32px; margin-bottom: 20px;">InstantPay Digital Payment Platform</h3>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 25px;">InstantPay is Tanzania's premier digital payment solution, connecting businesses, individuals, and institutions through secure, real-time transactions. Our comprehensive payment platform processes thousands of transactions daily with 99.9% uptime reliability.</p>
                    <ul class="feature-list" style="list-style: none; padding: 0;">
                        <li class="mb-3" style="font-size: 1.05rem;"><i class="fas fa-check-circle" style="color: #ea2429; margin-right: 10px;"></i> Real-time payment processing across Tanzania</li>
                        <li class="mb-3" style="font-size: 1.05rem;"><i class="fas fa-check-circle" style="color: #ea2429; margin-right: 10px;"></i> Multi-channel support: POS, Mobile, Web & API</li>
                        <li class="mb-3" style="font-size: 1.05rem;"><i class="fas fa-check-circle" style="color: #ea2429; margin-right: 10px;"></i> Bank-grade security with advanced encryption</li>
                        <li class="mb-3" style="font-size: 1.05rem;"><i class="fas fa-check-circle" style="color: #ea2429; margin-right: 10px;"></i> 24/7 technical support and monitoring</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="solution-image wow fadeInUp" style="position: relative;">
                    <img src="{{ asset('homepage/INSP(27of113) (1).jpg') }}" alt="InstantPay Business Solutions" class="img-fluid rounded shadow-lg" style="border-radius: 20px !important;">
                    <div style="position: absolute; top: 20px; right: 20px; background: rgba(234,36,41,0.9); color: white; padding: 10px 20px; border-radius: 50px; backdrop-filter: blur(10px);">
                        <i class="fas fa-store"></i> Business Growth
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="solution-content wow fadeInUp" data-wow-delay="0.2s" style="padding-right: 40px;">
                    <h3 style="color: #ea2429; font-size: 32px; margin-bottom: 20px;">Empowering Over 1,000+ Tanzanian Merchants</h3>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 25px;">From small businesses to large enterprises, we're proud to serve Tanzania's merchant community with reliable, secure, and innovative payment solutions that help them grow and thrive.</p>
                    <ul class="feature-list" style="list-style: none; padding: 0;">
                        <li class="mb-3" style="font-size: 1.05rem;"><i class="fas fa-check-circle" style="color: #ea2429; margin-right: 10px;"></i> Easy integration with existing business systems</li>
                        <li class="mb-3" style="font-size: 1.05rem;"><i class="fas fa-check-circle" style="color: #ea2429; margin-right: 10px;"></i> Detailed transaction reports and analytics</li>
                        <li class="mb-3" style="font-size: 1.05rem;"><i class="fas fa-check-circle" style="color: #ea2429; margin-right: 10px;"></i> Fast settlement - funds within 24 hours</li>
                        <li class="mb-3" style="font-size: 1.05rem;"><i class="fas fa-check-circle" style="color: #ea2429; margin-right: 10px;"></i> Dedicated account managers for support</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured Solutions Section End -->

<!-- Gallery Section Start -->
{{--<div class="gallery-section" style="padding: 100px 0; background: #f8f9fa;">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="section-title text-center mb-5">--}}
{{--                    <h3 class="wow fadeInUp" style="color: #ea2429;">Our Journey</h3>--}}
{{--                    <h2 class="text-anime-style-2 mb-3" data-cursor="-opaque">Making an Impact Across Tanzania</h2>--}}
{{--                    <p class="wow fadeInUp lead" data-wow-delay="0.2s">See how we're transforming payment experiences</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            @php--}}
{{--                $galleryImages = [--}}
{{--                    'homepage/HGA_5249 (1).jpg', 'homepage/INSP(25of113).jpg', 'homepage/INSP(27of113).jpg', 'homepage/INSP(6of113).jpg',--}}
{{--                    'Solutioons/Card Issuance.png', 'Solutioons/Ecommerce.png', 'Solutioons/weareble.jpeg', 'Solutioons/api_image.png'--}}
{{--                ];--}}
{{--            @endphp--}}

{{--            @foreach($galleryImages as $index => $image)--}}
{{--            <div class="col-lg-3 col-md-4 col-6 mb-4">--}}
{{--                <div class="gallery-item wow fadeInUp" data-wow-delay="{{ $index * 0.1 }}s" style="overflow: hidden; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">--}}
{{--                    <img src="{{ asset($image) }}" alt="InstantPay Gallery" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover;">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Gallery Section End -->--}}

<!-- Testimonial/Stats Section Start -->
<div class="stats-section" style="padding: 100px 0; background: linear-gradient(135deg, #ea2429, #8b0000); color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-5">
                    <h3 class="wow fadeInUp text-white">Our Impact</h3>
                    <h2 class="text-anime-style-2 text-white mb-3" data-cursor="-opaque">Trusted by Thousands Across Tanzania</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-item text-center wow fadeInUp" style="padding: 30px;">
                    <h2 class="text-white mb-2" style="font-size: 48px; font-weight: bold;"><span class="counter">3</span>+</h2>
                    <p class="text-white mb-0" style="font-size: 1.2rem;">Years of Experience</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-item text-center wow fadeInUp" data-wow-delay="0.2s" style="padding: 30px;">
                    <h2 class="text-white mb-2" style="font-size: 48px; font-weight: bold;"><span class="counter">1000</span>+</h2>
                    <p class="text-white mb-0" style="font-size: 1.2rem;">Merchants Empowered</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-item text-center wow fadeInUp" data-wow-delay="0.4s" style="padding: 30px;">
                    <h2 class="text-white mb-2" style="font-size: 48px; font-weight: bold;"><span class="counter">99.9</span>%</h2>
                    <p class="text-white mb-0" style="font-size: 1.2rem;">Uptime Guarantee</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-item text-center wow fadeInUp" data-wow-delay="0.6s" style="padding: 30px;">
                    <h2 class="text-white mb-2" style="font-size: 48px; font-weight: bold;"><span class="counter">24</span>/7</h2>
                    <p class="text-white mb-0" style="font-size: 1.2rem;">Customer Support</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial/Stats Section End -->

<!-- CTA Section Start -->
<div class="cta-section" style="padding: 100px 0; background: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="cta-image wow fadeInUp">
                    <img src="{{ asset('homepage/HGA_5249 (1).jpg') }}" alt="Payment Experience" class="img-fluid rounded shadow-lg" style="border-radius: 20px !important;">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cta-content wow fadeInUp" data-wow-delay="0.2s" style="padding-left: 40px;">
                    <h2 style="font-size: 42px; color: #333; margin-bottom: 20px;">Ready to Transform Your Payment Experience?</h2>
                    <p class="lead mb-4" style="color: #666; font-size: 1.2rem;">Join thousands of businesses and individuals who trust InstantPayment Solutions for their payment infrastructure.</p>

                    <div class="cta-features mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box me-3" style="background: #fff5f5; color: #ea2429; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-bolt fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Instant Setup</h5>
                                <p class="mb-0 text-muted">Get started in minutes</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box me-3" style="background: #fff5f5; color: #ea2429; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-headset fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">24/7 Support</h5>
                                <p class="mb-0 text-muted">We're always here to help</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-box me-3" style="background: #fff5f5; color: #ea2429; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-shield-alt fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Secure & Reliable</h5>
                                <p class="mb-0 text-muted">Bank-grade security</p>
                            </div>
                        </div>
                    </div>

                    <div class="cta-buttons d-flex gap-3 flex-wrap">
                        <a href="{{ url('/contact') }}" class="btn-default" style="padding: 15px 40px; font-size: 1.1rem;">Get Started Today</a>
                        <a href="{{ url('/services') }}" class="btn-default" style="padding: 15px 40px; font-size: 1.1rem; background: transparent; border: 2px solid #ea2429; color: #ea2429;">Explore Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End -->

@endsection
