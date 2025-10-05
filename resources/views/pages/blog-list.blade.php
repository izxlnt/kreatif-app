
@extends('layouts.layout2')
@section('title', 'Blog List || Tolak || Tolak Laravel Template')
@php
    $title = 'Our News';
    $subtitle = 'News List';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="blog-two blog-two--page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="row gutter-y-30">
                            <div class="col-md-12">
                                <div class="blog-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                                    <div class="blog-card-two__image">
                                        <img src="{{ asset("/assets/images/blog/blog-2-1.jpg") }}" alt="Solution This Business For is company fast Marketing Blog">
                                        <img src="{{ asset("/assets/images/blog/blog-2-1.jpg") }}" alt="Solution This Business For is company fast Marketing Blog">
                                        <a href="{{ url("blog-details-right") }}" class="blog-card-two__image__link"><span class="sr-only">Solution This Business For is company fast Marketing Blog</span>
                                            <!-- /.sr-only --></a>
                                    </div><!-- /.blog-card-two__image -->
                                    <div class="blog-card-two__meta">
                                        <div class="blog-card-two__meta__author"><img src="{{ asset("/assets/images/blog/blog-2-author.png") }}" alt="tolak">Admin:<a href="{{ url("blog-details-right") }}">Mera</a></div>
                                        <div class="blog-card-two__meta__date"><span>15</span>Jun</div><!-- /.blog-card-two__date -->
                                        <div class="blog-card-two__meta__year">2023</div><!-- /.blog-card-two__year -->
                                        <div class="blog-card-two__meta__comments">
                                            <i class="icofont-speech-comments"></i>Comments (04)
                                        </div>
                                    </div>
                                    <div class="blog-card-two__content">
                                        <h3 class="blog-card-two__title"><a href="{{ url("blog-details-right") }}">Solution This Business For is company fast Marketing Blog</a></h3><!-- /.blog-card-two__title -->
                                        <p class="blog-card-two__text">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p><!-- /.blog-card-two__text -->
                                        <a href="{{ url("blog-details-right") }}" class="blog-card-two__link">
                                            Read more
                                            <i class="icofont-rounded-double-right"></i>
                                        </a><!-- /.blog-card-two__link -->
                                    </div><!-- /.blog-card-two__content -->
                                </div><!-- /.blog-card-two -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="blog-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                    <div class="blog-card-two__image">
                                        <img src="{{ asset("/assets/images/blog/blog-2-2.jpg") }}" alt="Business Web Agency This Business company Fast Solution Blog">
                                        <img src="{{ asset("/assets/images/blog/blog-2-2.jpg") }}" alt="Business Web Agency This Business company Fast Solution Blog">
                                        <a href="{{ url("blog-details-right") }}" class="blog-card-two__image__link"><span class="sr-only">Business Web Agency This Business company Fast Solution Blog</span>
                                            <!-- /.sr-only --></a>
                                    </div><!-- /.blog-card-two__image -->
                                    <div class="blog-card-two__meta">
                                        <div class="blog-card-two__meta__author"><img src="{{ asset("/assets/images/blog/blog-2-author.png") }}" alt="tolak">Admin:<a href="{{ url("blog-details-right") }}">Mera</a></div>
                                        <div class="blog-card-two__meta__date"><span>19</span>Jun</div><!-- /.blog-card-two__date -->
                                        <div class="blog-card-two__meta__year">2023</div><!-- /.blog-card-two__year -->
                                        <div class="blog-card-two__meta__comments">
                                            <i class="icofont-speech-comments"></i>Comments (04)
                                        </div>
                                    </div>
                                    <div class="blog-card-two__content">
                                        <h3 class="blog-card-two__title"><a href="{{ url("blog-details-right") }}">Business Web Agency This Business company Fast Solution Blog</a></h3><!-- /.blog-card-two__title -->
                                        <p class="blog-card-two__text">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p><!-- /.blog-card-two__text -->
                                        <a href="{{ url("blog-details-right") }}" class="blog-card-two__link">
                                            Read more
                                            <i class="icofont-rounded-double-right"></i>
                                        </a><!-- /.blog-card-two__link -->
                                    </div><!-- /.blog-card-two__content -->
                                </div><!-- /.blog-card-two -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="blog-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                    <div class="blog-card-two__image">
                                        <img src="{{ asset("/assets/images/blog/blog-2-3.jpg") }}" alt="Five ways that can develop your business website">
                                        <img src="{{ asset("/assets/images/blog/blog-2-3.jpg") }}" alt="Five ways that can develop your business website">
                                        <a href="{{ url("blog-details-right") }}" class="blog-card-two__image__link"><span class="sr-only">Five ways that can develop your business website</span>
                                            <!-- /.sr-only --></a>
                                    </div><!-- /.blog-card-two__image -->
                                    <div class="blog-card-two__meta">
                                        <div class="blog-card-two__meta__author"><img src="{{ asset("/assets/images/blog/blog-2-author.png") }}" alt="tolak">Admin:<a href="{{ url("blog-details-right") }}">Mera</a></div>
                                        <div class="blog-card-two__meta__date"><span>29</span>Jun</div><!-- /.blog-card-two__date -->
                                        <div class="blog-card-two__meta__year">2023</div><!-- /.blog-card-two__year -->
                                        <div class="blog-card-two__meta__comments">
                                            <i class="icofont-speech-comments"></i>Comments (04)
                                        </div>
                                    </div>
                                    <div class="blog-card-two__content">
                                        <h3 class="blog-card-two__title"><a href="{{ url("blog-details-right") }}">Five ways that can develop your business website</a></h3><!-- /.blog-card-two__title -->
                                        <p class="blog-card-two__text">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p><!-- /.blog-card-two__text -->
                                        <a href="{{ url("blog-details-right") }}" class="blog-card-two__link">
                                            Read more
                                            <i class="icofont-rounded-double-right"></i>
                                        </a><!-- /.blog-card-two__link -->
                                    </div><!-- /.blog-card-two__content -->
                                </div><!-- /.blog-card-two -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-one--page -->

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