
@extends('layouts.layout6Onepage')
@section('title', 'Home Five || Tolak || Tolak Laravel Template For It Solution & Business')
@php
    $css = '<!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Text:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="' . asset('assets/css/tolak-color-1.css') . '"/>';
            
@endphp
@section('content')

<x-strickyHeader/>

           <!-- main-slider-start -->
           <section class="main-slider-five" id="home">
            <div class="main-slider-five__carousel tolak-owl__carousel owl-carousel" data-owl-options='{
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
                    <div class="main-slider-five__item">
                        <div class="main-slider-five__bg">
                            <img src="{{ asset("/assets/images/backgrounds/slider-5-1.jpg") }}" alt="tolak">
                            <img src="{{ asset("/assets/images/backgrounds/slider-5-1.jpg") }}" alt="tolak">
                        </div>
                        <div class="container">
                            <div class="main-slider-five__content">
                                <h5 class="main-slider-five__sub-title"><span class="main-slider-five__sub-title__border"></span>IT SERVICES & SOLUTION</h5>
                                <!-- slider-sub-title -->
                                <h2 class="main-slider-five__title">We Proved Technology <br>Smart It Solution.</h2><!-- slider-title -->
                                <p class="main-slider-five__text">
                                    We provide the most responsive and functional IT design for<br> companies and businesses worldwide.
                                </p><!-- slider-text -->
                                <ul class="main-slider-five__list">
                                    <li><i class="tolak-icons-two-lightbulb-dollar"></i>Leadership Work</li>
                                    <li><i class="tolak-icons-two-algorithm"></i>Quality Work</li>
                                </ul>
                                <div class="main-slider-five__btn">
                                    <a href="{{ url("services") }}" class="tolak-btn-two">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>GET STARTED<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                        <i class="tolak-icons-two-play"></i>WATCH VIDEO
                                    </a><!-- slider-video -->
                                </div>
                            </div><!-- slider-content -->
                        </div>
                        <div class="main-slider-five__shape">
                            <img src="{{ asset("/assets/images/shapes/slider-5-shape-1.png") }}" alt="toalk">
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item" data-dot="<button>02</button>">
                    <div class="main-slider-five__item">
                        <div class="main-slider-five__bg">
                            <img src="{{ asset("/assets/images/backgrounds/slider-5-2.jpg") }}" alt="tolak">
                            <img src="{{ asset("/assets/images/backgrounds/slider-5-2.jpg") }}" alt="tolak">
                        </div>
                        <div class="container">
                            <div class="main-slider-five__content">
                                <h5 class="main-slider-five__sub-title"><span class="main-slider-five__sub-title__border"></span>IT SERVICES & SOLUTION</h5>
                                <!-- slider-sub-title -->
                                <h2 class="main-slider-five__title">We Proved Technology <br>Smart It Solution.</h2><!-- slider-title -->
                                <p class="main-slider-five__text">
                                    We provide the most responsive and functional IT design for<br> companies and businesses worldwide.
                                </p><!-- slider-text -->
                                <ul class="main-slider-five__list">
                                    <li><i class="tolak-icons-two-lightbulb-dollar"></i>Leadership Work</li>
                                    <li><i class="tolak-icons-two-algorithm"></i>Quality Work</li>
                                </ul>
                                <div class="main-slider-five__btn">
                                    <a href="{{ url("services") }}" class="tolak-btn-two">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>GET STARTED<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                        <i class="tolak-icons-two-play"></i>WATCH VIDEO
                                    </a><!-- slider-video -->
                                </div>
                            </div><!-- slider-content -->
                        </div>
                        <div class="main-slider-five__shape">
                            <img src="{{ asset("/assets/images/shapes/slider-5-shape-1.png") }}" alt="toalk">
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item" data-dot="<button>03</button>">
                    <div class="main-slider-five__item">
                        <div class="main-slider-five__bg">
                            <img src="{{ asset("/assets/images/backgrounds/slider-5-3.jpg") }}" alt="tolak">
                            <img src="{{ asset("/assets/images/backgrounds/slider-5-3.jpg") }}" alt="tolak">
                        </div>
                        <div class="container">
                            <div class="main-slider-five__content">
                                <h5 class="main-slider-five__sub-title"><span class="main-slider-five__sub-title__border"></span>IT SERVICES & SOLUTION</h5>
                                <!-- slider-sub-title -->
                                <h2 class="main-slider-five__title">We Proved Technology <br>Smart It Solution.</h2><!-- slider-title -->
                                <p class="main-slider-five__text">
                                    We provide the most responsive and functional IT design for<br> companies and businesses worldwide.
                                </p><!-- slider-text -->
                                <ul class="main-slider-five__list">
                                    <li><i class="tolak-icons-two-lightbulb-dollar"></i>Leadership Work</li>
                                    <li><i class="tolak-icons-two-algorithm"></i>Quality Work</li>
                                </ul>
                                <div class="main-slider-five__btn">
                                    <a href="{{ url("services") }}" class="tolak-btn-two">
                                        <span class="tolak-btn-two__left-star"></span>
                                        <span>GET STARTED<i class="tolak-icons-two-arrow-right-short"></i></span>
                                        <span class="tolak-btn-two__right-star"></span>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                        <i class="tolak-icons-two-play"></i>WATCH VIDEO
                                    </a><!-- slider-video -->
                                </div>
                            </div><!-- slider-content -->
                        </div>
                        <div class="main-slider-five__shape">
                            <img src="{{ asset("/assets/images/shapes/slider-5-shape-1.png") }}" alt="toalk">
                        </div>
                    </div>
                </div><!-- item -->
            </div>
        </section>
        <!-- main-slider-end -->

        <!-- Feature Start -->
        <section class="featurer-five">
            <div class="container">
                <ul class="featurer-five__wrapper">
                    <li class="featurer-five__item wow fadeInUp" data-wow-delay="00ms">
                        <div class="featurer-five__item__hover" style="background-image: url(assets/images/resources/feature-5-1.jpg);"></div>
                        <div class="featurer-five__item__icon">
                            <span class="tolak-icons-two-solution-1"></span>
                        </div>
                        <div class="featurer-five__item__number"></div>
                        <h4 class="featurer-five__item__title">Networks Business</h4>
                        <p class="featurer-five__item__text">Solution Engine - the best Business Solution</p>
                    </li><!-- feature-item -->
                    <li class="featurer-five__item featurer-five__item--active wow fadeInUp" data-wow-delay="100ms">
                        <div class="featurer-five__item__hover" style="background-image: url(assets/images/resources/feature-5-2.jpg);"></div>
                        <div class="featurer-five__item__icon">
                            <span class="tolak-icons-two-it-settings"></span>
                        </div>
                        <div class="featurer-five__item__number"></div>
                        <h4 class="featurer-five__item__title">Project Planing</h4>
                        <p class="featurer-five__item__text">Solution Engine - the best Business Solution</p>
                    </li><!-- feature-item -->
                    <li class="featurer-five__item wow fadeInUp" data-wow-delay="200ms">
                        <div class="featurer-five__item__hover" style="background-image: url(assets/images/resources/feature-5-3.jpg);"></div>
                        <div class="featurer-five__item__icon">
                            <span class="tolak-icons-two-algorithm"></span>
                        </div>
                        <div class="featurer-five__item__number"></div>
                        <h4 class="featurer-five__item__title">Data Analytics</h4>
                        <p class="featurer-five__item__text">Solution Engine - the best Business Solution</p>
                    </li><!-- feature-item -->
                </ul>
            </div>
        </section>
        <!-- Feature End -->

        <section class="about-five" id="about">
            <div class="about-five__shape" style="background-image: url(assets/images/shapes/about-5-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-five__image count-box wow fadeInUp" data-wow-delay="00ms">
                            <div class="about-five__image__one wow fadeInUp" data-wow-delay="100ms">
                                <img src="{{ asset("/assets/images/resources/about-5-1.jpg") }}" alt="tolak">
                            </div>
                            <div class="about-five__image__two">
                                <img src="{{ asset("/assets/images/resources/about-5-2.jpg") }}" alt="tolak">
                            </div>
                            <div class="about-five__image__shape-one">
                                <img src="{{ asset("/assets/images/shapes/about-5-shape-2.png") }}" alt="tolak">
                            </div>
                            <div class="about-five__image__shape-two">
                                <img src="{{ asset("/assets/images/shapes/about-5-shape-3.png") }}" alt="tolak">
                            </div>
                            <div class="about-five__image__experiance wow fadeInUp" data-wow-delay="300ms">
                                <h3 class="about-five__image__experiance__count"><span class="count-text" data-stop="26" data-speed="1500"></span>+</h3><!-- /.about-five__image__experiance__number -->
                                Experience Working
                            </div>
                        </div>
                    </div><!-- /.col-xl-6 -->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="about-five__content">
                            <div class="sec-title-three text-left">

                                <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR ABOUT COMPANY<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                                <h3 class="sec-title-three__title">Our Experience About 29+ Years Experience And Challenge!</h3><!-- /.sec-title-three__title -->
                            </div><!-- /.sec-title-three -->
                            <p class="about-five__content__text">
                                Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor
                                majority have in some we form, by injected humour solution.
                            </p>
                            <ul class="about-five__content__list">
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
                            <ul class="about-five__content__list-two">
                                <li>
                                    <i class="tolak-icons-two-gear"></i>
                                    Network Infrastructure software
                                </li>
                                <li>
                                    <i class="tolak-icons-two-algorithm"></i>
                                    Technology Consulting Solution
                                </li>
                            </ul>
                            <a href="{{ url("about") }}" class="tolak-btn-two">
                                <span class="tolak-btn-two__left-star"></span>
                                <span>About More<i class="tolak-icons-two-arrow-right-short"></i></span>
                                <span class="tolak-btn-two__right-star"></span>
                            </a>
                        </div><!-- /.about__content -->
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
                <div class="about-five__info"><i class="tolak-icons-two-badge-check"></i>If you're experiencing network issues or need to - <a href="{{ url("services") }}">Solution Service</a></div>
            </div><!-- /.container -->
        </section><!-- /.about-five -->

        <section class="funfact-three">
            <div class="funfact-three__bg" style="background-image: url(assets/images/shapes/funfact-3-bg.png);"></div>
            <div class="container">
                <div class="row gutter-y-30">
                    <div class=" col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="funfact-three__item count-box">
                            <div class="funfact-three__item__bg" style="background-image: url(assets/images/shapes/funfact-3-shape.png);"></div>
                            <div class="funfact-three__item__icon"><i class="tolak-icons-two-folder-management"></i></div><!-- /.funfact-three__icon -->
                            <h3 class="funfact-three__item__count"><span class="count-text" data-stop="3655" data-speed="1500"></span>+</h3>
                            <!-- /.funfact-three__count -->
                            <p class="funfact-three__item__text">Projects Comp</p><!-- /.funfact-three__text -->
                        </div><!-- /.funfact-three__item -->
                    </div><!-- /.item -->
                    <div class=" col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="funfact-three__item count-box">
                            <div class="funfact-three__item__bg" style="background-image: url(assets/images/shapes/funfact-3-shape.png);"></div>
                            <div class="funfact-three__item__icon"><i class="tolak-icons-two-team-work"></i></div><!-- /.funfact-three__icon -->
                            <h3 class="funfact-three__item__count"><span class="count-text" data-stop="965" data-speed="1500"></span>k+</h3>
                            <!-- /.funfact-three__count -->
                            <p class="funfact-three__item__text">Team Support</p><!-- /.funfact-three__text -->
                        </div><!-- /.funfact-three__item -->
                    </div><!-- /.item -->
                    <div class=" col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="funfact-three__item count-box">
                            <div class="funfact-three__item__bg" style="background-image: url(assets/images/shapes/funfact-3-shape.png);"></div>
                            <div class="funfact-three__item__icon"><i class="tolak-icons-two-rating-stars"></i></div><!-- /.funfact-three__icon -->
                            <h3 class="funfact-three__item__count"><span class="count-text" data-stop="852" data-speed="1500"></span>+</h3>
                            <!-- /.funfact-three__count -->
                            <p class="funfact-three__item__text">Happy Client</p><!-- /.funfact-three__text -->
                        </div><!-- /.funfact-three__item -->
                    </div><!-- /.item -->
                    <div class=" col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="funfact-three__item count-box">
                            <div class="funfact-three__item__bg" style="background-image: url(assets/images/shapes/funfact-3-shape.png);"></div>
                            <div class="funfact-three__item__icon"><i class="tolak-icons-two-medal"></i></div><!-- /.funfact-three__icon -->
                            <h3 class="funfact-three__item__count"><span class="count-text" data-stop="250" data-speed="1500"></span>k+</h3>
                            <!-- /.funfact-three__count -->
                            <p class="funfact-three__item__text">Awards Winner</p><!-- /.funfact-three__text -->
                        </div><!-- /.funfact-three__item -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.funfact-three -->

        <!-- Service Start -->
        <section class="service-three" id="services">
            <div class="service-three__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/service-bg-3.jpg);"></div>
            <div class="service-three__shape" style="background-image: url(assets/images/shapes/service-shape-3.png);"></div>
            <div class="container">
                <div class="sec-title-three text-center">

                    <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR BEST SERVICE<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                    <h3 class="sec-title-three__title">We Are Service Your Business</h3><!-- /.sec-title-three__title -->
                </div><!-- /.sec-title-three -->
                <div class="service-three__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
				"768": {
					"items": 2
				},
				"992": {
					"items": 3
				}
			}
			}'>
                    <div class="item">
                        <div class="service-three__item text-center">
                            <div class="service-three__item__content">
                                <div class="service-three__item__icon">
                                    <span class="tolak-icons-two-smart-grid"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-three__item__title">
                                    <a href="{{ url("business-growth") }}">Network Infrastructure</a>
                                </h3><!-- /.service-title -->
                                <p class="service-three__item__text">
                                    Solution the connection, we create platforms business Solution
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-three__item__image">
                                <img src="{{ asset("/assets/images/resources/service-3-1.jpg") }}" alt="tolak">
                                <a class="service-three__item__rm" href="{{ url("business-growth") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="item">
                        <div class="service-three__item text-center">
                            <div class="service-three__item__content">
                                <div class="service-three__item__icon">
                                    <span class="tolak-icons-two-algorithm"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-three__item__title">
                                    <a href="{{ url("business-support") }}">Data Management</a>
                                </h3><!-- /.service-title -->
                                <p class="service-three__item__text">
                                    Solution the connection, we create platforms business Solution
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-three__item__image">
                                <img src="{{ asset("/assets/images/resources/service-3-2.jpg") }}" alt="tolak">
                                <a class="service-three__item__rm" href="{{ url("business-support") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="item">
                        <div class="service-three__item text-center">
                            <div class="service-three__item__content">
                                <div class="service-three__item__icon">
                                    <span class="tolak-icons-two-cybersecurity"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-three__item__title">
                                    <a href="{{ url("technology-services") }}">Technology Solution</a>
                                </h3><!-- /.service-title -->
                                <p class="service-three__item__text">
                                    Solution the connection, we create platforms business Solution
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-three__item__image">
                                <img src="{{ asset("/assets/images/resources/service-3-3.jpg") }}" alt="tolak">
                                <a class="service-three__item__rm" href="{{ url("technology-services") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="item">
                        <div class="service-three__item text-center">
                            <div class="service-three__item__content">
                                <div class="service-three__item__icon">
                                    <span class="tolak-icons-two-seo"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-three__item__title">
                                    <a href="{{ url("business-marketing") }}">Software Business</a>
                                </h3><!-- /.service-title -->
                                <p class="service-three__item__text">
                                    Solution the connection, we create platforms business Solution
                                </p><!-- /.service-text -->
                            </div>
                            <div class="service-three__item__image">
                                <img src="{{ asset("/assets/images/resources/service-3-4.jpg") }}" alt="tolak">
                                <a class="service-three__item__rm" href="{{ url("business-marketing") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->

        <section class="skill-two" style="background-image: url(assets/images/backgrounds/skill-bg-2.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft">
                        <div class="skill-two__content">
                            <div class="sec-title-three text-left">

                                <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR SKILL<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                                <h3 class="sec-title-three__title">Technology Solution The Skill of Technology Software.</h3><!-- /.sec-title-three__title -->
                            </div><!-- /.sec-title-three -->
                            <p class="skill-two__content__text">
                                Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor
                                majority have in some we form, by injected humour solution.
                            </p>
                            <div class="skill-two__progress">
                                <p class="skill-two__progress__title">Interpersonal Skills</p>
                                <div class="skill-two__progress__bar">
                                    <div class="skill-two__progress__inner count-bar" data-percent="85%">
                                        <div class="skill-two__progress__number count-text">85%</div>
                                    </div>
                                </div>
                            </div><!-- /.skills-item -->
                            <div class="skill-two__progress">
                                <p class="skill-two__progress__title">Leadership Work</p>
                                <div class="skill-two__progress__bar">
                                    <div class="skill-two__progress__inner count-bar" data-percent="70%">
                                        <div class="skill-two__progress__number count-text">70%</div>
                                    </div>
                                </div>
                            </div><!-- /.skills-item -->
                            <div class="skill-two__progress">
                                <p class="skill-two__progress__title">Completed Work</p>
                                <div class="skill-two__progress__bar">
                                    <div class="skill-two__progress__inner count-bar" data-percent="96%">
                                        <div class="skill-two__progress__number count-text">96%</div>
                                    </div>
                                </div>
                            </div><!-- /.skills-item -->
                            <ul class="skill-two__list">
                                <li><i class="tolak-icons-two-badge-check"></i><span>Tincidunt elit magnis nulla facilisis amet.</span></li>
                                <li><i class="tolak-icons-two-badge-check"></i><span>There are many variations of passages of Lorem</span></li>
                                <li><i class="tolak-icons-two-badge-check"></i><span>There are many variations of the passages of available.</span></li>
                            </ul>
                            <a href="{{ url("team") }}" class="tolak-btn-two">
                                <span class="tolak-btn-two__left-star"></span>
                                <span>Our Experts<i class="tolak-icons-two-arrow-right-short"></i></span>
                                <span class="tolak-btn-two__right-star"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight">
                        <div class="skill-two__right">
                            <div class="skill-two__image">
                                <img src="{{ asset("/assets/images/resources/skill-two-1.jpg") }}" alt="tolak">
                            </div>
                            <div class="chart-container wow fadeInUp" data-wow-delay="200ms">
                                <canvas class="skill-two__chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.skill-two -->

        <div class="client-carousel client-carousel--five">
            <div class="container">
                <h5 class="client-carousel--five__title">
                    <span class="client-carousel--five__title__border"></span>
                    <span class="client-carousel--five__title__bg">More Brands Work</span>
                    <span class="client-carousel--five__title__border"></span>
                </h5>
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
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-2-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-2-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-2-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-2-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-2-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-2-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-2-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-2-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-2-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-2-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-2-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-2-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-2-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-2-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-2-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-2-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-2-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-2-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-2-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-2-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

        <section class="project-three" id="project">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="sec-title-three text-left">

                            <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR CASE STUDIES<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                            <h3 class="sec-title-three__title"> Some Companies Offer Projects <br>Consulting Services.</h3><!-- /.sec-title-three__title -->
                        </div><!-- /.sec-title-three -->
                    </div>
                    <div class="col-md-4">
                        <div class="project-three__btn">
                            <a href="{{ url("project") }}" class="tolak-btn-two">
                                <span class="tolak-btn-two__left-star"></span>
                                <span>All Projects<i class="tolak-icons-two-arrow-right-short"></i></span>
                                <span class="tolak-btn-two__right-star"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="project-three__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
				"768": {
					"items": 2
				},
				"992": {
					"items": 3
				}
			}
			}'>
                    <div class="item">
                        <div class="project-three__item">
                            <div class="project-three__item__image">
                                <img src="{{ asset("/assets/images/project/project-3-1.jpg") }}" alt="tolak">
                                <div class="project-three__item__cats">
                                    <a href="{{ url("project") }}">Design</a>
                                </div>
                            </div>
                            <div class="project-three__item__content">
                                <div class="project-three__item__number"></div>
                                <h3 class="project-three__item__title"><a href="{{ url("project-details") }}">Market Solution This Consulting Projects</a></h3>
                                <a href="{{ url("project-details") }}" class="project-three__item__rm"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.project-three__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-three__item">
                            <div class="project-three__item__image">
                                <img src="{{ asset("/assets/images/project/project-3-2.jpg") }}" alt="tolak">
                                <div class="project-three__item__cats">
                                    <a href="{{ url("project") }}">Branding</a>
                                </div>
                            </div>
                            <div class="project-three__item__content">
                                <div class="project-three__item__number"></div>
                                <h3 class="project-three__item__title"><a href="{{ url("project-details") }}">Attract Retain Quality High Paying Customers</a></h3>
                                <a href="{{ url("project-details") }}" class="project-three__item__rm"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.project-three__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-three__item">
                            <div class="project-three__item__image">
                                <img src="{{ asset("/assets/images/project/project-3-3.jpg") }}" alt="tolak">
                                <div class="project-three__item__cats">
                                    <a href="{{ url("project") }}">Software</a>
                                </div>
                            </div>
                            <div class="project-three__item__content">
                                <div class="project-three__item__number"></div>
                                <h3 class="project-three__item__title"><a href="{{ url("project-details") }}">Strong Business Plan Requires Experience</a></h3>
                                <a href="{{ url("project-details") }}" class="project-three__item__rm"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.project-three__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-three__item">
                            <div class="project-three__item__image">
                                <img src="{{ asset("/assets/images/project/project-3-4.jpg") }}" alt="tolak">
                                <div class="project-three__item__cats">
                                    <a href="{{ url("project") }}">Data</a>
                                </div>
                            </div>
                            <div class="project-three__item__content">
                                <div class="project-three__item__number"></div>
                                <h3 class="project-three__item__title"><a href="{{ url("project-details") }}">Technology Website Development Experience</a></h3>
                                <a href="{{ url("project-details") }}" class="project-three__item__rm"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.project-three__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-three__item">
                            <div class="project-three__item__image">
                                <img src="{{ asset("/assets/images/project/project-3-1.jpg") }}" alt="tolak">
                                <div class="project-three__item__cats">
                                    <a href="{{ url("project") }}">Design</a>
                                </div>
                            </div>
                            <div class="project-three__item__content">
                                <div class="project-three__item__number"></div>
                                <h3 class="project-three__item__title"><a href="{{ url("project-details") }}">Market Solution This Consulting Projects</a></h3>
                                <a href="{{ url("project-details") }}" class="project-three__item__rm"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.project-three__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-three__item">
                            <div class="project-three__item__image">
                                <img src="{{ asset("/assets/images/project/project-3-2.jpg") }}" alt="tolak">
                                <div class="project-three__item__cats">
                                    <a href="{{ url("project") }}">Branding</a>
                                </div>
                            </div>
                            <div class="project-three__item__content">
                                <div class="project-three__item__number"></div>
                                <h3 class="project-three__item__title"><a href="{{ url("project-details") }}">Attract Retain Quality High Paying Customers</a></h3>
                                <a href="{{ url("project-details") }}" class="project-three__item__rm"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.project-three__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-three__item">
                            <div class="project-three__item__image">
                                <img src="{{ asset("/assets/images/project/project-3-3.jpg") }}" alt="tolak">
                                <div class="project-three__item__cats">
                                    <a href="{{ url("project") }}">Software</a>
                                </div>
                            </div>
                            <div class="project-three__item__content">
                                <div class="project-three__item__number"></div>
                                <h3 class="project-three__item__title"><a href="{{ url("project-details") }}">Strong Business Plan Requires Experience</a></h3>
                                <a href="{{ url("project-details") }}" class="project-three__item__rm"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.project-three__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-three__item">
                            <div class="project-three__item__image">
                                <img src="{{ asset("/assets/images/project/project-3-4.jpg") }}" alt="tolak">
                                <div class="project-three__item__cats">
                                    <a href="{{ url("project") }}">Data</a>
                                </div>
                            </div>
                            <div class="project-three__item__content">
                                <div class="project-three__item__number"></div>
                                <h3 class="project-three__item__title"><a href="{{ url("project-details") }}">Technology Website Development Experience</a></h3>
                                <a href="{{ url("project-details") }}" class="project-three__item__rm"><span class="tolak-icons-two-arrow-right-short"></span></a>
                            </div>
                        </div><!-- /.project-three__item -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.project-three -->

        <section class="team-three" id="team">
            <div class="container">
                <div class="sec-title-three text-center">

                    <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR TEAM MEMBER<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                    <h3 class="sec-title-three__title">Meet The Team Member Solution</h3><!-- /.sec-title-three__title -->
                </div><!-- /.sec-title-three -->
                <div class="team-three__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav tolak-owl__carousel--with-shadow owl-carousel" data-owl-options='{
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
                        <div class="team-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="team-card-three__image">
                                <img src="{{ asset("/assets/images/team/team-3-1.jpg") }}" alt="Mark Bradley">
                                <div class="team-card-three__social">
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
                                    <div class="team-card-three__social__toggler"><i class="fa fa-plus"></i></div>
                                </div><!-- /.team-card-three__social -->
                            </div><!-- /.team-card-three__image -->
                            <div class="team-card-three__content">
                                <h3 class="team-card-three__title">
                                    <a href="{{ url("team-details") }}">Mark Bradley</a>
                                </h3><!-- /.team-card-three__title -->
                                <p class="team-card-three__designation">Founder</p><!-- /.team-card-three__designation -->
                            </div><!-- /.team-card-three__content -->
                        </div><!-- /.team-card-three -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="team-card-three__image">
                                <img src="{{ asset("/assets/images/team/team-3-2.jpg") }}" alt="Joseph Mitchell">
                                <div class="team-card-three__social">
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
                                    <div class="team-card-three__social__toggler"><i class="fa fa-plus"></i></div>
                                </div><!-- /.team-card-three__social -->
                            </div><!-- /.team-card-three__image -->
                            <div class="team-card-three__content">
                                <h3 class="team-card-three__title">
                                    <a href="{{ url("team-details") }}">Joseph Mitchell</a>
                                </h3><!-- /.team-card-three__title -->
                                <p class="team-card-three__designation">Manager</p><!-- /.team-card-three__designation -->
                            </div><!-- /.team-card-three__content -->
                        </div><!-- /.team-card-three -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="team-card-three__image">
                                <img src="{{ asset("/assets/images/team/team-3-3.jpg") }}" alt="Shiela Stacy">
                                <div class="team-card-three__social">
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
                                    <div class="team-card-three__social__toggler"><i class="fa fa-plus"></i></div>
                                </div><!-- /.team-card-three__social -->
                            </div><!-- /.team-card-three__image -->
                            <div class="team-card-three__content">
                                <h3 class="team-card-three__title">
                                    <a href="{{ url("team-details") }}">Shiela Stacy</a>
                                </h3><!-- /.team-card-three__title -->
                                <p class="team-card-three__designation">Developer</p><!-- /.team-card-three__designation -->
                            </div><!-- /.team-card-three__content -->
                        </div><!-- /.team-card-three -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-three -->

        <section class="faq-two">
            <div class="faq-two__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/faq-bg-2.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft d-flex align-items-center">
                        <div class="faq-two__content">
                            <h2 class="faq-two__content__title">
                                Frequently Asked Questions For It's a Section on Documents
                            </h2>
                            <p class="faq-two__content__text">
                                Business tailored design, management & support services Business
                                business agency elit, sed do eiusmod tempor  majority have
                                in some we form, by injected humour solution.
                            </p>
                            <ul class="faq-two__content__list">
                                <li>
                                    <i class="tolak-icons-two-badge-check"></i>
                                    You solution business will be fully satisfied you are under.
                                </li>
                                <li>
                                    <i class="tolak-icons-two-question"></i>
                                    Where Common Question are Answere
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight">
                        <div class="faq-two__accordion tolak-accrodion" data-grp-name="tolak-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        Maecenas facilisis erat id odio
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <div class="inner__image">
                                            <img src="{{ asset("/assets/images/resources/accordian-logo.png") }}" alt="tolak">
                                        </div>
                                        <p>
                                            Solution the connection, we create business marketing platforms business Solution as slightly believable now.
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
                                            <img src="{{ asset("/assets/images/resources/accordian-logo.png") }}" alt="tolak">
                                        </div>
                                        <p>
                                            Solution the connection, we create business marketing platforms business Solution as slightly believable now.
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
                                            <img src="{{ asset("/assets/images/resources/accordian-logo.png") }}" alt="tolak">
                                        </div>
                                        <p>
                                            Solution the connection, we create business marketing platforms business Solution as slightly believable now.
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        Best service facilisis erat id solution business
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <div class="inner__image">
                                            <img src="{{ asset("/assets/images/resources/accordian-logo.png") }}" alt="tolak">
                                        </div>
                                        <p>
                                            Solution the connection, we create business marketing platforms business Solution as slightly believable now.
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.faq-two -->

        <section class="video-three wow fadeInUp">
            <div class="container">
                <div class="video-three__inner" style="background-image: url(assets/images/backgrounds/video-bg-3.jpg);">
                    <div class="video-three__btn">
                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                            <i class="tolak-icons-two-play"></i>
                        </a>
                        WATCH VIDEO
                    </div>
                </div>
            </div>
        </section><!-- video-one -->

        <section class="testimonials-four" id="testimonial">
            <div class="container">
                <div class="sec-title-three text-center">

                    <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR Testimonials<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                    <h3 class="sec-title-three__title">Client To Review Customer Means to <br>Look Something Memory.</h3><!-- /.sec-title-three__title -->
                </div><!-- /.sec-title-three -->
                <div class="testimonials-four__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
                        <div class="testimonials-card-four">
                            <div class="testimonials-card-four__rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                            </div><!-- /.testimonials-card-four__rating -->
                            <div class="testimonials-card-four__content">
                                Business tailored design, management & support services testimonial business agency elit,
                                sed do eiusmod tempor  majority have in some we form, by injected humour solution.
                            </div><!-- /.testimonials-card-four__content -->
                            <div class="testimonials-card-four__author">
                                <div class="testimonials-card-four__image">
                                    <img src="{{ asset("/assets/images/resources/testi-4-1.jpg") }}" alt="Doris Evans">
                                </div><!-- /.testimonials-card-four__image -->
                                <h3 class="testimonials-card-four__name">
                                    Doris Evans
                                </h3><!-- /.testimonials-card-four__name -->
                                <p class="testimonials-card-four__designation">Founder</p><!-- /.testimonials-card-four__designation -->
                            </div><!-- testimonials-card-four__author -->
                            <div class="testimonials-card-four__quote">
                                <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-three.png") }}" alt="quote">
                            </div><!-- /.testimonials-card-four__quote -->
                        </div><!-- /.testimonials-card-four -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-four">
                            <div class="testimonials-card-four__rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                            </div><!-- /.testimonials-card-four__rating -->
                            <div class="testimonials-card-four__content">
                                Business tailored design, management & support services testimonial business agency elit,
                                sed do eiusmod tempor  majority have in some we form, by injected humour solution.
                            </div><!-- /.testimonials-card-four__content -->
                            <div class="testimonials-card-four__author">
                                <div class="testimonials-card-four__image">
                                    <img src="{{ asset("/assets/images/resources/testi-4-2.jpg") }}" alt="Mark Bradley">
                                </div><!-- /.testimonials-card-four__image -->
                                <h3 class="testimonials-card-four__name">
                                    Mark Bradley
                                </h3><!-- /.testimonials-card-four__name -->
                                <p class="testimonials-card-four__designation">Manager</p><!-- /.testimonials-card-four__designation -->
                            </div><!-- testimonials-card-four__author -->
                            <div class="testimonials-card-four__quote">
                                <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-three.png") }}" alt="quote">
                            </div><!-- /.testimonials-card-four__quote -->
                        </div><!-- /.testimonials-card-four -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-four">
                            <div class="testimonials-card-four__rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                            </div><!-- /.testimonials-card-four__rating -->
                            <div class="testimonials-card-four__content">
                                Business tailored design, management & support services testimonial business agency elit,
                                sed do eiusmod tempor  majority have in some we form, by injected humour solution.
                            </div><!-- /.testimonials-card-four__content -->
                            <div class="testimonials-card-four__author">
                                <div class="testimonials-card-four__image">
                                    <img src="{{ asset("/assets/images/resources/testi-4-1.jpg") }}" alt="Doris Evans">
                                </div><!-- /.testimonials-card-four__image -->
                                <h3 class="testimonials-card-four__name">
                                    Doris Evans
                                </h3><!-- /.testimonials-card-four__name -->
                                <p class="testimonials-card-four__designation">Founder</p><!-- /.testimonials-card-four__designation -->
                            </div><!-- testimonials-card-four__author -->
                            <div class="testimonials-card-four__quote">
                                <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-three.png") }}" alt="quote">
                            </div><!-- /.testimonials-card-four__quote -->
                        </div><!-- /.testimonials-card-four -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-four">
                            <div class="testimonials-card-four__rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                            </div><!-- /.testimonials-card-four__rating -->
                            <div class="testimonials-card-four__content">
                                Business tailored design, management & support services testimonial business agency elit,
                                sed do eiusmod tempor  majority have in some we form, by injected humour solution.
                            </div><!-- /.testimonials-card-four__content -->
                            <div class="testimonials-card-four__author">
                                <div class="testimonials-card-four__image">
                                    <img src="{{ asset("/assets/images/resources/testi-4-2.jpg") }}" alt="Mark Bradley">
                                </div><!-- /.testimonials-card-four__image -->
                                <h3 class="testimonials-card-four__name">
                                    Mark Bradley
                                </h3><!-- /.testimonials-card-four__name -->
                                <p class="testimonials-card-four__designation">Manager</p><!-- /.testimonials-card-four__designation -->
                            </div><!-- testimonials-card-four__author -->
                            <div class="testimonials-card-four__quote">
                                <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-three.png") }}" alt="quote">
                            </div><!-- /.testimonials-card-four__quote -->
                        </div><!-- /.testimonials-card-four -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-four">
                            <div class="testimonials-card-four__rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                            </div><!-- /.testimonials-card-four__rating -->
                            <div class="testimonials-card-four__content">
                                Business tailored design, management & support services testimonial business agency elit,
                                sed do eiusmod tempor  majority have in some we form, by injected humour solution.
                            </div><!-- /.testimonials-card-four__content -->
                            <div class="testimonials-card-four__author">
                                <div class="testimonials-card-four__image">
                                    <img src="{{ asset("/assets/images/resources/testi-4-1.jpg") }}" alt="Doris Evans">
                                </div><!-- /.testimonials-card-four__image -->
                                <h3 class="testimonials-card-four__name">
                                    Doris Evans
                                </h3><!-- /.testimonials-card-four__name -->
                                <p class="testimonials-card-four__designation">Founder</p><!-- /.testimonials-card-four__designation -->
                            </div><!-- testimonials-card-four__author -->
                            <div class="testimonials-card-four__quote">
                                <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-three.png") }}" alt="quote">
                            </div><!-- /.testimonials-card-four__quote -->
                        </div><!-- /.testimonials-card-four -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-four">
                            <div class="testimonials-card-four__rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                            </div><!-- /.testimonials-card-four__rating -->
                            <div class="testimonials-card-four__content">
                                Business tailored design, management & support services testimonial business agency elit,
                                sed do eiusmod tempor  majority have in some we form, by injected humour solution.
                            </div><!-- /.testimonials-card-four__content -->
                            <div class="testimonials-card-four__author">
                                <div class="testimonials-card-four__image">
                                    <img src="{{ asset("/assets/images/resources/testi-4-2.jpg") }}" alt="Mark Bradley">
                                </div><!-- /.testimonials-card-four__image -->
                                <h3 class="testimonials-card-four__name">
                                    Mark Bradley
                                </h3><!-- /.testimonials-card-four__name -->
                                <p class="testimonials-card-four__designation">Manager</p><!-- /.testimonials-card-four__designation -->
                            </div><!-- testimonials-card-four__author -->
                            <div class="testimonials-card-four__quote">
                                <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-three.png") }}" alt="quote">
                            </div><!-- /.testimonials-card-four__quote -->
                        </div><!-- /.testimonials-card-four -->
                    </div><!-- /.item -->
                </div><!-- /.testimonials-four__carousel -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-four -->

        <section class="why-choose-three">
            <div class="why-choose-three__bg" style="background-image: url(assets/images/backgrounds/why-choose-3-bg.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="tolak-stretch-element-inside-column">
                            <div class="why-choose-three__image wow slideInLeft">
                                <img src="{{ asset("/assets/images/resources/why-choose-3-1.jpg") }}" alt="tolak">
                            </div><!-- /.why-choose-three__image -->
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                        <div class="why-choose-three__content">
                            <div class="sec-title-three text-left">

                                <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>Why Choose Us<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                                <h3 class="sec-title-three__title">Choose The Best IT Service For Company Solution</h3><!-- /.sec-title-three__title -->
                            </div><!-- /.sec-title-three -->
                            <p class="why-choose-three__content__text">
                                Business tailored design, management & support services Business business agency elit, sed do eiusmod tempor
                                majority have in some we form, by injected humour solution.
                            </p>
                            <ul class="why-choose-three__content__list">
                                <li>
                                    <span class="why-choose-three__content__list__number"></span>
                                    <span class="why-choose-three__content__list__icon"><i class="tolak-icons-two-global-solution"></i></span>
                                    Accelerate Innovation Tech Teams
                                    <a class="why-choose-three__content__list__rm" href="{{ url("team") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                                </li>
                                <li>
                                    <span class="why-choose-three__content__list__number"></span>
                                    <span class="why-choose-three__content__list__icon"><i class="tolak-icons-two-solutions-three"></i></span>
                                    Network Infrastructure software
                                    <a class="why-choose-three__content__list__rm" href="{{ url("about") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                                </li>
                                <li>
                                    <span class="why-choose-three__content__list__number"></span>
                                    <span class="why-choose-three__content__list__icon"><i class="tolak-icons-two-gear"></i></span>
                                    We Provide This Solution Business
                                    <a class="why-choose-three__content__list__rm" href="{{ url("services") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                                </li>
                            </ul>
                        </div><!-- /.why-choose-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.why-choose-three -->

        <!-- CTA Start -->
        <section class="cta-seven" style="background-image: url(assets/images/shapes/cta-7-bg.png);">
            <div class="cta-seven__shape-one" style="background-image: url(assets/images/resources/cta-7-1.png);"></div>
            <div class="cta-seven__shape-two" style="background-image: url(assets/images/shapes/cta-7-2.png);"></div>
            <div class="cta-seven__shape-three" style="background-image: url(assets/images/shapes/cta-7-3.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 wow fadeInLeft" data-wow-delay="00ms">
                        <div class="cta-seven__content">
                            <h2 class="cta-seven__content__title">Client To Review Customer Means to <br>Look Something Memory.</h2>
                            <ul class="cta-seven__box">
                                <li>
                                    <div class="cta-seven__box__icon"><span class="tolak-icons-two-phone-call"></span></div>
                                    <h4 class="cta-seven__box__title">Get Contact Now</h4>
                                    <p class="cta-seven__box__text"><a href="{{ url("tel:+11234751328") }}">+11234 751 328</a></p>
                                </li>
                                <li>
                                    <div class="cta-seven__box__icon"><span class="tolak-icons-two-mail"></span></div>
                                    <h4 class="cta-seven__box__title">Sent Email</h4>
                                    <p class="cta-seven__box__text"><a href="{{ url("mailto:tolak@envato.com") }}">tolak@envato.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-end wow fadeInUp" data-wow-delay="100ms">
                        <a href="{{ url("contact") }}" class="tolak-btn-two">
                            <span class="tolak-btn-two__left-star"></span>
                            <span>Contact Us<i class="tolak-icons-two-arrow-right-short"></i></span>
                            <span class="tolak-btn-two__right-star"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA End -->

        <section class="blog-four" id="blog">
            <div class="container">
                <div class="blog-four__wrapper">
                    <div class="sec-title-three text-center">

                        <h6 class="sec-title-three__tagline"><span class="sec-title-three__tagline__left-border"></span>OUR Latest blog<span class="sec-title-three__tagline__right-border"></span></h6><!-- /.sec-title-three__tagline -->

                        <h3 class="sec-title-three__title">The Best Solution News And Blog</h3><!-- /.sec-title-three__title -->
                    </div><!-- /.sec-title-three -->
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
                            <div class="blog-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                                <div class="blog-card-four__image">
                                    <img src="{{ asset("/assets/images/blog/blog-4-1.png") }}" alt="We Solution For This Consulting Blog">
                                    <img src="{{ asset("/assets/images/blog/blog-4-1.png") }}" alt="We Solution For This Consulting Blog">
                                    <div class="blog-card-four__date">
                                        <i class="icofont-calendar"></i>15 Nov 2023
                                    </div><!-- /.blog-card-four__date -->
                                    <a href="{{ url("blog-details-right") }}" class="blog-card-four__image__link"><span class="sr-only">We Solution For This Consulting Blog</span><!-- /.sr-only --></a>
                                </div><!-- /.blog-card-four__image -->
                                <div class="blog-card-four__content">
                                    <ul class="list-unstyled blog-card-four__meta">
                                        <li><i class="tolak-icons-two-user"></i>By: <a href="{{ url("blog-list-right") }}">Admin</a></li>
                                        <li><i class="tolak-icons-two-comments"></i>Comments (2)</li>
                                    </ul>
                                    <h3 class="blog-card-four__title"><a href="{{ url("blog-details-right") }}">We Solution For This Consulting Blog</a></h3><!-- /.blog-card-four__title -->
                                    <p class="blog-card-four__text">Business tailored design of this in some we form solution.</p><!-- /.blog-card-four__text -->
                                    <a class="blog-card-four__rm" href="{{ url("blog-details-right") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                                </div><!-- /.blog-card-four__content -->
                            </div><!-- /.blog-card-four -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="blog-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="blog-card-four__image">
                                    <img src="{{ asset("/assets/images/blog/blog-4-2.png") }}" alt="Are you Looking For a Solution Related">
                                    <img src="{{ asset("/assets/images/blog/blog-4-2.png") }}" alt="Are you Looking For a Solution Related">
                                    <div class="blog-card-four__date">
                                        <i class="icofont-calendar"></i>20 Nov 2023
                                    </div><!-- /.blog-card-four__date -->
                                    <a href="{{ url("blog-details-right") }}" class="blog-card-four__image__link"><span class="sr-only">Are you Looking For a Solution Related</span><!-- /.sr-only --></a>
                                </div><!-- /.blog-card-four__image -->
                                <div class="blog-card-four__content">
                                    <ul class="list-unstyled blog-card-four__meta">
                                        <li><i class="tolak-icons-two-user"></i>By: <a href="{{ url("blog-list-right") }}">Admin</a></li>
                                        <li><i class="tolak-icons-two-comments"></i>Comments (2)</li>
                                    </ul>
                                    <h3 class="blog-card-four__title"><a href="{{ url("blog-details-right") }}">Are you Looking For a Solution Related</a></h3><!-- /.blog-card-four__title -->
                                    <p class="blog-card-four__text">Business tailored design of this in some we form solution.</p><!-- /.blog-card-four__text -->
                                    <a class="blog-card-four__rm" href="{{ url("blog-details-right") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                                </div><!-- /.blog-card-four__content -->
                            </div><!-- /.blog-card-four -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="blog-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                <div class="blog-card-four__image">
                                    <img src="{{ asset("/assets/images/blog/blog-4-3.png") }}" alt="This Specific IT Issue as Network Security">
                                    <img src="{{ asset("/assets/images/blog/blog-4-3.png") }}" alt="This Specific IT Issue as Network Security">
                                    <div class="blog-card-four__date">
                                        <i class="icofont-calendar"></i>25 Nov 2023
                                    </div><!-- /.blog-card-four__date -->
                                    <a href="{{ url("blog-details-right") }}" class="blog-card-four__image__link"><span class="sr-only">This Specific IT Issue as Network Security</span><!-- /.sr-only --></a>
                                </div><!-- /.blog-card-four__image -->
                                <div class="blog-card-four__content">
                                    <ul class="list-unstyled blog-card-four__meta">
                                        <li><i class="tolak-icons-two-user"></i>By: <a href="{{ url("blog-list-right") }}">Admin</a></li>
                                        <li><i class="tolak-icons-two-comments"></i>Comments (2)</li>
                                    </ul>
                                    <h3 class="blog-card-four__title"><a href="{{ url("blog-details-right") }}">This Specific IT Issue as Network Security</a></h3><!-- /.blog-card-four__title -->
                                    <p class="blog-card-four__text">Business tailored design of this in some we form solution.</p><!-- /.blog-card-four__text -->
                                    <a class="blog-card-four__rm" href="{{ url("blog-details-right") }}"><span class="tolak-icons-two-arrow-right-short"></span></a>
                                </div><!-- /.blog-card-four__content -->
                            </div><!-- /.blog-card-four -->
                        </div><!-- /.item -->
                    </div><!-- /.row -->
                </div>
            </div><!-- /.container -->
        </section><!-- /.blog-two -->

        <section class="mail-section-two mail-section-two--home-five">
            <div class="container">
                <div class="mail-section-two__wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mail-section-two__content">
                                <div class="mail-section-two__content__icon"><i class="icon-messages"></i></div>
                                <h3 class="mail-section-two__content__title">Subscribe Your News<br> Latter Solutions?</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form action="#" data-url="MAILCHIMP_FORM_URL" class="mail-section-two__newsletter mc-form">
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

<x-footerFour/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection