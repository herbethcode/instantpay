@extends('layouts.app')

@section('title', 'Contact Us - InstantPayment Solutions')

@section('content')
<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('homepage/INSP(27of113) (1).jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2 text-white" data-cursor="-opaque">Contact Us</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Section Start -->
<div class="contact-us" style="padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Get In Touch</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">We're Here to Help</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Have questions about our payment solutions? Our team is ready to assist you</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <!-- Contact Info -->
            <div class="col-lg-4">
                <div class="contact-info-box wow fadeInUp">
                    <div class="contact-info-item mb-4" style="padding: 30px; background: #f8f9fa; border-radius: 10px;">
                        <div class="icon-box mb-3" style="background: #ea2429; color: white; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-phone fa-2x"></i>
                        </div>
                        <h4>Call Us</h4>
                        <p class="mb-0">+255 659 998 881</p>
                        <small class="text-muted">Mon - Fri: 8:00 AM - 5:00 PM</small>
                    </div>

                    <div class="contact-info-item mb-4" style="padding: 30px; background: #f8f9fa; border-radius: 10px;">
                        <div class="icon-box mb-3" style="background: #ea2429; color: white; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <h4>Email Us</h4>
                        <p class="mb-0">contact@instantpay.co.tz</p>
                        <small class="text-muted">We'll respond within 24 hours</small>
                    </div>

                    <div class="contact-info-item" style="padding: 30px; background: #f8f9fa; border-radius: 10px;">
                        <div class="icon-box mb-3" style="background: #ea2429; color: white; width: 60px; height: 60px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <h4>Visit Us</h4>
                        <p class="mb-0">Dar es Salaam, Tanzania</p>
                        <small class="text-muted">By appointment only</small>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="contact-form-box wow fadeInUp" data-wow-delay="0.2s" style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 5px 30px rgba(0,0,0,0.1);">
                    <h3 class="mb-4">Send Us a Message</h3>

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

                    <form action="{{ url('/contact/submit') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Subject *</label>
                                <select name="subject" class="form-select @error('subject') is-invalid @enderror" required>
                                    <option value="">Select a subject</option>
                                    <option value="POS Solutions" {{ old('subject') == 'POS Solutions' ? 'selected' : '' }}>POS Solutions</option>
                                    <option value="Payment APIs" {{ old('subject') == 'Payment APIs' ? 'selected' : '' }}>Payment APIs</option>
                                    <option value="E-Commerce" {{ old('subject') == 'E-Commerce' ? 'selected' : '' }}>E-Commerce Integration</option>
                                    <option value="GePG" {{ old('subject') == 'GePG' ? 'selected' : '' }}>GePG Solutions</option>
                                    <option value="Cross-Border" {{ old('subject') == 'Cross-Border' ? 'selected' : '' }}>Cross-Border Payments</option>
                                    <option value="VegaPay" {{ old('subject') == 'VegaPay' ? 'selected' : '' }}>VegaPay Wearables</option>
                                    <option value="Partnership" {{ old('subject') == 'Partnership' ? 'selected' : '' }}>Partnership Inquiry</option>
                                    <option value="Support" {{ old('subject') == 'Support' ? 'selected' : '' }}>Technical Support</option>
                                    <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" value="{{ old('company') }}">
                            @error('company')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message *</label>
                            <textarea name="message" rows="5" class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn-default">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section End -->

<!-- Why Choose Us Section Start -->
<div class="why-contact" style="padding: 100px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Why Choose InstantPayment Solutions?</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Safe, Secure & Reliable</h2>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card text-center wow fadeInUp" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); height: 100%;">
                    <div class="icon-box mb-3">
                        <i class="fas fa-shield-alt fa-3x" style="color: #ea2429;"></i>
                    </div>
                    <h4>Secure</h4>
                    <p class="mb-0">Bank-grade security for all transactions with end-to-end encryption</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card text-center wow fadeInUp" data-wow-delay="0.2s" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); height: 100%;">
                    <div class="icon-box mb-3">
                        <i class="fas fa-bolt fa-3x" style="color: #ea2429;"></i>
                    </div>
                    <h4>Instant</h4>
                    <p class="mb-0">Real-time payment processing with instant confirmations</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card text-center wow fadeInUp" data-wow-delay="0.4s" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); height: 100%;">
                    <div class="icon-box mb-3">
                        <i class="fas fa-headset fa-3x" style="color: #ea2429;"></i>
                    </div>
                    <h4>24/7 Support</h4>
                    <p class="mb-0">Round-the-clock technical support for all our clients</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card text-center wow fadeInUp" data-wow-delay="0.6s" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); height: 100%;">
                    <div class="icon-box mb-3">
                        <i class="fas fa-chart-line fa-3x" style="color: #ea2429;"></i>
                    </div>
                    <h4>Reliable</h4>
                    <p class="mb-0">99.9% uptime with proven track record of reliability</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->

{{--<!-- Gallery Section Start -->--}}
{{--<div class="contact-gallery" style="padding: 100px 0;">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="section-title text-center">--}}
{{--                    <h3 class="wow fadeInUp">Our Work</h3>--}}
{{--                    <h2 class="text-anime-style-2" data-cursor="-opaque">See Us in Action</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row mt-5">--}}
{{--            @php--}}
{{--                $galleryImages = [--}}
{{--                    'homepage/HGA_5249 (1).jpg', 'homepage/INSP(25of113).jpg', 'homepage/INSP(27of113).jpg', 'homepage/INSP(6of113).jpg',--}}
{{--                    'Solutioons/Card Issuance.png', 'Solutioons/Ecommerce.png', 'Products/Gemini_Generated_Image_oo1bedoo1bedoo1b.png', 'Products/Gemini_Generated_Image_ou7qy0ou7qy0ou7q.png'--}}
{{--                ];--}}
{{--            @endphp--}}

{{--            @foreach($galleryImages as $index => $image)--}}
{{--            <div class="col-lg-3 col-md-4 col-6 mb-4">--}}
{{--                <div class="gallery-item wow fadeInUp" data-wow-delay="{{ $index * 0.1 }}s">--}}
{{--                    <img src="{{ asset($image) }}" alt="InstantPay Gallery" class="img-fluid rounded shadow" style="width: 100%; height: 200px; object-fit: cover;">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Gallery Section End -->--}}

<!-- CTA Section Start -->
<div class="cta-section" style="padding: 80px 0; background: linear-gradient(rgba(234,36,41,0.9), rgba(139,0,0,0.9)), url('{{ asset('images/payment-solutions/cta-payment-experience-premium.jpg') }}'); background-size: cover; background-position: center; color: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="text-white mb-3">Ready to Transform Your Payment Experience?</h2>
                <p class="text-white mb-0">Join thousands of businesses trusting InstantPayment Solutions for their payment infrastructure</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="{{ url('/services') }}" class="btn-default" style="background: white; color: #ea2429;">Explore Our Services</a>
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End -->

@endsection
