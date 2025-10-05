
@extends('layouts.layout7')
@section('title', 'Home Six || Tolak || Tolak Laravel Template For It Solution & Business')
@php
    $css = '<!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="' . asset('assets/css/tolak-color-2.css') . '"/>';
            
@endphp
@section('content')

<x-strickyHeader/>

        <!-- main-slider-start -->
        <section class="main-slider-six">
            <div class="main-slider-six__carousel tolak-owl__carousel owl-carousel" data-owl-options='{
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
		"margin": 0
	    }'>
                <div class="item">
                    <div class="main-slider-six__item">
                        <div class="main-slider-six__bg" style="background-image: url(assets/images/shapes/slider-6-1.jpg);"></div>
                        <div class="main-slider-six__layer">
                            <img src="{{ asset("/assets/images/backgrounds/slider-6-layer-1.jpg") }}" alt="tolak">
                        </div>
                        <div class="container">
                            <div class="main-slider-six__content">
                                <h5 class="main-slider-six__sub-title">We Are Digital SOLUTION</h5>
                                <!-- slider-sub-title -->
                                <h2 class="main-slider-six__title">
                                    Awsome It <span>Solution <img src="{{ asset("/assets/images/shapes/slider-6-shape-4.png") }}" alt="toalk"></span><br> For Your Business.
                                </h2><!-- slider-title -->
                                <p class="main-slider-six__text">
                                    We provide the most responsive and functional IT design for<br> companies and businesses worldwide.
                                </p><!-- slider-text -->
                                <div class="main-slider-six__btn">
                                    <a href="{{ url("services") }}" class="tolak-btn-two tolak-btn-two--home-six main-slider-six__btn__one">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>GET STARTED<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                    <a href="{{ url("contact") }}" class="tolak-btn-two tolak-btn-two--home-six main-slider-six__btn__two">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>GET Quote<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                </div>
                            </div><!-- slider-content -->
                        </div>
                        <div class="main-slider-six__shape-one">
                            <img src="{{ asset("/assets/images/shapes/slider-6-shape-1.png") }}" alt="toalk">
                        </div>
                        <div class="main-slider-six__shape-two">
                            <img src="{{ asset("/assets/images/shapes/slider-6-shape-2.png") }}" alt="toalk">
                        </div>
                        <div class="main-slider-six__shape-three">
                            <img src="{{ asset("/assets/images/shapes/slider-6-shape-3.png") }}" alt="toalk">
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="main-slider-six__item">
                        <div class="main-slider-six__bg" style="background-image: url(assets/images/shapes/slider-6-1.jpg);"></div>
                        <div class="main-slider-six__layer">
                            <img src="{{ asset("/assets/images/backgrounds/slider-6-layer-2.jpg") }}" alt="tolak">
                        </div>
                        <div class="container">
                            <div class="main-slider-six__content">
                                <h5 class="main-slider-six__sub-title">We Are Digital SOLUTION</h5>
                                <!-- slider-sub-title -->
                                <h2 class="main-slider-six__title">
                                    Awsome It <span>Solution <img src="{{ asset("/assets/images/shapes/slider-6-shape-4.png") }}" alt="toalk"></span><br> For Your Business.
                                </h2><!-- slider-title -->
                                <p class="main-slider-six__text">
                                    We provide the most responsive and functional IT design for<br> companies and businesses worldwide.
                                </p><!-- slider-text -->
                                <div class="main-slider-six__btn">
                                    <a href="{{ url("services") }}" class="tolak-btn-two tolak-btn-two--home-six main-slider-six__btn__one">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>GET STARTED<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                    <a href="{{ url("contact") }}" class="tolak-btn-two tolak-btn-two--home-six main-slider-six__btn__two">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>GET Quote<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                </div>
                            </div><!-- slider-content -->
                        </div>
                        <div class="main-slider-six__shape-one">
                            <img src="{{ asset("/assets/images/shapes/slider-6-shape-1.png") }}" alt="toalk">
                        </div>
                        <div class="main-slider-six__shape-two">
                            <img src="{{ asset("/assets/images/shapes/slider-6-shape-2.png") }}" alt="toalk">
                        </div>
                        <div class="main-slider-six__shape-three">
                            <img src="{{ asset("/assets/images/shapes/slider-6-shape-3.png") }}" alt="toalk">
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="main-slider-six__item">
                        <div class="main-slider-six__bg" style="background-image: url(assets/images/shapes/slider-6-1.jpg);"></div>
                        <div class="main-slider-six__layer">
                            <img src="{{ asset("/assets/images/backgrounds/slider-6-layer-3.jpg") }}" alt="tolak">
                        </div>
                        <div class="container">
                            <div class="main-slider-six__content">
                                <h5 class="main-slider-six__sub-title">We Are Digital SOLUTION</h5>
                                <!-- slider-sub-title -->
                                <h2 class="main-slider-six__title">
                                    Awsome It <span>Solution <img src="{{ asset("/assets/images/shapes/slider-6-shape-4.png") }}" alt="toalk"></span><br> For Your Business.
                                </h2><!-- slider-title -->
                                <p class="main-slider-six__text">
                                    We provide the most responsive and functional IT design for<br> companies and businesses worldwide.
                                </p><!-- slider-text -->
                                <div class="main-slider-six__btn">
                                    <a href="{{ url("services") }}" class="tolak-btn-two tolak-btn-two--home-six main-slider-six__btn__one">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>GET STARTED<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                    <a href="{{ url("contact") }}" class="tolak-btn-two tolak-btn-two--home-six main-slider-six__btn__two">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>GET Quote<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                </div>
                            </div><!-- slider-content -->
                        </div>
                        <div class="main-slider-six__shape-one">
                            <img src="{{ asset("/assets/images/shapes/slider-6-shape-1.png") }}" alt="toalk">
                        </div>
                        <div class="main-slider-six__shape-two">
                            <img src="{{ asset("/assets/images/shapes/slider-6-shape-2.png") }}" alt="toalk">
                        </div>
                        <div class="main-slider-six__shape-three">
                            <img src="{{ asset("/assets/images/shapes/slider-6-shape-3.png") }}" alt="toalk">
                        </div>
                    </div>
                </div><!-- item -->
            </div>
        </section>
        <!-- main-slider-end -->

        <section class="slide-text slide-text--home-six">
            <div class="slide-text__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/slide-text-bg.jpg);"></div>
            <div class="slide-text__wrap">
                <ul class="slide-text__list list-unstyled">
                    <li>Service</li>
                    <li>Technology</li>
                    <li>Business</li>
                    <li>Consultancy</li>
                    <li>Support</li>
                    <li>Management</li>
                    <li>Design</li>
                    <li>Development</li>
                    <li>Service</li>
                    <li>Technology</li>
                    <li>Business</li>
                    <li>Consultancy</li>
                    <li>Support</li>
                    <li>Management</li>
                    <li>Design</li>
                    <li>Development</li>
                </ul>
            </div>
        </section>

        <section class="about-six">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-six__image count-box wow fadeInLeft" data-wow-delay="00ms">
                            <div class="about-six__image__one wow fadeInUp" data-wow-delay="200ms">
                                <img src="{{ asset("/assets/images/resources/about-6-1.jpg") }}" alt="tolak">
                            </div>
                            <div class="about-six__image__bg-shape"></div>
                            <div class="about-six__image__experiance">
                                <h3 class="about-six__image__experiance__count"><span class="count-text" data-stop="25" data-speed="1500"></span>+</h3><!-- /.about-six__image__experiance__number -->
                                years experience
                            </div>
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="about-six__content">
                            <div class="sec-title-three text-left">

                                <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR ABOUT COMPANY<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                                <h3 class="sec-title-three__title">Our Experience About 29+ Years Experience And Challenge!</h3><!-- /.sec-title-three__title -->
                            </div><!-- /.sec-title-three -->
                            <p class="about-six__content__text">
                                Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor
                                majority have in some we form, by injected humour solution.
                            </p>
                            <ul class="about-six__content__list">
                                <li>
                                    <h3 class="about-six__content__list__title">
                                        <i class="tolak-icons-two-sign-in-alt1"></i>
                                        Network Infrastructure software
                                    </h3>
                                    <p class="about-six__content__list__text">
                                        Technology is a broad category encompassing all aspec of information technology and the application of technology.
                                    </p>
                                </li>
                                <li>
                                    <h3 class="about-six__content__list__title">
                                        <i class="tolak-icons-two-sign-in-alt1"></i>
                                        Solution Expert Team Support
                                    </h3>
                                    <p class="about-six__content__list__text">
                                        Technology is a broad category encompassing all aspec of information technology and the application of technology.
                                    </p>
                                </li>
                            </ul>
                            <a href="{{ url("about") }}" class="tolak-btn-two tolak-btn-two--home-six">
                                <span class="tolak-btn-two__left-star"></span>
                                <span>About More<i class="tolak-icons-two-arrow-right-short"></i></span>
                                <span class="tolak-btn-two__right-star"></span>
                            </a>
                        </div><!-- /.about__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-six -->

        <!-- Service Start -->
        <section class="service-four">
            <div class="container">
                <div class="sec-title-three text-center">

                    <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR BEST SERVICE<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                    <h3 class="sec-title-three__title">We Are Service Your Business</h3><!-- /.sec-title-three__title -->
                </div><!-- /.sec-title-three -->
                <div class="service-four__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
				"1200": {
					"items": 4
				}
			}
			}'>
                    <div class="item">
                        <div class="service-four__item text-center">
                            <div class="service-four__item__content">
                                <div class="service-four__item__icon">
                                    <span class="tolak-icons-two-smart-grid"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-four__item__title">
                                    <a href="{{ url("technology-services") }}">Technology Solution</a>
                                </h3><!-- /.service-title -->
                                <p class="service-four__item__text">
                                    Solution the we create this business Solution
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-four__item__image">
                                <img src="{{ asset("/assets/images/resources/service-4-1.jpg") }}" alt="tolak">
                                <a class="service-four__item__rm" href="{{ url("technology-services") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="item">
                        <div class="service-four__item text-center">
                            <div class="service-four__item__content">
                                <div class="service-four__item__icon">
                                    <span class=" tolak-icons-two-cybersecurity"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-four__item__title">
                                    <a href="{{ url("business-growth") }}">Business Growth</a>
                                </h3><!-- /.service-title -->
                                <p class="service-four__item__text">
                                    Solution the we create this business Solution
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-four__item__image">
                                <img src="{{ asset("/assets/images/resources/service-4-2.jpg") }}" alt="tolak">
                                <a class="service-four__item__rm" href="{{ url("business-growth") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="item">
                        <div class="service-four__item text-center">
                            <div class="service-four__item__content">
                                <div class="service-four__item__icon">
                                    <span class="tolak-icons-two-solution-1"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-four__item__title">
                                    <a href="{{ url("business-solution") }}">Consultency Plan</a>
                                </h3><!-- /.service-title -->
                                <p class="service-four__item__text">
                                    Solution the we create this business Solution
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-four__item__image">
                                <img src="{{ asset("/assets/images/resources/service-4-3.jpg") }}" alt="tolak">
                                <a class="service-four__item__rm" href="{{ url("business-solution") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="item">
                        <div class="service-four__item text-center">
                            <div class="service-four__item__content">
                                <div class="service-four__item__icon">
                                    <span class="tolak-icons-two-seo"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-four__item__title">
                                    <a href="{{ url("business-marketing") }}">Software Business</a>
                                </h3><!-- /.service-title -->
                                <p class="service-four__item__text">
                                    Solution the we create this business Solution
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-four__item__image">
                                <img src="{{ asset("/assets/images/resources/service-4-4.jpg") }}" alt="tolak">
                                <a class="service-four__item__rm" href="{{ url("business-marketing") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                </div>
                <div class="service-four__bottom">
                    <div class="service-four__bottom__left" style="background-image: url(assets/images/shapes/service-4-bottom-shape.png);">
                        <h3 class="service-four__bottom__title">We Provide More Details Let Me Know What You Need Help</h3>
                        <ul class="service-four__bottom__list">
                            <li>
                                <i class="tolak-icons-two-arrow-circle-right"></i>
                                <span>Consultancy & solution</span>
                            </li>
                            <li>
                                <i class="tolak-icons-two-arrow-circle-right"></i>
                                <span>Competitor Research Business</span>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ url("about") }}" class="tolak-btn-two tolak-btn-two--home-six">
                        <span class="tolak-btn-two__left-star"></span>
                        <span>View All Service<i class="tolak-icons-two-arrow-right-short"></i></span>
                        <span class="tolak-btn-two__right-star"></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Service End -->

        <section class="why-choose-four">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                        <div class="why-choose-four__content">
                            <div class="sec-title-four text-left">

                                <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>Why Choose Us<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

                                <h3 class="sec-title-four__title">Choose The Best IT Service For Company Solution</h3><!-- /.sec-title-four__title -->
                            </div><!-- /.sec-title-four -->
                            <p class="why-choose-four__content__text">
                                Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor
                                majority have in some we form, by injected humour solution.
                            </p>
                            <ul class="why-choose-four__list">
                                <li>
                                    <h3 class="why-choose-four__list__title">
                                        <i class="tolak-icons-two-deal"></i>
                                        Business Innovation Tech Teams
                                    </h3>
                                    <p class="why-choose-four__list__text">
                                        Nulla eleifend, lectus gravida facilisis,ipsum metus faucibus eros vitae vulputate nibh libero ac metus phasellus magna
                                    </p>
                                </li>
                                <li>
                                    <h3 class="why-choose-four__list__title">
                                        <i class="tolak-icons-two-global-solution"></i>
                                        Competitor Research Solution
                                    </h3>
                                    <p class="why-choose-four__list__text">
                                        Nulla eleifend, lectus gravida facilisis,ipsum metus faucibus eros vitae vulputate nibh libero ac metus phasellus magna
                                    </p>
                                </li>
                                <li>
                                    <h3 class="why-choose-four__list__title">
                                        <i class="tolak-icons-two-diagram"></i>
                                        Software Development For Solution
                                    </h3>
                                    <p class="why-choose-four__list__text">
                                        Nulla eleifend, lectus gravida facilisis,ipsum metus faucibus eros vitae vulputate nibh libero ac metus phasellus magna
                                    </p>
                                </li>
                            </ul>
                        </div><!-- /.why-choose-four__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6">
                        <div class="tolak-stretch-element-inside-column">
                            <div class="why-choose-four__image wow slideInRight">
                                <img src="{{ asset("/assets/images/resources/why-choose-4-1.jpg") }}" alt="tolak">
                            </div><!-- /.why-choose-four__image -->
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.why-choose-four -->

        <section class="team-four">
            <div class="container">
                <div class="sec-title-four text-center">

                    <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>OUR TEAM MEMBER<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

                    <h3 class="sec-title-four__title">Meet The Team Member Solution</h3><!-- /.sec-title-four__title -->
                </div><!-- /.sec-title-four -->
                <div class="team-four__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav tolak-owl__carousel--with-shadow owl-carousel" data-owl-options='{
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
				"1200": {
					"items": 4
				}
			}
			}'>
                    <div class="item">
                        <div class="team-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="team-card-four__image">
                                <img src="{{ asset("/assets/images/team/team-4-1.jpg") }}" alt="Donald Martinez">
                                <div class="team-card-four__social">
                                    <a href="https://facebook.com">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://pinterest.com">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://twitter.com">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.team-card-four__social -->
                            </div><!-- /.team-card-four__image -->
                            <div class="team-card-four__content">
                                <h3 class="team-card-four__title">
                                    <a href="{{ url("team-details") }}">Donald Martinez</a>
                                </h3><!-- /.team-card-four__title -->
                                <p class="team-card-four__designation">Founder</p><!-- /.team-card-four__designation -->
                            </div><!-- /.team-card-four__content -->
                        </div><!-- /.team-card-four -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="team-card-four__image">
                                <img src="{{ asset("/assets/images/team/team-4-2.jpg") }}" alt="Gregory Corson">
                                <div class="team-card-four__social">
                                    <a href="https://facebook.com">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://pinterest.com">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://twitter.com">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.team-card-four__social -->
                            </div><!-- /.team-card-four__image -->
                            <div class="team-card-four__content">
                                <h3 class="team-card-four__title">
                                    <a href="{{ url("team-details") }}">Gregory Corson</a>
                                </h3><!-- /.team-card-four__title -->
                                <p class="team-card-four__designation">Manager</p><!-- /.team-card-four__designation -->
                            </div><!-- /.team-card-four__content -->
                        </div><!-- /.team-card-four -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="team-card-four__image">
                                <img src="{{ asset("/assets/images/team/team-4-3.jpg") }}" alt="Joyce Stroup">
                                <div class="team-card-four__social">
                                    <a href="https://facebook.com">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://pinterest.com">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://twitter.com">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.team-card-four__social -->
                            </div><!-- /.team-card-four__image -->
                            <div class="team-card-four__content">
                                <h3 class="team-card-four__title">
                                    <a href="{{ url("team-details") }}">Joyce Stroup</a>
                                </h3><!-- /.team-card-four__title -->
                                <p class="team-card-four__designation">Deveoper</p><!-- /.team-card-four__designation -->
                            </div><!-- /.team-card-four__content -->
                        </div><!-- /.team-card-four -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="team-card-four__image">
                                <img src="{{ asset("/assets/images/team/team-4-4.jpg") }}" alt="Mark Bradley">
                                <div class="team-card-four__social">
                                    <a href="https://facebook.com">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://pinterest.com">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://twitter.com">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.team-card-four__social -->
                            </div><!-- /.team-card-four__image -->
                            <div class="team-card-four__content">
                                <h3 class="team-card-four__title">
                                    <a href="{{ url("team-details") }}">Mark Bradley</a>
                                </h3><!-- /.team-card-four__title -->
                                <p class="team-card-four__designation">Designer</p><!-- /.team-card-four__designation -->
                            </div><!-- /.team-card-four__content -->
                        </div><!-- /.team-card-four -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-four -->

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

        <section class="tab-one">
            <div class="container tabs-box">
                <div class="sec-title-four text-center">

                    <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>Best Of Skill Tab<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

                    <h3 class="sec-title-four__title">These are Specific Teachable Skill Defined</h3><!-- /.sec-title-four__title -->
                </div><!-- /.sec-title-four -->
                <ul class="list-unstyled tab-buttons tab-one__tab-title">
                    <li data-tab="#technological-solutions" class="tab-btn">
                        <div class="tab-one__tab-title__trinagle"></div>
                        <div class="tab-one__tab-title__icon"><i class="tolak-icons-two-solutions-three"></i></div>
                        <h3 class="tab-one__tab-title__text">Technological Solutions</h3>
                        <div class="tab-one__tab-title__shape" style="background-image: url(assets/images/shapes/tab-one-title.png);"></div>
                    </li>
                    <li data-tab="#competitor-research" class="tab-btn active-btn">
                        <div class="tab-one__tab-title__trinagle"></div>
                        <div class="tab-one__tab-title__icon"><i class=" tolak-icons-two-lightbulb-dollar"></i></div>
                        <h3 class="tab-one__tab-title__text">Competitor Research</h3>
                        <div class="tab-one__tab-title__shape" style="background-image: url(assets/images/shapes/tab-one-title.png);"></div>
                    </li>
                    <li data-tab="#consulting-planning" class="tab-btn">
                        <div class="tab-one__tab-title__trinagle"></div>
                        <div class="tab-one__tab-title__icon"><i class="tolak-icons-two-solution-1"></i></div>
                        <h3 class="tab-one__tab-title__text">Consulting Planning</h3>
                        <div class="tab-one__tab-title__shape" style="background-image: url(assets/images/shapes/tab-one-title.png);"></div>
                    </li>
                    <li data-tab="#management-solutions" class="tab-btn">
                        <div class="tab-one__tab-title__trinagle"></div>
                        <div class="tab-one__tab-title__icon"><i class=" tolak-icons-two-cybersecurity"></i></div>
                        <h3 class="tab-one__tab-title__text">Management Solutions</h3>
                        <div class="tab-one__tab-title__shape" style="background-image: url(assets/images/shapes/tab-one-title.png);"></div>
                    </li>
                </ul><!-- /.list-unstyl tab-title -->
                <div class="tabs-content">
                    <div class="tab fadeInUp animated" id="technological-solutions">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tab-one__thumb">
                                    <img src="{{ asset("/assets/images/resources/tab-1-1.jpg") }}" alt="toalk">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-one__content">
                                    <h3 class="tab-one__content__title">
                                        The Best Subjective Interpersonal Skills That Business.
                                    </h3>
                                    <p class="tab-one__content__text">
                                        Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor majority have in some we form, by injected humour solution.
                                    </p>
                                    <ul class="tab-one__content__list">
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
                                            <span>Consultancy &amp; solution</span>
                                        </li>
                                    </ul>
                                    <div class="cta-three__author">
                                        <img src="{{ asset("/assets/images/resources/cta-1-author-1.jpg") }}" alt="tolak">
                                        <img src="{{ asset("/assets/images/resources/cta-1-author-2.jpg") }}" alt="tolak">
                                        <img src="{{ asset("/assets/images/resources/cta-1-author-3.jpg") }}" alt="tolak">
                                        <a class="cta-three__author__rm" href="{{ url("contact") }}">More <span class="fas fa-arrow-right"></span></a>
                                    </div>
                                    <a href="{{ url("about") }}" class="tolak-btn-two tolak-btn-two--home-six">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>Learn More<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab fadeInUp animated active-tab" id="competitor-research">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tab-one__thumb">
                                    <img src="{{ asset("/assets/images/resources/tab-1-2.jpg") }}" alt="toalk">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-one__content">
                                    <h3 class="tab-one__content__title">
                                        The Best Subjective Interpersonal Skills That Business.
                                    </h3>
                                    <p class="tab-one__content__text">
                                        Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor majority have in some we form, by injected humour solution.
                                    </p>
                                    <ul class="tab-one__content__list">
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
                                            <span>Consultancy &amp; solution</span>
                                        </li>
                                    </ul>
                                    <div class="cta-three__author">
                                        <img src="{{ asset("/assets/images/resources/cta-1-author-1.jpg") }}" alt="tolak">
                                        <img src="{{ asset("/assets/images/resources/cta-1-author-2.jpg") }}" alt="tolak">
                                        <img src="{{ asset("/assets/images/resources/cta-1-author-3.jpg") }}" alt="tolak">
                                        <a class="cta-three__author__rm" href="{{ url("contact") }}">More <span class="fas fa-arrow-right"></span></a>
                                    </div>
                                    <a href="{{ url("about") }}" class="tolak-btn-two tolak-btn-two--home-six">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>Learn More<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab fadeInUp animated" id="consulting-planning">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tab-one__thumb">
                                    <img src="{{ asset("/assets/images/resources/tab-1-3.jpg") }}" alt="toalk">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-one__content">
                                    <h3 class="tab-one__content__title">
                                        The Best Subjective Interpersonal Skills That Business.
                                    </h3>
                                    <p class="tab-one__content__text">
                                        Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor majority have in some we form, by injected humour solution.
                                    </p>
                                    <ul class="tab-one__content__list">
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
                                            <span>Consultancy &amp; solution</span>
                                        </li>
                                    </ul>
                                    <div class="cta-three__author">
                                        <img src="{{ asset("/assets/images/resources/cta-1-author-1.jpg") }}" alt="tolak">
                                        <img src="{{ asset("/assets/images/resources/cta-1-author-2.jpg") }}" alt="tolak">
                                        <img src="{{ asset("/assets/images/resources/cta-1-author-3.jpg") }}" alt="tolak">
                                        <a class="cta-three__author__rm" href="{{ url("contact") }}">More <span class="fas fa-arrow-right"></span></a>
                                    </div>
                                    <a href="{{ url("about") }}" class="tolak-btn-two tolak-btn-two--home-six">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>Learn More<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab fadeInUp animated" id="management-solutions">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tab-one__thumb">
                                    <img src="{{ asset("/assets/images/resources/tab-1-4.jpg") }}" alt="toalk">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-one__content">
                                    <h3 class="tab-one__content__title">
                                        The Best Subjective Interpersonal Skills That Business.
                                    </h3>
                                    <p class="tab-one__content__text">
                                        Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor majority have in some we form, by injected humour solution.
                                    </p>
                                    <ul class="tab-one__content__list">
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
                                            <span>Consultancy &amp; solution</span>
                                        </li>
                                    </ul>
                                    <div class="cta-three__author">
                                        <img src="{{ asset("/assets/images/resources/cta-1-author-1.jpg") }}" alt="tolak">
                                        <img src="{{ asset("/assets/images/resources/cta-1-author-2.jpg") }}" alt="tolak">
                                        <img src="{{ asset("/assets/images/resources/cta-1-author-3.jpg") }}" alt="tolak">
                                        <a class="cta-three__author__rm" href="{{ url("contact") }}">More <span class="fas fa-arrow-right"></span></a>
                                    </div>
                                    <a href="{{ url("about") }}" class="tolak-btn-two tolak-btn-two--home-six">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>Learn More<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.tab-content -->
            </div>
        </section><!-- tab-one -->

        <section class="video-four">
            <div class="video-four__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/video-bg-4.jpg);"></div>
            <div class="video-four__ball-left"></div>
            <div class="video-four__ball-right"></div>
            <div class="container wow fadeInUp">
                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                    <i class="tolak-icons-two-play"></i>
                </a>
                <div class="sec-title-four text-center">

                    <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>Our Watch Video<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

                    <h3 class="sec-title-four__title">We Provide More Details About For You<br> Need This Solution Video</h3><!-- /.sec-title-four__title -->
                </div><!-- /.sec-title-four -->
                <p class="video-four__text">
                    Business tailored design, management & support services<br> business agency elit, sed do eiusmod tempor
                </p>
                <a href="{{ url("about") }}" class="tolak-btn-two tolak-btn-two--home-six">
                    <span class="tolak-btn-two__left-star"></span>
                    <span>Learn More<i class="tolak-icons-two-arrow-right-short"></i></span>
                    <span class="tolak-btn-two__right-star"></span>
                </a>
            </div>
        </section><!-- video-four -->

        <section class="faq-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow fadeInLeft">
                        <div class="sec-title-four text-left">

                            <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>Our Faq Us<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

                            <h3 class="sec-title-four__title">Can Faqs Help Improve For This Customer Satisfaction?</h3><!-- /.sec-title-four__title -->
                        </div><!-- /.sec-title-four -->
                        <p class="faq-three__text">
                            Business tailored design, management & support services Business business agency elit, sed
                            do eiusmod tempor majority have in some we form, by injected humour solution.
                        </p>
                        <div class="faq-three__accordion tolak-accrodion" data-grp-name="tolak-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        Maecenas facilisis erat id solution business
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <div class="inner__image">
                                            <img src="{{ asset("/assets/images/resources/accordian-image.jpg") }}" alt="tolak">
                                        </div>
                                        <p>
                                            Solution the connection, we create business marketing platforms business Solution
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        Digital data facilisis erat id solution business
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <div class="inner__image">
                                            <img src="{{ asset("/assets/images/resources/accordian-image.jpg") }}" alt="tolak">
                                        </div>
                                        <p>
                                            Solution the connection, we create business marketing platforms business Solution
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        We adapt our delivery to the way your solution
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <div class="inner__image">
                                            <img src="{{ asset("/assets/images/resources/accordian-image.jpg") }}" alt="tolak">
                                        </div>
                                        <p>
                                            Solution the connection, we create business marketing platforms business Solution
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                        </div>
                    </div><!-- /.col-xl-6 -->
                    <div class="col-xl-6">
                        <div class="faq-three__image">
                            <div class="faq-three__image__left wow fadeInUp" data-wow-delay="100ms">
                                <img src="{{ asset("/assets/images/resources/faq-3-1.jpg") }}" alt="tolak">
                                <img src="{{ asset("/assets/images/resources/faq-3-2.jpg") }}" alt="tolak">
                            </div>
                            <div class="faq-three__image__right wow fadeInUp" data-wow-delay="200ms">
                                <img src="{{ asset("/assets/images/resources/faq-3-3.jpg") }}" alt="tolak">
                            </div>
                        </div>
                    </div><!-- /.col-xl-6 -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.faq-three -->

        <!-- Work Process Start -->
        <section class="work-process-two">
            <div class="work-process-two__shape" style="background-image: url(assets/images/shapes/work-process-bg-2.png);"></div>
            <div class="container">
                <div class="sec-title-four text-center">

                    <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>Our Work Process<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

                    <h3 class="sec-title-four__title">Over The Solution Work Experiences</h3><!-- /.sec-title-four__title -->
                </div><!-- /.sec-title-four -->
                <div class="row gutter-y-30">
                    <div class="col-xl-3 col-md-6">
                        <div class="work-process-two__item text-center wow fadeInUp" data-wow-delay="00ms">
                            <div class="work-process-two__item__number"></div><!-- /.work-process-number -->
                            <h4 class="work-process-two__item__title">Creative Solutions</h4><!-- /.work-process-title -->
                            <p class="work-process-two__item__text">
                                Best of the Solution
                            </p><!-- /.work-process-text -->
                            <div class="work-process-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/work-process-2-1.jpg") }}" alt="tolak">
                            </div><!-- /.work-process-image -->
                        </div><!-- /.work-process-item -->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="work-process-two__item work-process-two__item--reverse text-center wow fadeInUp" data-wow-delay="100ms">
                            <div class="work-process-two__item__number"></div><!-- /.work-process-number -->
                            <h4 class="work-process-two__item__title">Agency Business</h4><!-- /.work-process-title -->
                            <p class="work-process-two__item__text">
                                Best of the Solution
                            </p><!-- /.work-process-text -->
                            <div class="work-process-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/work-process-2-2.jpg") }}" alt="tolak">
                            </div><!-- /.work-process-image -->
                        </div><!-- /.work-process-item -->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="work-process-two__item text-center wow fadeInUp" data-wow-delay="200ms">
                            <div class="work-process-two__item__number"></div><!-- /.work-process-number -->
                            <h4 class="work-process-two__item__title">Data Network</h4><!-- /.work-process-title -->
                            <p class="work-process-two__item__text">
                                Best of the Solution
                            </p><!-- /.work-process-text -->
                            <div class="work-process-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/work-process-2-3.jpg") }}" alt="tolak">
                            </div><!-- /.work-process-image -->
                        </div><!-- /.work-process-item -->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="work-process-two__item work-process-two__item--reverse text-center wow fadeInUp" data-wow-delay="300ms">
                            <div class="work-process-two__item__number"></div><!-- /.work-process-number -->
                            <h4 class="work-process-two__item__title">Cyber Security</h4><!-- /.work-process-title -->
                            <p class="work-process-two__item__text">
                                Best of the Solution
                            </p><!-- /.work-process-text -->
                            <div class="work-process-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/work-process-2-4.jpg") }}" alt="tolak">
                            </div><!-- /.work-process-image -->
                        </div><!-- /.work-process-item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Work Process End -->

        <!-- CTA Start -->
        <section class="cta-eight">
            <div class="cta-eight__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/cta-8-bg.jpg);"></div>
            <div class="cta-eight__shape-one" style="background-image: url(assets/images/shapes/cta-8-1.png);"></div>
            <div class="cta-eight__shape-two" style="background-image: url(assets/images/shapes/cta-8-2.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 wow fadeInLeft" data-wow-delay="00ms">
                        <div class="cta-eight__content">
                            <h2 class="cta-eight__content__title">
                                We Provide More Details Let Me Know Solution<br> What You Need Help
                            </h2>
                            <div class="cta-eight__box">
                                <div class="cta-eight__box__icon"><span class="tolak-icons-two-sign-in-alt1"></span></div>
                                Technology is a broad category encompassing nformation<br> technology and the application of technology.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-end wow fadeInUp" data-wow-delay="100ms">
                        <a href="{{ url("contact") }}" class="tolak-btn-two tolak-btn-two--home-six">
                            <span class="tolak-btn-two__left-star"></span>
                            <span>Contact Us<i class="tolak-icons-two-arrow-right-short"></i></span>
                            <span class="tolak-btn-two__right-star"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA End -->

        <section class="contact-three">
            <div class="container">
                <div class="contact-three__wrapper" style="background-image: url(assets/images/backgrounds/contact-bg-3.jpg);">
                    <div class="row">
                        <div class="col-lg-6 col-md-4"></div>
                        <div class="col-lg-6 col-md-8 wow fadeInUp">
                            <div class="contact-three__content">
                                <div class="sec-title-four text-center">

                                    <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>CONTACT US<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

                                    <h3 class="sec-title-four__title">Get In Touch<br> Make an Appointment</h3><!-- /.sec-title-four__title -->
                                </div><!-- /.sec-title-four -->
                                <form class="contact-three__form contact-form-validated form-one" action="inc/sendemail.php">
                                    <div class="form-one__group">
                                        <div class="form-one__control form-one__control--full">
                                            <input type="text" name="name" placeholder="Your Name *">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control">
                                            <input type="text" name="phone" placeholder="Your Phone">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control">
                                            <input type="email" name="email" placeholder="Your Email *">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control">
                                            <input type="text" name="phone" placeholder="Your Subjects *">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control">
                                            <div class="form-one__control__select">
                                                <select class="selectpicker" aria-label="Default select example">
                                                    <option selected="">Select Service</option>
                                                    <option value="1">Website Development</option>
                                                    <option value="2">App Development</option>
                                                    <option value="3">IT Counsultant</option>
                                                </select>
                                            </div><!-- /.main-menu__language -->
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <textarea name="message" placeholder="Your Message *"></textarea><!-- /# -->
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <button type="submit" class="tolak-btn-two tolak-btn-two--home-six">
                                                <span class="tolak-btn-two__left-star"></span>
                                                <span>Send Request<i class="tolak-icons-two-arrow-right-short"></i></span>
                                                <span class="tolak-btn-two__right-star"></span>
                                            </button>
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.form-one__group -->
                                </form>
                                <div class="contact-three__content__info wow fadeInUp" data-wow-delay="200ms">
                                    <div class="contact-three__content__info__icon"><i class="tolak-icons-two-phone-call"></i></div>
                                    <h5 class="contact-three__content__info__title">Get Contact Now</h5>
                                    <p class="contact-three__content__info__text"><a href="{{ url("tel:+11234751328") }}">+11234 751 328</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.contact-three -->

        <div class="google-map google-map__@@extraClassName">
            <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__@@extraClassName" allowfullscreen></iframe>
        </div>
        <!-- /.google-map -->

        <section class="blog-five">
            <div class="container">
                <div class="sec-title-four text-center">

                    <h6 class="sec-title-four__tagline"><span class="sec-title-four__tagline__left-border"></span>Our Latest News<span class="sec-title-four__tagline__right-border"></span></h6><!-- /.sec-title-four__tagline -->

                    <h3 class="sec-title-four__title">What kind of Work are Blog</h3><!-- /.sec-title-four__title -->
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
                        <div class="blog-card-five wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-five__image">
                                <img src="{{ asset("/assets/images/blog/blog-5-1.png") }}" alt="Are you Looking For a Solution Related">
                                <img src="{{ asset("/assets/images/blog/blog-5-1.png") }}" alt="Are you Looking For a Solution Related">
                                <div class="blog-card-five__date">
                                    24 <span>May</span>
                                </div><!-- /.blog-card-five__date -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card-five__image__link"><span class="sr-only">Are you Looking For a Solution Related</span><!-- /.sr-only --></a>
                            </div><!-- /.blog-card-five__image -->
                            <div class="blog-card-five__content">
                                <ul class="list-unstyled blog-card-five__meta">
                                    <li><i class="tolak-icons-two-user"></i>By: <a href="{{ url("blog-list-right") }}">Admin</a></li>
                                    <li><i class="tolak-icons-two-comments"></i>Comments (2)</li>
                                </ul>
                                <h3 class="blog-card-five__title"><a href="{{ url("blog-details-right") }}">Are you Looking For a Solution Related</a></h3><!-- /.blog-card-five__title -->
                                <p class="blog-card-five__text">Business tailored design of this in some we form solution.</p><!-- /.blog-card-five__text -->
                                <a class="blog-card-five__rm" href="{{ url("blog-details-right") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div><!-- /.blog-card-five__content -->
                        </div><!-- /.blog-card-five -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-card-five wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="blog-card-five__image">
                                <img src="{{ asset("/assets/images/blog/blog-5-2.png") }}" alt="Management System for Blog Designers">
                                <img src="{{ asset("/assets/images/blog/blog-5-2.png") }}" alt="Management System for Blog Designers">
                                <div class="blog-card-five__date">
                                    03 <span>Jun</span>
                                </div><!-- /.blog-card-five__date -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card-five__image__link"><span class="sr-only">Management System for Blog Designers</span><!-- /.sr-only --></a>
                            </div><!-- /.blog-card-five__image -->
                            <div class="blog-card-five__content">
                                <ul class="list-unstyled blog-card-five__meta">
                                    <li><i class="tolak-icons-two-user"></i>By: <a href="{{ url("blog-list-right") }}">Admin</a></li>
                                    <li><i class="tolak-icons-two-comments"></i>Comments (2)</li>
                                </ul>
                                <h3 class="blog-card-five__title"><a href="{{ url("blog-details-right") }}">Management System for Blog Designers</a></h3><!-- /.blog-card-five__title -->
                                <p class="blog-card-five__text">Business tailored design of this in some we form solution.</p><!-- /.blog-card-five__text -->
                                <a class="blog-card-five__rm" href="{{ url("blog-details-right") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div><!-- /.blog-card-five__content -->
                        </div><!-- /.blog-card-five -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-card-five wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="blog-card-five__image">
                                <img src="{{ asset("/assets/images/blog/blog-5-1.png") }}" alt=" We Provide Business For Specify work">
                                <img src="{{ asset("/assets/images/blog/blog-5-1.png") }}" alt=" We Provide Business For Specify work">
                                <div class="blog-card-five__date">
                                    20 <span>Jul</span>
                                </div><!-- /.blog-card-five__date -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card-five__image__link"><span class="sr-only"> We Provide Business For Specify work</span><!-- /.sr-only --></a>
                            </div><!-- /.blog-card-five__image -->
                            <div class="blog-card-five__content">
                                <ul class="list-unstyled blog-card-five__meta">
                                    <li><i class="tolak-icons-two-user"></i>By: <a href="{{ url("blog-list-right") }}">Admin</a></li>
                                    <li><i class="tolak-icons-two-comments"></i>Comments (2)</li>
                                </ul>
                                <h3 class="blog-card-five__title"><a href="{{ url("blog-details-right") }}"> We Provide Business For Specify work</a></h3><!-- /.blog-card-five__title -->
                                <p class="blog-card-five__text">Business tailored design of this in some we form solution.</p><!-- /.blog-card-five__text -->
                                <a class="blog-card-five__rm" href="{{ url("blog-details-right") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div><!-- /.blog-card-five__content -->
                        </div><!-- /.blog-card-five -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-two -->

<x-footerFive/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection