
@extends('layouts.layout2')
@section('title', 'Business Solution || Services Details || Tolak || Tolak Laravel Template')
@php
    $title = 'Business Solution';
    $subtitle = 'Services Details';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="service-details">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-md-12 col-xl-8">
                        <div class="service-details__thumbnail">
                            <img src="{{ asset("/assets/images/resources/service-d-2.jpg") }}" alt="tolak">
                        </div><!-- /.service-details__thumbnail -->
                    </div><!-- /.col-md-12 col-lg-8 -->
                    <div class="col-md-12 col-xl-4">
                        <div class="service-details__sidebar">
                            <h3 class="service-details__sidebar__title">All Services:</h3><!-- /.service-sidebar__title -->
                            <ul class="list-unstyled service-details__sidebar__nav">
                                <li><a href="{{ url("business-growth") }}">Business of Growth</a></li>
                                <li><a href="{{ url("business-solution") }}">Solution to Business</a></li>
                                <li><a href="{{ url("marketing-solution") }}">Markting of Solution</a></li>
                                <li><a href="{{ url("technology-services") }}">Technology Services</a></li>
                                <li><a href="{{ url("business-marketing") }}">Marketing Business</a></li>
                                <li><a href="{{ url("business-support") }}">Support of Business</a></li>
                            </ul><!-- /.list-unstyled service-sidebar__nav -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                </div><!-- /.row -->
                <div class="service-details__content">
                    <p class="service-details__text">
                        will reenergize your ome and enhance your life. From everyday housekeeping to routine cleanings, our professional this to It uses a dictionary of 2200 Latin
                        d with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonableis therefore always free from repetition, injected humour,
                        anything embarrassing hidden in the middle of text. reenergize your ome and enhance your life. From everyday housekeeping to routine cleanings, our
                        uses a dictionary of 2200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                    </p>
                    <p class="service-details__text">
                        will reenergize your ome and enhance your life. From everyday housekeeping to routine cleanings, our professional this to It uses a dictionary of 2200 Latin
                        d with a handful of model sentence structures,
                    </p>
                    <div class="row gutter-y-30">
                        <div class="col-lg-6">
                            <p class="service-details__text">
                                Business tailored it design, management & support services business tab for business agency elit, sed do eiusmod tempor.
                            </p>
                            <div class="row gutter-y-30">
                                <div class="col-md-6">
                                    <div class="service-details__skill">
                                        <div class="progress-box">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#3d72fc" data-bgColor="#c8c8c8" data-width="60" data-height="60" data-linecap="normal" value="45">
                                                <div class="inner-text count-box">
                                                    <span class="count-text" data-stop="45" data-speed="2000"></span><span class="count-Parsent">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="service-details__skill__title">Solution Business</h5>
                                        <p class="service-details__skill__text">Level is high</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-details__skill">
                                        <div class="progress-box">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#3d72fc" data-bgColor="#c8c8c8" data-width="60" data-height="60" data-linecap="normal" value="36">
                                                <div class="inner-text count-box">
                                                    <span class="count-text" data-stop="36" data-speed="2000"></span><span class="count-Parsent">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="service-details__skill__title">Maketing Team</h5>
                                        <p class="service-details__skill__text">Level is high</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled service-details__list">
                                        <li><i class="fas fa-check-circle"></i>We provide a revolutionary</li>
                                        <li><i class="fas fa-check-circle"></i>This man for it solution.</li>
                                    </ul><!-- /.list-unstyled team-details__list -->
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled service-details__list">
                                        <li><i class="fas fa-check-circle"></i>We provide a revolutionary</li>
                                        <li><i class="fas fa-check-circle"></i>This man for it solution.</li>
                                    </ul><!-- /.list-unstyled team-details__list -->
                                </div>
                            </div>
                            <p class="service-details__text">
                                <span>Solution:</span> tailored it design, management & support services business tab for business agency elit, sed do eiusmod tempor.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-details__content__image">
                                <img src="{{ asset("/assets/images/resources/service-d-content.jpg") }}" alt="tolak">
                            </div>
                        </div>
                    </div>
                    <p class="service-details__text service-details__text--last">
                        will reenergize your ome and enhance your life. From everyday housekeeping to routine cleanings, our professional this to It uses a dictionary of 2200 Latin
                        d with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonableis therefore always free from repetition, injected humour,
                        anything embarrassing hidden in the middle of text. reenergize your ome and enhance your life. From everyday housekeeping to routine cleanings, our
                        uses a dictionary of 2200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                    </p>
                </div>
            </div><!-- /.container -->
        </section><!-- /.service-details -->

        <section class="funfact-two funfact-two--service-details">
            <div class="container">
                <ul class="list-unstyled funfact-two__list">
                    <li class="funfact-two__item count-box">
                        <div class="funfact-two__icon"><i class="icon-briefing"></i></div><!-- /.funfact-two__icon -->
                        <div class="funfact-two__content">
                            <h3 class="funfact-two__count"><span class="count-text" data-stop="426" data-speed="1500"></span> k+</h3>
                            <!-- /.funfact-two__count -->
                            <p class="funfact-two__text">Completed Project</p><!-- /.funfact-two__text -->
                        </div><!-- /.funfact-two__content -->
                    </li><!-- /.funfact-two__item -->
                    <li class="funfact-two__item count-box">
                        <div class="funfact-two__icon"><i class="icon-ancestors"></i></div><!-- /.funfact-two__icon -->
                        <div class="funfact-two__content">
                            <h3 class="funfact-two__count"><span class="count-text" data-stop="1425" data-speed="1500"></span> +</h3>
                            <!-- /.funfact-two__count -->
                            <p class="funfact-two__text">Happy Clients</p><!-- /.funfact-two__text -->
                        </div><!-- /.funfact-two__content -->
                    </li><!-- /.funfact-two__item -->
                    <li class="funfact-two__item count-box">
                        <div class="funfact-two__icon"><i class="icon-admin"></i></div><!-- /.funfact-two__icon -->
                        <div class="funfact-two__content">
                            <h3 class="funfact-two__count"><span class="count-text" data-stop="750" data-speed="1500"></span> +</h3>
                            <!-- /.funfact-two__count -->
                            <p class="funfact-two__text">Business Partners</p><!-- /.funfact-two__text -->
                        </div><!-- /.funfact-two__content -->
                    </li><!-- /.funfact-two__item -->
                    <li class="funfact-two__item count-box">
                        <div class="funfact-two__icon"><i class="icon-trophy"></i></div><!-- /.funfact-two__icon -->
                        <div class="funfact-two__content">
                            <h3 class="funfact-two__count"><span class="count-text" data-stop="884" data-speed="1500"></span> k+</h3>
                            <!-- /.funfact-two__count -->
                            <p class="funfact-two__text">Award Win</p><!-- /.funfact-two__text -->
                        </div><!-- /.funfact-two__content -->
                    </li><!-- /.funfact-two__item -->
                </ul><!-- /.list-unstyled funfact-two__list -->
            </div><!-- /.container -->
        </section><!-- /.funfact-two -->

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