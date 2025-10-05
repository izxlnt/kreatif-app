
@extends('layouts.layout2')
@section('title', 'Error Page || Tolak || Tolak Laravel Template')
@php
    $title = 'Error Page';
    $subtitle = 'Error Page';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="error-404">
            <div class="container">
                <h2 class="error-404__title">
                    Error 404
                </h2><!-- /.error-404__title -->
                <div class="error-404__image wow fadeInUp">
                    <img src="{{ asset("/assets/images/resources/404.jpg") }}" alt="tolak">
                </div><!-- /.error-404__title -->
                <h3 class="error-404__sub-title">Page not found</h3><!-- /.error-404__title -->
                <p class="error-404__text">Sorry This Page Not found take a look at our most popular</p><!-- /.error-404__text -->
                <div class="error-404__btns">
                    <a href="{{ url("/") }}" class="tolak-btn"><b>Go To Home</b><span></span></a>
                </div><!-- /.error-404__btns -->
            </div><!-- /.container -->
        </section><!-- /.error-404 -->

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