
@extends('layouts.layout2')
@section('title', 'Gallery || Tolak || Tolak Laravel Template')
@php
    $title = 'Gallery';
    $subtitle = 'Gallery';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="gallery-one">
            <div class="container-fluid">
                <div class="row masonry-layout">
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-1.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-1.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-2.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-2.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-3.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-3.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-4.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-4.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-5.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-5.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-6.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-6.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-7.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-7.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-8.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-8.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-6">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-9.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-9.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-10.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-10.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.gallery-one -->

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