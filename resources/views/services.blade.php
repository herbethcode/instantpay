@extends('layouts.app')

@section('title', 'Our Services - InstantPayment Solutions')

@section('content')
<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('homepage/HGA_5249 (1).jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2 text-white" data-cursor="-opaque">Our Payment Solutions</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Services Overview Start -->
<div class="services-overview" style="padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-5">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">Comprehensive Payment Solutions</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Complete Payment Infrastructure</h2>
                    <p class="wow fadeInUp lead" data-wow-delay="0.2s">From transaction processing to hardware solutions, we power your entire payment ecosystem</p>
                </div>
            </div>
        </div>

        <!-- Split Solutions Display -->
        <div class="row mt-5">
            <!-- Card Processing - We Process -->
            <div class="col-lg-6 mb-4">
                <div class="solution-split-card h-100 wow fadeInUp" style="background: linear-gradient(135deg, #ea2429 0%, #8b0000 100%); border-radius: 20px; padding: 40px; color: white; position: relative; overflow: hidden;">
                    <div class="solution-icon mb-3" style="font-size: 48px;">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h3 class="mb-3 text-white">Card Processing Services</h3>
                    <h5 class="mb-4" style="color: #fff; font-weight: 300; opacity: 0.95;">We Process Your Transactions</h5>
                    <p class="mb-4" style="font-size: 16px; line-height: 1.8;">End-to-end transaction processing, authorization, clearing, and settlement. We handle the complexity of card transactions so you can focus on your business.</p>
                    <ul class="list-unstyled" style="font-size: 15px;">
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Transaction Authorization & Processing</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Multi-Scheme Support (Visa, Mastercard, UnionPay)</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Real-time Fraud Monitoring</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Automated Settlement & Reconciliation</li>
                    </ul>
                    <div style="position: absolute; bottom: -30px; right: -30px; opacity: 0.1; font-size: 200px;">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                </div>
            </div>

            <!-- POS Solutions - We Sell & Provide -->
            <div class="col-lg-6 mb-4">
                <div class="solution-split-card h-100 wow fadeInUp" data-wow-delay="0.2s" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); border-radius: 20px; padding: 40px; color: white; position: relative; overflow: hidden;">
                    <div class="solution-icon mb-3" style="font-size: 48px;">
                        <i class="fas fa-cash-register"></i>
                    </div>
                    <h3 class="mb-3 text-white">POS Hardware Solutions</h3>
                    <h5 class="mb-4" style="color: #fff; font-weight: 300; opacity: 0.95;">We Sell & Provide Devices</h5>
                    <p class="mb-4" style="font-size: 16px; line-height: 1.8;">Complete range of payment terminals and hardware. We supply, deploy, and support POS devices tailored to your business needs - from mobile to countertop solutions.</p>
                    <ul class="list-unstyled" style="font-size: 15px;">
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> MiniPOS (mPOS) - Portable Mobile Devices</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Standard POS - Countertop Terminals</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> Full Hardware Deployment & Setup</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2"></i> 24/7 Technical Support & Maintenance</li>
                    </ul>
                    <div style="position: absolute; bottom: -30px; right: -30px; opacity: 0.1; font-size: 200px;">
                        <i class="fas fa-store"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visual Representation with Images -->
        <div class="row mt-5">
            <div class="col-lg-6 mb-4">
                <div class="service-image-card wow fadeInUp" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                    <img src="{{ asset('Solutioons/api_image.png') }}" alt="Card Processing" class="img-fluid" style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="p-4 text-center">
                        <h5 style="color: #ea2429;">Transaction Processing Platform</h5>
                        <p class="mb-0 text-muted">Secure card payment processing infrastructure</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-image-card wow fadeInUp" data-wow-delay="0.2s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                    <img src="{{ asset('images/payment-solutions/pos-solutions-clean.jpg') }}" alt="POS Devices" class="img-fluid" style="width: 100%; height: 350px; object-fit: cover;">
                    <div class="p-4 text-center">
                        <h5 style="color: #ea2429;">POS Hardware Range</h5>
                        <p class="mb-0 text-muted">MiniPOS and Standard terminals for every business</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Overview End -->

<!-- Card Issuance Section Start -->
<div id="card-issuance" class="service-detail" style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-image wow fadeInUp">
                    <img src="{{ asset('Solutioons/Card Issuance.png') }}" alt="Card Issuance" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="service-content wow fadeInUp" data-wow-delay="0.2s">
                    <h3 style="color: #ea2429;">Card Issuance</h3>
                    <h2 class="mb-4">White-Label Solutions for Instant Card Issuance</h2>

                    <p>Our white-label instant card issuance platform enables banks and fintechs to launch fully branded physical and virtual card programs quickly without building complex infrastructure.</p>

                    <div class="features-list mt-4">
                        <div class="feature-item d-flex mb-3">
                            <div class="icon-box me-3" style="background: #ea2429; color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-bolt fa-lg"></i>
                            </div>
                            <div>
                                <h5>Real-time Issuance</h5>
                                <p class="mb-0">Instant card issuance, activation, PIN management, and tokenization</p>
                            </div>
                        </div>

                        <div class="feature-item d-flex mb-3">
                            <div class="icon-box me-3" style="background: #ea2429; color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-sync fa-lg"></i>
                            </div>
                            <div>
                                <h5>Seamless Integration</h5>
                                <p class="mb-0">Full integration with core banking systems, mobile apps, and digital wallets</p>
                            </div>
                        </div>

                        <div class="feature-item d-flex mb-3">
                            <div class="icon-box me-3" style="background: #ea2429; color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-shield-alt fa-lg"></i>
                            </div>
                            <div>
                                <h5>Global Compliance</h5>
                                <p class="mb-0">Designed to meet global security and compliance standards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Card Issuance Section End -->

<!-- Card Processing Services Section Start -->
<div id="card-processing" class="service-detail" style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="service-image wow fadeInUp">
                    <img src="{{ asset('Solutioons/api_image.png') }}" alt="Card Processing" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <div class="col-lg-6 order-lg-1">
                <div class="service-content wow fadeInUp" data-wow-delay="0.2s">
                    <h3 style="color: #ea2429;">Card Processing Services</h3>
                    <h2 class="mb-4">End-to-End Transaction Management</h2>

                    <p>Our card processing platform delivers secure, end-to-end transaction management for financial institutions and payment providers. The system supports authorization, clearing, settlement, reconciliation, and real-time transaction monitoring.</p>

                    <ul class="feature-list" style="list-style: none; padding: 0;">
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Support for multiple card schemes</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> POS, e-commerce, and contactless payments</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Advanced reporting and fraud monitoring</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Built for reliability and scale</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Real-time operational control</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Card Processing Services Section End -->

<!-- Card POS Solutions Section Start -->
<div id="pos" class="service-detail" style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-5">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">Card POS Solutions</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Accept Payments Anywhere, Anytime</h2>
                    <p class="lead wow fadeInUp" data-wow-delay="0.2s">Empowering businesses to accept payments quickly, securely, and with complete confidence</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <div class="service-image wow fadeInUp">
                    <img src="{{ asset('images/payment-solutions/pos-solutions-clean.jpg') }}" alt="POS Solutions" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="service-content wow fadeInUp" data-wow-delay="0.2s">
                    <p class="lead">Designed for reliability and performance, our terminals support all major card schemes, including Visa, Mastercard, UnionPay, American Express, and domestic networks, ensuring customers can pay using the method they trust.</p>

                    <h4 class="mt-4 mb-3" style="color: #ea2429;">We provide a full range of devices:</h4>

                    <div class="device-type mb-4">
                        <h5><i class="fas fa-mobile-alt" style="color: #ea2429;"></i> MiniPOS (mPOS)</h5>
                        <p>Compact, portable, and mobile-enabled devices ideal for field agents, delivery services, SMEs, and businesses on the move. Lightweight yet powerful, MiniPOS terminals connect via Bluetooth or SIM/Wi-Fi and support contactless, chip (EMV), and magnetic stripe transactions.</p>
                    </div>

                    <div class="device-type">
                        <h5><i class="fas fa-desktop" style="color: #ea2429;"></i> Standard POS Terminals</h5>
                        <p>Robust countertop or wireless devices designed for retail stores, supermarkets, hospitality, fuel stations, and high-traffic environments. These terminals offer fast processing speeds, receipt printing, secure PIN entry, and seamless integration with business systems.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="pos-features" style="background: white; padding: 50px; border-radius: 15px; box-shadow: 0 5px 30px rgba(0,0,0,0.08);">
                    <h4 class="mb-4 text-center" style="color: #ea2429;">All our POS devices support:</h4>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle fa-2x me-3" style="color: #ea2429;"></i>
                                <span>Contactless (NFC) payments</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle fa-2x me-3" style="color: #ea2429;"></i>
                                <span>EMV chip and PIN</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle fa-2x me-3" style="color: #ea2429;"></i>
                                <span>Magnetic stripe transactions</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle fa-2x me-3" style="color: #ea2429;"></i>
                                <span>QR and digital wallet acceptance</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle fa-2x me-3" style="color: #ea2429;"></i>
                                <span>Real-time transaction processing</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle fa-2x me-3" style="color: #ea2429;"></i>
                                <span>Secure end-to-end encryption</span>
                            </div>
                        </div>
                    </div>

                    <p class="mt-4 mb-0 text-center lead">With enterprise-grade security, PCI-DSS compliant infrastructure, and reliable uptime, our Card POS solutions help businesses reduce friction at checkout, improve customer experience, and drive revenue growth.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Card POS Solutions Section End -->

<!-- E-Commerce Section Start -->
<div id="ecommerce" class="service-detail" style="padding: 80px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-5">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">E-Commerce Solutions</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Seamless Online Payment Experiences</h2>
                </div>
            </div>
        </div>

        <!-- Checkout Solutions -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <div class="service-image wow fadeInUp">
                    <img src="{{ asset('Solutioons/Ecommerce.png') }}" alt="E-Commerce Checkout" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="service-content wow fadeInUp" data-wow-delay="0.2s">
                    <h3 style="color: #ea2429;">Checkout Solutions</h3>
                    <h2 class="mb-4">Branded Online Checkout Experience</h2>

                    <p>We offer a seamless, branded online checkout experience for your website or app. Your customers can pay using multiple methods — cards, mobile money, or digital wallets — all within a secure, fully integrated flow.</p>

                    <ul class="feature-list" style="list-style: none; padding: 0;">
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Multiple payment methods (cards, mobile money, digital wallets)</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Real-time payment tracking</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Automatic reconciliation</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Advanced fraud protection</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Ideal for e-commerce stores, subscription platforms, and digital services</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Pay-by-Link Solutions -->
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="service-image wow fadeInUp">
                    <img src="{{ asset('Solutioons/Ecommerce.png') }}" alt="Pay-by-Link" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <div class="col-lg-6 order-lg-1">
                <div class="service-content wow fadeInUp" data-wow-delay="0.2s">
                    <h3 style="color: #ea2429;">Pay-by-Link Solutions</h3>
                    <h2 class="mb-4">Collect Payments Anywhere</h2>

                    <p>We offer the ability to send secure payment links to your customers via SMS, email, or messaging apps, allowing them to pay without visiting a website. This is perfect for on-the-go sales, invoices, or social commerce.</p>

                    <ul class="feature-list" style="list-style: none; padding: 0;">
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Send via SMS, email, or messaging apps</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Payments tracked in real time</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Automatic reconciliation</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Robust security protection</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Fast, flexible way to collect funds anytime, anywhere</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- E-Commerce Section End -->

<!-- Payment APIs & Mobile Money Section Start -->
<div id="mobile-money" class="service-detail" style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-image wow fadeInUp">
                    <img src="{{ asset('Solutioons/api_image.png') }}" alt="Payment APIs and Mobile Money" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="service-content wow fadeInUp" data-wow-delay="0.2s">
                    <h3 style="color: #ea2429;">Payment APIs & Mobile Money</h3>
                    <h2 class="mb-4">Unified Payment Integrations</h2>

                    <p>As a leading fintech provider, we offer one unified integration layer for payment APIs and mobile money services, empowering businesses to accept, process, and manage payments efficiently. Our solutions connect directly to mobile wallets, bank accounts, operators, and digital payment platforms.</p>

                    <div class="mno-list mt-4 mb-4" style="background: white; padding: 30px; border-radius: 10px;">
                        <h5 class="mb-3" style="color: #ea2429;"><i class="fas fa-mobile-alt"></i> Connected Mobile Network Operators:</h5>
                        <div class="row">
                            <div class="col-6 col-md-3 mb-2">
                                <div class="mno-item text-center">
                                    <i class="fas fa-check-circle" style="color: #ea2429;"></i>
                                    <strong>Tigo Pesa</strong>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-2">
                                <div class="mno-item text-center">
                                    <i class="fas fa-check-circle" style="color: #ea2429;"></i>
                                    <strong>M-Pesa</strong>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-2">
                                <div class="mno-item text-center">
                                    <i class="fas fa-check-circle" style="color: #ea2429;"></i>
                                    <strong>HaloPesa</strong>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-2">
                                <div class="mno-item text-center">
                                    <i class="fas fa-check-circle" style="color: #ea2429;"></i>
                                    <strong>Airtel Money</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="features-list">
                        <div class="feature-item mb-3">
                            <h5><i class="fas fa-bolt" style="color: #ea2429;"></i> Real-Time Collections & Payouts</h5>
                            <p>Instant transaction processing with competitive pricing</p>
                        </div>

                        <div class="feature-item mb-3">
                            <h5><i class="fas fa-code" style="color: #ea2429;"></i> Robust API Infrastructure</h5>
                            <p>Streamline payments across apps, e-commerce platforms, and corporate payment systems</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Payment APIs & Mobile Money Section End -->

<!-- Wearable Payments Section Start -->
<div id="wearables" class="service-detail" style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="service-image wow fadeInUp">
                    <img src="{{ asset('Solutioons/weareble.jpeg') }}" alt="Wearable Payments" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <div class="col-lg-6 order-lg-1">
                <div class="service-content wow fadeInUp" data-wow-delay="0.2s">
                    <h3 style="color: #ea2429;">Wearable Payments</h3>
                    <h2 class="mb-4">The Future of Digital Transactions</h2>

                    <p class="lead">We develop secure, innovative wearable payment solutions designed for the future of digital transactions. Our rings, bracelets, and key fobs connect directly to bank cards through advanced tokenization technology, enabling seamless contactless payments anywhere in the world.</p>

                    <div class="features-box mt-4 p-4" style="background: #f8f9fa; border-radius: 10px;">
                        <h5 style="color: #ea2429;" class="mb-3">Key Features:</h5>
                        <ul style="list-style: none; padding: 0;">
                            <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> No charging required</li>
                            <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> No sensitive card data stored on device</li>
                            <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Enterprise-grade security with tokenization</li>
                            <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Worldwide contactless payments</li>
                            <li class="mb-2"><i class="fas fa-check-circle" style="color: #ea2429;"></i> Transforms everyday accessories into powerful payment tools</li>
                        </ul>
                    </div>

                    <p class="mt-4 mb-0"><em>Designed for the evolving cashless economy, our technology redefines how the world transacts — VegaPay</em></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wearable Payments Section End -->

<!-- SGR Tanzania Section Start -->
<div id="sgr" class="service-detail" style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-image wow fadeInUp">
                    <img src="{{ asset('Solutioons/sgr_photo.jpg') }}" alt="SGR Tanzania" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="service-content wow fadeInUp" data-wow-delay="0.2s">
                    <h3 style="color: #ea2429;">SGR Tanzania Partnership</h3>
                    <h2 class="mb-4">Seamless Travel Payments with Tokenized Rewards</h2>

                    <p class="lead">We are the technical partner for the SGR Tanzania, delivering a seamless payment experience for passengers with our tokenized card solution.</p>

                    <p>Travelers can tap their card to pay effortlessly while earning points on every journey, making commuting both convenient and rewarding.</p>

                    <div class="features-list mt-4">
                        <div class="feature-item d-flex mb-3">
                            <div class="icon-box me-3" style="background: #ea2429; color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-bolt fa-lg"></i>
                            </div>
                            <div>
                                <h5>Fast & Secure Transactions</h5>
                                <p class="mb-0">Our platform ensures fast, secure, and reliable transactions</p>
                            </div>
                        </div>

                        <div class="feature-item d-flex mb-3">
                            <div class="icon-box me-3" style="background: #ea2429; color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-sync fa-lg"></i>
                            </div>
                            <div>
                                <h5>Fully Integrated Systems</h5>
                                <p class="mb-0">Complete integration with SGR's systems for seamless operations</p>
                            </div>
                        </div>

                        <div class="feature-item d-flex mb-3">
                            <div class="icon-box me-3" style="background: #ea2429; color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-gift fa-lg"></i>
                            </div>
                            <div>
                                <h5>Instant Points Accumulation</h5>
                                <p class="mb-0">Passengers earn rewards on every journey with instant balance updates</p>
                            </div>
                        </div>
                    </div>

                    <p class="mt-4 mb-0 lead" style="color: #ea2429;"><strong>Redefining how Tanzanians travel — combining speed, security, and loyalty in one smart card.</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SGR Tanzania Section End -->

<!-- InstantPay Digital Payment Platform Section Start -->
<div id="instantpay-platform" class="service-detail" style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="service-image wow fadeInUp">
                    <img src="{{ asset('homepage/HGA_5249 (1).jpg') }}" alt="InstantPay Platform" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <div class="col-lg-6 order-lg-1">
                <div class="service-content wow fadeInUp" data-wow-delay="0.2s">
                    <h3 style="color: #ea2429;">InstantPay Digital Payment Platform</h3>
                    <h2 class="mb-4">Tanzania's Premier Digital Payment Solution</h2>

                    <p class="lead">InstantPay is Tanzania's premier digital payment solution, connecting businesses, individuals, and institutions through secure, real-time transactions. Our comprehensive payment platform processes thousands of transactions daily with 99.9% uptime reliability.</p>

                    <div class="platform-features mt-4">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="feature-box p-3" style="background: #f8f9fa; border-radius: 10px;">
                                    <i class="fas fa-bolt fa-2x mb-2" style="color: #ea2429;"></i>
                                    <h5>Real-time Processing</h5>
                                    <p class="mb-0">Payment processing across Tanzania</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="feature-box p-3" style="background: #f8f9fa; border-radius: 10px;">
                                    <i class="fas fa-network-wired fa-2x mb-2" style="color: #ea2429;"></i>
                                    <h5>Multi-channel Support</h5>
                                    <p class="mb-0">POS, Mobile, Web & API</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="feature-box p-3" style="background: #f8f9fa; border-radius: 10px;">
                                    <i class="fas fa-shield-alt fa-2x mb-2" style="color: #ea2429;"></i>
                                    <h5>Bank-grade Security</h5>
                                    <p class="mb-0">Advanced encryption</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="feature-box p-3" style="background: #f8f9fa; border-radius: 10px;">
                                    <i class="fas fa-headset fa-2x mb-2" style="color: #ea2429;"></i>
                                    <h5>24/7 Support</h5>
                                    <p class="mb-0">Technical support and monitoring</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- InstantPay Digital Payment Platform Section End -->

<!-- Empowering Merchants Section Start -->
<div class="empowering-merchants" style="padding: 100px 0; background: linear-gradient(135deg, rgba(234, 36, 41, 0.95), rgba(139, 0, 0, 0.95)), url('{{ asset('homepage/INSP(25of113).jpg') }}'); background-size: cover; background-position: center; color: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content wow fadeInUp">
                    <h3 class="text-white mb-3">Our Impact</h3>
                    <h2 class="text-white mb-4" style="font-size: 48px; font-weight: bold;">Empowering Over 1,000+ Tanzanian Merchants</h2>
                    <p class="text-white lead mb-4">From small businesses to large enterprises, we're proud to serve Tanzania's merchant community with reliable, secure, and innovative payment solutions.</p>

                    <div class="merchant-stats mt-4">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="stat-box text-center p-3" style="background: rgba(255,255,255,0.1); border-radius: 10px; backdrop-filter: blur(10px);">
                                    <h3 class="text-white mb-0" style="font-size: 42px;"><span class="counter">1000</span>+</h3>
                                    <p class="text-white mb-0">Active Merchants</p>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="stat-box text-center p-3" style="background: rgba(255,255,255,0.1); border-radius: 10px; backdrop-filter: blur(10px);">
                                    <h3 class="text-white mb-0" style="font-size: 42px;"><span class="counter">99.9</span>%</h3>
                                    <p class="text-white mb-0">Uptime</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('/contact') }}" class="btn-default mt-4" style="background: white; color: #ea2429;">Join Our Network</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="merchant-image wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset('homepage/INSP(25of113).jpg') }}" alt="Tanzanian Merchant" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Empowering Merchants Section End -->

<!-- Cross-Border Payments Section Start -->
<div id="crossborder" class="service-detail" style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-image wow fadeInUp">
                    <img src="{{ asset('images/payment-solutions/cross-border-product.jpg') }}" alt="Cross-Border Transfers" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="service-content wow fadeInUp" data-wow-delay="0.2s">
                    <h3 style="color: #ea2429;">IMT & Cross-Border Transfers</h3>
                    <h2 class="mb-4">Seamless International Money Movement</h2>

                    <p class="lead">We power the seamless movement of money both inbound and outbound at competitive rates, enabling businesses to collect and disburse funds quickly, securely, and reliably.</p>

                    <p>Our platform integrates with all major mobile money operators and banking channels, providing real-time transactions, automated reconciliation, and robust fraud protection.</p>

                    <div class="features-list mt-4">
                        <div class="feature-item mb-3">
                            <h5><i class="fas fa-globe-africa" style="color: #ea2429;"></i> Regional Coverage</h5>
                            <p>Connect with financial institutions across East Africa and beyond</p>
                        </div>

                        <div class="feature-item mb-3">
                            <h5><i class="fas fa-dollar-sign" style="color: #ea2429;"></i> Competitive Rates</h5>
                            <p>Cost-effective cross-border transfers with transparent pricing</p>
                        </div>

                        <div class="feature-item mb-3">
                            <h5><i class="fas fa-sync" style="color: #ea2429;"></i> Real-time Transactions</h5>
                            <p>Instant processing with automated reconciliation</p>
                        </div>

                        <div class="feature-item">
                            <h5><i class="fas fa-shield-alt" style="color: #ea2429;"></i> Robust Security</h5>
                            <p>Fraud protection and enhanced cash flow management</p>
                        </div>
                    </div>

                    <p class="mt-4 mb-0">Designed for businesses of all sizes, our solutions simplify payments, enhance cash flow management, and deliver a superior experience for customers and partners alike.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cross-Border Payments Section End -->

{{--<!-- Future Plans Section Start -->--}}
{{--<div class="future-plans" style="padding: 100px 0; background: linear-gradient(135deg, rgba(234, 36, 41, 0.95), rgba(139, 0, 0, 0.95)), url('{{ asset('homepage/HGA_5249 (1).jpg') }}'); background-size: cover; background-position: center; color: white;">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="section-title text-center">--}}
{{--                    <h3 class="wow fadeInUp text-white">Future Plans</h3>--}}
{{--                    <h2 class="text-anime-style-2 text-white" data-cursor="-opaque">Making an Impact Across Tanzania</h2>--}}
{{--                    <p class="wow fadeInUp text-white lead" data-wow-delay="0.2s">See how we're transforming payment experiences and shaping the future</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row mt-5">--}}
{{--            <div class="col-lg-6 col-md-6 mb-4">--}}
{{--                <div class="future-item wow fadeInUp" style="background: rgba(255,255,255,0.1); padding: 40px; border-radius: 15px; backdrop-filter: blur(10px); height: 100%;">--}}
{{--                    <div class="icon-box mb-3">--}}
{{--                        <i class="fas fa-university fa-3x"></i>--}}
{{--                    </div>--}}
{{--                    <h4 class="mb-3">Unified Digital Government Platform</h4>--}}
{{--                    <p>To establish a centralised digital platform for government services, enabling citizens and businesses to access services (e.g., licenses, permits, payments, registrations) seamlessly online.</p>--}}
{{--                    <p class="mb-0"><strong>Strategic Importance:</strong> This initiative aims to improve efficiency, transparency, and convenience, while supporting Tanzania's digital transformation agenda.</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-6 col-md-6 mb-4">--}}
{{--                <div class="future-item wow fadeInUp" data-wow-delay="0.2s" style="background: rgba(255,255,255,0.1); padding: 40px; border-radius: 15px; backdrop-filter: blur(10px); height: 100%;">--}}
{{--                    <div class="icon-box mb-3">--}}
{{--                        <i class="fas fa-piggy-bank fa-3x"></i>--}}
{{--                    </div>--}}
{{--                    <h4 class="mb-3">Neo Bank</h4>--}}
{{--                    <p>The project aims to launch a digital Neo-Bank targeting underserved populations, initially in Tanzania and Zanzibar, with an expansion strategy covering East Africa, the East African Community (EAC), and eventually East, Central, and Western African countries.</p>--}}
{{--                    <p class="mb-0"><strong>Strategic Importance:</strong> Tap into the shadow economy (~20% of total economic activity) by providing formal financial services. Enhance financial inclusion for microfinance institutions, community MFIs, cooperatives, agents, merchants, and mobile clients. Position the Neo Bank as a key enabler of digital, wholesale, and micro-lending solutions across the region.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Future Plans Section End -->--}}

<!-- Featured Solutions Section Start -->
<div class="featured-solutions" style="padding: 100px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">Making Impact</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Transforming Payments Across Tanzania</h2>
                    <p class="lead wow fadeInUp" data-wow-delay="0.2s">From Zanzibar to SGR, we're revolutionizing how Tanzania transacts</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="solution-card wow fadeInUp" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.1); height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="solution-image" style="height: 250px; overflow: hidden;">
                        <img src="{{ asset('Solutioons/weareble.jpeg') }}" alt="Wearables" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="solution-content p-4">
                        <h4 style="color: #ea2429;">Wearable Payments</h4>
                        <p>Transforming everyday accessories into powerful, secure payment tools with VegaPay technology.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="solution-card wow fadeInUp" data-wow-delay="0.2s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.1); height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="solution-image" style="height: 250px; overflow: hidden;">
                        <img src="{{ asset('homepage/INSP(6of113).jpg') }}" alt="SGR" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="solution-content p-4">
                        <h4 style="color: #ea2429;">SGR Tanzania</h4>
                        <p>Seamless travel payments with tokenized rewards, making commuting convenient and rewarding.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="solution-card wow fadeInUp" data-wow-delay="0.4s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.1); height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="solution-image" style="height: 250px; overflow: hidden;">
                        <img src="{{ asset('homepage/INSP(27of113).jpg') }}" alt="Zanzibar" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="solution-content p-4">
                        <h4 style="color: #ea2429;">Expanding to Zanzibar</h4>
                        <p>Bringing innovative payment solutions to the Islands, connecting businesses and people.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured Solutions Section End -->

<!-- CTA Section Start -->
<div class="cta-section" style="padding: 100px 0; background: linear-gradient(rgba(255,255,255,0.92), rgba(255,255,255,0.92)), url('{{ asset('images/payment-solutions/cta-payment-experience-premium.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-3">Ready to Transform Your Payment Experience?</h2>
                <p class="mb-0 lead">Choose the payment solution that fits your business needs and start accepting payments today with safe, secure & reliable infrastructure.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="{{ url('/contact') }}" class="btn-default" style="padding: 15px 40px; font-size: 1.1rem;">Contact Our Team</a>
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End -->

@endsection
