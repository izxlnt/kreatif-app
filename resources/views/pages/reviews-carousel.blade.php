
@extends('layouts.layout2')
@section('title', 'Testimonial Carousel || Tolak || Tolak Laravel Template')
@php
    $title = 'Testimonial';
    $subtitle = 'Testimonial';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="testimonials-one testimonials-one--page">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our testimonial say<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">What Out Clients Says Company</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="testimonials-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
            "items": 1,
            "margin": 0,
            "loop": false,
            "smartSpeed": 700,
            "nav": false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "dots": true,
            "autoplay": false,
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 2,
                    "margin": 30
                },
                "1200": {
                    "items": 3,
                    "margin": 30
                }
            }
            }'>
                    <div class="item">
                        <div class="testimonials-card">
                            <div class="testimonials-card__bg"></div><!-- /.testimonials-card__bg -->
                            <div class="testimonials-card__bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 371 430">
                                    <path d="m81 0h210c44.2 0 80 35.8 80 80v280c0 0-69.4 70-148.1 70-28.2 0-57.5 0-85.3 0-73.8 0-136.6-70-136.6-70v-280c0-44.2 35.8-80 80-80z" />
                                </svg>
                            </div><!-- /.testimonials-card__bg-hover -->
                            <div class="testimonials-card__quote"><i class="icofont-quote-left"></i></div>
                            <div class="testimonials-card__content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or
                            </div><!-- /.testimonials-card__content -->
                            <h3 class="testimonials-card__name">
                                Porat Barsa
                            </h3><!-- /.testimonials-card__name -->
                            <p class="testimonials-card__designation">Founder</p><!-- /.testimonials-card__designation -->
                            <div class="testimonials-card__rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                            </div><!-- /.testimonials-card__rating -->
                            <div class="testimonials-card__image">
                                <img src="{{ asset("/assets/images/resources/testi-1-1.jpg") }}" alt="Porat Barsa">
                            </div><!-- /.testimonials-card__image -->
                        </div><!-- /.testimonials-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card">
                            <div class="testimonials-card__bg"></div><!-- /.testimonials-card__bg -->
                            <div class="testimonials-card__bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 371 430">
                                    <path d="m81 0h210c44.2 0 80 35.8 80 80v280c0 0-69.4 70-148.1 70-28.2 0-57.5 0-85.3 0-73.8 0-136.6-70-136.6-70v-280c0-44.2 35.8-80 80-80z" />
                                </svg>
                            </div><!-- /.testimonials-card__bg-hover -->
                            <div class="testimonials-card__quote"><i class="icofont-quote-left"></i></div>
                            <div class="testimonials-card__content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or
                            </div><!-- /.testimonials-card__content -->
                            <h3 class="testimonials-card__name">
                                Rotar Matta
                            </h3><!-- /.testimonials-card__name -->
                            <p class="testimonials-card__designation">Manager</p><!-- /.testimonials-card__designation -->
                            <div class="testimonials-card__rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                            </div><!-- /.testimonials-card__rating -->
                            <div class="testimonials-card__image">
                                <img src="{{ asset("/assets/images/resources/testi-1-2.jpg") }}" alt="Rotar Matta">
                            </div><!-- /.testimonials-card__image -->
                        </div><!-- /.testimonials-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card">
                            <div class="testimonials-card__bg"></div><!-- /.testimonials-card__bg -->
                            <div class="testimonials-card__bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 371 430">
                                    <path d="m81 0h210c44.2 0 80 35.8 80 80v280c0 0-69.4 70-148.1 70-28.2 0-57.5 0-85.3 0-73.8 0-136.6-70-136.6-70v-280c0-44.2 35.8-80 80-80z" />
                                </svg>
                            </div><!-- /.testimonials-card__bg-hover -->
                            <div class="testimonials-card__quote"><i class="icofont-quote-left"></i></div>
                            <div class="testimonials-card__content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or
                            </div><!-- /.testimonials-card__content -->
                            <h3 class="testimonials-card__name">
                                David Cooper
                            </h3><!-- /.testimonials-card__name -->
                            <p class="testimonials-card__designation">Co Founder</p><!-- /.testimonials-card__designation -->
                            <div class="testimonials-card__rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                            </div><!-- /.testimonials-card__rating -->
                            <div class="testimonials-card__image">
                                <img src="{{ asset("/assets/images/resources/testi-1-3.jpg") }}" alt="David Cooper">
                            </div><!-- /.testimonials-card__image -->
                        </div><!-- /.testimonials-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card">
                            <div class="testimonials-card__bg"></div><!-- /.testimonials-card__bg -->
                            <div class="testimonials-card__bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 371 430">
                                    <path d="m81 0h210c44.2 0 80 35.8 80 80v280c0 0-69.4 70-148.1 70-28.2 0-57.5 0-85.3 0-73.8 0-136.6-70-136.6-70v-280c0-44.2 35.8-80 80-80z" />
                                </svg>
                            </div><!-- /.testimonials-card__bg-hover -->
                            <div class="testimonials-card__quote"><i class="icofont-quote-left"></i></div>
                            <div class="testimonials-card__content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or
                            </div><!-- /.testimonials-card__content -->
                            <h3 class="testimonials-card__name">
                                Mike Hardson
                            </h3><!-- /.testimonials-card__name -->
                            <p class="testimonials-card__designation">Customer</p><!-- /.testimonials-card__designation -->
                            <div class="testimonials-card__rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                            </div><!-- /.testimonials-card__rating -->
                            <div class="testimonials-card__image">
                                <img src="{{ asset("/assets/images/resources/testi-1-4.jpg") }}" alt="Mike Hardson">
                            </div><!-- /.testimonials-card__image -->
                        </div><!-- /.testimonials-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card">
                            <div class="testimonials-card__bg"></div><!-- /.testimonials-card__bg -->
                            <div class="testimonials-card__bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 371 430">
                                    <path d="m81 0h210c44.2 0 80 35.8 80 80v280c0 0-69.4 70-148.1 70-28.2 0-57.5 0-85.3 0-73.8 0-136.6-70-136.6-70v-280c0-44.2 35.8-80 80-80z" />
                                </svg>
                            </div><!-- /.testimonials-card__bg-hover -->
                            <div class="testimonials-card__quote"><i class="icofont-quote-left"></i></div>
                            <div class="testimonials-card__content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or
                            </div><!-- /.testimonials-card__content -->
                            <h3 class="testimonials-card__name">
                                Mark Smith
                            </h3><!-- /.testimonials-card__name -->
                            <p class="testimonials-card__designation">Reviwers</p><!-- /.testimonials-card__designation -->
                            <div class="testimonials-card__rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                            </div><!-- /.testimonials-card__rating -->
                            <div class="testimonials-card__image">
                                <img src="{{ asset("/assets/images/resources/testi-1-5.jpg") }}" alt="Mark Smith">
                            </div><!-- /.testimonials-card__image -->
                        </div><!-- /.testimonials-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card">
                            <div class="testimonials-card__bg"></div><!-- /.testimonials-card__bg -->
                            <div class="testimonials-card__bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 371 430">
                                    <path d="m81 0h210c44.2 0 80 35.8 80 80v280c0 0-69.4 70-148.1 70-28.2 0-57.5 0-85.3 0-73.8 0-136.6-70-136.6-70v-280c0-44.2 35.8-80 80-80z" />
                                </svg>
                            </div><!-- /.testimonials-card__bg-hover -->
                            <div class="testimonials-card__quote"><i class="icofont-quote-left"></i></div>
                            <div class="testimonials-card__content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or
                            </div><!-- /.testimonials-card__content -->
                            <h3 class="testimonials-card__name">
                                Travis Head
                            </h3><!-- /.testimonials-card__name -->
                            <p class="testimonials-card__designation">Co Founder</p><!-- /.testimonials-card__designation -->
                            <div class="testimonials-card__rating">
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                                <i class="icofont-star"></i>
                            </div><!-- /.testimonials-card__rating -->
                            <div class="testimonials-card__image">
                                <img src="{{ asset("/assets/images/resources/testi-1-6.jpg") }}" alt="Travis Head">
                            </div><!-- /.testimonials-card__image -->
                        </div><!-- /.testimonials-card -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->

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