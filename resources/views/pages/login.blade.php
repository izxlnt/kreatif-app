
@extends('layouts.layout2')
@section('title', 'Login || Tolak || Tolak Laravel Template')
@php
    $title = 'Login';
    $subtitle = 'Login';
@endphp
@section('content')

<x-strickyHeader/>

        <!-- Login Start -->
        <section class="login-page">
            <div class="container">
                <div class="login-page__info">
                    <p>We have a demo account setup. <span>Username:</span> <a href="{{ url("login") }}">demo</a> and <span>
                            Password:</span> <a href="{{ url("login") }}">demo</a></p>
                </div><!-- login-info -->
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp animated" data-wow-delay="300ms">
                        <div class="login-page__wrap">
                            <h3 class="login-page__wrap__title">Login</h3>
                            <form class="login-page__form">
                                <div class="login-page__form-input-box">
                                    <input type="email" placeholder="Username of email *">
                                </div>
                                <div class="login-page__form-input-box">
                                    <input type="password" placeholder="Password *">
                                </div>
                                <div class="login-page__checked-box">
                                    <input type="checkbox" name="save-data" id="save-data">
                                    <label for="save-data"><span></span>Remember Me?</label>
                                </div>
                                <div class="login-page__form-btn-box">
                                    <button type="submit" class="tolak-btn tolak-btn--base">
                                        <b>Login</b><span></span>
                                    </button>
                                    <div class="login-page__form-forgot-password">
                                        <a href="{{ url("login") }}">Forgot your Passowrd?</a>
                                    </div>
                                </div>
                            </form>
                        </div><!-- login-form -->
                    </div>
                    <div class="col-lg-6 wow fadeInUp animated" data-wow-delay="400ms">
                        <div class="login-page__wrap">
                            <h3 class="login-page__wrap__title">Register</h3>
                            <form class="login-page__form">
                                <div class="login-page__form-input-box">
                                    <input type="email" placeholder="Email address">
                                </div>
                                <div class="login-page__form-input-box">
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="login-page__checked-box">
                                    <input type="checkbox" name="accept-policy" id="accept-policy">
                                    <label for="accept-policy"><span></span>I accept company privacy policy.</label>
                                </div>
                                <div class="login-page__form-btn-box">
                                    <button type="submit" class="tolak-btn">
                                        <b>Register</b><span></span>
                                    </button>
                                </div>
                            </form>
                        </div><!-- register-form -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Login End -->

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