

@extends('layouts.layout1landing')
@section('title', 'Tolak - Laravel Template For It Solution & Business')
@section('content')


<header class="header">
    <div class="header__wrappper">
        <a href="{{ url("/") }}" class="header__logo">
            <img src="{{ asset("/assets/images/tolak-landing/main-logo-1-1.png") }}" width="156" height="49" alt="tolak">
        </a>
        <ul class="header__nav">
            <li><a class="browse" href="{{ url("#demos") }}">Demos</a></li>
            <li><a class="features" href="{{ url("#features") }}">Features</a></li>
            <li><a href="https://bracketweb.ticksy.com/">Suppport</a></li>
        </ul>
        <div class="header__btn">
            <a rel="noreferrer" href="#" target="_blank" class="tolak-btn"><b>Purchase Template</b><span></span></a>
        </div>
    </div>
</header>

<section class="hero-section">
    <div class="hero-section__bg" style="background-image: url(assets/images/tolak-landing/hero-bg-1-1.jpg);">
        <div class="hero-section__bg__up" style="background-image: url(assets/images/tolak-landing/hero.png);">
        </div>
    </div><!-- /.hero-section__bg -->
    <div class="container">
        <div class="hero-section__content">
            <img src="{{ asset("/assets/images/tolak-landing/logo-2.png") }}" width="70" height="70" alt="tolak">
            <h1 class="hero-section__title bw-split-in-right">It Solution & Business<br> HTML Template</h1><!-- /.hero-section__title -->
            <div class="hero-section__btn bw-split-in-up">
                <div class="hero-section__arrow"></div>
                <a rel="noreferrer" href="{{ url("#demos") }}" class="tolak-btn browse"><b>View Demos</b><span></span></a>
                <a rel="noreferrer" href="{{ url("#features") }}" class="tolak-btn features"><b>Template Features</b><span></span></a>
            </div>
            <div class="hero-section__image wow slideInUp" data-wow-delay="200ms">
                <div class="hero-section__image__shape"></div>
                <div class="tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 3, "speed": 700, "scale": 1 }'>
                    <img src="{{ asset("/assets/images/tolak-landing/hero-banner.png") }}" width="1024" height="769" alt="tolak">
                </div>
            </div>
        </div><!-- /.hero-section__content -->
    </div><!-- /.container -->
</section><!-- /.hero-section -->

<section class="demos-one" id="demos">
    <div class="container">
        <div class="demos-one__number wow fadeInUp" data-wow-delay="200ms">07+</div>
        <h3 class="demos-one__title bw-split-in-right">Unique Demo Home Pages<br> With Awesome Layouts</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="demos-one__single">
                    <div class="demos-one__image">
                        <span class="demos-one__image__new">New</span>
                        <img width="370" height="431" src="{{ asset("/assets/images/tolak-landing/home-5.jpg") }}" alt="Home Page 01">
                        <div class="demos-one__buttons">
                            <a target="_blank" href="{{ url("index-5") }}" class="tolak-btn demo-one__btn">
                                <b>Multi Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                            <a target="_blank" href="{{ url("index-5-one-page") }}" class="tolak-btn demo-one__btn">
                                <b>One Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                        </div><!-- /.demos-one__buttons -->
                    </div><!-- /.demos-one__image -->
                    <div class="demos-one__text">
                        <h3 class="demos-one__text__title">Home Page 05</h3>
                    </div><!-- /.demos-one__text -->
                </div><!-- /.demos-one__single -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-lg-4">
                <div class="demos-one__single">
                    <div class="demos-one__image">
                        <span class="demos-one__image__new">New</span>
                        <img width="370" height="431" src="{{ asset("/assets/images/tolak-landing/home-6.jpg") }}" alt="Home Page 01">
                        <div class="demos-one__buttons">
                            <a target="_blank" href="{{ url("index-6") }}" class="tolak-btn demo-one__btn">
                                <b>Multi Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                            <a target="_blank" href="{{ url("index-6-one-page") }}" class="tolak-btn demo-one__btn">
                                <b>One Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                        </div><!-- /.demos-one__buttons -->
                    </div><!-- /.demos-one__image -->
                    <div class="demos-one__text">
                        <h3 class="demos-one__text__title">Home Page 06</h3>
                    </div><!-- /.demos-one__text -->
                </div><!-- /.demos-one__single -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-lg-4">
                <div class="demos-one__single">
                    <div class="demos-one__image">
                        <span class="demos-one__image__new">New</span>
                        <img width="370" height="431" src="{{ asset("/assets/images/tolak-landing/home-7.jpg") }}" alt="Home Page 01">
                        <div class="demos-one__buttons">
                            <a target="_blank" href="{{ url("index-7") }}" class="tolak-btn demo-one__btn">
                                <b>Multi Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                            <a target="_blank" href="{{ url("index-7-one-page") }}" class="tolak-btn demo-one__btn">
                                <b>One Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                        </div><!-- /.demos-one__buttons -->
                    </div><!-- /.demos-one__image -->
                    <div class="demos-one__text">
                        <h3 class="demos-one__text__title">Home Page 07</h3>
                    </div><!-- /.demos-one__text -->
                </div><!-- /.demos-one__single -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-lg-4">
                <div class="demos-one__single">
                    <div class="demos-one__image">
                        <img width="370" height="431" src="{{ asset("/assets/images/tolak-landing/home-1.jpg") }}" alt="Home Page 01">
                        <div class="demos-one__buttons">
                            <a target="_blank" href="{{ url("/") }}" class="tolak-btn demo-one__btn">
                                <b>Multi Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                            <a target="_blank" href="{{ url("index-one-page") }}" class="tolak-btn demo-one__btn">
                                <b>One Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                            <a target="_blank" href="{{ url("index-dark") }}" class="tolak-btn demo-one__btn">
                                <b>Dark Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                        </div><!-- /.demos-one__buttons -->
                    </div><!-- /.demos-one__image -->
                    <div class="demos-one__text">
                        <h3 class="demos-one__text__title">Home Page 01</h3>
                    </div><!-- /.demos-one__text -->
                </div><!-- /.demos-one__single -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-lg-4">
                <div class="demos-one__single">
                    <div class="demos-one__image">
                        <img width="370" height="431" src="{{ asset("/assets/images/tolak-landing/home-2.jpg") }}" alt="Home Page 02">
                        <div class="demos-one__buttons">
                            <a target="_blank" href="{{ url("index-2") }}" class="tolak-btn demo-one__btn">
                                <b>Multi Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                            <a target="_blank" href="{{ url("index-2-one-page") }}" class="tolak-btn demo-one__btn">
                                <b>One Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                            <a target="_blank" href="{{ url("index-2-dark") }}" class="tolak-btn demo-one__btn">
                                <b>Dark Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                        </div><!-- /.demos-one__buttons -->
                    </div><!-- /.demos-one__image -->
                    <div class="demos-one__text">
                        <h3 class="demos-one__text__title">Home Page 02</h3>
                    </div><!-- /.demos-one__text -->
                </div><!-- /.demos-one__single -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-lg-4">
                <div class="demos-one__single">
                    <div class="demos-one__image">
                        <img width="370" height="431" src="{{ asset("/assets/images/tolak-landing/home-3.jpg") }}" alt="Home page 03">
                        <div class="demos-one__buttons">
                            <a target="_blank" href="{{ url("index-3") }}" class="tolak-btn demo-one__btn">
                                <b>Multi Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                            <a target="_blank" href="{{ url("index-3-one-page") }}" class="tolak-btn demo-one__btn">
                                <b>One Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                            <a target="_blank" href="{{ url("index-3-dark") }}" class="tolak-btn demo-one__btn">
                                <b>Dark Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                        </div><!-- /.demos-one__buttons -->
                    </div><!-- /.demos-one__image -->
                    <div class="demos-one__text">
                        <h3 class="demos-one__text__title">Home Page 03</h3>
                    </div><!-- /.demos-one__text -->
                </div><!-- /.demos-one__single -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-lg-4">
                <div class="demos-one__single">
                    <div class="demos-one__image">
                        <img width="370" height="431" src="{{ asset("/assets/images/tolak-landing/home-4.jpg") }}" alt="Home page 04">
                        <div class="demos-one__buttons">
                            <a target="_blank" href="{{ url("index-4") }}" class="tolak-btn demo-one__btn">
                                <b>Multi Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                            <a target="_blank" href="{{ url("index-4-one-page") }}" class="tolak-btn demo-one__btn">
                                <b>One Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                            <a target="_blank" href="{{ url("index-4-dark") }}" class="tolak-btn demo-one__btn">
                                <b>Dark Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                        </div><!-- /.demos-one__buttons -->
                    </div><!-- /.demos-one__image -->
                    <div class="demos-one__text">
                        <h3 class="demos-one__text__title">Home Page 04</h3>
                    </div><!-- /.demos-one__text -->
                </div><!-- /.demos-one__single -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-lg-4">
                <div class="demos-one__single">
                    <div class="demos-one__image">
                        <img width="370" height="431" src="{{ asset("/assets/images/tolak-landing/home-boxed.jpg") }}" alt="Home boxed">
                        <div class="demos-one__buttons">
                            <a target="_blank" href="{{ url("index-boxed") }}" class="tolak-btn demo-one__btn">
                                <b>View Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                        </div><!-- /.demos-one__buttons -->
                    </div><!-- /.demos-one__image -->
                    <div class="demos-one__text">
                        <h3 class="demos-one__text__title">Home Boxed</h3>
                    </div><!-- /.demos-one__text -->
                </div><!-- /.demos-one__single -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 col-lg-4">
                <div class="demos-one__single">
                    <div class="demos-one__image">
                        <img width="370" height="431" src="{{ asset("/assets/images/tolak-landing/home-rtl.jpg") }}" alt="Home RTL">
                        <div class="demos-one__buttons">
                            <a target="_blank" href="{{ url("index-rtl#googtrans(en%7car)") }}" class="tolak-btn demo-one__btn">
                                <b>View Page</b><span></span>
                            </a><!-- /.thm-btn demo-one__btn -->
                        </div><!-- /.demos-one__buttons -->
                    </div><!-- /.demos-one__image -->
                    <div class="demos-one__text">
                        <h3 class="demos-one__text__title">Home RTL</h3>
                    </div><!-- /.demos-one__text -->
                </div><!-- /.demos-one__single -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.demos-one -->


<section class="features-one" id="features">
    <div class="features-one__bg" style="background-image: url(assets/images/tolak-landing/feature-bg.png);"></div>
    <div class="features-one__text bw-split-in-right">
        <span>Best</span>
        <span>Features</span>
    </div>
    <div class="container">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>AWESOME FEATURES<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title">This Product Features or<br> Software features</h3><!-- /.sec-title__title -->
        </div>
        <div class="row gutter-y-30">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="features-one__box">
                    <div class="features-one__box__image">
                        <img width="100" height="100" src="{{ asset("/assets/images/tolak-landing/feature-i-1-5.png") }}" alt="feature">
                    </div><!-- /.features-one__box__image -->
                    <h3 class="features-one__box__title">Fully<br> Responsive</h3><!-- /.features-one__box__title -->
                </div><!-- /.features-one__box -->
            </div><!-- item -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="250ms">
                <div class="features-one__box">
                    <div class="features-one__box__image">
                        <img width="100" height="100" src="{{ asset("/assets/images/tolak-landing/feature-i-1-6.png") }}" alt="feature">
                    </div><!-- /.features-one__box__image -->
                    <h3 class="features-one__box__title">SEO<br> Friendly</h3><!-- /.features-one__box__title -->
                </div><!-- /.features-one__box -->
            </div><!-- item -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="features-one__box">
                    <div class="features-one__box__image">
                        <img width="100" height="100" src="{{ asset("/assets/images/tolak-landing/feature-i-1-7.png") }}" alt="feature">
                    </div><!-- /.features-one__box__image -->
                    <h3 class="features-one__box__title">Best Support<br> Team</h3><!-- /.features-one__box__title -->
                </div><!-- /.features-one__box -->
            </div><!-- item -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="350ms">
                <div class="features-one__box">
                    <div class="features-one__box__image">
                        <img width="100" height="100" src="{{ asset("/assets/images/tolak-landing/feature-i-1-8.png") }}" alt="feature">
                    </div><!-- /.features-one__box__image -->
                    <h3 class="features-one__box__title">Elite<br> Author</h3><!-- /.features-one__box__title -->
                </div><!-- /.features-one__box -->
            </div><!-- item -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="features-one__box">
                    <div class="features-one__box__image">
                        <img width="100" height="100" src="{{ asset("/assets/images/tolak-landing/feature-i-1-9.png") }}" alt="feature">
                    </div><!-- /.features-one__box__image -->
                    <h3 class="features-one__box__title">Well<br> Documented</h3><!-- /.features-one__box__title -->
                </div><!-- /.features-one__box -->
            </div><!-- item -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="450ms">
                <div class="features-one__box">
                    <div class="features-one__box__image">
                        <img width="100" height="100" src="{{ asset("/assets/images/tolak-landing/feature-i-1-10.png") }}" alt="feature">
                    </div><!-- /.features-one__box__image -->
                    <h3 class="features-one__box__title">Easy<br> Customization</h3><!-- /.features-one__box__title -->
                </div><!-- /.features-one__box -->
            </div><!-- item -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                <div class="features-one__box">
                    <div class="features-one__box__image">
                        <img width="100" height="100" src="{{ asset("/assets/images/tolak-landing/feature-i-1-11.png") }}" alt="feature">
                    </div><!-- /.features-one__box__image -->
                    <h3 class="features-one__box__title">Mailchimp<br> Integrated</h3><!-- /.features-one__box__title -->
                </div><!-- /.features-one__box -->
            </div><!-- item -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="550ms">
                <div class="features-one__box">
                    <div class="features-one__box__image">
                        <img width="100" height="100" src="{{ asset("/assets/images/tolak-landing/feature-i-1-12.png") }}" alt="feature">
                    </div><!-- /.features-one__box__image -->
                    <h3 class="features-one__box__title">Customizer<br> Theme Options</h3><!-- /.features-one__box__title -->
                </div><!-- /.features-one__box -->
            </div><!-- item -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.features-one -->

<section class="inner-page">
    <div class="inner-page__number  wow fadeInUp" data-wow-delay="200ms">52+</div>
    <h3 class="inner-page__title bw-split-in-right">Pre-Made Inner Pages That Service<br> Your Purpose</h3>
    <div class="inner-page__wrapper">
        <div class="inner-page__wrapper__inner">
            <div class="item">
                <div class="inner-page__item">
                    <img src="{{ asset("/assets/images/tolak-landing/page-1.jpg") }}" width="393" alt="tolak">
                    <img src="{{ asset("/assets/images/tolak-landing/page-2.jpg") }}" width="393" alt="tolak">
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="inner-page__item">
                    <img src="{{ asset("/assets/images/tolak-landing/page-3.jpg") }}" width="393" alt="tolak">
                    <img src="{{ asset("/assets/images/tolak-landing/page-4.jpg") }}" width="393" alt="tolak">
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="inner-page__item">
                    <img src="{{ asset("/assets/images/tolak-landing/page-5.jpg") }}" width="393" alt="tolak">
                    <img src="{{ asset("/assets/images/tolak-landing/page-6.jpg") }}" width="393" alt="tolak">
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="inner-page__item">
                    <img src="{{ asset("/assets/images/tolak-landing/page-7.jpg") }}" width="393" alt="tolak">
                    <img src="{{ asset("/assets/images/tolak-landing/page-8.jpg") }}" width="393" alt="tolak">
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="inner-page__item">
                    <img src="{{ asset("/assets/images/tolak-landing/page-9.jpg") }}" width="393" alt="tolak">
                    <img src="{{ asset("/assets/images/tolak-landing/page-10.jpg") }}" width="393" alt="tolak">
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="inner-page__item">
                    <img src="{{ asset("/assets/images/tolak-landing/page-1.jpg") }}" width="393" alt="tolak">
                    <img src="{{ asset("/assets/images/tolak-landing/page-2.jpg") }}" width="393" alt="tolak">
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="inner-page__item">
                    <img src="{{ asset("/assets/images/tolak-landing/page-3.jpg") }}" width="393" alt="tolak">
                    <img src="{{ asset("/assets/images/tolak-landing/page-4.jpg") }}" width="393" alt="tolak">
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="inner-page__item">
                    <img src="{{ asset("/assets/images/tolak-landing/page-5.jpg") }}" width="393" alt="tolak">
                    <img src="{{ asset("/assets/images/tolak-landing/page-6.jpg") }}" width="393" alt="tolak">
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="inner-page__item">
                    <img src="{{ asset("/assets/images/tolak-landing/page-7.jpg") }}" width="393" alt="tolak">
                    <img src="{{ asset("/assets/images/tolak-landing/page-8.jpg") }}" width="393" alt="tolak">
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="inner-page__item">
                    <img src="{{ asset("/assets/images/tolak-landing/page-9.jpg") }}" width="393" alt="tolak">
                    <img src="{{ asset("/assets/images/tolak-landing/page-10.jpg") }}" width="393" alt="tolak">
                </div>
            </div><!-- item -->
        </div>
    </div>
</section><!-- /.inner-page -->

<section class="video-section">
    <div class="video-section__shape-one" style="background-image: url(assets/images/tolak-landing/video-bg-1.png);"></div>
    <div class="video-section__shape-two" style="background-image: url(assets/images/tolak-landing/video-bg-2.png);"></div>
    <div class="video-section__text bw-split-in-up">
        <span>Watch</span>
        <span>Video</span>
    </div>
    <div class="container">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline bw-split-in-left"><span class="sec-title__tagline__left"></span>SHOT VIDEO TUTORIAL<span class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title bw-split-in-right">Video will Help You to Learn<br> Much Better!</h3><!-- /.sec-title__title -->
        </div>
        <div class="video-section__banner wow fadeInUp" data-wow-delay="200ms">
            <div class="tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                <img src="{{ asset("/assets/images/tolak-landing/video-bg.jpg") }}" width="1170" height="789" alt="tolak">
            </div>
            <a href="https://www.youtube.com/watch?v=NevOHW9Efa4" class="video-popup">
                <i class="icon-play-button"></i>
                <span class="video-popup__btn-ripple"></span>
            </a>
        </div>
    </div>
</section><!-- /.video-section -->

<section class="slide-text">
    <div class="slide-text__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/tolak-landing/slide-text-bg.jpg);"></div>
    <div class="slide-text__wrap wow fadeInUp" data-wow-delay="200ms">
        <ul class="slide-text__list list-unstyled">
            <li>24/7</li>
            <li>Update And</li>
            <li>Customer</li>
            <li>Free Service</li>
            <li>24/7</li>
            <li>Update And</li>
            <li>Customer</li>
            <li>Free Service</li>
        </ul>
    </div>
</section><!-- /.slide-text -->


<x-footer-landing/>
<x-scroll-to-top/>
@endsection

