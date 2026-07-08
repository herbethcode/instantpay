<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page Title -->
    <title>@yield('title', 'InstantPay - Fast & Secure Payments')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">
    @stack('styles')
    <style>
        /* InstantPay brand overrides */
        :root {
            --accent-color: #f97316 !important;
            --primary-color: #1e293b !important;
        }
        a:hover { color: #ea2429; }

        /* ===== Clean white professional app bar ===== */
        header.main-header{
            background: #ffffff !important;
            border-bottom: 1px solid #eef0f3 !important;
        }
        header.main-header .header-sticky{
            transition: box-shadow .3s ease, background .3s ease;
        }
        header.main-header .header-sticky.active{
            background: #ffffff !important;
            border-bottom: 1px solid #eef0f3 !important;
            box-shadow: 0 4px 24px rgba(15, 23, 42, 0.08);
        }
        .navbar{ padding: 16px 0; }

        /* Nav links: dark, brand-red on hover/active */
        .main-menu ul li a{
            color: #1e293b !important;
            opacity: 1 !important;
            font-weight: 500;
        }
        .main-menu ul li a:hover,
        .main-menu ul li a:focus,
        .main-menu ul li.active > a{
            color: #ea2429 !important;
        }
        /* Active-page underline accent */
        .main-menu ul li.active > a{ position: relative; }
        .main-menu ul li.active > a::after{
            content: '';
            position: absolute;
            left: 20px; right: 20px; bottom: 4px;
            height: 2px;
            background: #ea2429;
            border-radius: 2px;
        }
        /* Dropdown panel on white */
        .main-menu ul ul{
            background: #ffffff !important;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.10);
            border: 1px solid #eef0f3;
        }
        .main-menu ul ul li a{ color: #1e293b !important; }
        .main-menu ul ul li a:hover{ color: #ea2429 !important; }

        /* Header CTA -> brand red */
        .header-btn .btn-default{
            background: #ea2429;
            color: #ffffff;
            border: 2px solid #ea2429;
        }
        .header-btn .btn-default::before{ background: #c41e22; }

        /* Mobile toggle -> brand red */
        .slicknav_btn{ background: #ea2429 !important; }
        .responsive-menu .slicknav_nav a:hover{ color: #ea2429 !important; }

        /* ===== Clean light professional footer ===== */
        footer.main-footer{
            background: #f8fafc !important;
            border-top: 1px solid #eef0f3;
            padding-top: 80px;
        }
        /* Newsletter */
        .footer-newsletter-title h3{ color: #1e293b !important; }
        .newsletter-form .form-group .form-control{
            color: #1e293b !important;
            background: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            border-right: none !important;
            opacity: 1 !important;
        }
        .newsletter-form .form-group .form-control::placeholder{
            color: #94a3b8 !important;
            opacity: 1 !important;
        }
        .newsletter-form .form-group .newsletter-btn{ background-color: #ea2429 !important; }
        .newsletter-form .form-group .newsletter-btn:hover{ background-color: #c41e22 !important; }

        /* Link columns */
        .footer-links h3{ color: #1e293b !important; }
        .footer-links ul li{ color: #64748b !important; opacity: 1 !important; }
        .footer-links ul li:hover{ color: #ea2429 !important; }

        /* CTA card -> white card */
        .footer-cta-box{
            background-color: #ffffff !important;
            border: 1px solid #eef0f3;
            box-shadow: 0 6px 24px rgba(15, 23, 42, 0.05);
        }
        .footer-contact-item::before{ background-color: #e2e8f0 !important; }
        .footer-contact-item p{ color: #64748b !important; opacity: 1 !important; }
        .footer-contact-item h3{ color: #1e293b !important; }

        /* Copyright row */
        .footer-copyright{ border-top: 1px solid #eef0f3; margin-top: 20px; }
        .footer-copyright-text p{ color: #64748b !important; opacity: 1 !important; }
        .footer-menu ul li{ color: #64748b !important; opacity: 1 !important; }
        .footer-menu ul li:hover{ color: #ea2429 !important; }
        .footer-menu ul li::before{ background-color: #cbd5e1 !important; }

        /* Language switcher */
        .lang-switcher{ font-size: 13px; font-weight: 600; }
        .lang-switcher a{ color: #94a3b8 !important; padding: 0 4px; }
        .lang-switcher a.active{ color: #ea2429 !important; }
        .lang-switcher .sep{ color: #cbd5e1; }
    </style>
</head>
<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('logo/logopng.png') }}" alt="InstantPay Logo" style="max-width: 80px;"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('logo/logopng.png') }}" alt="InstantPay Logo" style="max-height: 50px;">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                                </li>
                                <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/about') }}">{{ __('About Us') }}</a>
                                </li>
                                <li class="nav-item {{ request()->is('services*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/services') }}">{{ __('Services') }}</a>
                                </li>
{{--                                <li class="nav-item {{ request()->is('team') ? 'active' : '' }}">--}}
{{--                                    <a class="nav-link" href="{{ url('/team') }}">{{ __('Our Team') }}</a>--}}
{{--                                </li>--}}
                                <li class="nav-item {{ request()->is('careers') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/careers') }}">{{ __('Careers') }}</a>
                                </li>
                                <li class="nav-item {{ request()->is('blog*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/blog') }}">{{ __('Blog') }}</a>
                                </li>
                                <li class="nav-item {{ request()->is('faq') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/faq') }}">{{ __('FAQ') }}</a>
                                </li>
                                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/contact') }}">{{ __('Contact Us') }}</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Language Switcher Start -->
                        <div class="lang-switcher d-inline-flex align-items-center me-3">
                            <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
                            <span class="sep">|</span>
                            <a href="{{ route('lang.switch', 'sw') }}" class="{{ app()->getLocale() === 'sw' ? 'active' : '' }}">SW</a>
                        </div>
                        <!-- Language Switcher End -->
                        <!-- Header Btn Start -->
                        <div class="header-btn d-inline-flex">
                            @auth
                                @if(in_array(auth()->user()->role, ['admin', 'editor']))
                                    <a href="{{ route('admin.dashboard') }}" class="btn-default">{{ __('Admin Panel') }}</a>
                                @else
                                    <a href="{{ route('dashboard') }}" class="btn-default">{{ __('Dashboard') }}</a>
                                @endif
                            @else
                                <a href="{{ route('contact') }}" class="btn-default btn-highlighted">{{ __('Get Started') }}</a>
                            @endauth
                        </div>
                        <!-- Header Btn End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Page Content Start -->
    @yield('content')
    <!-- Page Content End -->

    <!-- Footer Section Start -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Footer Newsletter Box Start -->
                    <div class="footer-newsletter-box">
                        <!-- Footer Newsletter Title Start -->
                        <div class="footer-newsletter-title">
                            <h3>{{ __("Don't missed subscribed!") }}</h3>
                        </div>
                        <!-- Footer Newsletter Title End -->

                        <!-- Newsletter Form start -->
                        <div class="newsletter-form">
                            @if(session('success'))
                                <div class="alert alert-success mb-3" style="background: #ecfdf5; color: #047857; border: 1px solid #a7f3d0; border-radius: 8px; padding: 10px;">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form id="newsletterForm" action="{{ route('newsletter.subscribe') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="mail" placeholder="{{ __('Enter Your Email') }}" required="">
                                    <button type="submit" class="newsletter-btn">
                                        <img src="{{ asset('images/arrow-white.svg') }}" alt="">
                                    </button>
                                </div>
                                @error('email')
                                    <small style="color: #ea2429;">{{ $message }}</small>
                                @enderror
                            </form>
                        </div>
                        <!-- Newsletter Form end -->
                    </div>
                    <!-- Footer Newsletter Box End -->
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>{{ __('company') }}</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">{{ __('home') }}</a></li>
                            <li><a href="{{ url('/about') }}">{{ __('about Us') }}</a></li>
                            <li><a href="{{ url('/services') }}">{{ __('services') }}</a></li>
                            <li><a href="{{ url('/team') }}">{{ __('our team') }}</a></li>
                            <li><a href="{{ url('/careers') }}">{{ __('careers') }}</a></li>
                            <li><a href="{{ url('/news') }}">{{ __('news') }}</a></li>
                            <li><a href="{{ url('/blog') }}">{{ __('blog') }}</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>{{ __('support') }}</h3>
                        <ul>
                            <li><a href="{{ url('/faq') }}">{{ __('help') }}</a></li>
                            <li><a href="#">{{ __('Privacy Policy') }}</a></li>
                            <li><a href="#">{{ __('Term & Condition') }}</a></li>
                            <li><a href="{{ url('/contact') }}">{{ __('Contact us') }}</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-2 col-md-4">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>{{ __('service') }}</h3>
                        <ul>
                            <li><a href="{{ url('/services') }}">{{ __('Financial planning') }}</a></li>
                            <li><a href="{{ url('/services') }}">{{ __('Investment management') }}</a></li>
                            <li><a href="{{ url('/services') }}">{{ __('Retirement planning') }}</a></li>
                            <li><a href="{{ url('/services') }}">{{ __('Budgeting & forecasting') }}</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer CTA Box Start -->
                    <div class="footer-cta-box">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{ asset('logo/logopng.png') }}" alt="InstantPay Logo" style="max-height: 60px;">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- Footer Contact Box Start -->
                        <div class="footer-contact-box">
                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <p>{{ __('Need support?') }}</p>
                                <h3>+255 659 998 881</h3>
                            </div>
                            <!-- Footer Contact Item End -->

                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <p>{{ __('E-mail us') }}</p>
                                <h3>contact@instantpay.co.tz</h3>
                            </div>
                            <!-- Footer Contact Item End -->
                        </div>
                        <!-- Footer Contact Box End -->
                    </div>
                    <!-- Footer CTA Box End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>{{ __('Copyright') }} &copy; {{ date('Y') }} InstantPay. {{ __('All Rights Reserved.') }}</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>

                    <div class="col-md-7">
                        <!-- Footer Menu Start -->
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">LinkedIn</a></li>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Twitter</a></li>
                            </ul>
                        </div>
                        <!-- Footer Menu End -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Jquery Library File -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('js/SplitText.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('js/function.js') }}"></script>
    @stack('scripts')

    @if(config('services.chatbot.api_key'))
    <!-- Customer Care Chatbot Widget -->
    <script
        src="{{ config('services.chatbot.widget_base') }}/chatbot-widget.js?v=5"
        data-api-key="{{ config('services.chatbot.api_key') }}"
        data-api-base="{{ config('services.chatbot.api_base') }}"
        data-bot-name="{{ __('InstantPay Assistant') }}"
        data-primary-color="#ea2429"
        data-greeting="{{ __('Hi! How can we help you today?') }}"
        data-position="right"
        async
    ></script>
    @endif
</body>
</html>
