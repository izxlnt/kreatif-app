
@extends('layouts.layout5Onepage')
@section('title', 'Home Four || Tolak || Tolak Laravel Template For It Solution & Business')

@section('content')

<x-strickyHeader/>

          <!-- main-slider-start -->
          <section class="main-slider-four" id="home">
            <div class="main-slider-four__carousel tolak-owl__carousel owl-carousel" data-owl-options='{
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
                    <div class="main-slider-four__item">
                        <div class="main-slider-four__bg" style="background-image: url(assets/images/backgrounds/slider-4-1.jpg);"></div>
                        <div class="main-slider-four__bg" style="background-image: url(assets/images/backgrounds/slider-4-1.jpg);"></div>
                        <div class="main-slider-four__bg" style="background-image: url(assets/images/backgrounds/slider-4-1.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="main-slider-four__content">
                                        <h5 class="main-slider-four__sub-title">Wellcome To Tolak !</h5><!-- slider-sub-title -->
                                        <h3 class="main-slider-four__title-two">We Marketing Process</h3><!-- slider-title -->
                                        <h2 class="main-slider-four__title">Solution Service !</h2><!-- slider-title -->
                                        <div class="main-slider-four__text">
                                            <p class="main-slider-four__text__one">Business a soluion and emirate in the Arab known <br>for luxury city for Company.</p>
                                        </div><!-- slider-text -->
                                        <div class="main-slider-four__btn">
                                            <a href="{{ url("services") }}" class="tolak-btn tolak-btn--one"><b>Get a Quote</b><span></span></a>
                                            <div class="main-slider-four__btn__two">
                                                <a href="{{ url("contact") }}" class="tolak-btn"><b>Contact Now</b><span></span></a>
                                            </div>
                                        </div><!-- slider-btn -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-four__item">
                        <div class="main-slider-four__bg" style="background-image: url(assets/images/backgrounds/slider-4-2.jpg);"></div>
                        <div class="main-slider-four__bg" style="background-image: url(assets/images/backgrounds/slider-4-2.jpg);"></div>
                        <div class="main-slider-four__bg" style="background-image: url(assets/images/backgrounds/slider-4-2.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="main-slider-four__content">
                                        <h5 class="main-slider-four__sub-title">Wellcome To Tolak !</h5><!-- slider-sub-title -->
                                        <h3 class="main-slider-four__title-two">We Marketing Process</h3><!-- slider-title -->
                                        <h2 class="main-slider-four__title">Solution Service !</h2><!-- slider-title -->
                                        <div class="main-slider-four__text">
                                            <p class="main-slider-four__text__one">Business a soluion and emirate in the Arab known <br>for luxury city for Company.</p>
                                        </div><!-- slider-text -->
                                        <div class="main-slider-four__btn">
                                            <a href="{{ url("services") }}" class="tolak-btn tolak-btn--one"><b>Get a Quote</b><span></span></a>
                                            <div class="main-slider-four__btn__two">
                                                <a href="{{ url("contact") }}" class="tolak-btn"><b>Contact Now</b><span></span></a>
                                            </div>
                                        </div><!-- slider-btn -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- main-slider-end -->

        <div class="client-carousel client-carousel--three">
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
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

        <section class="about-four">
            <div class="container tabs-box">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-four__image">
                            <img src="{{ asset("/assets/images/resources/about-4-1.jpg") }}" alt="tolak">
                            <img src="{{ asset("/assets/images/resources/about-4-2.jpg") }}" alt="tolak">
                            <div class="about-four__image__shape tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                <img src="{{ asset("/assets/images/shapes/about-4-shape-1.png") }}" alt="tolak">
                            </div>
                            <div class="about-four__fact count-box tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                <div class="about-four__fact__icon"><i class="icon-check-mark"></i></div>
                                <h3 class="about-four__fact__count"><span class="count-text" data-stop="1283" data-speed="1500"></span>k+</h3><!-- /.about-four__fact__number -->
                                <p class="about-four__fact__text">Complete Project</p><!-- /.about-four__fact__title -->
                            </div><!-- /.about-four__fact -->
                        </div>
                    </div><!-- /.col-xl-6 -->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="about-four__content">
                            <div class="sec-title-two text-left">
                                <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span> Our About Now<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                                <h3 class="sec-title-two__title">We Can Clients with the About <span>Solution</span></h3><!-- /.sec-title-two__title -->
                            </div><!-- /.sec-title-two -->
                            <p class="about-four__content__text">
                                Business tailored it design, management & support services<br> business agency elit, sed do eiusmod tempor.
                            </p>
                            <div class="about-four__tabs">
                                <div class="tabs-content">
                                    <div class="tab fadeInUp animated active-tab" id="mission">
                                        <ul class="about-four__content__list">
                                            <li><span class="icofont-checked"></span>
                                                <p>Business onstructivism solution best.</p>
                                            </li>
                                            <li><span class="icofont-checked"></span>
                                                <p>We give management this business</p>
                                            </li>
                                            <li><span class="icofont-checked"></span>
                                                <p>Media in this solution support team.</p>
                                            </li>
                                        </ul>
                                        <div class="about-four__content__shape">
                                            <img src="{{ asset("/assets/images/shapes/about-4-shape-2.png") }}" alt="tolak">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="about-four__content__btn">
                                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                                        <i class="fa fa-play"></i>
                                                        <span class="video-popup__btn-ripple"></span>
                                                    </a>
                                                    Watcing video
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="about-four__content__fact count-box">
                                                    <div class="about-four__content__fact__icon"><i class="icon-briefing"></i></div><!-- /.about-four__content__fact__icon -->
                                                    <div class="about-four__content__fact__content">
                                                        <h3 class="about-four__content__fact__count"><span class="count-text" data-stop="426" data-speed="1500"></span> k+</h3>
                                                        <!-- /.about-four__content__fact__count -->
                                                        <p class="about-four__content__fact__text">Completed Project</p><!-- /.about-four__content__fact__text -->
                                                    </div><!-- /.about-four__content__fact__content -->
                                                </div><!-- /.about-four__content__fact__item -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab fadeInUp animated" id="support">
                                        <ul class="about-four__content__list">
                                            <li><span class="icofont-checked"></span>
                                                <p>Business onstructivism solution best.</p>
                                            </li>
                                            <li><span class="icofont-checked"></span>
                                                <p>We give management this business</p>
                                            </li>
                                            <li><span class="icofont-checked"></span>
                                                <p>Media in this solution support team.</p>
                                            </li>
                                        </ul>
                                        <div class="about-four__content__shape">
                                            <img src="{{ asset("/assets/images/shapes/about-4-shape-2.png") }}" alt="tolak">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="about-four__content__btn">
                                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                                        <i class="fa fa-play"></i>
                                                        <span class="video-popup__btn-ripple"></span>
                                                    </a>
                                                    Watcing video
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="about-four__content__fact count-box">
                                                    <div class="about-four__content__fact__icon"><i class="icon-briefing"></i></div><!-- /.about-four__content__fact__icon -->
                                                    <div class="about-four__content__fact__content">
                                                        <h3 class="about-four__content__fact__count"><span class="count-text" data-stop="426" data-speed="1500"></span> k+</h3>
                                                        <!-- /.about-four__content__fact__count -->
                                                        <p class="about-four__content__fact__text">Completed Project</p><!-- /.about-four__content__fact__text -->
                                                    </div><!-- /.about-four__content__fact__content -->
                                                </div><!-- /.about-four__content__fact__item -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab fadeInUp animated" id="service">
                                        <ul class="about-four__content__list">
                                            <li><span class="icofont-checked"></span>
                                                <p>Business onstructivism solution best.</p>
                                            </li>
                                            <li><span class="icofont-checked"></span>
                                                <p>We give management this business</p>
                                            </li>
                                            <li><span class="icofont-checked"></span>
                                                <p>Media in this solution support team.</p>
                                            </li>
                                        </ul>
                                        <div class="about-four__content__shape">
                                            <img src="{{ asset("/assets/images/shapes/about-4-shape-2.png") }}" alt="tolak">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="about-four__content__btn">
                                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                                        <i class="fa fa-play"></i>
                                                        <span class="video-popup__btn-ripple"></span>
                                                    </a>
                                                    Watcing video
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="about-four__content__fact count-box">
                                                    <div class="about-four__content__fact__icon"><i class="icon-briefing"></i></div><!-- /.about-four__content__fact__icon -->
                                                    <div class="about-four__content__fact__content">
                                                        <h3 class="about-four__content__fact__count"><span class="count-text" data-stop="426" data-speed="1500"></span> k+</h3>
                                                        <!-- /.about-four__content__fact__count -->
                                                        <p class="about-four__content__fact__text">Completed Project</p><!-- /.about-four__content__fact__text -->
                                                    </div><!-- /.about-four__content__fact__content -->
                                                </div><!-- /.about-four__content__fact__item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-unstyled tab-buttons about-four__tabs__list">
                                    <li data-tab="#mission" class="tab-btn active-btn">Mission</li>
                                    <li data-tab="#support" class="tab-btn">Support</li>
                                    <li data-tab="#service" class="tab-btn">Service</li>
                                </ul><!-- /.list-unstyledf -->
                            </div>
                        </div><!-- /.about__content -->
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-four -->

        <!-- Service Start -->
        <section class="service-one service-one--home-four" style="background-image: url(assets/images/backgrounds/service-bg-2.jpg);" id="services">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Best Service<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">We Kinds of Services Business</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="service-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-1.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-cooperation"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-one__item__title">
                                    <a href="{{ url("business-growth") }}">Business of Growth</a>
                                </h3><!-- /.service-title -->
                                <p class="service-one__item__text">
                                    We businesss standard chunk of Ipsum used since is Agency & Star tup.
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number"></div>
                                <a class="service-one__item__bottom__rm" href="{{ url("business-growth") }}">Read More<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-2.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-ads-campaign"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-one__item__title">
                                    <a href="{{ url("business-solution") }}">Solution to Business</a>
                                </h3><!-- /.service-title -->
                                <p class="service-one__item__text">
                                    We businesss standard chunk of Ipsum used since is Agency & Star tup.
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number"></div>
                                <a class="service-one__item__bottom__rm" href="{{ url("business-solution") }}">Read More<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-3.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-headhunter"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-one__item__title">
                                    <a href="{{ url("marketing-solution") }}">Markting of Solution</a>
                                </h3><!-- /.service-title -->
                                <p class="service-one__item__text">
                                    We businesss standard chunk of Ipsum used since is Agency & Star tup.
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number"></div>
                                <a class="service-one__item__bottom__rm" href="{{ url("marketing-solution") }}">Read More<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-4.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-agency"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-one__item__title">
                                    <a href="{{ url("technology-services") }}">Technology Services</a>
                                </h3><!-- /.service-title -->
                                <p class="service-one__item__text">
                                    We businesss standard chunk of Ipsum used since is Agency & Star tup.
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number"></div>
                                <a class="service-one__item__bottom__rm" href="{{ url("technology-services") }}">Read More<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-5.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-advertisig-agency"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-one__item__title">
                                    <a href="{{ url("business-marketing") }}">Marketing Business</a>
                                </h3><!-- /.service-title -->
                                <p class="service-one__item__text">
                                    We businesss standard chunk of Ipsum used since is Agency & Star tup.
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number"></div>
                                <a class="service-one__item__bottom__rm" href="{{ url("business-marketing") }}">Read More<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-6.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-management"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-one__item__title">
                                    <a href="{{ url("business-support") }}">Support of Business</a>
                                </h3><!-- /.service-title -->
                                <p class="service-one__item__text">
                                    We businesss standard chunk of Ipsum used since is Agency & Star tup.
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number"></div>
                                <a class="service-one__item__bottom__rm" href="{{ url("business-support") }}">Read More<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                </div>
            </div>
            <img class="service-one--home-four__shape" src="{{ asset("/assets/images/shapes/counter-border-1.png") }}" alt="tolak">
        </section>
        <!-- Service End -->

        <!-- CTA Start -->
        <section class="cta-two">
            <div class="container">
                <div class="cta-two__bg" style="background-image: url(assets/images/shapes/cta-bg-2.png);">
                    <div class="row">
                        <div class="col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="cta-two__info" style="background-image: url(assets/images/shapes/cta-2-1.jpg);">
                                <div class="cta-two__info__icon"><span class="icon-phone-call"></span></div>
                                <h4 class="cta-two__info__title">Call This Now</h4>
                                <p class="cta-two__info__text">
                                    <a href="{{ url("tel:025461556695") }}">+025461556695</a>
                                    <a href="{{ url("tel:826542556455") }}">+826542556455</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cta-two__content">
                                <h4 class="cta-two__content__title">Solution Company <a href="{{ url("tel:025461556695") }}">Call Now!</a></h4>
                                <p class="cta-two__content__text">We can provide you with a reliable<br> Please input an email address</p>
                                <a class="cta-two__content__rm" href="{{ url("contact") }}">Read More<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="cta-two__image">
                                <img src="{{ asset("/assets/images/resources/cta-2-2.png") }}" alt="tolak">
                            </div>
                            <a href="{{ url("tel:025461556695") }}" class="cta-two__call-text">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA End -->

        <section class="why-choose-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="why-choose-two__content">
                            <div class="sec-title-two text-left">
                                <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Why Choose Us<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                                <h3 class="sec-title-two__title">We Grow Your Business<br> Choose Service</h3><!-- /.sec-title-two__title -->
                            </div><!-- /.sec-title-two -->
                            <p class="why-choose-two__content__text">
                                Business tailored it design, management & support services <br>business agency elit, sed do eiusmod tempor.
                            </p>
                            <div class="why-choose-two__item wow fadeInUp" data-wow-delay="00ms">
                                <div class="why-choose-two__item__icon">
                                    <span class="icon-family"></span>
                                </div>
                                <h4 class="why-choose-two__item__title">Our Success Team Man</h4>
                                <a href="{{ url("team") }}" class="why-choose-two__item__rm"><span class="icon-right-arrow"></span></a>
                            </div><!-- why-choose-two__item -->
                            <div class="why-choose-two__item why-choose-two__item--reverse wow fadeInUp" data-wow-delay="100ms">
                                <div class="why-choose-two__item__icon">
                                    <span class="icon-agency"></span>
                                </div>
                                <h4 class="why-choose-two__item__title">Professional Best Service</h4>
                                <a href="{{ url("services") }}" class="why-choose-two__item__rm"><span class="icon-right-arrow"></span></a>
                            </div><!-- why-choose-two__item -->
                            <div class="why-choose-two__item wow fadeInUp" data-wow-delay="200ms">
                                <div class="why-choose-two__item__icon">
                                    <span class="icon-management"></span>
                                </div>
                                <h4 class="why-choose-two__item__title">Long Experience Support</h4>
                                <a href="{{ url("contact") }}" class="why-choose-two__item__rm"><span class="icon-right-arrow"></span></a>
                            </div><!-- why-choose-two__item -->
                        </div><!-- /.why-choose-two__content -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="why-choose-two__image">
                            <img src="{{ asset("/assets/images/resources/why-choose-2-1.jpg") }}" alt="tolak">
                            <div class="why-choose-two__image__two wow fadeInUp" data-wow-delay="200ms">
                                <img src="{{ asset("/assets/images/resources/why-choose-2-2.jpg") }}" alt="tolak">
                            </div>
                            <div class="why-choose-two__image__three wow fadeInUp" data-wow-delay="300ms">
                                <img src="{{ asset("/assets/images/resources/why-choose-2-3.jpg") }}" alt="tolak">
                            </div>
                            <div class="why-choose-two__image__four wow fadeInUp" data-wow-delay="400ms">
                                <img src="{{ asset("/assets/images/resources/why-choose-2-4.jpg") }}" alt="tolak">
                            </div>
                        </div><!-- /.why-choose-two__image -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.why-choose-two -->

        <section class="our-solution" style="background-image: url(assets/images/backgrounds/solution-bg-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="our-solution__image">
                            <div class="our-solution__border-one"></div>
                            <div class="our-solution__border-two"></div>
                            <img src="{{ asset("/assets/images/resources/solution-1-2.png") }}" alt="tolak">
                            <div class="our-solution__border-three"></div>
                            <div class="our-solution__image__shape"><img src="{{ asset("/assets/images/shapes/solution-1-shape-1.png") }}" alt="tolak"></div>
                        </div><!-- /.our-solution__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="our-solution__content">
                            <div class="sec-title text-left">
                                <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Our Solution Business<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                                <h3 class="sec-title__title">We’re Are Commited Deliver Marketing for Business.</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="our-solution__content__text">
                                Business tailored it design, management & support services business agency elit, sed do eiusmod tempor.
                            </p>
                            <div class="row">
                                <div class="col-xl-4 col-lg-5 col-md-4">
                                    <div class="our-solution__box">
                                        <div class="our-solution__box__icon"><span class="icon-social-care"></span></div>
                                        <p class="our-solution__box__text">
                                            THIS BEST MANS SOLUTION BEST BUSINESS FOR PROVED IS TO COMPANY
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7 col-md-6">
                                    <div class="our-solution__list">
                                        <h5 class="our-solution__list__title">Solution This Business</h5>
                                        <ul>
                                            <li><span class="fas fa-check-circle"></span>We provide a revolutionary</li>
                                            <li><span class="fas fa-check-circle"></span>This man for it solution.</li>
                                            <li><span class="fas fa-check-circle"></span>We provide a revolutionary</li>
                                            <li><span class="fas fa-check-circle"></span>This man for it solution.</li>
                                        </ul>
                                        <div class="our-solution__list__border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.our-solution -->
        <!-- Feature Start -->
        <section class="feature-two">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-two__item text-center wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-two__item__icon">
                                <span class="icon-cooperation"></span>
                            </div>
                            <h4 class="feature-two__item__title">Business Of Growth</h4>
                            <p class="feature-two__item__text">We businesss standard chunk of Ipsum used since is Agency & Star tup.</p>
                        </div><!-- feature-item -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-two__item feature-two__item--reverse text-center wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-two__item__icon">
                                <span class="icon-ads-campaign"></span>
                            </div>
                            <h4 class="feature-two__item__title">We Grow Business</h4>
                            <p class="feature-two__item__text">We businesss standard chunk of Ipsum used since is Agency & Star tup.</p>
                        </div><!-- feature-item -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-two__item text-center wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-two__item__icon">
                                <span class="icon-advertisig-agency"></span>
                            </div>
                            <h4 class="feature-two__item__title">Markting Solution</h4>
                            <p class="feature-two__item__text">We businesss standard chunk of Ipsum used since is Agency & Star tup.</p>
                        </div><!-- feature-item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature End -->

        <section class="team-one" id="team">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Team Member<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">Meet The Team Metting Solution</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="team-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel" data-owl-options='{
			"items": 1,
			"margin": 0,
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
					"items": 2,
					"margin": 30
				},
				"992": {
					"items": 3,
					"margin": 30
				}
			}
			}'>
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-1.jpg") }}" alt="Lorata Barsa">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
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
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Lorata Barsa</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-2.jpg") }}" alt="Moras Batas">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
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
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Moras Batas</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Manager</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-3.jpg") }}" alt="Korata Mana">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
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
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Korata Mana</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-1.jpg") }}" alt="Lorata Barsa">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
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
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Lorata Barsa</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-2.jpg") }}" alt="Moras Batas">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
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
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Moras Batas</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Manager</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-3.jpg") }}" alt="Korata Mana">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
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
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Korata Mana</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-one -->
        <section class="faq-one faq-one--dark" style="background-image: url(assets/images/shapes/faq-bg-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-one__accordion tolak-accrodion" data-grp-name="tolak-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        What happens to my data if I cancel?
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of available but the have suffered
                                            alteration in that some form by injected randomised words which don’t
                                            look even as slightly believable now.
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>
                                        What are the different types of marketing solutions?
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of available but the have suffered
                                            alteration in that some form by injected randomised words which don’t
                                            look even as slightly believable now.
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        How often should i work on the digital marketing?
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of available but the have suffered
                                            alteration in that some form by injected randomised words which don’t
                                            look even as slightly believable now.
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        Are social media good for the business growth?
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of available but the have suffered
                                            alteration in that some form by injected randomised words which don’t
                                            look even as slightly believable now.
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="faq-one__content">
                            <div class="sec-title-two text-left">
                                <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>See our faqs<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                                <h3 class="sec-title-two__title">We Fast Frequently Asked The Questions Now</h3><!-- /.sec-title-two__title -->
                            </div><!-- /.sec-title-two -->
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="faq-one__image tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                        <img src="{{ asset("/assets/images/resources/faq-1-1.jpg") }}" alt="tolak">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="faq-one__right">
                                        <div class="faq-one__experiance count-box">
                                            <h3 class="faq-one__experiance__count"><span class="count-text" data-stop="36" data-speed="1500"></span>+</h3><!-- /.experiance-count -->
                                            <h5 class="faq-one__experiance__title">Years<br> Experience</h5><!-- /.experiance-title -->
                                        </div><!-- /.experiance -->
                                        <h4 class="faq-one__right__title">Donec Quis felis Commodo</h4>
                                        <p class="faq-one__right__text">Lorem ipsum is simply free text dol amet, passage of consectetur notted.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.faq-one -->

        <section class="pricing-one" id="pricing">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our pricing plan<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">The Terms and Conditions Plan</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="row gutter-y-30">
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-delay="00ms">
                        <div class="pricing-one__card text-center">
                            <div class="pricing-one__card__icon">
                                <i class="icon-low-cost"></i>
                            </div><!-- /.pricing-one__card__icon -->
                            <h4 class="pricing-one__card__title">Basic Plan</h4>
                            <h3 class="pricing-one__card__price">$192 <span>/Mo</span></h3><!-- /.pricing-one__card__price -->
                            <ul class="list-unstyled pricing-one__card__list">
                                <li><i class="icofont-check-circled"></i>Analyzer Solution</li>
                                <li><i class="icofont-close-line"></i>Team Best Support</li>
                                <li><i class="icofont-check-circled"></i>Communicate This Process</li>
                                <li><i class="icofont-check-circled"></i>No Risk Garrunty</li>
                            </ul><!-- /.list-unstyled pricing-one__card__list -->
                            <a href="{{ url("contact") }}" class="tolak-btn"><b>Get Started</b><span></span></a>
                        </div><!-- /.pricing-one__card -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="pricing-one__card text-center">
                            <div class="pricing-one__card__icon">
                                <i class="icon-best-price"></i>
                            </div><!-- /.pricing-one__card__icon -->
                            <h4 class="pricing-one__card__title">Advanced Plan</h4>
                            <h3 class="pricing-one__card__price">$246 <span>/Mo</span></h3><!-- /.pricing-one__card__price -->
                            <ul class="list-unstyled pricing-one__card__list">
                                <li><i class="icofont-check-circled"></i>Analyzer Solution</li>
                                <li><i class="icofont-check-circled"></i>Team Best Support</li>
                                <li><i class="icofont-check-circled"></i>Communicate This Process</li>
                                <li><i class="icofont-close-line"></i>No Risk Garrunty</li>
                            </ul><!-- /.list-unstyled pricing-one__card__list -->
                            <a href="{{ url("contact") }}" class="tolak-btn"><b>Get Started</b><span></span></a>
                        </div><!-- /.pricing-one__card -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="pricing-one__card text-center">
                            <div class="pricing-one__card__icon">
                                <i class="icon-zakat"></i>
                            </div><!-- /.pricing-one__card__icon -->
                            <h4 class="pricing-one__card__title">Premium Plan</h4>
                            <h3 class="pricing-one__card__price">$298 <span>/Mo</span></h3><!-- /.pricing-one__card__price -->
                            <ul class="list-unstyled pricing-one__card__list">
                                <li><i class="icofont-close-line"></i>Analyzer Solution</li>
                                <li><i class="icofont-check-circled"></i>Team Best Support</li>
                                <li><i class="icofont-close-line"></i>Communicate This Process</li>
                                <li><i class="icofont-check-circled"></i>No Risk Garrunty</li>
                            </ul><!-- /.list-unstyled pricing-one__card__list -->
                            <a href="{{ url("contact") }}" class="tolak-btn"><b>Get Started</b><span></span></a>
                        </div><!-- /.pricing-one__card -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.pricing-one -->

        <section class="testimonials-three" id="testimonial">
            <div class="testimonials-three__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/testimonial-bg-3.jpg);"></div>
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our testimonial say<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">What Customers Awesome Reviews</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonials-three__image">
                            <img src="{{ asset("/assets/images/resources/testimonial-3-1.jpg") }}" alt="tolak">
                            <img class="testimonials-three__image__left" src="{{ asset("/assets/images/resources/testimonial-3-2.png") }}" alt="tolak">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonials-three__content">
                            <h3 class="testimonials-three__content__title">
                                Highly Skilled Busines Client Defense Solution
                            </h3>
                            <div class="testimonials-three__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                        "items": 1,
                        "margin": 0,
                        "loop": false,
                        "smartSpeed": 700,
                        "nav": false,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "dots": true,
                        "autoplay": false
                        }'>
                                <div class="item">
                                    <div class="testimonials-card-three">
                                        <div class="testimonials-card-three__content">
                                            <span class="testimonials-card-three__content__quote">“</span>If you are accused of committing a crime, you will need the very best criminal defense attorneys in Fresno. We are especially skilled in the following practice area
                                            simperative that you.
                                        </div><!-- /.testimonials-card-three__content -->
                                        <div class="testimonials-card-three__author">
                                            <div class="testimonials-card-three__image">
                                                <img src="{{ asset("/assets/images/resources/testi-1-4.jpg") }}" alt="Lataro Marsena">
                                            </div><!-- /.testimonials-card-three__image -->
                                            <h3 class="testimonials-card-three__name">
                                                Lataro Marsena
                                            </h3><!-- /.testimonials-card-three__name -->
                                            <p class="testimonials-card-three__designation">Founder Ceo</p><!-- /.testimonials-card-three__designation -->
                                        </div>
                                    </div><!-- /.testimonials-card-three -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-card-three">
                                        <div class="testimonials-card-three__content">
                                            <span class="testimonials-card-three__content__quote">“</span>If you are accused of committing a crime, you will need the very best criminal defense attorneys in Fresno. We are especially skilled in the following practice area
                                            simperative that you.
                                        </div><!-- /.testimonials-card-three__content -->
                                        <div class="testimonials-card-three__author">
                                            <div class="testimonials-card-three__image">
                                                <img src="{{ asset("/assets/images/resources/testi-1-5.jpg") }}" alt="Marsena Baran">
                                            </div><!-- /.testimonials-card-three__image -->
                                            <h3 class="testimonials-card-three__name">
                                                Marsena Baran
                                            </h3><!-- /.testimonials-card-three__name -->
                                            <p class="testimonials-card-three__designation">Founder</p><!-- /.testimonials-card-three__designation -->
                                        </div>
                                    </div><!-- /.testimonials-card-three -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-card-three">
                                        <div class="testimonials-card-three__content">
                                            <span class="testimonials-card-three__content__quote">“</span>If you are accused of committing a crime, you will need the very best criminal defense attorneys in Fresno. We are especially skilled in the following practice area
                                            simperative that you.
                                        </div><!-- /.testimonials-card-three__content -->
                                        <div class="testimonials-card-three__author">
                                            <div class="testimonials-card-three__image">
                                                <img src="{{ asset("/assets/images/resources/testi-1-3.jpg") }}" alt="David Cooper">
                                            </div><!-- /.testimonials-card-three__image -->
                                            <h3 class="testimonials-card-three__name">
                                                David Cooper
                                            </h3><!-- /.testimonials-card-three__name -->
                                            <p class="testimonials-card-three__designation">Manager</p><!-- /.testimonials-card-three__designation -->
                                        </div>
                                    </div><!-- /.testimonials-card-three -->
                                </div><!-- /.item -->
                            </div><!-- /.testimonials-three__carousel -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.testimonials-three -->

        <section class="blog-one" id="blog">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Largest Blog<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">From The Blog List Latest News</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="blog-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card__image">
                                <img src="{{ asset("/assets/images/blog/blog-1-1.png") }}" alt="Solution This Business For is Marketing Blog">
                                <img src="{{ asset("/assets/images/blog/blog-1-1.png") }}" alt="Solution This Business For is Marketing Blog">
                                <a href="{{ url("blog-details-right") }}" class="blog-card__image__link"><span class="sr-only">Solution This Business For is Marketing Blog</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__bg"></div>
                            <div class="blog-card__meta">
                                <div class="blog-card__meta__date"><span>15</span>Jun</div><!-- /.blog-card__date -->
                                <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                <div class="blog-card__meta__comments">
                                    <i class="icofont-speech-comments"></i>Comments (04)
                                </div>
                            </div>
                            <div class="blog-card__content">
                                <h3 class="blog-card__title"><a href="{{ url("blog-details-right") }}">Solution This Business For is Marketing Blog</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card__link">
                                    Read more
                                    <i class="icofont-rounded-double-right"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__border"></div>
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="blog-card__image">
                                <img src="{{ asset("/assets/images/blog/blog-1-2.png") }}" alt="Business Rules of Running to Web Solution">
                                <img src="{{ asset("/assets/images/blog/blog-1-2.png") }}" alt="Business Rules of Running to Web Solution">
                                <a href="{{ url("blog-details-right") }}" class="blog-card__image__link"><span class="sr-only">Business Rules of Running to Web Solution</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__bg"></div>
                            <div class="blog-card__meta">
                                <div class="blog-card__meta__date"><span>19</span>Jun</div><!-- /.blog-card__date -->
                                <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                <div class="blog-card__meta__comments">
                                    <i class="icofont-speech-comments"></i>Comments (04)
                                </div>
                            </div>
                            <div class="blog-card__content">
                                <h3 class="blog-card__title"><a href="{{ url("blog-details-right") }}">Business Rules of Running to Web Solution</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card__link">
                                    Read more
                                    <i class="icofont-rounded-double-right"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__border"></div>
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="blog-card__image">
                                <img src="{{ asset("/assets/images/blog/blog-1-3.png") }}" alt="We Should be Descriptive This Business">
                                <img src="{{ asset("/assets/images/blog/blog-1-3.png") }}" alt="We Should be Descriptive This Business">
                                <a href="{{ url("blog-details-right") }}" class="blog-card__image__link"><span class="sr-only">We Should be Descriptive This Business</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__bg"></div>
                            <div class="blog-card__meta">
                                <div class="blog-card__meta__date"><span>26</span>Jun</div><!-- /.blog-card__date -->
                                <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                <div class="blog-card__meta__comments">
                                    <i class="icofont-speech-comments"></i>Comments (04)
                                </div>
                            </div>
                            <div class="blog-card__content">
                                <h3 class="blog-card__title"><a href="{{ url("blog-details-right") }}">We Should be Descriptive This Business</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card__link">
                                    Read more
                                    <i class="icofont-rounded-double-right"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__border"></div>
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card__image">
                                <img src="{{ asset("/assets/images/blog/blog-1-1.png") }}" alt="Solution This Business For is Marketing Blog">
                                <img src="{{ asset("/assets/images/blog/blog-1-1.png") }}" alt="Solution This Business For is Marketing Blog">
                                <a href="{{ url("blog-details-right") }}" class="blog-card__image__link"><span class="sr-only">Solution This Business For is Marketing Blog</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__bg"></div>
                            <div class="blog-card__meta">
                                <div class="blog-card__meta__date"><span>15</span>Jun</div><!-- /.blog-card__date -->
                                <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                <div class="blog-card__meta__comments">
                                    <i class="icofont-speech-comments"></i>Comments (04)
                                </div>
                            </div>
                            <div class="blog-card__content">
                                <h3 class="blog-card__title"><a href="{{ url("blog-details-right") }}">Solution This Business For is Marketing Blog</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card__link">
                                    Read more
                                    <i class="icofont-rounded-double-right"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__border"></div>
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="blog-card__image">
                                <img src="{{ asset("/assets/images/blog/blog-1-2.png") }}" alt="Business Rules of Running to Web Solution">
                                <img src="{{ asset("/assets/images/blog/blog-1-2.png") }}" alt="Business Rules of Running to Web Solution">
                                <a href="{{ url("blog-details-right") }}" class="blog-card__image__link"><span class="sr-only">Business Rules of Running to Web Solution</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__bg"></div>
                            <div class="blog-card__meta">
                                <div class="blog-card__meta__date"><span>19</span>Jun</div><!-- /.blog-card__date -->
                                <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                <div class="blog-card__meta__comments">
                                    <i class="icofont-speech-comments"></i>Comments (04)
                                </div>
                            </div>
                            <div class="blog-card__content">
                                <h3 class="blog-card__title"><a href="{{ url("blog-details-right") }}">Business Rules of Running to Web Solution</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card__link">
                                    Read more
                                    <i class="icofont-rounded-double-right"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__border"></div>
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="blog-card__image">
                                <img src="{{ asset("/assets/images/blog/blog-1-3.png") }}" alt="We Should be Descriptive This Business">
                                <img src="{{ asset("/assets/images/blog/blog-1-3.png") }}" alt="We Should be Descriptive This Business">
                                <a href="{{ url("blog-details-right") }}" class="blog-card__image__link"><span class="sr-only">We Should be Descriptive This Business</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__bg"></div>
                            <div class="blog-card__meta">
                                <div class="blog-card__meta__date"><span>26</span>Jun</div><!-- /.blog-card__date -->
                                <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                <div class="blog-card__meta__comments">
                                    <i class="icofont-speech-comments"></i>Comments (04)
                                </div>
                            </div>
                            <div class="blog-card__content">
                                <h3 class="blog-card__title"><a href="{{ url("blog-details-right") }}">We Should be Descriptive This Business</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card__link">
                                    Read more
                                    <i class="icofont-rounded-double-right"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__border"></div>
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card__image">
                                <img src="{{ asset("/assets/images/blog/blog-1-1.png") }}" alt="Solution This Business For is Marketing Blog">
                                <img src="{{ asset("/assets/images/blog/blog-1-1.png") }}" alt="Solution This Business For is Marketing Blog">
                                <a href="{{ url("blog-details-right") }}" class="blog-card__image__link"><span class="sr-only">Solution This Business For is Marketing Blog</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__bg"></div>
                            <div class="blog-card__meta">
                                <div class="blog-card__meta__date"><span>15</span>Jun</div><!-- /.blog-card__date -->
                                <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                <div class="blog-card__meta__comments">
                                    <i class="icofont-speech-comments"></i>Comments (04)
                                </div>
                            </div>
                            <div class="blog-card__content">
                                <h3 class="blog-card__title"><a href="{{ url("blog-details-right") }}">Solution This Business For is Marketing Blog</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card__link">
                                    Read more
                                    <i class="icofont-rounded-double-right"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__border"></div>
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="blog-card__image">
                                <img src="{{ asset("/assets/images/blog/blog-1-2.png") }}" alt="Business Rules of Running to Web Solution">
                                <img src="{{ asset("/assets/images/blog/blog-1-2.png") }}" alt="Business Rules of Running to Web Solution">
                                <a href="{{ url("blog-details-right") }}" class="blog-card__image__link"><span class="sr-only">Business Rules of Running to Web Solution</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__bg"></div>
                            <div class="blog-card__meta">
                                <div class="blog-card__meta__date"><span>19</span>Jun</div><!-- /.blog-card__date -->
                                <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                <div class="blog-card__meta__comments">
                                    <i class="icofont-speech-comments"></i>Comments (04)
                                </div>
                            </div>
                            <div class="blog-card__content">
                                <h3 class="blog-card__title"><a href="{{ url("blog-details-right") }}">Business Rules of Running to Web Solution</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card__link">
                                    Read more
                                    <i class="icofont-rounded-double-right"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__border"></div>
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="blog-card__image">
                                <img src="{{ asset("/assets/images/blog/blog-1-3.png") }}" alt="We Should be Descriptive This Business">
                                <img src="{{ asset("/assets/images/blog/blog-1-3.png") }}" alt="We Should be Descriptive This Business">
                                <a href="{{ url("blog-details-right") }}" class="blog-card__image__link"><span class="sr-only">We Should be Descriptive This Business</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__bg"></div>
                            <div class="blog-card__meta">
                                <div class="blog-card__meta__date"><span>26</span>Jun</div><!-- /.blog-card__date -->
                                <div class="blog-card__meta__year">2023</div><!-- /.blog-card__yarn -->
                                <div class="blog-card__meta__comments">
                                    <i class="icofont-speech-comments"></i>Comments (04)
                                </div>
                            </div>
                            <div class="blog-card__content">
                                <h3 class="blog-card__title"><a href="{{ url("blog-details-right") }}">We Should be Descriptive This Business</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">We business standard chunk ofI nibh velit auctor aliquet sollic tudin.</p><!-- /.blog-card__text -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card__link">
                                    Read more
                                    <i class="icofont-rounded-double-right"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__border"></div>
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one -->

        <section class="mail-section">
            <div class="container">
                <div class="mail-section__wrapper">
                    <div class="row">
                        <div class="col-md-12 col-lg-4"></div>
                        <div class="col-md-5 col-lg-3">
                            <div class="mail-section__content">
                                <h3 class="mail-section__content__title">Our Newsletter</h3>
                                <p class="mail-section__content__text">We are dolor sit amet csectetur</p>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-5">
                            <form action="#" data-url="MAILCHIMP_FORM_URL" class="mail-section__newsletter mc-form">
                                <input type="text" name="EMAIL" placeholder="Enter your email">
                                <button type="submit" class="tolak-btn">
                                    <b>Subscribe</b><span></span>
                                    <span class="sr-only">Subscribe</span><!-- /.sr-only -->
                                </button>
                            </form><!-- /.footer-widget__newsletter mc-form -->
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

<x-footer/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection