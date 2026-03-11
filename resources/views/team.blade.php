@extends('layouts.app')

@section('title', 'Our Team - InstantPayment Solutions')

@section('content')
<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('homepage/HGA_5249 (1).jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2 text-white" data-cursor="-opaque">Our Team</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">our team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Team Intro Section Start -->
<div class="team-intro" style="padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">Meet Our Team</h3>
                    <h2 class="text-anime-style-2 mb-4" data-cursor="-opaque">The People Behind Tanzania's Payment Revolution</h2>
                    <p class="lead wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; margin: 0 auto;">Our team is guided by a strong commitment to integrity, responsibility, and excellence. Together, with discipline and vision, we shape the future of payments and build meaningful solutions for the people we serve.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Intro Section End -->

<!-- Leadership Team Section Start -->
<div class="leadership-team" style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-5">
                    <h3 class="wow fadeInUp" style="color: #ea2429;">Leadership</h3>
                    <h2 class="text-anime-style-2 mb-3" data-cursor="-opaque">Executive Team</h2>
                    <p class="lead wow fadeInUp" data-wow-delay="0.2s">Experienced leaders driving innovation and growth</p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- CEO -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-card wow fadeInUp" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s; height: 100%;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="team-image" style="height: 350px; overflow: hidden; position: relative;">
                        <img src="{{ asset('homepage/INSP(25of113).jpg') }}" alt="CEO" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 30px 20px 20px;">
                            <h4 class="text-white mb-1">Chief Executive Officer</h4>
                            <p class="text-white mb-0" style="font-size: 0.9rem;">Leadership</p>
                        </div>
                    </div>
                    <div class="team-content" style="padding: 25px;">
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">Leading InstantPayment Solutions with a vision to transform Tanzania's digital payment landscape through innovation and strategic partnerships.</p>
                        <div class="team-social">
                            <a href="#" class="me-2" style="color: #ea2429; font-size: 1.2rem;"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="me-2" style="color: #ea2429; font-size: 1.2rem;"><i class="fab fa-twitter"></i></a>
                            <a href="#" style="color: #ea2429; font-size: 1.2rem;"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTO -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-card wow fadeInUp" data-wow-delay="0.2s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s; height: 100%;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="team-image" style="height: 350px; overflow: hidden; position: relative;">
                        <img src="{{ asset('homepage/INSP(27of113).jpg') }}" alt="CTO" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 30px 20px 20px;">
                            <h4 class="text-white mb-1">Chief Technology Officer</h4>
                            <p class="text-white mb-0" style="font-size: 0.9rem;">Technology</p>
                        </div>
                    </div>
                    <div class="team-content" style="padding: 25px;">
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">Overseeing all technology development, ensuring our payment infrastructure is secure, scalable, and meets the highest industry standards.</p>
                        <div class="team-social">
                            <a href="#" class="me-2" style="color: #ea2429; font-size: 1.2rem;"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="me-2" style="color: #ea2429; font-size: 1.2rem;"><i class="fab fa-twitter"></i></a>
                            <a href="#" style="color: #ea2429; font-size: 1.2rem;"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CFO -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-card wow fadeInUp" data-wow-delay="0.4s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s; height: 100%;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="team-image" style="height: 350px; overflow: hidden; position: relative;">
                        <img src="{{ asset('homepage/INSP(6of113).jpg') }}" alt="CFO" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 30px 20px 20px;">
                            <h4 class="text-white mb-1">Chief Financial Officer</h4>
                            <p class="text-white mb-0" style="font-size: 0.9rem;">Finance</p>
                        </div>
                    </div>
                    <div class="team-content" style="padding: 25px;">
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">Managing financial strategy and operations, ensuring sustainable growth and compliance with regulatory requirements across all markets.</p>
                        <div class="team-social">
                            <a href="#" class="me-2" style="color: #ea2429; font-size: 1.2rem;"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="me-2" style="color: #ea2429; font-size: 1.2rem;"><i class="fab fa-twitter"></i></a>
                            <a href="#" style="color: #ea2429; font-size: 1.2rem;"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Leadership Team Section End -->

<!-- Management Team Section Start -->
{{--<div class="management-team" style="padding: 100px 0;">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="section-title text-center mb-5">--}}
{{--                    <h3 class="wow fadeInUp" style="color: #ea2429;">Management</h3>--}}
{{--                    <h2 class="text-anime-style-2 mb-3" data-cursor="-opaque">Department Heads</h2>--}}
{{--                    <p class="lead wow fadeInUp" data-wow-delay="0.2s">Leading teams across operations, business development, and customer success</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <!-- Head of Operations -->--}}
{{--            <div class="col-lg-3 col-md-6 mb-4">--}}
{{--                <div class="team-card wow fadeInUp" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">--}}
{{--                    <div class="team-image" style="height: 280px; overflow: hidden; position: relative;">--}}
{{--                        <img src="{{ asset('homepage/HGA_5249 (1).jpg') }}" alt="Head of Operations" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">--}}
{{--                    </div>--}}
{{--                    <div class="team-content" style="padding: 20px; text-align: center;">--}}
{{--                        <h5 style="color: #333; margin-bottom: 5px;">Head of Operations</h5>--}}
{{--                        <p style="color: #ea2429; margin-bottom: 10px; font-size: 0.9rem;">Operations</p>--}}
{{--                        <p style="color: #666; font-size: 0.9rem; line-height: 1.6;">Ensuring seamless day-to-day operations and service delivery excellence.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Head of Business Development -->--}}
{{--            <div class="col-lg-3 col-md-6 mb-4">--}}
{{--                <div class="team-card wow fadeInUp" data-wow-delay="0.2s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">--}}
{{--                    <div class="team-image" style="height: 280px; overflow: hidden; position: relative;">--}}
{{--                        <img src="{{ asset('homepage/INSP(25of113).jpg') }}" alt="Head of Business Development" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">--}}
{{--                    </div>--}}
{{--                    <div class="team-content" style="padding: 20px; text-align: center;">--}}
{{--                        <h5 style="color: #333; margin-bottom: 5px;">Head of Business Development</h5>--}}
{{--                        <p style="color: #ea2429; margin-bottom: 10px; font-size: 0.9rem;">Business Development</p>--}}
{{--                        <p style="color: #666; font-size: 0.9rem; line-height: 1.6;">Driving growth through strategic partnerships and market expansion.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Head of Product -->--}}
{{--            <div class="col-lg-3 col-md-6 mb-4">--}}
{{--                <div class="team-card wow fadeInUp" data-wow-delay="0.4s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">--}}
{{--                    <div class="team-image" style="height: 280px; overflow: hidden; position: relative;">--}}
{{--                        <img src="{{ asset('homepage/INSP(27of113).jpg') }}" alt="Head of Product" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">--}}
{{--                    </div>--}}
{{--                    <div class="team-content" style="padding: 20px; text-align: center;">--}}
{{--                        <h5 style="color: #333; margin-bottom: 5px;">Head of Product</h5>--}}
{{--                        <p style="color: #ea2429; margin-bottom: 10px; font-size: 0.9rem;">Product Development</p>--}}
{{--                        <p style="color: #666; font-size: 0.9rem; line-height: 1.6;">Leading innovation and product strategy to meet market needs.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Head of Customer Success -->--}}
{{--            <div class="col-lg-3 col-md-6 mb-4">--}}
{{--                <div class="team-card wow fadeInUp" data-wow-delay="0.6s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">--}}
{{--                    <div class="team-image" style="height: 280px; overflow: hidden; position: relative;">--}}
{{--                        <img src="{{ asset('homepage/INSP(6of113).jpg') }}" alt="Head of Customer Success" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">--}}
{{--                    </div>--}}
{{--                    <div class="team-content" style="padding: 20px; text-align: center;">--}}
{{--                        <h5 style="color: #333; margin-bottom: 5px;">Head of Customer Success</h5>--}}
{{--                        <p style="color: #ea2429; margin-bottom: 10px; font-size: 0.9rem;">Customer Success</p>--}}
{{--                        <p style="color: #666; font-size: 0.9rem; line-height: 1.6;">Ensuring exceptional customer experiences and long-term satisfaction.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Head of Compliance -->--}}
{{--            <div class="col-lg-3 col-md-6 mb-4">--}}
{{--                <div class="team-card wow fadeInUp" data-wow-delay="0.8s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">--}}
{{--                    <div class="team-image" style="height: 280px; overflow: hidden; position: relative;">--}}
{{--                        <img src="{{ asset('homepage/HGA_5249 (1).jpg') }}" alt="Head of Compliance" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">--}}
{{--                    </div>--}}
{{--                    <div class="team-content" style="padding: 20px; text-align: center;">--}}
{{--                        <h5 style="color: #333; margin-bottom: 5px;">Head of Compliance</h5>--}}
{{--                        <p style="color: #ea2429; margin-bottom: 10px; font-size: 0.9rem;">Compliance & Risk</p>--}}
{{--                        <p style="color: #666; font-size: 0.9rem; line-height: 1.6;">Maintaining regulatory compliance and managing risk across operations.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Head of Marketing -->--}}
{{--            <div class="col-lg-3 col-md-6 mb-4">--}}
{{--                <div class="team-card wow fadeInUp" data-wow-delay="1s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">--}}
{{--                    <div class="team-image" style="height: 280px; overflow: hidden; position: relative;">--}}
{{--                        <img src="{{ asset('homepage/INSP(25of113).jpg') }}" alt="Head of Marketing" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">--}}
{{--                    </div>--}}
{{--                    <div class="team-content" style="padding: 20px; text-align: center;">--}}
{{--                        <h5 style="color: #333; margin-bottom: 5px;">Head of Marketing</h5>--}}
{{--                        <p style="color: #ea2429; margin-bottom: 10px; font-size: 0.9rem;">Marketing & Communications</p>--}}
{{--                        <p style="color: #666; font-size: 0.9rem; line-height: 1.6;">Building brand awareness and driving customer engagement strategies.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Head of Engineering -->--}}
{{--            <div class="col-lg-3 col-md-6 mb-4">--}}
{{--                <div class="team-card wow fadeInUp" data-wow-delay="1.2s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">--}}
{{--                    <div class="team-image" style="height: 280px; overflow: hidden; position: relative;">--}}
{{--                        <img src="{{ asset('homepage/INSP(27of113).jpg') }}" alt="Head of Engineering" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">--}}
{{--                    </div>--}}
{{--                    <div class="team-content" style="padding: 20px; text-align: center;">--}}
{{--                        <h5 style="color: #333; margin-bottom: 5px;">Head of Engineering</h5>--}}
{{--                        <p style="color: #ea2429; margin-bottom: 10px; font-size: 0.9rem;">Engineering</p>--}}
{{--                        <p style="color: #666; font-size: 0.9rem; line-height: 1.6;">Leading technical teams in building robust payment infrastructure.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Head of Security -->--}}
{{--            <div class="col-lg-3 col-md-6 mb-4">--}}
{{--                <div class="team-card wow fadeInUp" data-wow-delay="1.4s" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">--}}
{{--                    <div class="team-image" style="height: 280px; overflow: hidden; position: relative;">--}}
{{--                        <img src="{{ asset('homepage/INSP(6of113).jpg') }}" alt="Head of Security" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">--}}
{{--                    </div>--}}
{{--                    <div class="team-content" style="padding: 20px; text-align: center;">--}}
{{--                        <h5 style="color: #333; margin-bottom: 5px;">Head of Security</h5>--}}
{{--                        <p style="color: #ea2429; margin-bottom: 10px; font-size: 0.9rem;">Information Security</p>--}}
{{--                        <p style="color: #666; font-size: 0.9rem; line-height: 1.6;">Protecting systems and data with enterprise-grade security measures.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Management Team Section End -->--}}

{{--<!-- Our Culture Section Start -->--}}
{{--<div class="our-culture" style="padding: 100px 0; background: linear-gradient(135deg, rgba(234, 36, 41, 0.95), rgba(139, 0, 0, 0.95)), url('{{ asset('homepage/HGA_5249 (1).jpg') }}'); background-size: cover; background-position: center; color: white;">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="section-title text-center mb-5">--}}
{{--                    <h3 class="wow fadeInUp text-white">Our Culture</h3>--}}
{{--                    <h2 class="text-anime-style-2 text-white mb-4" data-cursor="-opaque">What Makes Us Different</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-md-6 mb-4">--}}
{{--                <div class="culture-item text-center wow fadeInUp" style="background: rgba(255,255,255,0.1); padding: 40px 30px; border-radius: 15px; backdrop-filter: blur(10px); height: 100%;">--}}
{{--                    <div class="icon-box mb-3">--}}
{{--                        <i class="fas fa-users fa-3x"></i>--}}
{{--                    </div>--}}
{{--                    <h4 class="text-white mb-3">Collaborative Environment</h4>--}}
{{--                    <p class="text-white mb-0">We work together across departments to achieve our shared goals, fostering innovation through teamwork and open communication.</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6 mb-4">--}}
{{--                <div class="culture-item text-center wow fadeInUp" data-wow-delay="0.2s" style="background: rgba(255,255,255,0.1); padding: 40px 30px; border-radius: 15px; backdrop-filter: blur(10px); height: 100%;">--}}
{{--                    <div class="icon-box mb-3">--}}
{{--                        <i class="fas fa-book-reader fa-3x"></i>--}}
{{--                    </div>--}}
{{--                    <h4 class="text-white mb-3">Continuous Learning</h4>--}}
{{--                    <p class="text-white mb-0">We invest in our team's growth through training, development programs, and opportunities to stay ahead of industry trends.</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6 mb-4">--}}
{{--                <div class="culture-item text-center wow fadeInUp" data-wow-delay="0.4s" style="background: rgba(255,255,255,0.1); padding: 40px 30px; border-radius: 15px; backdrop-filter: blur(10px); height: 100%;">--}}
{{--                    <div class="icon-box mb-3">--}}
{{--                        <i class="fas fa-balance-scale fa-3x"></i>--}}
{{--                    </div>--}}
{{--                    <h4 class="text-white mb-3">Work-Life Balance</h4>--}}
{{--                    <p class="text-white mb-0">We believe in maintaining healthy work-life balance, supporting our team's well-being and personal growth alongside professional success.</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6 mb-4">--}}
{{--                <div class="culture-item text-center wow fadeInUp" data-wow-delay="0.6s" style="background: rgba(255,255,255,0.1); padding: 40px 30px; border-radius: 15px; backdrop-filter: blur(10px); height: 100%;">--}}
{{--                    <div class="icon-box mb-3">--}}
{{--                        <i class="fas fa-lightbulb fa-3x"></i>--}}
{{--                    </div>--}}
{{--                    <h4 class="text-white mb-3">Innovation First</h4>--}}
{{--                    <p class="text-white mb-0">We encourage creative thinking and empower our team to propose and implement innovative solutions to payment challenges.</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6 mb-4">--}}
{{--                <div class="culture-item text-center wow fadeInUp" data-wow-delay="0.8s" style="background: rgba(255,255,255,0.1); padding: 40px 30px; border-radius: 15px; backdrop-filter: blur(10px); height: 100%;">--}}
{{--                    <div class="icon-box mb-3">--}}
{{--                        <i class="fas fa-medal fa-3x"></i>--}}
{{--                    </div>--}}
{{--                    <h4 class="text-white mb-3">Excellence & Accountability</h4>--}}
{{--                    <p class="text-white mb-0">We hold ourselves to the highest standards, taking ownership of our work and consistently delivering quality results.</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6 mb-4">--}}
{{--                <div class="culture-item text-center wow fadeInUp" data-wow-delay="1s" style="background: rgba(255,255,255,0.1); padding: 40px 30px; border-radius: 15px; backdrop-filter: blur(10px); height: 100%;">--}}
{{--                    <div class="icon-box mb-3">--}}
{{--                        <i class="fas fa-heart fa-3x"></i>--}}
{{--                    </div>--}}
{{--                    <h4 class="text-white mb-3">Impact Driven</h4>--}}
{{--                    <p class="text-white mb-0">We're motivated by the positive impact we create for Tanzania's financial ecosystem and the communities we serve.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Our Culture Section End -->--}}

<!-- Join Our Team Section Start -->
<div class="join-team" style="padding: 100px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="join-image wow fadeInUp">
                    <img src="{{ asset('homepage/INSP(25of113).jpg') }}" alt="Join Our Team" class="img-fluid rounded shadow-lg" style="border-radius: 20px !important;">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="join-content wow fadeInUp" data-wow-delay="0.2s" style="padding-left: 40px;">
                    <h3 style="color: #ea2429; font-size: 32px; margin-bottom: 20px;">Join Our Growing Team</h3>
                    <h2 class="mb-4" style="font-size: 42px;">Be Part of Tanzania's Payment Revolution</h2>

                    <p class="lead mb-4">We're always looking for talented, passionate individuals who share our vision of transforming Tanzania's digital payment ecosystem. If you're driven by innovation and want to make a real impact, we'd love to hear from you.</p>

                    <div class="join-benefits mb-4">
                        <div class="benefit-item d-flex align-items-center mb-3">
                            <div class="icon-box me-3" style="background: #fff5f5; color: #ea2429; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-briefcase fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Career Growth</h5>
                                <p class="mb-0 text-muted">Clear paths for advancement and professional development</p>
                            </div>
                        </div>

                        <div class="benefit-item d-flex align-items-center mb-3">
                            <div class="icon-box me-3" style="background: #fff5f5; color: #ea2429; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-hand-holding-usd fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Competitive Benefits</h5>
                                <p class="mb-0 text-muted">Market-leading compensation and comprehensive benefits</p>
                            </div>
                        </div>

                        <div class="benefit-item d-flex align-items-center">
                            <div class="icon-box me-3" style="background: #fff5f5; color: #ea2429; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-rocket fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Innovation Hub</h5>
                                <p class="mb-0 text-muted">Work with cutting-edge payment technologies</p>
                            </div>
                        </div>
                    </div>

                    <div class="join-buttons d-flex gap-3 flex-wrap">
                        <a href="{{ url('/contact') }}" class="btn-default" style="padding: 15px 40px; font-size: 1.1rem;">View Open Positions</a>
                        <a href="{{ url('/contact') }}" class="btn-default" style="padding: 15px 40px; font-size: 1.1rem; background: transparent; border: 2px solid #ea2429; color: #ea2429;">Send Your CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Join Our Team Section End -->

<!-- Team Stats Section Start -->
<div class="team-stats" style="padding: 80px 0; background: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-box text-center wow fadeInUp" style="padding: 30px;">
                    <div class="icon-box mb-3" style="display: inline-flex; align-items: center; justify-content: center; width: 80px; height: 80px; background: #fff5f5; border-radius: 50%; color: #ea2429;">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h2 style="color: #ea2429; font-size: 42px; font-weight: bold; margin-bottom: 10px;"><span class="counter">50</span>+</h2>
                    <p class="mb-0" style="color: #666; font-size: 1.1rem;">Team Members</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-box text-center wow fadeInUp" data-wow-delay="0.2s" style="padding: 30px;">
                    <div class="icon-box mb-3" style="display: inline-flex; align-items: center; justify-content: center; width: 80px; height: 80px; background: #fff5f5; border-radius: 50%; color: #ea2429;">
                        <i class="fas fa-graduation-cap fa-2x"></i>
                    </div>
                    <h2 style="color: #ea2429; font-size: 42px; font-weight: bold; margin-bottom: 10px;"><span class="counter">10</span>+</h2>
                    <p class="mb-0" style="color: #666; font-size: 1.1rem;">Departments</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-box text-center wow fadeInUp" data-wow-delay="0.4s" style="padding: 30px;">
                    <div class="icon-box mb-3" style="display: inline-flex; align-items: center; justify-content: center; width: 80px; height: 80px; background: #fff5f5; border-radius: 50%; color: #ea2429;">
                        <i class="fas fa-trophy fa-2x"></i>
                    </div>
                    <h2 style="color: #ea2429; font-size: 42px; font-weight: bold; margin-bottom: 10px;"><span class="counter">3</span>+</h2>
                    <p class="mb-0" style="color: #666; font-size: 1.1rem;">Years Excellence</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-box text-center wow fadeInUp" data-wow-delay="0.6s" style="padding: 30px;">
                    <div class="icon-box mb-3" style="display: inline-flex; align-items: center; justify-content: center; width: 80px; height: 80px; background: #fff5f5; border-radius: 50%; color: #ea2429;">
                        <i class="fas fa-globe-africa fa-2x"></i>
                    </div>
                    <h2 style="color: #ea2429; font-size: 42px; font-weight: bold; margin-bottom: 10px;"><span class="counter">5</span>+</h2>
                    <p class="mb-0" style="color: #666; font-size: 1.1rem;">Office Locations</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Stats Section End -->

@endsection
