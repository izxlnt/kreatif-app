
@extends('layouts.layout2')
@section('title', 'Team Carousel || Tolak || Tolak Laravel Template')
@php
    $title = 'Team Carousel';
    $subtitle = 'Team Carousel';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="team-one">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Team Member<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">Meet The Team Metting Solution</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="team-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel" data-owl-options='{
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
                "992": {
                    "items": 3,
                    "margin": 30
                }
            }
            }'>
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-1.jpg") }}" alt="Lorata Barsa">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Lorata Barsa</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-2.jpg") }}" alt="Moras Batas">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Moras Batas</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Manager</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-3.jpg") }}" alt="Korata Mana">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Korata Mana</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-4.jpg") }}" alt="Christine Eve">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Christine Eve</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-5.jpg") }}" alt="David Copers">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">David Copers</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Manager</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-6.jpg") }}" alt="Kevin Martin">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Kevin Martin</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-one -->

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