
@extends('layouts.layout2')
@section('title', 'Project Carousel || Tolak || Tolak Laravel Template')
@php
    $title = 'Project Carousel';
    $subtitle = 'Project Carousel';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="project-one">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Projects Work<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">Work Explore Satisfied Customers</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="project-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel" data-owl-options='{
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
                "1200": {
                    "items": 3
                },
                "1600": {
                    "items": 4
                }
            }
            }'>
                    <div class="item">
                        <div class="project-one__item">
                            <div class="project-one__image">
                                <img src="{{ asset("/assets/images/project/project-1-1.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-one__hover">
                                <a class="project-one__read-more" href="{{ url("project-details") }}"><span class="icon-right-arrow"></span></a>
                                <div class="project-one__hover-bottom">
                                    <div class="project-one__cats"><a href="{{ url("project") }}">Solution</a></div>
                                    <h3 class="project-one__title"><a href="{{ url("project-details") }}">Technology website development</a></h3>
                                </div>
                            </div>
                        </div><!-- /.project-one__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-one__item">
                            <div class="project-one__image">
                                <img src="{{ asset("/assets/images/project/project-1-2.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-one__hover">
                                <a class="project-one__read-more" href="{{ url("project-details") }}"><span class="icon-right-arrow"></span></a>
                                <div class="project-one__hover-bottom">
                                    <div class="project-one__cats"><a href="{{ url("project") }}">Business</a></div>
                                    <h3 class="project-one__title"><a href="{{ url("project-details") }}">Technology website development</a></h3>
                                </div>
                            </div>
                        </div><!-- /.project-one__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-one__item">
                            <div class="project-one__image">
                                <img src="{{ asset("/assets/images/project/project-1-3.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-one__hover">
                                <a class="project-one__read-more" href="{{ url("project-details") }}"><span class="icon-right-arrow"></span></a>
                                <div class="project-one__hover-bottom">
                                    <div class="project-one__cats"><a href="{{ url("project") }}">Marketing</a></div>
                                    <h3 class="project-one__title"><a href="{{ url("project-details") }}">Technology website development</a></h3>
                                </div>
                            </div>
                        </div><!-- /.project-one__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-one__item">
                            <div class="project-one__image">
                                <img src="{{ asset("/assets/images/project/project-1-4.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-one__hover">
                                <a class="project-one__read-more" href="{{ url("project-details") }}"><span class="icon-right-arrow"></span></a>
                                <div class="project-one__hover-bottom">
                                    <div class="project-one__cats"><a href="{{ url("project") }}">Software</a></div>
                                    <h3 class="project-one__title"><a href="{{ url("project-details") }}">Technology website development</a></h3>
                                </div>
                            </div>
                        </div><!-- /.project-one__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-one__item">
                            <div class="project-one__image">
                                <img src="{{ asset("/assets/images/project/project-1-1.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-one__hover">
                                <a class="project-one__read-more" href="{{ url("project-details") }}"><span class="icon-right-arrow"></span></a>
                                <div class="project-one__hover-bottom">
                                    <div class="project-one__cats"><a href="{{ url("project") }}">Solution</a></div>
                                    <h3 class="project-one__title"><a href="{{ url("project-details") }}">Technology website development</a></h3>
                                </div>
                            </div>
                        </div><!-- /.project-one__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-one__item">
                            <div class="project-one__image">
                                <img src="{{ asset("/assets/images/project/project-1-2.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-one__hover">
                                <a class="project-one__read-more" href="{{ url("project-details") }}"><span class="icon-right-arrow"></span></a>
                                <div class="project-one__hover-bottom">
                                    <div class="project-one__cats"><a href="{{ url("project") }}">Business</a></div>
                                    <h3 class="project-one__title"><a href="{{ url("project-details") }}">Technology website development</a></h3>
                                </div>
                            </div>
                        </div><!-- /.project-one__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-one__item">
                            <div class="project-one__image">
                                <img src="{{ asset("/assets/images/project/project-1-3.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-one__hover">
                                <a class="project-one__read-more" href="{{ url("project-details") }}"><span class="icon-right-arrow"></span></a>
                                <div class="project-one__hover-bottom">
                                    <div class="project-one__cats"><a href="{{ url("project") }}">Marketing</a></div>
                                    <h3 class="project-one__title"><a href="{{ url("project-details") }}">Technology website development</a></h3>
                                </div>
                            </div>
                        </div><!-- /.project-one__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="project-one__item">
                            <div class="project-one__image">
                                <img src="{{ asset("/assets/images/project/project-1-4.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-one__hover">
                                <a class="project-one__read-more" href="{{ url("project-details") }}"><span class="icon-right-arrow"></span></a>
                                <div class="project-one__hover-bottom">
                                    <div class="project-one__cats"><a href="{{ url("project") }}">Software</a></div>
                                    <h3 class="project-one__title"><a href="{{ url("project-details") }}">Technology website development</a></h3>
                                </div>
                            </div>
                        </div><!-- /.project-one__item -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.project-one -->

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