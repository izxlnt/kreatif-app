
@extends('layouts.layout2')
@section('title', 'Pricing Page || Tolak || Tolak Laravel Template')
@php
    $title = 'Pricing Page';
    $subtitle = 'Pricing';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="pricing-one">
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