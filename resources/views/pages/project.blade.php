
@extends('layouts.layout2')
@section('title', 'Project || Tolak || Tolak Laravel Template')
@php
    $title = 'Project Page';
    $subtitle = 'Project Page';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="project-two">
            <div class="container">
                <div class="sec-title text-center">
                    <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Our Projects Now<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title">We Have Business Case Studies</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <ul class="list-unstyled post-filter project-two__filter">
                    <li class="active" data-filter=".filter-item">All<span class="count">(6)</span></li>
                    <li data-filter=".business">Business<span class="count">(3)</span></li>
                    <li data-filter=".solution">Solution<span class="count">(2)</span></li>
                    <li data-filter=".marketing">Marketing<span class="count">(2)</span></li>
                    <li data-filter=".software">Software<span class="count">(2)</span></li>
                </ul><!-- /.list-unstyledf -->
                <div class="row filter-layout">
                    <div class="col-xl-3 col-md-6 filter-item marketing">
                        <div class="project-two__item">
                            <div class="project-two__item__image">
                                <img src="{{ asset("/assets/images/project/project-2-1.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-two__item__content">
                                <p class="project-two__item__cats">
                                    Marketing
                                </p>
                                <h3 class="project-two__item__title"><a href="{{ url("project-details") }}">Business Of Growth</a></h3>
                                <a href="{{ url("project-details") }}" class="project-two__item__rm"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div><!-- /.project-two__item -->
                    </div><!-- /.item -->
                    <div class="col-xl-3 col-md-6 filter-item business solution">
                        <div class="project-two__item">
                            <div class="project-two__item__image">
                                <img src="{{ asset("/assets/images/project/project-2-2.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-two__item__content">
                                <p class="project-two__item__cats">
                                    Marketing
                                </p>
                                <h3 class="project-two__item__title"><a href="{{ url("project-details") }}">Business Of Growth</a></h3>
                                <a href="{{ url("project-details") }}" class="project-two__item__rm"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div><!-- /.project-two__item -->
                    </div><!-- /.item -->
                    <div class="col-xl-6 col-md-12 filter-item software business">
                        <div class="project-two__item">
                            <div class="project-two__item__image">
                                <img src="{{ asset("/assets/images/project/project-2-3.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-two__item__content">
                                <p class="project-two__item__cats">
                                    Marketing
                                </p>
                                <h3 class="project-two__item__title"><a href="{{ url("project-details") }}">Business Of Growth</a></h3>
                                <a href="{{ url("project-details") }}" class="project-two__item__rm"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div><!-- /.project-two__item -->
                    </div><!-- /.item -->
                    <div class="col-xl-6 col-md-12 filter-item soluion">
                        <div class="project-two__item">
                            <div class="project-two__item__image">
                                <img src="{{ asset("/assets/images/project/project-2-4.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-two__item__content">
                                <p class="project-two__item__cats">
                                    Marketing
                                </p>
                                <h3 class="project-two__item__title"><a href="{{ url("project-details") }}">Business Of Growth</a></h3>
                                <a href="{{ url("project-details") }}" class="project-two__item__rm"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div><!-- /.project-two__item -->
                    </div><!-- /.item -->
                    <div class="col-xl-3 col-md-6 filter-item marketing software">
                        <div class="project-two__item">
                            <div class="project-two__item__image">
                                <img src="{{ asset("/assets/images/project/project-2-5.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-two__item__content">
                                <p class="project-two__item__cats">
                                    Marketing
                                </p>
                                <h3 class="project-two__item__title"><a href="{{ url("project-details") }}">Business Of Growth</a></h3>
                                <a href="{{ url("project-details") }}" class="project-two__item__rm"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div><!-- /.project-two__item -->
                    </div><!-- /.item -->
                    <div class="col-xl-3 col-md-6 filter-item business solution ">
                        <div class="project-two__item">
                            <div class="project-two__item__image">
                                <img src="{{ asset("/assets/images/project/project-2-6.jpg") }}" alt="tolak">
                            </div>
                            <div class="project-two__item__content">
                                <p class="project-two__item__cats">
                                    Marketing
                                </p>
                                <h3 class="project-two__item__title"><a href="{{ url("project-details") }}">Business Of Growth</a></h3>
                                <a href="{{ url("project-details") }}" class="project-two__item__rm"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div><!-- /.project-two__item -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.project-two -->

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