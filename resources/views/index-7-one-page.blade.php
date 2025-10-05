
@extends('layouts.layout8Onepage')
@section('title', 'Home Seven || Tolak || Tolak Laravel Template For It Solution & Business')
@php
    $css = '<!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="' . asset('assets/css/tolak-color-3.css') . '"/>';
            
@endphp
@section('content')

<x-strickyHeader/>

<!-- main-slider-start -->
<section class="main-slider-seven" id="home">
    <div class="main-slider-seven__carousel tolak-owl__carousel owl-carousel" data-owl-options='{
"loop": true,
"animateOut": "fadeOut",
"animateIn": "fadeIn",
"items": 1,
"autoplay": true,
"autoplayTimeout": 7000,
"smartSpeed": 1000,
"nav": false,
"navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
"dots": true,
"dotData": true,
"dotsData": true,
"margin": 0
}'>
        <div class="item" data-dot="<button>01</button>">
            <div class="main-slider-seven__item">
                <div class="main-slider-seven__bg" style="background-image: url(assets/images/backgrounds/slider-7-1.jpg);"></div>
                <div class="main-slider-seven__layer">
                    <img src="{{ asset("/assets/images/backgrounds/slider-7-layer-1.jpg") }}" alt="tolak">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6">
                            <div class="main-slider-seven__content">
                                <h2 class="main-slider-seven__title-one">Growth Business</h2><!-- slider-title-one -->
                                <h2 class="main-slider-seven__title-two">Solution</h2><!-- slider-title-two -->
                                <h2 class="main-slider-seven__title-three">Marketing Strategy</h2><!-- slider-title-three -->
                                <p class="main-slider-seven__text">
                                    We provide the most responsive and functional IT design for<br> companies and businesses worldwide.
                                </p><!-- slider-text -->
                                <div class="main-slider-seven__btn">
                                    <a href="{{ url("services") }}" class="tolak-btn-two tolak-btn-two--home-six main-slider-seven__btn__one">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>GET STARTED<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                </div>
                            </div><!-- slider-content -->
                        </div>
                    </div>
                </div>
                <div class="main-slider-seven__shape-one">
                    <img src="{{ asset("/assets/images/shapes/slider-7-shape-1.png") }}" alt="toalk">
                </div>
                <div class="main-slider-seven__shape-two">
                    <img src="{{ asset("/assets/images/shapes/slider-7-shape-2.png") }}" alt="toalk">
                </div>
            </div>
        </div><!-- item -->
        <div class="item" data-dot="<button>02</button>">
            <div class="main-slider-seven__item">
                <div class="main-slider-seven__bg" style="background-image: url(assets/images/backgrounds/slider-7-2.jpg);"></div>
                <div class="main-slider-seven__layer">
                    <img src="{{ asset("/assets/images/backgrounds/slider-7-layer-2.jpg") }}" alt="tolak">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6">
                            <div class="main-slider-seven__content">
                                <h2 class="main-slider-seven__title-one">Growth Business</h2><!-- slider-title-one -->
                                <h2 class="main-slider-seven__title-two">Solution</h2><!-- slider-title-two -->
                                <h2 class="main-slider-seven__title-three">Marketing Strategy</h2><!-- slider-title-three -->
                                <p class="main-slider-seven__text">
                                    We provide the most responsive and functional IT design for<br> companies and businesses worldwide.
                                </p><!-- slider-text -->
                                <div class="main-slider-seven__btn">
                                    <a href="{{ url("services") }}" class="tolak-btn-two tolak-btn-two--home-six main-slider-seven__btn__one">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>GET STARTED<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                </div>
                            </div><!-- slider-content -->
                        </div>
                    </div>
                </div>
                <div class="main-slider-seven__shape-one">
                    <img src="{{ asset("/assets/images/shapes/slider-7-shape-1.png") }}" alt="toalk">
                </div>
                <div class="main-slider-seven__shape-two">
                    <img src="{{ asset("/assets/images/shapes/slider-7-shape-2.png") }}" alt="toalk">
                </div>
            </div>
        </div><!-- item -->
        <div class="item" data-dot="<button>03</button>">
            <div class="main-slider-seven__item">
                <div class="main-slider-seven__bg" style="background-image: url(assets/images/backgrounds/slider-7-3.jpg);"></div>
                <div class="main-slider-seven__layer">
                    <img src="{{ asset("/assets/images/backgrounds/slider-7-layer-3.jpg") }}" alt="tolak">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6">
                            <div class="main-slider-seven__content">
                                <h2 class="main-slider-seven__title-one">Growth Business</h2><!-- slider-title-one -->
                                <h2 class="main-slider-seven__title-two">Solution</h2><!-- slider-title-two -->
                                <h2 class="main-slider-seven__title-three">Marketing Strategy</h2><!-- slider-title-three -->
                                <p class="main-slider-seven__text">
                                    We provide the most responsive and functional IT design for<br> companies and businesses worldwide.
                                </p><!-- slider-text -->
                                <div class="main-slider-seven__btn">
                                    <a href="{{ url("services") }}" class="tolak-btn-two tolak-btn-two--home-six main-slider-seven__btn__one">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>GET STARTED<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                </div>
                            </div><!-- slider-content -->
                        </div>
                    </div>
                </div>
                <div class="main-slider-seven__shape-one">
                    <img src="{{ asset("/assets/images/shapes/slider-7-shape-1.png") }}" alt="toalk">
                </div>
                <div class="main-slider-seven__shape-two">
                    <img src="{{ asset("/assets/images/shapes/slider-7-shape-2.png") }}" alt="toalk">
                </div>
            </div>
        </div><!-- item -->
    </div>
</section>
<!-- main-slider-end -->

<!-- CTA Start -->
<section class="cta-ten">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 wow fadeInUp" data-wow-delay="00ms">
                <div class="progress-box">
                    <div class="graph-outer">
                        <input type="text" class="dial" data-fgColor="#fff" data-bgColor="#020403" data-width="138" data-height="138" data-linecap="normal" value="65">
                        <div class="inner-text count-box">
                            <span class="count-text" data-stop="65" data-speed="2000"></span><span class="count-Parsent">%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="100ms">
                <div class="cta-ten__content">
                    <h2 class="cta-ten__content__title">
                        We Provide More Details Let Me Know Solution<br> What You Need Help
                    </h2>
                    <div class="cta-ten__box">
                        <div class="cta-ten__box__icon"><span class="tolak-icons-two-sign-in-alt1"></span></div>
                        Technology is a broad category encompassing nformation<br> technology and the application of technology.
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-center justify-content-end wow fadeInUp" data-wow-delay="200ms">
                <a href="{{ url("contact") }}" class="tolak-btn-two tolak-btn-two--home-seven">
                    <span class="tolak-btn-two__left-star"></span>
                    <span>Contact Us<i class="tolak-icons-two-arrow-right-short"></i></span>
                    <span class="tolak-btn-two__right-star"></span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- CTA End -->

<!-- Feature Start -->
<section class="featurer-six">
    <div class="container">
        <div class="sec-title-four text-center">

            <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>OUR Best features<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

            <h3 class="sec-title-four__title">We Are Features Digital Solutions</h3><!-- /.sec-title-four__title -->
        </div><!-- /.sec-title-four -->
        <div class="row gutter-y-30">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="featurer-six__item">
                    <div class="featurer-six__item__hover" style="background-image: url(assets/images/resources/feature-6-1.jpg);"></div>
                    <div class="featurer-six__item__icon">
                        <span class="tolak-icons-two-smart-grid"></span>
                    </div>
                    <h4 class="featurer-six__item__title">Technological<br> Solutions</h4>
                </div><!-- feature-item -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="featurer-six__item">
                    <div class="featurer-six__item__hover" style="background-image: url(assets/images/resources/feature-6-1.jpg);"></div>
                    <div class="featurer-six__item__icon">
                        <span class="tolak-icons-two-solutions-three"></span>
                    </div>
                    <h4 class="featurer-six__item__title">Operational<br> Efficiency</h4>
                </div><!-- feature-item -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="featurer-six__item">
                    <div class="featurer-six__item__hover" style="background-image: url(assets/images/resources/feature-6-1.jpg);"></div>
                    <div class="featurer-six__item__icon">
                        <span class="tolak-icons-two-diagram"></span>
                    </div>
                    <h4 class="featurer-six__item__title">Financial<br> Management</h4>
                </div><!-- feature-item -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="featurer-six__item">
                    <div class="featurer-six__item__hover" style="background-image: url(assets/images/resources/feature-6-1.jpg);"></div>
                    <div class="featurer-six__item__icon">
                        <span class="tolak-icons-two-algorithm"></span>
                    </div>
                    <h4 class="featurer-six__item__title">Business<br> Resources</h4>
                </div><!-- feature-item -->
            </div>
        </div>
    </div>
</section>
<!-- Feature End -->

<section class="about-seven" id="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="about-seven__content">
                    <div class="sec-title-three text-left">

                        <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR ABOUT COMPANY<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                        <h3 class="sec-title-three__title">Our Experience About 29+ Years Experience And Challenge!</h3><!-- /.sec-title-three__title -->
                    </div><!-- /.sec-title-three -->
                    <p class="about-seven__content__text">
                        Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor
                        majority have in some we form, by injected humour solution.
                    </p>
                    <ul class="about-seven__content__list">
                        <li>
                            <i class="tolak-icons-two-gear"></i>
                            Network Infrastructure software
                        </li>
                        <li>
                            <i class="tolak-icons-two-flow-chart"></i>
                            Business Expert Team Member
                        </li>
                    </ul>
                    <p class="about-seven__content__text-two">
                        <span>BUSINESS :</span> Treating Cancer With AI-Powered Imaging Healthcare Best Solution Company <a href="{{ url("about") }}">SEE MORE</a>
                    </p>
                </div><!-- /.about__content -->
            </div><!-- /.col-xl-6 -->
            <div class="col-xl-6">
                <div class="about-seven__image count-box">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-seven__image__one wow fadeInUp" data-wow-delay="00ms">
                                <img src="{{ asset("/assets/images/resources/about-7-1.jpg") }}" alt="tolak">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-seven__image__two wow fadeInUp" data-wow-delay="100ms">
                                <img src="{{ asset("/assets/images/resources/about-7-2.jpg") }}" alt="tolak">
                            </div>
                        </div>
                    </div>
                    <div class="about-seven__image__bg-shape"></div>
                    <div class="about-seven__image__experiance">
                        <h3 class="about-seven__image__experiance__count"><span class="count-text" data-stop="25" data-speed="1500"></span>+</h3><!-- /.about-seven__image__experiance__number -->
                        years experience
                    </div>
                </div>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-seven -->

<!-- Service Start -->
<section class="service-five" id="services">
    <div class="container">
        <div class="sec-title-three text-center">

            <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR BEST SERVICE<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

            <h3 class="sec-title-three__title">We Are Service Your Business</h3><!-- /.sec-title-three__title -->
        </div><!-- /.sec-title-three -->
        <div class="service-five__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
    "items": 1,
    "margin": 30,
    "loop": false,
    "smartSpeed": 700,
    "nav": false,
    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
    "dots": false,
    "autoplay": false,
    "responsive": {
        "0": {
            "items": 1
        },
        "768": {
            "items": 2
        },
        "992": {
            "items": 3
        }
    }
    }'>
            <div class="item">
                <div class="service-five__item text-center">
                    <div class="service-five__item__image">
                        <img src="{{ asset("/assets/images/resources/service-5-1.jpg") }}" alt="tolak">
                    </div>
                    <div class="service-five__item__content">
                        <div class="service-five__item__icon">
                            <span class="tolak-icons-two-solution-1"></span>
                        </div><!-- /.service-icon -->
                        <h3 class="service-five__item__title">
                            <a href="{{ url("business-marketing") }}">Operational Efficiency</a>
                        </h3><!-- /.service-title -->
                        <p class="service-five__item__text">
                            Solution the we create this business Solution
                        </p><!-- /.service-text -->
                    </div>
                </div><!-- /.service-card-one -->
            </div>
            <div class="item">
                <div class="service-five__item text-center">
                    <div class="service-five__item__image">
                        <img src="{{ asset("/assets/images/resources/service-5-2.jpg") }}" alt="tolak">
                    </div>
                    <div class="service-five__item__content">
                        <div class="service-five__item__icon">
                            <span class=" tolak-icons-two-solutions-three"></span>
                        </div><!-- /.service-icon -->
                        <h3 class="service-five__item__title">
                            <a href="{{ url("business-solution") }}">Business Solutions</a>
                        </h3><!-- /.service-title -->
                        <p class="service-five__item__text">
                            Solution the we create this business Solution
                        </p><!-- /.service-text -->
                    </div>
                </div><!-- /.service-card-one -->
            </div>
            <div class="item">
                <div class="service-five__item text-center">
                    <div class="service-five__item__image">
                        <img src="{{ asset("/assets/images/resources/service-5-3.jpg") }}" alt="tolak">
                    </div>
                    <div class="service-five__item__content">
                        <div class="service-five__item__icon">
                            <span class="tolak-icons-two-cybersecurity"></span>
                        </div><!-- /.service-icon -->
                        <h3 class="service-five__item__title">
                            <a href="{{ url("technology-services") }}">Digital Of Agency</a>
                        </h3><!-- /.service-title -->
                        <p class="service-five__item__text">
                            Solution the we create this business Solution
                        </p><!-- /.service-text -->
                    </div>
                </div><!-- /.service-card-one -->
            </div>
        </div>
    </div>
</section>
<!-- Service End -->

<section class="why-choose-five">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="why-choose-five__image wow slideInLeft">
                    <img src="{{ asset("/assets/images/resources/why-choose-5-1.jpg") }}" alt="tolak">
                </div><!-- /.why-choose-five__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="why-choose-five__content">
                    <div class="sec-title-four text-left">

                        <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>OUR CHOOSE MORE<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

                        <h3 class="sec-title-four__title">We Preparing For Your Success Choose Best Solutions.</h3><!-- /.sec-title-four__title -->
                    </div><!-- /.sec-title-four -->
                    <p class="why-choose-five__content__text">
                        Business tailored design, management & support services Business business agency e lit, sed do eiusmod tempor
                        majority have in some we form, by injected humour solution.
                    </p>
                    <div class="row gutter-y-30">
                        <div class="col-md-4">
                            <div class="why-choose-five__box">
                                <div class="why-choose-five__box__icon"><i class="tolak-icons-two-deal"></i></div>
                                <h3 class="why-choose-five__box__title">Technological Solutions</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-choose-five__box">
                                <div class="why-choose-five__box__icon"><i class="tolak-icons-two-solutions-three"></i></div>
                                <h3 class="why-choose-five__box__title">Financial Management</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-choose-five__box">
                                <div class="why-choose-five__box__icon"><i class="tolak-icons-two-smart-grid"></i></div>
                                <h3 class="why-choose-five__box__title">Product Development</h3>
                            </div>
                        </div>
                    </div>
                    <ul class="why-choose-five__list">
                        <li>
                            <i class="tolak-icons-two-arrow-circle-right"></i>
                            <span>Team Support</span>
                        </li>
                        <li>
                            <i class="tolak-icons-two-arrow-circle-right"></i>
                            <span>Business Management</span>
                        </li>
                        <li>
                            <i class="tolak-icons-two-arrow-circle-right"></i>
                            <span>Business tailored</span>
                        </li>
                        <li>
                            <i class="tolak-icons-two-arrow-circle-right"></i>
                            <span>Consultancy & solution</span>
                        </li>
                    </ul>
                    <a href="{{ url("about") }}" class="tolak-btn-two tolak-btn-two--home-seven">
                        <span class="tolak-btn-two__left-star"></span>
                        <span>Read More<i class="tolak-icons-two-arrow-right-short"></i></span>
                        <span class="tolak-btn-two__right-star"></span>
                    </a>
                </div><!-- /.why-choose-five__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.why-choose-five -->

<!-- CTA Start -->
<section class="cta-eleven">
    <div class="container">
        <div class="cta-eleven__inner">
            <div class="row">
                <div class="col-lg-7 d-flex align-items-center wow fadeInLeft" data-wow-delay="00ms">
                    <div class="cta-eleven__content">
                        <h2 class="cta-eleven__content__title">We help you with any questions or information you need What do you need assistance with?</h2>
                        <ul class="cta-eleven__box">
                            <li>
                                <div class="cta-eleven__box__icon"><span class="tolak-icons-two-phone-call"></span></div>
                                <h4 class="cta-eleven__box__title">Get Contact Now</h4>
                                <p class="cta-eleven__box__text"><a href="{{ url("tel:+11234751328") }}">+11234 751 328</a></p>
                            </li>
                            <li>
                                <div class="cta-eleven__box__icon"><span class="tolak-icons-two-mail"></span></div>
                                <h4 class="cta-eleven__box__title">Sent Email</h4>
                                <p class="cta-eleven__box__text"><a href="{{ url("mailto:tolak@envato.com") }}">tolak@envato.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="100ms">
                    <div class="cta-eleven__image">
                        <div class="cta-eleven__image__shape" style="background-image: url(assets/images/shapes/cta-11-shape-1.png);"></div>
                        <img src="{{ asset("/assets/images/resources/cta-11-1.jpg") }}" alt="tolak">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA End -->

<section class="project-four" id="project">
    <div class="container">
        <div class="sec-title-three text-center">

            <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR BEST PROJECTS<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

            <h3 class="sec-title-three__title">Some Popular Projects studies</h3><!-- /.sec-title-three__title -->
        </div><!-- /.sec-title-three -->
        <div class="project-four__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav tolak-owl__carousel--with-shadow owl-carousel owl-theme" data-owl-options='{
    "items": 1,
    "margin": 30,
    "loop": false,
    "smartSpeed": 700,
    "nav": false,
    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
    "dots": false,
    "autoplay": false,
    "responsive": {
        "0": {
            "items": 1
        },
        "768": {
            "items": 2
        },
        "992": {
            "items": 3
        },
        "1300": {
            "items": 4
        }
    }
    }'>
            <div class="item">
                <div class="project-four__item">
                    <div class="project-four__item__image">
                        <img src="{{ asset("/assets/images/project/project-4-1.jpg") }}" alt="tolak">
                    </div>
                    <div class="project-four__item__content">
                        <h3 class="project-four__item__title"><a href="{{ url("project-details") }}">Market Solution This Consulting Projects</a></h3>
                        <p class="project-four__item__text">Business tailored design of this in some we form solution.</p>
                        <a href="{{ url("project-details") }}" class="project-four__item__rm"><span class="tolak-icons-two-arrow-right-short"></span></a>
                    </div>
                </div><!-- /.project-four__item -->
            </div><!-- /.item -->
            <div class="item">
                <div class="project-four__item">
                    <div class="project-four__item__image">
                        <img src="{{ asset("/assets/images/project/project-4-2.jpg") }}" alt="tolak">
                    </div>
                    <div class="project-four__item__content">
                        <h3 class="project-four__item__title"><a href="{{ url("project-details") }}">Market Solution This Consulting Projects</a></h3>
                        <p class="project-four__item__text">Business tailored design of this in some we form solution.</p>
                        <a href="{{ url("project-details") }}" class="project-four__item__rm"><span class="tolak-icons-two-arrow-right-short"></span></a>
                    </div>
                </div><!-- /.project-four__item -->
            </div><!-- /.item -->
            <div class="item">
                <div class="project-four__item">
                    <div class="project-four__item__image">
                        <img src="{{ asset("/assets/images/project/project-4-3.jpg") }}" alt="tolak">
                    </div>
                    <div class="project-four__item__content">
                        <h3 class="project-four__item__title"><a href="{{ url("project-details") }}">Market Solution This Consulting Projects</a></h3>
                        <p class="project-four__item__text">Business tailored design of this in some we form solution.</p>
                        <a href="{{ url("project-details") }}" class="project-four__item__rm"><span class="tolak-icons-two-arrow-right-short"></span></a>
                    </div>
                </div><!-- /.project-four__item -->
            </div><!-- /.item -->
            <div class="item">
                <div class="project-four__item">
                    <div class="project-four__item__image">
                        <img src="{{ asset("/assets/images/project/project-4-4.jpg") }}" alt="tolak">
                    </div>
                    <div class="project-four__item__content">
                        <h3 class="project-four__item__title"><a href="{{ url("project-details") }}">Market Solution This Consulting Projects</a></h3>
                        <p class="project-four__item__text">Business tailored design of this in some we form solution.</p>
                        <a href="{{ url("project-details") }}" class="project-four__item__rm"><span class="tolak-icons-two-arrow-right-short"></span></a>
                    </div>
                </div><!-- /.project-four__item -->
            </div><!-- /.item -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.project-four -->

<div class="client-carousel client-carousel--six">
    <h5 class="client-carousel--six__title">
        <span class="client-carousel--six__title__border"></span>
        <span class="client-carousel--six__title__bg">More Brands Work</span>
        <span class="client-carousel--six__title__border"></span>
    </h5>
    <div class="container">
        <div class="client-carousel__one tolak-owl__carousel owl-theme owl-carousel" data-owl-options='{
    "items": 5,
    "margin": 30,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": 6000,
    "nav":false,
    "dots":false,
    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
    "responsive":{
        "0":{
            "items":1
        },
        "360":{
            "items":2
        },
        "575":{
            "items":3
        },
        "768":{
            "items":3
        },
        "992":{
            "items": 4
        },
        "1200":{
            "items": 5
        }
    }
    }'>
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-3-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-3-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-3-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-3-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-3-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-3-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-3-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-3-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-3-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-3-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-3-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-3-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-3-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-3-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-3-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-3-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-3-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-3-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-3-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-3-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
        </div><!-- /.thm-owl__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->

<section class="testimonials-five" id="testimonial">
    <div class="testimonials-five__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/testimonial-bg-4.jpg);"></div>
    <div class="testimonials-five__shape" style="background-image: url(assets/images/shapes/testimonial-bg-4-shape.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-title-three text-left">

                    <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR Testimonials<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                    <h3 class="sec-title-three__title">The Positive Experiences Of Your Clients This Customers.</h3><!-- /.sec-title-three__title -->
                </div><!-- /.sec-title-three -->
            </div>
            <div class="col-lg-6">
                <p class="testimonials-five__text">
                    Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor
                    majority have in some we form, by injected humour s olution.
                </p>
            </div>
        </div>
        <div class="testimonials-five__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
    "items": 1,
    "margin": 30,
    "loop": false,
    "smartSpeed": 700,
    "nav": false,
    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
    "dots": true,
    "autoplay": false,
    "responsive": {
        "0": {
            "items": 1
        },
        "992": {
            "items": 2
        }
    }
    }'>
            <div class="item">
                <div class="testimonials-five__item wow fadeInUp" data-wow-delay="00ms">
                    <div class="testimonials-five__item__image">
                        <img src="{{ asset("/assets/images/resources/testi-5-1.jpg") }}" alt="tolak">
                        <div class="testimonials-five__item__quote">
                            <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-four.png") }}" alt="quote">
                        </div><!-- /.testimonials-five__item__quote -->
                    </div><!-- /.testimonials-five__item__image -->
                    <div class="testimonials-five__item__rating">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                    </div><!-- /.testimonials-five__item__rating -->
                    <div class="testimonials-five__item__content">
                        Business design, management & testimonial business agency elit, eiusmod temporae in some we form, by injected solution.
                    </div><!-- /.testimonials-five__item__content -->
                    <h3 class="testimonials-five__item__name">
                        Doris Evans
                    </h3><!-- /.testimonials-five__item__name -->
                    <p class="testimonials-five__item__designation">Founder</p><!-- /.testimonials-five__item__designation -->
                    <div class="testimonials-five__item__triangle"></div><!-- /.testimonials-five__item__triangle -->
                </div><!-- /.testimonials-five__item -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-five__item wow fadeInUp" data-wow-delay="100ms">
                    <div class="testimonials-five__item__image">
                        <img src="{{ asset("/assets/images/resources/testi-5-2.jpg") }}" alt="tolak">
                        <div class="testimonials-five__item__quote">
                            <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-four.png") }}" alt="quote">
                        </div><!-- /.testimonials-five__item__quote -->
                    </div><!-- /.testimonials-five__item__image -->
                    <div class="testimonials-five__item__rating">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                    </div><!-- /.testimonials-five__item__rating -->
                    <div class="testimonials-five__item__content">
                        Business design, management & testimonial business agency elit, eiusmod temporae in some we form, by injected solution.
                    </div><!-- /.testimonials-five__item__content -->
                    <h3 class="testimonials-five__item__name">
                        Roman Boris
                    </h3><!-- /.testimonials-five__item__name -->
                    <p class="testimonials-five__item__designation">Manager</p><!-- /.testimonials-five__item__designation -->
                    <div class="testimonials-five__item__triangle"></div><!-- /.testimonials-five__item__triangle -->
                </div><!-- /.testimonials-five__item -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-five__item wow fadeInUp" data-wow-delay="00ms">
                    <div class="testimonials-five__item__image">
                        <img src="{{ asset("/assets/images/resources/testi-5-1.jpg") }}" alt="tolak">
                        <div class="testimonials-five__item__quote">
                            <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-four.png") }}" alt="quote">
                        </div><!-- /.testimonials-five__item__quote -->
                    </div><!-- /.testimonials-five__item__image -->
                    <div class="testimonials-five__item__rating">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                    </div><!-- /.testimonials-five__item__rating -->
                    <div class="testimonials-five__item__content">
                        Business design, management & testimonial business agency elit, eiusmod temporae in some we form, by injected solution.
                    </div><!-- /.testimonials-five__item__content -->
                    <h3 class="testimonials-five__item__name">
                        Doris Evans
                    </h3><!-- /.testimonials-five__item__name -->
                    <p class="testimonials-five__item__designation">Founder</p><!-- /.testimonials-five__item__designation -->
                    <div class="testimonials-five__item__triangle"></div><!-- /.testimonials-five__item__triangle -->
                </div><!-- /.testimonials-five__item -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-five__item wow fadeInUp" data-wow-delay="100ms">
                    <div class="testimonials-five__item__image">
                        <img src="{{ asset("/assets/images/resources/testi-5-2.jpg") }}" alt="tolak">
                        <div class="testimonials-five__item__quote">
                            <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-four.png") }}" alt="quote">
                        </div><!-- /.testimonials-five__item__quote -->
                    </div><!-- /.testimonials-five__item__image -->
                    <div class="testimonials-five__item__rating">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                    </div><!-- /.testimonials-five__item__rating -->
                    <div class="testimonials-five__item__content">
                        Business design, management & testimonial business agency elit, eiusmod temporae in some we form, by injected solution.
                    </div><!-- /.testimonials-five__item__content -->
                    <h3 class="testimonials-five__item__name">
                        Roman Boris
                    </h3><!-- /.testimonials-five__item__name -->
                    <p class="testimonials-five__item__designation">Manager</p><!-- /.testimonials-five__item__designation -->
                    <div class="testimonials-five__item__triangle"></div><!-- /.testimonials-five__item__triangle -->
                </div><!-- /.testimonials-five__item -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-five__item wow fadeInUp" data-wow-delay="00ms">
                    <div class="testimonials-five__item__image">
                        <img src="{{ asset("/assets/images/resources/testi-5-1.jpg") }}" alt="tolak">
                        <div class="testimonials-five__item__quote">
                            <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-four.png") }}" alt="quote">
                        </div><!-- /.testimonials-five__item__quote -->
                    </div><!-- /.testimonials-five__item__image -->
                    <div class="testimonials-five__item__rating">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                    </div><!-- /.testimonials-five__item__rating -->
                    <div class="testimonials-five__item__content">
                        Business design, management & testimonial business agency elit, eiusmod temporae in some we form, by injected solution.
                    </div><!-- /.testimonials-five__item__content -->
                    <h3 class="testimonials-five__item__name">
                        Doris Evans
                    </h3><!-- /.testimonials-five__item__name -->
                    <p class="testimonials-five__item__designation">Founder</p><!-- /.testimonials-five__item__designation -->
                    <div class="testimonials-five__item__triangle"></div><!-- /.testimonials-five__item__triangle -->
                </div><!-- /.testimonials-five__item -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-five__item wow fadeInUp" data-wow-delay="100ms">
                    <div class="testimonials-five__item__image">
                        <img src="{{ asset("/assets/images/resources/testi-5-2.jpg") }}" alt="tolak">
                        <div class="testimonials-five__item__quote">
                            <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-four.png") }}" alt="quote">
                        </div><!-- /.testimonials-five__item__quote -->
                    </div><!-- /.testimonials-five__item__image -->
                    <div class="testimonials-five__item__rating">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                    </div><!-- /.testimonials-five__item__rating -->
                    <div class="testimonials-five__item__content">
                        Business design, management & testimonial business agency elit, eiusmod temporae in some we form, by injected solution.
                    </div><!-- /.testimonials-five__item__content -->
                    <h3 class="testimonials-five__item__name">
                        Roman Boris
                    </h3><!-- /.testimonials-five__item__name -->
                    <p class="testimonials-five__item__designation">Manager</p><!-- /.testimonials-five__item__designation -->
                    <div class="testimonials-five__item__triangle"></div><!-- /.testimonials-five__item__triangle -->
                </div><!-- /.testimonials-five__item -->
            </div><!-- /.item -->
        </div><!-- /.testimonials-five__carousel -->
    </div><!-- /.container -->
</section><!-- /.testimonials-five -->

<section class="funfact-four" id="funfact">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-lg-6">
                <div class="funfact-four__content">
                    <div class="sec-title-three text-left">

                        <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR BEST COUNTER<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                        <h3 class="sec-title-three__title">Our penetration Counter<br> Team Uses an industry</h3><!-- /.sec-title-three__title -->
                    </div><!-- /.sec-title-three -->
                    <p class="funfact-four__content__text">
                        Business tailored design, management & support services Business business agency e lit, sed do eiusmod
                        tempor majority have in some we form, by injected humour solution.
                    </p>
                    <img src="{{ asset("/assets/images/resources/funfact-4-1.jpg") }}" alt="tolak">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="funfact-four__item count-box wow fadeInUp" data-wow-delay="00ms">
                            <div class="funfact-four__item__bg" style="background-image: url(assets/images/shapes/funfact-4-shape.png);"></div>
                            <div class="funfact-four__item__icon"><i class="tolak-icons-two-folder-management"></i></div><!-- /.funfact-four__icon -->
                            <h3 class="funfact-four__item__count"><span class="count-text" data-stop="3655" data-speed="1500"></span>+</h3>
                            <!-- /.funfact-four__count -->
                            <p class="funfact-four__item__text">Projects Company</p><!-- /.funfact-four__text -->
                        </div><!-- /.funfact-four__item -->
                        <div class="funfact-four__item count-box">
                            <div class="funfact-four__item__bg" style="background-image: url(assets/images/shapes/funfact-4-shape.png);"></div>
                            <div class="funfact-four__item__icon"><i class="tolak-icons-two-team-work"></i></div><!-- /.funfact-four__icon -->
                            <h3 class="funfact-four__item__count"><span class="count-text" data-stop="965" data-speed="1500"></span>k+</h3>
                            <!-- /.funfact-four__count -->
                            <p class="funfact-four__item__text">Team Support</p><!-- /.funfact-four__text -->
                        </div><!-- /.funfact-four__item -->
                    </div><!-- /.item -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="funfact-four__item funfact-four__item--mt30 count-box">
                            <div class="funfact-four__item__bg" style="background-image: url(assets/images/shapes/funfact-4-shape.png);"></div>
                            <div class="funfact-four__item__icon"><i class="tolak-icons-two-rating-stars"></i></div><!-- /.funfact-four__icon -->
                            <h3 class="funfact-four__item__count"><span class="count-text" data-stop="852" data-speed="1500"></span>+</h3>
                            <!-- /.funfact-four__count -->
                            <p class="funfact-four__item__text">Happy Client</p><!-- /.funfact-four__text -->
                        </div><!-- /.funfact-four__item -->
                        <div class="funfact-four__item count-box">
                            <div class="funfact-four__item__bg" style="background-image: url(assets/images/shapes/funfact-4-shape.png);"></div>
                            <div class="funfact-four__item__icon"><i class="tolak-icons-two-medal"></i></div><!-- /.funfact-four__icon -->
                            <h3 class="funfact-four__item__count"><span class="count-text" data-stop="250" data-speed="1500"></span>k+</h3>
                            <!-- /.funfact-four__count -->
                            <p class="funfact-four__item__text">Awards Winner</p><!-- /.funfact-four__text -->
                        </div><!-- /.funfact-four__item -->
                    </div><!-- /.item -->
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.funfact-four -->

<section class="solution-two">
    <div class="solution-two__bg" style="background-image: url(assets/images/backgrounds/solution-bg-2.jpg);"></div>
    <div class="container">
        <div class="sec-title-four text-center">

            <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>OUR COMPANY SOLUTION<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

            <h3 class="sec-title-four__title">Technology of Our Apps Solution</h3><!-- /.sec-title-four__title -->
        </div><!-- /.sec-title-four -->
        <div class="row gutter-y-30">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="solution-two__box">
                    <h3 class="solution-two__box__title"><i class="tolak-icons-two-gear"></i>Digital Marketing</h3>
                    <p class="solution-two__box__text">
                        Solution the we create this company for service business solution
                    </p>
                    <a class="solution-two__box__rm" href="{{ url("business-marketing") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                </div><!-- /.box -->
                <div class="solution-two__box">
                    <h3 class="solution-two__box__title"><i class="tolak-icons-two-algorithm"></i>Data Management</h3>
                    <p class="solution-two__box__text">
                        Solution the we create this company for service business solution
                    </p>
                    <a class="solution-two__box__rm" href="{{ url("business-solution") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                </div><!-- /.box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="solution-two__image">
                    <img src="{{ asset("/assets/images/resources/solution-2-1.jpg") }}" alt="tolak">
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="solution-two__box">
                    <h3 class="solution-two__box__title"><i class="tolak-icons-two-global-solution"></i>Great Specker</h3>
                    <p class="solution-two__box__text">
                        Solution the we create this company for service business solution
                    </p>
                    <a class="solution-two__box__rm" href="{{ url("business-marketing") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                </div><!-- /.box -->
                <div class="solution-two__box">
                    <h3 class="solution-two__box__title"><i class="tolak-icons-two-lightbulb-dollar"></i>App Development</h3>
                    <p class="solution-two__box__text">
                        Solution the we create this company for service business solution
                    </p>
                    <a class="solution-two__box__rm" href="{{ url("business-solution") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                </div><!-- /.box -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.solution-two -->

<section class="our-history">
    <div class="container">
        <div class="sec-title-four text-center">

            <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>OUR COMPANY hISTORY<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

            <h3 class="sec-title-four__title">Present Company History in PowerPoint</h3><!-- /.sec-title-four__title -->
        </div><!-- /.sec-title-four -->
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="our-history__item">
                    <div class="our-history__item__top">
                        <h3 class="our-history__item__number"></h3>
                        <p class="our-history__item__text">
                            Projects company support team stands ready to our reliable or assistance of best and technical
                        </p>
                    </div>
                    <h4 class="our-history__item__title">IT Consultant</h4>
                    <span class="our-history__item__date">02-08-2021</span>
                    <div class="our-history__item__year">2021</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="our-history__item">
                    <div class="our-history__item__top">
                        <h3 class="our-history__item__number"></h3>
                        <p class="our-history__item__text">
                            Projects company support team stands ready to our reliable or assistance of best and technical
                        </p>
                    </div>
                    <h4 class="our-history__item__title">Business Story</h4>
                    <span class="our-history__item__date">02-08-2022</span>
                    <div class="our-history__item__year">2022</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="our-history__item">
                    <div class="our-history__item__top">
                        <h3 class="our-history__item__number"></h3>
                        <p class="our-history__item__text">
                            Projects company support team stands ready to our reliable or assistance of best and technical
                        </p>
                    </div>
                    <h4 class="our-history__item__title">Solution Agency</h4>
                    <span class="our-history__item__date">02-08-2023</span>
                    <div class="our-history__item__year">2023</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="our-history__item">
                    <div class="our-history__item__top">
                        <h3 class="our-history__item__number"></h3>
                        <p class="our-history__item__text">
                            Projects company support team stands ready to our reliable or assistance of best and technical
                        </p>
                    </div>
                    <h4 class="our-history__item__title">Brand Strategy</h4>
                    <span class="our-history__item__date">02-08-2024</span>
                    <div class="our-history__item__year">2024</div>
                </div>
            </div>
        </div>
        <div class="our-history__border"></div>
    </div>
</section>

<section class="blog-six" id="blog">
    <div class="container">
        <div class="sec-title-four text-center">

            <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>Our Latest News<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

            <h3 class="sec-title-four__title">Trending IT Solution Blog & Tips</h3><!-- /.sec-title-four__title -->
        </div><!-- /.sec-title-four -->
        <div class="blog-two__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav tolak-owl__carousel--with-shadow owl-carousel owl-theme" data-owl-options='{
    "items": 1,
    "margin": 30,
    "loop": false,
    "smartSpeed": 700,
    "nav": false,
    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
    "dots": false,
    "autoplay": false,
    "responsive": {
        "0": {
            "items": 1
        },
        "768": {
            "items": 2
        },
        "992": {
            "items": 3
        }
    }
    }'>
            <div class="item">
                <div class="blog-card-six wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                    <div class="blog-card-six__image" style="background-image: url(assets/images/blog/blog-6-1.png);"></div>
                    <div class="blog-card-six__date">
                        24 <span>May</span>
                    </div><!-- /.blog-card-six__date -->
                    <ul class="list-unstyled blog-card-six__meta">
                        <li><i class="tolak-icons-two-user"></i>By: <a href="{{ url("blog-list-right") }}">Admin</a></li>
                        <li><i class="tolak-icons-two-comments"></i>Comments (2)</li>
                    </ul>
                    <h3 class="blog-card-six__title"><a href="{{ url("blog-details-right") }}">We Intrinsicly Incentivize Be Corporate Synergy</a></h3><!-- /.blog-card-six__title -->
                    <p class="blog-card-six__text">Business tailored design of company in some we form solution.</p><!-- /.blog-card-six__text -->
                    <a class="blog-card-six__rm" href="{{ url("blog-details-right") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                </div><!-- /.blog-card-six -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card-six wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="blog-card-six__image" style="background-image: url(assets/images/blog/blog-6-2.png);"></div>
                    <div class="blog-card-six__date">
                        03 <span>Jun</span>
                    </div><!-- /.blog-card-six__date -->
                    <ul class="list-unstyled blog-card-six__meta">
                        <li><i class="tolak-icons-two-user"></i>By: <a href="{{ url("blog-list-right") }}">Admin</a></li>
                        <li><i class="tolak-icons-two-comments"></i>Comments (2)</li>
                    </ul>
                    <h3 class="blog-card-six__title"><a href="{{ url("blog-details-right") }}">Continually Network Effective Bandwidth of Solution</a></h3><!-- /.blog-card-six__title -->
                    <p class="blog-card-six__text">Business tailored design of company in some we form solution.</p><!-- /.blog-card-six__text -->
                    <a class="blog-card-six__rm" href="{{ url("blog-details-right") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                </div><!-- /.blog-card-six -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card-six wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="blog-card-six__image" style="background-image: url(assets/images/blog/blog-6-3.png);"></div>
                    <div class="blog-card-six__date">
                        05 <span>Jul</span>
                    </div><!-- /.blog-card-six__date -->
                    <ul class="list-unstyled blog-card-six__meta">
                        <li><i class="tolak-icons-two-user"></i>By: <a href="{{ url("blog-list-right") }}">Admin</a></li>
                        <li><i class="tolak-icons-two-comments"></i>Comments (2)</li>
                    </ul>
                    <h3 class="blog-card-six__title"><a href="{{ url("blog-details-right") }}">Are you Looking For Business Solution Related</a></h3><!-- /.blog-card-six__title -->
                    <p class="blog-card-six__text">Business tailored design of company in some we form solution.</p><!-- /.blog-card-six__text -->
                    <a class="blog-card-six__rm" href="{{ url("blog-details-right") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                </div><!-- /.blog-card-six -->
            </div><!-- /.item -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-two -->

<!-- CTA Start -->
<section class="cta-nine">
    <div class="cta-nine__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/cta-9-bg.jpg);"></div>
    <div class="container">
        <h5 class="cta-nine__sub-title">Let's Try! Get Free Support</h5>
        <h2 class="cta-nine__title">
            Get Our Any Service And Contact Now!
        </h2>
        <p class="cta-nine__text">
            Business tailored design, management & support services Business <br>in some we form, by injected humour solution.
        </p>
        <div class="cta-nine__btn">
            <a href="{{ url("services") }}" class="tolak-btn-two tolak-btn-two--home-seven">
                <span class="tolak-btn-two__left-star"></span>
                <span>Learn More<i class="tolak-icons-two-arrow-right-short"></i></span>
                <span class="tolak-btn-two__right-star"></span>
            </a>
            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                <i class="tolak-icons-two-play"></i>WATCH VIDEO
            </a><!-- slider-video -->
        </div>
        <ul class="cta-nine__list">
            <li>
                <i class="tolak-icons-two-arrow-circle-right"></i>
                Business Solution
            </li>
            <li>
                <i class="tolak-icons-two-arrow-circle-right"></i>
                Team Support
            </li>
            <li>
                <i class="tolak-icons-two-arrow-circle-right"></i>
                Free 09-day trial
            </li>
        </ul>
    </div>
</section>
<!-- CTA End -->

<x-footerFive/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection