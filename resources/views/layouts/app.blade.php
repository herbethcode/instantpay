<!DOCTYPE html>
<html lang="en">
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
        a:hover { color: #f97316; }
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
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                                </li>
                                <li class="nav-item {{ request()->is('services*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/services') }}">Services</a>
                                </li>
{{--                                <li class="nav-item {{ request()->is('team') ? 'active' : '' }}">--}}
{{--                                    <a class="nav-link" href="{{ url('/team') }}">Our Team</a>--}}
{{--                                </li>--}}
                                <li class="nav-item {{ request()->is('blog*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                                </li>
                                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Header Btn Start -->
                        <div class="header-btn d-inline-flex">
                            @auth
                                @if(in_array(auth()->user()->role, ['admin', 'editor']))
                                    <a href="{{ route('admin.dashboard') }}" class="btn-default">Admin Panel</a>
                                @else
                                    <a href="{{ route('dashboard') }}" class="btn-default">Dashboard</a>
                                @endif
                            @else
                                <a href="{{ route('contact') }}" class="btn-default btn-highlighted">Get Started</a>
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
                            <h3>Don't missed subscribed!</h3>
                        </div>
                        <!-- Footer Newsletter Title End -->

                        <!-- Newsletter Form start -->
                        <div class="newsletter-form">
                            @if(session('success'))
                                <div class="alert alert-success mb-3" style="background: rgba(255,255,255,0.2); color: white; border-radius: 8px; padding: 10px;">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form id="newsletterForm" action="{{ route('newsletter.subscribe') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="mail" placeholder="Enter Your Email" required="">
                                    <button type="submit" class="newsletter-btn">
                                        <img src="{{ asset('images/arrow-white.svg') }}" alt="">
                                    </button>
                                </div>
                                @error('email')
                                    <small class="text-white">{{ $message }}</small>
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
                        <h3>company</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">home</a></li>
                            <li><a href="{{ url('/about') }}">about Us</a></li>
                            <li><a href="{{ url('/services') }}">services</a></li>
                            <li><a href="{{ url('/team') }}">our team</a></li>
                            <li><a href="{{ url('/blog') }}">blog</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>support</h3>
                        <ul>
                            <li><a href="#">help</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Term & Condition</a></li>
                            <li><a href="{{ url('/contact') }}">Contact us</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-2 col-md-4">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>service</h3>
                        <ul>
                            <li><a href="{{ url('/services') }}">Financial planning</a></li>
                            <li><a href="{{ url('/services') }}">Investment management</a></li>
                            <li><a href="{{ url('/services') }}">Retirement planning</a></li>
                            <li><a href="{{ url('/services') }}">Budgeting & forecasting</a></li>
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
                                <p>Need support?</p>
                                <h3>+255 659 998 881</h3>
                            </div>
                            <!-- Footer Contact Item End -->

                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <p>E-mail us</p>
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
                            <p>Copyright &copy; {{ date('Y') }} InstantPay. All Rights Reserved.</p>
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
</body>
</html>
