
@extends('layouts.layout2')
@section('title', 'Service Page || Tolak || Tolak Laravel Template')
@php
    $title = 'Service Page';
    $subtitle = 'Services';
@endphp
@section('content')

<x-strickyHeader/>

        <!-- Service Start -->
        <section class="service-two service-two--page">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Best Service<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">We Leadership This Service</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6">
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
                    <div class="col-lg-4 col-md-6">
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
                    <div class="col-lg-4 col-md-6">
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
                    <div class="col-lg-4 col-md-6">
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
                    <div class="col-lg-4 col-md-6">
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
                    <div class="col-lg-4 col-md-6">
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