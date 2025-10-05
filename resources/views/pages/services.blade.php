
@extends('layouts.layout2')
@section('title', 'Service Page || Tolak || Tolak Laravel Template')
@php
    $title = 'Service Page';
    $subtitle = 'Services';
@endphp
@section('content')

<x-strickyHeader/>

        <!-- Service Start -->
        <section class="service-one">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Best Service<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">We Leadership This Service</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
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
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="150ms">
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
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
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
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="250ms">
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
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
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
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="350ms">
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
        </section>
        <!-- Service End -->

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