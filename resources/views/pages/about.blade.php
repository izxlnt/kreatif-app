
@extends('layouts.layout2')
@section('title', 'About || Tolak || Tolak Laravel Template')
@php
    $title = 'About Page';
    $subtitle = 'About Page';
@endphp
@section('content')

<x-strickyHeader/>

        <!--Start About One-->
        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-three__image">
                            <div class="about-three__image__shape">
                                <img src="{{ asset('assets/images/shapes/about-3-shape-1.png') }}" alt="tolak">
                            </div>
                            <div class="about-three__image__shape-two">
                                <img src="{{ asset('assets/images/shapes/about-3-shape-2.png') }}" alt="tolak">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="about-three__image__one">
                                        <img src="{{ asset('assets/images/resources/about-3-1.jpg') }}" alt="tolak">
                                    </div>
                                    <div class="about-three__fact count-box">
                                        <div class="about-three__fact__icon">
                                            <i class="icon-check-mark"></i>
                                        </div>
                                        <h3 class="about-three__fact__count">
                                            <span class="count-text" data-stop="1283" data-speed="1500"></span>k+
                                        </h3>
                                        <p class="about-three__fact__text">Complete Project</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-three__image__two">
                                        <img src="{{ asset('assets/images/resources/about-3-2.jpg') }}" alt="tolak">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="about-three__content">
                            <div class="sec-title-two text-left">
                                <h6 class="sec-title-two__tagline">
                                    <span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>
                                    Our About Now
                                    <span class="sec-title-two__tagline__right icofont-rounded-double-right"></span>
                                </h6>
                                <h3 class="sec-title-two__title">About is Over 291+ Company Business Solution.</h3>
                            </div>
                            <p class="about-three__content__text">
                                Business tailored it design, management & support services<br> business agency elit, sed do eiusmod tempor.
                            </p>
                            <div class="about-three__content__bar"></div>
                            <div class="row">
                                <div class="col-md-5">
                                    <ul class="about-three__content__list">
                                        <li>Company and Research</li>
                                        <li>Business and research</li>
                                    </ul>
                                </div>
                                <div class="col-md-7">
                                    <div class="about-three__content__skill">
                                        <div class="progress-box">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#3d72fc" data-bgColor="#c8c8c8" data-width="60" data-height="60" data-linecap="normal" value="45">
                                                <div class="inner-text count-box">
                                                    <span class="count-text" data-stop="45" data-speed="2000"></span>
                                                    <span class="count-Parsent">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="about-three__content__skill__title">Solution Business</h5>
                                        <p class="about-three__content__skill__text">Level is high</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-three__content__quote">
                                If you are accused of committing a crime, you will the very best criminal defense attorneys.
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="about-three__content__btn">
                                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                            <i class="fa fa-play"></i>
                                            <span class="video-popup__btn-ripple"></span>
                                        </a>
                                        Watcing video
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="about-three__content__author">
                                        <div class="about-three__content__author__image">
                                            <img src="{{ asset('assets/images/resources/about-3-author.jpg') }}" alt="tolak">
                                        </div>
                                        <img src="{{ asset('assets/images/resources/about-sign.png') }}" alt="tolak">
                                        <p class="about-three__content__author__text">Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About One-->

        <section class="funfact-two">
            <div class="container">
                <ul class="list-unstyled funfact-two__list">
                    <li class="funfact-two__item count-box">
                        <div class="funfact-two__icon"><i class="icon-briefing"></i></div>
                        <div class="funfact-two__content">
                            <h3 class="funfact-two__count"><span class="count-text" data-stop="426" data-speed="1500"></span> k+</h3>
                            <p class="funfact-two__text">Completed Project</p>
                        </div>
                    </li>
                    <li class="funfact-two__item count-box">
                        <div class="funfact-two__icon"><i class="icon-ancestors"></i></div>
                        <div class="funfact-two__content">
                            <h3 class="funfact-two__count"><span class="count-text" data-stop="1425" data-speed="1500"></span> +</h3>
                            <p class="funfact-two__text">Happy Clients</p>
                        </div>
                    </li>
                    <li class="funfact-two__item count-box">
                        <div class="funfact-two__icon"><i class="icon-admin"></i></div>
                        <div class="funfact-two__content">
                            <h3 class="funfact-two__count"><span class="count-text" data-stop="750" data-speed="1500"></span> +</h3>
                            <p class="funfact-two__text">Business Partners</p>
                        </div>
                    </li>
                    <li class="funfact-two__item count-box">
                        <div class="funfact-two__icon"><i class="icon-trophy"></i></div>
                        <div class="funfact-two__content">
                            <h3 class="funfact-two__count"><span class="count-text" data-stop="884" data-speed="1500"></span> k+</h3>
                            <p class="funfact-two__text">Award Win</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- CTA Start -->
        <section class="cta-one cta-one--reverse">
            <div class="cta-one__bg">
                <div class="cta-one__bg__shape" style="background-image: url({{ asset('assets/images/shapes/cta-bg-1-rtl.png') }});"></div>
            </div>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="100ms">
                        <div class="cta-one__content">
                            <div class="cta-one__box">
                                <div class="cta-one__box__icon"><span class="icon-best-price"></span></div>
                                <h3 class="cta-one__box__title">Solution System Design</h3>
                                <p class="cta-one__box__text">Every team has a culture and set of ct ations that have either been aed orsve naturally evolved.</p>
                            </div>
                            <div class="cta-one__author">
                                <img src="{{ asset('assets/images/resources/cta-1-author-1.jpg') }}" alt="tolak">
                                <img src="{{ asset('assets/images/resources/cta-1-author-2.jpg') }}" alt="tolak">
                                <img src="{{ asset('assets/images/resources/cta-1-author-3.jpg') }}" alt="tolak">
                                <a class="cta-one__author__rm" href="{{ url('contact') }}">More <span class="fas fa-arrow-right"></span></a>
                            </div>
                            <p class="cta-one__content__text">29,0000 customers with our services <a href="{{ url('contact') }}">( Let’s Started )</a></p>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="100ms">
                        <div class="cta-one__image">
                            <img src="{{ asset('assets/images/resources/cta-1-1.jpg') }}" alt="tolak">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA End -->

        <!-- Service Start -->
        <section class="service-two service-two--about">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Best Service<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">We Leadership This Service</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="service-two__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
                        <div class="service-two__item wow fadeInUp" data-wow-delay="100ms">
                            <div class="service-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/service-2-1.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-two__item__normal">
                                <div class="service-two__item__normal__icon"><span class="icon-cooperation"></span></div>
                                <h3 class="service-two__item__normal__title">Business of Growth</h3>
                            </div><!-- normal-content -->
                            <div class="service-two__item__hover">
                                <div class="service-two__item__normal__icon"><span class="icon-cooperation"></span></div>
                                <h3 class="service-two__item__hover__title">
                                    <a href="{{ url("business-growth") }}">Business of Growth</a>
                                </h3>
                                <p class="service-two__item__hover__text">We businesss standard chunk of Ipsum used since...</p>
                                <a class="service-two__item__hover__btn" href="{{ url("business-growth") }}"><span class="icon-right-arrow"></span></a>
                            </div><!-- hover-content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-two__item wow fadeInUp" data-wow-delay="150ms">
                            <div class="service-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/service-2-2.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-two__item__normal">
                                <div class="service-two__item__normal__icon"><span class="icon-ads-campaign"></span></div>
                                <h3 class="service-two__item__normal__title">Solution to Business</h3>
                            </div><!-- normal-content -->
                            <div class="service-two__item__hover">
                                <div class="service-two__item__normal__icon"><span class="icon-ads-campaign"></span></div>
                                <h3 class="service-two__item__hover__title">
                                    <a href="{{ url("business-solution") }}">Solution to Business</a>
                                </h3>
                                <p class="service-two__item__hover__text">We businesss standard chunk of Ipsum used since...</p>
                                <a class="service-two__item__hover__btn" href="{{ url("business-solution") }}"><span class="icon-right-arrow"></span></a>
                            </div><!-- hover-content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-two__item wow fadeInUp" data-wow-delay="200ms">
                            <div class="service-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/service-2-3.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-two__item__normal">
                                <div class="service-two__item__normal__icon"><span class="icon-headhunter"></span></div>
                                <h3 class="service-two__item__normal__title">Markting of Solution</h3>
                            </div><!-- normal-content -->
                            <div class="service-two__item__hover">
                                <div class="service-two__item__normal__icon"><span class="icon-headhunter"></span></div>
                                <h3 class="service-two__item__hover__title">
                                    <a href="{{ url("marketing-solution") }}">Markting of Solution</a>
                                </h3>
                                <p class="service-two__item__hover__text">We businesss standard chunk of Ipsum used since...</p>
                                <a class="service-two__item__hover__btn" href="{{ url("marketing-solution") }}"><span class="icon-right-arrow"></span></a>
                            </div><!-- hover-content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-two__item wow fadeInUp" data-wow-delay="250ms">
                            <div class="service-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/service-2-4.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-two__item__normal">
                                <div class="service-two__item__normal__icon"><span class="icon-agency"></span></div>
                                <h3 class="service-two__item__normal__title">Technology Services</h3>
                            </div><!-- normal-content -->
                            <div class="service-two__item__hover">
                                <div class="service-two__item__normal__icon"><span class="icon-agency"></span></div>
                                <h3 class="service-two__item__hover__title">
                                    <a href="{{ url("technology-services") }}">Technology Services</a>
                                </h3>
                                <p class="service-two__item__hover__text">We businesss standard chunk of Ipsum used since...</p>
                                <a class="service-two__item__hover__btn" href="{{ url("technology-services") }}"><span class="icon-right-arrow"></span></a>
                            </div><!-- hover-content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-two__item wow fadeInUp" data-wow-delay="300ms">
                            <div class="service-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/service-2-5.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-two__item__normal">
                                <div class="service-two__item__normal__icon"><span class="icon-advertisig-agency"></span></div>
                                <h3 class="service-two__item__normal__title">Marketing Business</h3>
                            </div><!-- normal-content -->
                            <div class="service-two__item__hover">
                                <div class="service-two__item__normal__icon"><span class="icon-advertisig-agency"></span></div>
                                <h3 class="service-two__item__hover__title">
                                    <a href="{{ url("business-marketing") }}">Marketing Business</a>
                                </h3>
                                <p class="service-two__item__hover__text">We businesss standard chunk of Ipsum used since...</p>
                                <a class="service-two__item__hover__btn" href="{{ url("business-marketing") }}"><span class="icon-right-arrow"></span></a>
                            </div><!-- hover-content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-two__item wow fadeInUp" data-wow-delay="350ms">
                            <div class="service-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/service-2-6.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-two__item__normal">
                                <div class="service-two__item__normal__icon"><span class="icon-management"></span></div>
                                <h3 class="service-two__item__normal__title">Support of Business</h3>
                            </div><!-- normal-content -->
                            <div class="service-two__item__hover">
                                <div class="service-two__item__normal__icon"><span class="icon-management"></span></div>
                                <h3 class="service-two__item__hover__title">
                                    <a href="{{ url("business-support") }}">Support of Business</a>
                                </h3>
                                <p class="service-two__item__hover__text">We businesss standard chunk of Ipsum used since...</p>
                                <a class="service-two__item__hover__btn" href="{{ url("business-support") }}"><span class="icon-right-arrow"></span></a>
                            </div><!-- hover-content -->
                        </div><!-- /.service-card-two -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->

        <section class="testimonials-two testimonials-two--about">
            <div class="testimonials-two__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/testimonial-bg-2.jpg);"></div>
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our testimonial say<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">What Customers Awesome Reviews</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="testimonials-two__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
                        <div class="testimonials-card-two">
                            <div class="testimonials-card-two__top">
                                <div class="testimonials-card-two__rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div><!-- /.testimonials-card-two__rating -->
                                <div class="testimonials-card-two__quote">
                                    <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                                </div><!-- /.testimonials-card-two__quote -->
                                <div class="testimonials-card-two__content">
                                    A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                                </div><!-- /.testimonials-card-two__content -->
                            </div>
                            <div class="testimonials-card-two__author">
                                <div class="testimonials-card-two__image">
                                    <img src="{{ asset("/assets/images/resources/testi-1-4.jpg") }}" alt="Lataro Marsena">
                                </div><!-- /.testimonials-card-two__image -->
                                <h3 class="testimonials-card-two__name">
                                    Lataro Marsena
                                </h3><!-- /.testimonials-card-two__name -->
                                <p class="testimonials-card-two__designation">Founder Ceo</p><!-- /.testimonials-card-two__designation -->
                            </div>
                        </div><!-- /.testimonials-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-two">
                            <div class="testimonials-card-two__top">
                                <div class="testimonials-card-two__rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div><!-- /.testimonials-card-two__rating -->
                                <div class="testimonials-card-two__quote">
                                    <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                                </div><!-- /.testimonials-card-two__quote -->
                                <div class="testimonials-card-two__content">
                                    A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                                </div><!-- /.testimonials-card-two__content -->
                            </div>
                            <div class="testimonials-card-two__author">
                                <div class="testimonials-card-two__image">
                                    <img src="{{ asset("/assets/images/resources/testi-1-5.jpg") }}" alt="Marsena Baran">
                                </div><!-- /.testimonials-card-two__image -->
                                <h3 class="testimonials-card-two__name">
                                    Marsena Baran
                                </h3><!-- /.testimonials-card-two__name -->
                                <p class="testimonials-card-two__designation">Founder</p><!-- /.testimonials-card-two__designation -->
                            </div>
                        </div><!-- /.testimonials-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-two">
                            <div class="testimonials-card-two__top">
                                <div class="testimonials-card-two__rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div><!-- /.testimonials-card-two__rating -->
                                <div class="testimonials-card-two__quote">
                                    <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                                </div><!-- /.testimonials-card-two__quote -->
                                <div class="testimonials-card-two__content">
                                    A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                                </div><!-- /.testimonials-card-two__content -->
                            </div>
                            <div class="testimonials-card-two__author">
                                <div class="testimonials-card-two__image">
                                    <img src="{{ asset("/assets/images/resources/testi-1-3.jpg") }}" alt="David Cooper">
                                </div><!-- /.testimonials-card-two__image -->
                                <h3 class="testimonials-card-two__name">
                                    David Cooper
                                </h3><!-- /.testimonials-card-two__name -->
                                <p class="testimonials-card-two__designation">Manager</p><!-- /.testimonials-card-two__designation -->
                            </div>
                        </div><!-- /.testimonials-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-two">
                            <div class="testimonials-card-two__top">
                                <div class="testimonials-card-two__rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div><!-- /.testimonials-card-two__rating -->
                                <div class="testimonials-card-two__quote">
                                    <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                                </div><!-- /.testimonials-card-two__quote -->
                                <div class="testimonials-card-two__content">
                                    A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                                </div><!-- /.testimonials-card-two__content -->
                            </div>
                            <div class="testimonials-card-two__author">
                                <div class="testimonials-card-two__image">
                                    <img src="{{ asset("/assets/images/resources/testi-1-4.jpg") }}" alt="Mike Hardson">
                                </div><!-- /.testimonials-card-two__image -->
                                <h3 class="testimonials-card-two__name">
                                    Mike Hardson
                                </h3><!-- /.testimonials-card-two__name -->
                                <p class="testimonials-card-two__designation">Customer</p><!-- /.testimonials-card-two__designation -->
                            </div>
                        </div><!-- /.testimonials-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-two">
                            <div class="testimonials-card-two__top">
                                <div class="testimonials-card-two__rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div><!-- /.testimonials-card-two__rating -->
                                <div class="testimonials-card-two__quote">
                                    <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                                </div><!-- /.testimonials-card-two__quote -->
                                <div class="testimonials-card-two__content">
                                    A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                                </div><!-- /.testimonials-card-two__content -->
                            </div>
                            <div class="testimonials-card-two__author">
                                <div class="testimonials-card-two__image">
                                    <img src="{{ asset("/assets/images/resources/testi-1-1.jpg") }}" alt="Mark Smith">
                                </div><!-- /.testimonials-card-two__image -->
                                <h3 class="testimonials-card-two__name">
                                    Mark Smith
                                </h3><!-- /.testimonials-card-two__name -->
                                <p class="testimonials-card-two__designation">Reviwers</p><!-- /.testimonials-card-two__designation -->
                            </div>
                        </div><!-- /.testimonials-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-two">
                            <div class="testimonials-card-two__top">
                                <div class="testimonials-card-two__rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div><!-- /.testimonials-card-two__rating -->
                                <div class="testimonials-card-two__quote">
                                    <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                                </div><!-- /.testimonials-card-two__quote -->
                                <div class="testimonials-card-two__content">
                                    A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                                </div><!-- /.testimonials-card-two__content -->
                            </div>
                            <div class="testimonials-card-two__author">
                                <div class="testimonials-card-two__image">
                                    <img src="{{ asset("/assets/images/resources/testi-1-2.jpg") }}" alt="David Cooper">
                                </div><!-- /.testimonials-card-two__image -->
                                <h3 class="testimonials-card-two__name">
                                    David Cooper
                                </h3><!-- /.testimonials-card-two__name -->
                                <p class="testimonials-card-two__designation">Co Founder</p><!-- /.testimonials-card-two__designation -->
                            </div>
                        </div><!-- /.testimonials-card-two -->
                    </div><!-- /.item -->
                </div><!-- /.testimonials-two__carousel -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-two -->

        <section class="faq-one">
            <div class="container">
                <div class="row">
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
                </div>
            </div><!-- /.container -->
        </section><!-- /.faq-one -->

        <section class="team-one">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Team Member<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">Meet Great Customer Service</h3><!-- /.sec-title-two__title -->
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

        <section class="mail-section-two">
            <div class="container">
                <div class="mail-section-two__wrapper">
                    <div class="mail-section-two__bg" style="background-image: url(assets/images/shapes/mail-bg.png);"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mail-section-two__content">
                                <div class="mail-section-two__content__icon"><i class="icon-messages"></i></div>
                                <h3 class="mail-section-two__content__title">Subscribe To Our Newsletter</h3>
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

<x-footerTwo/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection