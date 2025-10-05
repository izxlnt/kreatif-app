
@extends('layouts.layout2')
@section('title', 'FAQS || Tolak || Tolak Laravel Template')
@php
    $title = 'Our Faqs';
    $subtitle = 'Our Faqs';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="faq-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="faq-page__contact background-base">
                            <h3 class="faq-page__contact__title">have Questions?
                                Call Now!</h3><!-- /.faq-page__contact__title -->
                            <div class="faq-page__contact__text">
                                <i class="icofont-phone"></i>
                                <p class="faq-page__contact__number">
                                    Have Question?<br>
                                    <a href="{{ url("tel:+9288009850") }}">Free +92 (8800) - 9850</a>
                                </p><!-- /.faq-page__contact__number -->
                            </div><!-- /.faq-page__contact__text -->
                        </div><!-- /.faq-page__contact -->
                    </div><!-- /.col-lg-4 col-xl-3 -->
                    <div class="col-lg-8">
                        <div class="faq-page__accordion tolak-accrodion" data-grp-name="tolak-accrodion">
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
                                        <p>
                                            There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                            by injected humour,
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        Phasellus et vehicula nulla
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                            by injected humour,
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        Maecenas malesuada
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                            by injected humour,
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        Why you join our team
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                            by injected humour,
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <i class="fa fa-check-circle"></i>
                                        Maecenas malesuada
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of is psum available, but the majority have suffered alteration in some we form,
                                            by injected humour,
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                        </div>
                    </div><!-- /.col-lg-8 col-xl-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.faq-page-accordion -->

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