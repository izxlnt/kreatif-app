
@extends('layouts.layout4Onepage')
@section('title', 'Home Three || Tolak || Tolak Laravel Template For It Solution & Business')

@section('content')

<x-strickyHeader/>

   <!-- main-slider-start -->
   <section class="main-slider-three" id="home">
    <div class="main-slider-three__carousel tolak-owl__carousel owl-carousel" data-owl-options='{
"loop": true,
"animateOut": "fadeOut",
"animateIn": "fadeIn",
"items": 1,
"autoplay": true,
"autoplayTimeout": 7000,
"smartSpeed": 1000,
"nav": false,
"navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
"dots": false,
"margin": 0
}'>
        <div class="item">
            <div class="main-slider-three__item">
                <div class="main-slider-three__bg" style="background-image: url(assets/images/backgrounds/slider-3-1.jpg);"></div><!-- slider-bg -->
                <div class="main-slider-three__shape-one" style="background-image: url(assets/images/shapes/slider-3-shape-1.png);"></div><!-- slider-shape -->
                <div class="main-slider-three__shape-two" style="background-image: url(assets/images/shapes/slider-3-shape-2.png);"></div><!-- slider-shape -->
                <div class="main-slider-three__shape-three" style="background-image: url(assets/images/shapes/slider-3-shape-3.png);"></div><!-- slider-shape -->
                <div class="main-slider-three__shape-four" style="background-image: url(assets/images/shapes/slider-3-shape-4.png);"></div><!-- slider-shape -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="main-slider-three__thumb">
                                <img src="{{ asset("/assets/images/backgrounds/slider-3-layer.png") }}" alt="tolak" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-slider-three__content">
                                <h2 class="main-slider-three__title">
                                    <span class="main-slider-three__title__anim">Best IT Solution</span>
                                    <span class="main-slider-three__title__anim">Services Team</span>
                                    <span class="main-slider-three__title__anim">Technology.</span>
                                </h2><!-- slider-title -->
                                <p class="main-slider-three__text">
                                    Business a soluion and emirate in the Arab known <br>for luxury city for Company.
                                </p><!-- slider-text -->
                                <div class="main-slider-three__btn">
                                    <a href="{{ url("services") }}" class="tolak-btn"><b>Service Work</b><span></span></a><!-- slider-btn -->
                                    <div class="main-slider-three__btn__video">
                                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                            <i class="icon-play-button"></i>
                                            <span class="video-popup__btn-ripple"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="main-slider-three__item">
                <div class="main-slider-three__bg" style="background-image: url(assets/images/backgrounds/slider-3-2.jpg);"></div><!-- slider-bg -->
                <div class="main-slider-three__shape-one" style="background-image: url(assets/images/shapes/slider-3-shape-1.png);"></div><!-- slider-shape -->
                <div class="main-slider-three__shape-two" style="background-image: url(assets/images/shapes/slider-3-shape-2.png);"></div><!-- slider-shape -->
                <div class="main-slider-three__shape-three" style="background-image: url(assets/images/shapes/slider-3-shape-3.png);"></div><!-- slider-shape -->
                <div class="main-slider-three__shape-four" style="background-image: url(assets/images/shapes/slider-3-shape-4.png);"></div><!-- slider-shape -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="main-slider-three__thumb">
                                <img src="{{ asset("/assets/images/backgrounds/slider-3-layer-2.png") }}" alt="tolak" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-slider-three__content">
                                <h2 class="main-slider-three__title">
                                    <span class="main-slider-three__title__anim">Best IT Solution</span>
                                    <span class="main-slider-three__title__anim">Services Team</span>
                                    <span class="main-slider-three__title__anim">Technology.</span>
                                </h2><!-- slider-title -->
                                <p class="main-slider-three__text">
                                    Business a soluion and emirate in the Arab known <br>for luxury city for Company.
                                </p><!-- slider-text -->
                                <div class="main-slider-three__btn">
                                    <a href="{{ url("services") }}" class="tolak-btn"><b>Service Work</b><span></span></a><!-- slider-btn -->
                                    <div class="main-slider-three__btn__video">
                                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                            <i class="icon-play-button"></i>
                                            <span class="video-popup__btn-ripple"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Start -->
<section class="feature-four">
    <div class="container">
        <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-8">
                <div class="tolak-stretch-element-inside-column">
                    <div class="feature-four__item wow fadeInUp" data-wow-delay="00ms">
                        <div class="feature-four__item__icon"><span class="icon-agent"></span></div>
                        <h4 class="feature-four__item__title">Grow Technology</h4>
                    </div><!-- feature-item -->
                    <div class="feature-four__item wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-four__item__icon"><span class="icon-solutions"></span></div>
                        <h4 class="feature-four__item__title">Business Services</h4>
                    </div><!-- feature-item -->
                    <div class="feature-four__item wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-four__item__icon"><span class="icon-cooperation"></span></div>
                        <h4 class="feature-four__item__title">Project Complete</h4>
                    </div><!-- feature-item -->
                    <a href="{{ url("contact") }}" class="tolak-btn"><b>Contact Now</b><span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature End -->
<section class="about-three" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-three__image">
                    <div class="about-three__image__shape"><img src="{{ asset("/assets/images/shapes/about-3-shape-1.png") }}" alt="tolak"></div>
                    <div class="about-three__image__shape-two"><img src="{{ asset("/assets/images/shapes/about-3-shape-2.png") }}" alt="tolak"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-three__image__one">
                                <img src="{{ asset("/assets/images/resources/about-3-1.jpg") }}" alt="tolak">
                            </div>
                            <div class="about-three__fact count-box">
                                <div class="about-three__fact__icon"><i class="icon-check-mark"></i></div>
                                <h3 class="about-three__fact__count"><span class="count-text" data-stop="1283" data-speed="1500"></span>k+</h3><!-- /.about-three__fact__number -->
                                <p class="about-three__fact__text">Complete Project</p><!-- /.about-three__fact__title -->
                            </div><!-- /.about-three__fact -->
                        </div>
                        <div class="col-md-6">
                            <div class="about-three__image__two">
                                <img src="{{ asset("/assets/images/resources/about-3-2.jpg") }}" alt="tolak">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                <div class="about-three__content">
                    <div class="sec-title-two text-left">
                        <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span> Our About Now<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                        <h3 class="sec-title-two__title">About is Over 291+ Company Business Solution.</h3><!-- /.sec-title-two__title -->
                    </div><!-- /.sec-title-two -->
                    <p class="about-three__content__text">
                        Business tailored it design, management & support services<br> business agency elit, sed do eiusmod tempor.
                    </p>
                    <div class="about-three__content__bar"></div>
                    <div class="row">
                        <div class="col-md-5">
                            <ul class="about-three__content__list">
                                <li>Company and Research</li>
                                <li>Business and research</li>
                            </ul>
                        </div>
                        <div class="col-md-7">
                            <div class="about-three__content__skill">
                                <div class="progress-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#3d72fc" data-bgColor="#c8c8c8" data-width="60" data-height="60" data-linecap="normal" value="45">
                                        <div class="inner-text count-box">
                                            <span class="count-text" data-stop="45" data-speed="2000"></span><span class="count-Parsent">%</span>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="about-three__content__skill__title">Solution Business</h5>
                                <p class="about-three__content__skill__text">Level is high</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-three__content__quote">
                        If you are accused of committing a crime, you will the very best criminal defense attorneys.
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="about-three__content__btn">
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                    <i class="fa fa-play"></i>
                                    <span class="video-popup__btn-ripple"></span>
                                </a>
                                Watcing video
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="about-three__content__author">
                                <div class="about-three__content__author__image"><img src="{{ asset("/assets/images/resources/about-3-author.jpg") }}" alt="tolak"></div>
                                <img src="{{ asset("/assets/images/resources/about-sign.png") }}" alt="tolak">
                                <p class="about-three__content__author__text">Founder</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.about__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-three -->
<section class="funfact-two">
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
<!-- CTA Start -->
<section class="cta-six">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="00ms">
                <div class="cta-six__content">
                    <div class="cta-six__author">
                        <img src="{{ asset("/assets/images/resources/cta-1-author-1.jpg") }}" alt="tolak">
                        <img src="{{ asset("/assets/images/resources/cta-1-author-2.jpg") }}" alt="tolak">
                        <img src="{{ asset("/assets/images/resources/cta-1-author-3.jpg") }}" alt="tolak">
                        <a class="cta-six__author__rm" href="{{ url("contact") }}">More <span class="fas fa-arrow-right"></span></a>
                    </div>
                    <p class="cta-six__content__text">29,0000 customers with our services <a href="{{ url("contact") }}">( Let’s Started )</a></p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="cta-six__image">
                    <img src="{{ asset("/assets/images/resources/cta-6-1.jpg") }}" alt="tolak">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA End -->
<section class="why-choose-one" style="background-image: url(assets/images/backgrounds/why-choose-bg-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="why-choose-one__content">
                    <div class="sec-title-two text-left">
                        <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Why Choose Us<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                        <h3 class="sec-title-two__title">We Grow Your Business<br> Choose Service</h3><!-- /.sec-title-two__title -->
                    </div><!-- /.sec-title-two -->
                    <p class="why-choose-one__content__text">
                        Business tailored it design, management & support services <br>business agency elit, sed do eiusmod tempor.
                    </p>
                    <div class="row gutter-y-30">
                        <div class="col-md-6">
                            <div class="why-choose-one__item wow fadeInUp" data-wow-delay="00ms">
                                <div class="why-choose-one__item__icon">
                                    <span class="icon-family"></span>
                                </div>
                                <h4 class="why-choose-one__item__title">Our Success Team Man</h4>
                            </div><!-- why-choose-one__item -->
                        </div>
                        <div class="col-md-6">
                            <div class="why-choose-one__item wow fadeInUp" data-wow-delay="100ms">
                                <div class="why-choose-one__item__icon">
                                    <span class="icon-agency"></span>
                                </div>
                                <h4 class="why-choose-one__item__title">Professional Service</h4>
                            </div><!-- why-choose-one__item -->
                        </div>
                        <div class="col-md-6">
                            <div class="why-choose-one__item wow fadeInUp" data-wow-delay="200ms">
                                <div class="why-choose-one__item__icon">
                                    <span class="icon-refund"></span>
                                </div>
                                <h4 class="why-choose-one__item__title">Latest Business Technology</h4>
                            </div><!-- why-choose-one__item -->
                        </div>
                        <div class="col-md-6">
                            <div class="why-choose-one__item wow fadeInUp" data-wow-delay="300ms">
                                <div class="why-choose-one__item__icon">
                                    <span class="icon-management"></span>
                                </div>
                                <h4 class="why-choose-one__item__title">Long Experience Support</h4>
                            </div><!-- why-choose-one__item -->
                        </div>
                    </div>
                </div><!-- /.why-choose-one__content -->
            </div><!-- /.col-xl-8 -->
            <div class="col-xl-4">
                <div class="why-choose-one__image wow slideInRight" data-wow-delay="100ms">
                    <img src="{{ asset("/assets/images/resources/why-choose-1-1.jpg") }}" alt="tolak">
                </div><!-- /.why-choose-one__image -->
            </div><!-- /.col-xl-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.why-choose-one -->

<section class="testimonials-two" id="testimonial">
    <div class="testimonials-two__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/testimonial-bg-2.jpg);"></div>
    <div class="container">
        <div class="sec-title-two text-center">
            <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our testimonial say<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
            <h3 class="sec-title-two__title">What Customers Awesome Reviews</h3><!-- /.sec-title-two__title -->
        </div><!-- /.sec-title-two -->
        <div class="testimonials-two__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
    "items": 1,
    "margin": 30,
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
        "992": {
            "items": 2
        }
    }
    }'>
            <div class="item">
                <div class="testimonials-card-two">
                    <div class="testimonials-card-two__top">
                        <div class="testimonials-card-two__rating">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div><!-- /.testimonials-card-two__rating -->
                        <div class="testimonials-card-two__quote">
                            <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                        </div><!-- /.testimonials-card-two__quote -->
                        <div class="testimonials-card-two__content">
                            A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                        </div><!-- /.testimonials-card-two__content -->
                    </div>
                    <div class="testimonials-card-two__author">
                        <div class="testimonials-card-two__image">
                            <img src="{{ asset("/assets/images/resources/testi-1-4.jpg") }}" alt="Lataro Marsena">
                        </div><!-- /.testimonials-card-two__image -->
                        <h3 class="testimonials-card-two__name">
                            Lataro Marsena
                        </h3><!-- /.testimonials-card-two__name -->
                        <p class="testimonials-card-two__designation">Founder Ceo</p><!-- /.testimonials-card-two__designation -->
                    </div>
                </div><!-- /.testimonials-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-card-two">
                    <div class="testimonials-card-two__top">
                        <div class="testimonials-card-two__rating">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div><!-- /.testimonials-card-two__rating -->
                        <div class="testimonials-card-two__quote">
                            <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                        </div><!-- /.testimonials-card-two__quote -->
                        <div class="testimonials-card-two__content">
                            A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                        </div><!-- /.testimonials-card-two__content -->
                    </div>
                    <div class="testimonials-card-two__author">
                        <div class="testimonials-card-two__image">
                            <img src="{{ asset("/assets/images/resources/testi-1-5.jpg") }}" alt="Marsena Baran">
                        </div><!-- /.testimonials-card-two__image -->
                        <h3 class="testimonials-card-two__name">
                            Marsena Baran
                        </h3><!-- /.testimonials-card-two__name -->
                        <p class="testimonials-card-two__designation">Founder</p><!-- /.testimonials-card-two__designation -->
                    </div>
                </div><!-- /.testimonials-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-card-two">
                    <div class="testimonials-card-two__top">
                        <div class="testimonials-card-two__rating">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div><!-- /.testimonials-card-two__rating -->
                        <div class="testimonials-card-two__quote">
                            <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                        </div><!-- /.testimonials-card-two__quote -->
                        <div class="testimonials-card-two__content">
                            A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                        </div><!-- /.testimonials-card-two__content -->
                    </div>
                    <div class="testimonials-card-two__author">
                        <div class="testimonials-card-two__image">
                            <img src="{{ asset("/assets/images/resources/testi-1-3.jpg") }}" alt="David Cooper">
                        </div><!-- /.testimonials-card-two__image -->
                        <h3 class="testimonials-card-two__name">
                            David Cooper
                        </h3><!-- /.testimonials-card-two__name -->
                        <p class="testimonials-card-two__designation">Manager</p><!-- /.testimonials-card-two__designation -->
                    </div>
                </div><!-- /.testimonials-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-card-two">
                    <div class="testimonials-card-two__top">
                        <div class="testimonials-card-two__rating">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div><!-- /.testimonials-card-two__rating -->
                        <div class="testimonials-card-two__quote">
                            <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                        </div><!-- /.testimonials-card-two__quote -->
                        <div class="testimonials-card-two__content">
                            A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                        </div><!-- /.testimonials-card-two__content -->
                    </div>
                    <div class="testimonials-card-two__author">
                        <div class="testimonials-card-two__image">
                            <img src="{{ asset("/assets/images/resources/testi-1-4.jpg") }}" alt="Mike Hardson">
                        </div><!-- /.testimonials-card-two__image -->
                        <h3 class="testimonials-card-two__name">
                            Mike Hardson
                        </h3><!-- /.testimonials-card-two__name -->
                        <p class="testimonials-card-two__designation">Customer</p><!-- /.testimonials-card-two__designation -->
                    </div>
                </div><!-- /.testimonials-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-card-two">
                    <div class="testimonials-card-two__top">
                        <div class="testimonials-card-two__rating">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div><!-- /.testimonials-card-two__rating -->
                        <div class="testimonials-card-two__quote">
                            <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                        </div><!-- /.testimonials-card-two__quote -->
                        <div class="testimonials-card-two__content">
                            A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                        </div><!-- /.testimonials-card-two__content -->
                    </div>
                    <div class="testimonials-card-two__author">
                        <div class="testimonials-card-two__image">
                            <img src="{{ asset("/assets/images/resources/testi-1-1.jpg") }}" alt="Mark Smith">
                        </div><!-- /.testimonials-card-two__image -->
                        <h3 class="testimonials-card-two__name">
                            Mark Smith
                        </h3><!-- /.testimonials-card-two__name -->
                        <p class="testimonials-card-two__designation">Reviwers</p><!-- /.testimonials-card-two__designation -->
                    </div>
                </div><!-- /.testimonials-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-card-two">
                    <div class="testimonials-card-two__top">
                        <div class="testimonials-card-two__rating">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div><!-- /.testimonials-card-two__rating -->
                        <div class="testimonials-card-two__quote">
                            <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                        </div><!-- /.testimonials-card-two__quote -->
                        <div class="testimonials-card-two__content">
                            A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                        </div><!-- /.testimonials-card-two__content -->
                    </div>
                    <div class="testimonials-card-two__author">
                        <div class="testimonials-card-two__image">
                            <img src="{{ asset("/assets/images/resources/testi-1-2.jpg") }}" alt="David Cooper">
                        </div><!-- /.testimonials-card-two__image -->
                        <h3 class="testimonials-card-two__name">
                            David Cooper
                        </h3><!-- /.testimonials-card-two__name -->
                        <p class="testimonials-card-two__designation">Co Founder</p><!-- /.testimonials-card-two__designation -->
                    </div>
                </div><!-- /.testimonials-card-two -->
            </div><!-- /.item -->
        </div><!-- /.testimonials-two__carousel -->
    </div><!-- /.container -->
</section><!-- /.testimonials-two -->
<section class="project-two" id="project">
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
<!-- CTA Start -->
<section class="cta-five">
    <div class="container">
        <div class="cta-five__bg" style="background-image: url(assets/images/resources/cta-5-bg.jpg);">
            <div class="row d-flex align-items-center">
                <div class="col-md-8 wow fadeInUp" data-wow-delay="00ms">
                    <div class="cta-five__content">
                        <div class="cta-five__content__icon"><i class="icon-customer-service"></i></div>
                        <h5 class="cta-five__content__title">
                            Our Best It-Solution for <a href="{{ url("contact") }}">Contacts.</a>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="200ms">
                    <a href="{{ url("contact") }}" class="tolak-btn"><b>Contact Now</b><span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA End -->
<section class="team-two" style="background-image: url(assets/images/shapes/team-2-bg.png);" id="team">
    <div class="container">
        <div class="sec-title-two text-center">
            <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Team Member<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
            <h3 class="sec-title-two__title">Meet The Team Metting Solution</h3><!-- /.sec-title-two__title -->
        </div><!-- /.sec-title-two -->
        <div class="team-two__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel" data-owl-options='{
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
        "992": {
            "items": 3
        },
        "1200": {
            "items": 4
        }
    }
    }'>
            <div class="item">
                <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="team-card-two__image">
                        <img src="{{ asset("/assets/images/team/team-2-1.jpg") }}" alt="Lorata Barsa">
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__image-bg"></div>
                    <div class="team-card-two__content">
                        <div class="team-card-two__hover">
                            <div class="team-card-two__social">
                                <i class="fa fa-plus"></i>
                                <div class="team-card-two__social__list">
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
                                </div><!-- /.team-card-two__social__list -->
                            </div><!-- /.team-card-two__social -->
                        </div><!-- /.team-card-two__hover -->
                        <h3 class="team-card-two__title">
                            <a href="{{ url("team-details") }}">Lorata Barsa</a>
                        </h3><!-- /.team-card-two__title -->
                        <p class="team-card-two__designation">Founder</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__content -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two team-card-two--even wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="team-card-two__image">
                        <img src="{{ asset("/assets/images/team/team-2-2.jpg") }}" alt="Moras Batas">
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__image-bg"></div>
                    <div class="team-card-two__content">
                        <div class="team-card-two__hover">
                            <div class="team-card-two__social">
                                <i class="fa fa-plus"></i>
                                <div class="team-card-two__social__list">
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
                                </div><!-- /.team-card-two__social__list -->
                            </div><!-- /.team-card-two__social -->
                        </div><!-- /.team-card-two__hover -->
                        <h3 class="team-card-two__title">
                            <a href="{{ url("team-details") }}">Moras Batas</a>
                        </h3><!-- /.team-card-two__title -->
                        <p class="team-card-two__designation">Manager</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__content -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="team-card-two__image">
                        <img src="{{ asset("/assets/images/team/team-2-3.jpg") }}" alt="Korata Mana">
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__image-bg"></div>
                    <div class="team-card-two__content">
                        <div class="team-card-two__hover">
                            <div class="team-card-two__social">
                                <i class="fa fa-plus"></i>
                                <div class="team-card-two__social__list">
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
                                </div><!-- /.team-card-two__social__list -->
                            </div><!-- /.team-card-two__social -->
                        </div><!-- /.team-card-two__hover -->
                        <h3 class="team-card-two__title">
                            <a href="{{ url("team-details") }}">Korata Mana</a>
                        </h3><!-- /.team-card-two__title -->
                        <p class="team-card-two__designation">Founder</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__content -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two team-card-two--even wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="team-card-two__image">
                        <img src="{{ asset("/assets/images/team/team-2-4.jpg") }}" alt="Mark Smith">
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__image-bg"></div>
                    <div class="team-card-two__content">
                        <div class="team-card-two__hover">
                            <div class="team-card-two__social">
                                <i class="fa fa-plus"></i>
                                <div class="team-card-two__social__list">
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
                                </div><!-- /.team-card-two__social__list -->
                            </div><!-- /.team-card-two__social -->
                        </div><!-- /.team-card-two__hover -->
                        <h3 class="team-card-two__title">
                            <a href="{{ url("team-details") }}">Mark Smith</a>
                        </h3><!-- /.team-card-two__title -->
                        <p class="team-card-two__designation">Manager</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__content -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="team-card-two__image">
                        <img src="{{ asset("/assets/images/team/team-2-1.jpg") }}" alt="Lorata Barsa">
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__image-bg"></div>
                    <div class="team-card-two__content">
                        <div class="team-card-two__hover">
                            <div class="team-card-two__social">
                                <i class="fa fa-plus"></i>
                                <div class="team-card-two__social__list">
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
                                </div><!-- /.team-card-two__social__list -->
                            </div><!-- /.team-card-two__social -->
                        </div><!-- /.team-card-two__hover -->
                        <h3 class="team-card-two__title">
                            <a href="{{ url("team-details") }}">Lorata Barsa</a>
                        </h3><!-- /.team-card-two__title -->
                        <p class="team-card-two__designation">Founder</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__content -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two team-card-two--even wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="team-card-two__image">
                        <img src="{{ asset("/assets/images/team/team-2-2.jpg") }}" alt="Moras Batas">
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__image-bg"></div>
                    <div class="team-card-two__content">
                        <div class="team-card-two__hover">
                            <div class="team-card-two__social">
                                <i class="fa fa-plus"></i>
                                <div class="team-card-two__social__list">
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
                                </div><!-- /.team-card-two__social__list -->
                            </div><!-- /.team-card-two__social -->
                        </div><!-- /.team-card-two__hover -->
                        <h3 class="team-card-two__title">
                            <a href="{{ url("team-details") }}">Moras Batas</a>
                        </h3><!-- /.team-card-two__title -->
                        <p class="team-card-two__designation">Manager</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__content -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="team-card-two__image">
                        <img src="{{ asset("/assets/images/team/team-2-3.jpg") }}" alt="Korata Mana">
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__image-bg"></div>
                    <div class="team-card-two__content">
                        <div class="team-card-two__hover">
                            <div class="team-card-two__social">
                                <i class="fa fa-plus"></i>
                                <div class="team-card-two__social__list">
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
                                </div><!-- /.team-card-two__social__list -->
                            </div><!-- /.team-card-two__social -->
                        </div><!-- /.team-card-two__hover -->
                        <h3 class="team-card-two__title">
                            <a href="{{ url("team-details") }}">Korata Mana</a>
                        </h3><!-- /.team-card-two__title -->
                        <p class="team-card-two__designation">Founder</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__content -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two team-card-two--even wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="team-card-two__image">
                        <img src="{{ asset("/assets/images/team/team-2-4.jpg") }}" alt="Mark Smith">
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__image-bg"></div>
                    <div class="team-card-two__content">
                        <div class="team-card-two__hover">
                            <div class="team-card-two__social">
                                <i class="fa fa-plus"></i>
                                <div class="team-card-two__social__list">
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
                                </div><!-- /.team-card-two__social__list -->
                            </div><!-- /.team-card-two__social -->
                        </div><!-- /.team-card-two__hover -->
                        <h3 class="team-card-two__title">
                            <a href="{{ url("team-details") }}">Mark Smith</a>
                        </h3><!-- /.team-card-two__title -->
                        <p class="team-card-two__designation">Manager</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__content -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="team-card-two__image">
                        <img src="{{ asset("/assets/images/team/team-2-1.jpg") }}" alt="Lorata Barsa">
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__image-bg"></div>
                    <div class="team-card-two__content">
                        <div class="team-card-two__hover">
                            <div class="team-card-two__social">
                                <i class="fa fa-plus"></i>
                                <div class="team-card-two__social__list">
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
                                </div><!-- /.team-card-two__social__list -->
                            </div><!-- /.team-card-two__social -->
                        </div><!-- /.team-card-two__hover -->
                        <h3 class="team-card-two__title">
                            <a href="{{ url("team-details") }}">Lorata Barsa</a>
                        </h3><!-- /.team-card-two__title -->
                        <p class="team-card-two__designation">Founder</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__content -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two team-card-two--even wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="team-card-two__image">
                        <img src="{{ asset("/assets/images/team/team-2-2.jpg") }}" alt="Moras Batas">
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__image-bg"></div>
                    <div class="team-card-two__content">
                        <div class="team-card-two__hover">
                            <div class="team-card-two__social">
                                <i class="fa fa-plus"></i>
                                <div class="team-card-two__social__list">
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
                                </div><!-- /.team-card-two__social__list -->
                            </div><!-- /.team-card-two__social -->
                        </div><!-- /.team-card-two__hover -->
                        <h3 class="team-card-two__title">
                            <a href="{{ url("team-details") }}">Moras Batas</a>
                        </h3><!-- /.team-card-two__title -->
                        <p class="team-card-two__designation">Manager</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__content -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="team-card-two__image">
                        <img src="{{ asset("/assets/images/team/team-2-3.jpg") }}" alt="Korata Mana">
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__image-bg"></div>
                    <div class="team-card-two__content">
                        <div class="team-card-two__hover">
                            <div class="team-card-two__social">
                                <i class="fa fa-plus"></i>
                                <div class="team-card-two__social__list">
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
                                </div><!-- /.team-card-two__social__list -->
                            </div><!-- /.team-card-two__social -->
                        </div><!-- /.team-card-two__hover -->
                        <h3 class="team-card-two__title">
                            <a href="{{ url("team-details") }}">Korata Mana</a>
                        </h3><!-- /.team-card-two__title -->
                        <p class="team-card-two__designation">Founder</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__content -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="team-card-two team-card-two--even wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="team-card-two__image">
                        <img src="{{ asset("/assets/images/team/team-2-4.jpg") }}" alt="Mark Smith">
                    </div><!-- /.team-card-two__image -->
                    <div class="team-card-two__image-bg"></div>
                    <div class="team-card-two__content">
                        <div class="team-card-two__hover">
                            <div class="team-card-two__social">
                                <i class="fa fa-plus"></i>
                                <div class="team-card-two__social__list">
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
                                </div><!-- /.team-card-two__social__list -->
                            </div><!-- /.team-card-two__social -->
                        </div><!-- /.team-card-two__hover -->
                        <h3 class="team-card-two__title">
                            <a href="{{ url("team-details") }}">Mark Smith</a>
                        </h3><!-- /.team-card-two__title -->
                        <p class="team-card-two__designation">Manager</p><!-- /.team-card-two__designation -->
                    </div><!-- /.team-card-two__content -->
                </div><!-- /.team-card-two -->
            </div><!-- /.item -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.team-two -->
<div class="client-carousel ">
    <div class="container">
        <div class="client-carousel__one tolak-owl__carousel owl-theme owl-carousel" data-owl-options='{
    "items": 5,
    "margin": 30,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": 6000,
    "nav":false,
    "dots":false,
    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
    "responsive":{
        "0":{
            "items":1
        },
        "360":{
            "items":2
        },
        "575":{
            "items":3
        },
        "768":{
            "items":3
        },
        "992":{
            "items": 4
        },
        "1200":{
            "items": 5
        }
    }
    }'>
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
            </div><!-- /.owl-slide-item-->
        </div><!-- /.thm-owl__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->
<!-- Skill Start -->
<section class="skill-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="skill-one__content">
                    <div class="sec-title-two text-left">
                        <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Skill Now<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                        <h3 class="sec-title-two__title">The Fatest Skill To Achieve Technology Business</h3><!-- /.sec-title-two__title -->
                    </div><!-- /.sec-title-two -->
                    <p class="skill-one__content__text">
                        Business tailored it design, management & support services business business agency elit, sed do eiusmod tempor.
                    </p>
                    <div class="skill-one__content__bar"></div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="skill-one__content__image">
                                <img src="{{ asset("/assets/images/resources/skill-1-1.jpg") }}" alt="tolak">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="skill-one__content__skill">
                                <div class="progress-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#3d72fc" data-bgColor="#c8c8c8" data-width="60" data-height="60" data-linecap="normal" value="45">
                                        <div class="inner-text count-box">
                                            <span class="count-text" data-stop="45" data-speed="2000"></span><span class="count-Parsent">%</span>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="skill-one__content__skill__title">Solution Business</h5>
                                <p class="skill-one__content__skill__text">Level is high</p>
                            </div>
                            <div class="skill-one__content__skill">
                                <div class="progress-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#3d72fc" data-bgColor="#c8c8c8" data-width="60" data-height="60" data-linecap="normal" value="85">
                                        <div class="inner-text count-box">
                                            <span class="count-text" data-stop="85" data-speed="2000"></span><span class="count-Parsent">%</span>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="skill-one__content__skill__title">Good Feedback</h5>
                                <p class="skill-one__content__skill__text">Don’t worry</p>
                            </div>
                        </div>
                    </div>
                    <ul class="skill-one__content__list">
                        <li><span class="icofont-checked"></span>
                            <p>Business onstructivism solution best this service.</p>
                        </li>
                        <li><span class="icofont-checked"></span>
                            <p>We give management projects compny.</p>
                        </li>
                    </ul>
                    <a href="{{ url("about") }}" class="tolak-btn"><b>Skill More</b><span></span></a>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="00ms">
                <div class="skill-one__image">
                    <img src="{{ asset("/assets/images/resources/skill-1-2.jpg") }}" alt="tolak">
                    <img class="skill-one__image__shape" src="{{ asset("/assets/images/shapes/skill-shape-1.png") }}" alt="tolak">
                    <div class="skill-one__image__text wow fadeInUp" data-wow-delay="200ms">
                        <span>Appropriately :</span> enhance principle-centered innovation rather than high tandards in platforms. Credibly orchestrate functional.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Skill End -->
<!-- Feature Start -->
<section class="feature-three" style="background-image: url(assets/images/shapes/feature-bg-3.png);">
    <div class="container">
        <div class="sec-title-two text-center">
            <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Best feature<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
            <h3 class="sec-title-two__title">Feature Aspects Services Company</h3><!-- /.sec-title-two__title -->
        </div><!-- /.sec-title-two -->
        <div class="feature-three__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
    "items": 3,
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
        "992": {
            "items": 3
        }
    }
    }'>
            <div class="item">
                <div class="feature-three__item wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-three__item__image">
                        <img src="{{ asset("/assets/images/resources/feature-3-1.jpg") }}" alt="tolak">
                        <a href="{{ url("about") }}" class="feature-three__item__link"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="feature-three__item__normal">
                        <h4 class="feature-three__item__normal__title">Commited to Delive</h4>
                        <p class="feature-three__item__normal__text">Business</p>
                    </div>
                    <div class="feature-three__item__hover">
                        <div class="feature-three__item__icon">
                            <span class="icon-cooperation"></span>
                        </div>
                        <h4 class="feature-three__item__title">Commited to Delive</h4>
                        <p class="feature-three__item__text">We businesss standard chunk of Ipsum used since is Agency & Star tup.</p>
                    </div>
                </div><!-- feature-item -->
            </div>
            <div class="item">
                <div class="feature-three__item wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-three__item__image">
                        <img src="{{ asset("/assets/images/resources/feature-3-2.jpg") }}" alt="tolak">
                        <a href="{{ url("about") }}" class="feature-three__item__link"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="feature-three__item__normal">
                        <h4 class="feature-three__item__normal__title">Business Of Growth</h4>
                        <p class="feature-three__item__normal__text">Growth</p>
                    </div>
                    <div class="feature-three__item__hover">
                        <div class="feature-three__item__icon">
                            <span class="icon-ads-campaign"></span>
                        </div>
                        <h4 class="feature-three__item__title">Business Of Growth</h4>
                        <p class="feature-three__item__text">We businesss standard chunk of Ipsum used since is Agency & Star tup.</p>
                    </div>
                </div><!-- feature-item -->
            </div>
            <div class="item">
                <div class="feature-three__item wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-three__item__image">
                        <img src="{{ asset("/assets/images/resources/feature-3-3.jpg") }}" alt="tolak">
                        <a href="{{ url("about") }}" class="feature-three__item__link"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="feature-three__item__normal">
                        <h4 class="feature-three__item__normal__title">Business Projects</h4>
                        <p class="feature-three__item__normal__text">Marketing</p>
                    </div>
                    <div class="feature-three__item__hover">
                        <div class="feature-three__item__icon">
                            <span class="icon-advertisig-agency"></span>
                        </div>
                        <h4 class="feature-three__item__title">Business Projects</h4>
                        <p class="feature-three__item__text">We businesss standard chunk of Ipsum used since is Agency & Star tup.</p>
                    </div>
                </div><!-- feature-item -->
            </div>
            <div class="item">
                <div class="feature-three__item wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-three__item__image">
                        <img src="{{ asset("/assets/images/resources/feature-3-1.jpg") }}" alt="tolak">
                        <a href="{{ url("about") }}" class="feature-three__item__link"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="feature-three__item__normal">
                        <h4 class="feature-three__item__normal__title">Commited to Delive</h4>
                        <p class="feature-three__item__normal__text">Business</p>
                    </div>
                    <div class="feature-three__item__hover">
                        <div class="feature-three__item__icon">
                            <span class="icon-cooperation"></span>
                        </div>
                        <h4 class="feature-three__item__title">Commited to Delive</h4>
                        <p class="feature-three__item__text">We businesss standard chunk of Ipsum used since is Agency & Star tup.</p>
                    </div>
                </div><!-- feature-item -->
            </div>
            <div class="item">
                <div class="feature-three__item wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-three__item__image">
                        <img src="{{ asset("/assets/images/resources/feature-3-2.jpg") }}" alt="tolak">
                        <a href="{{ url("about") }}" class="feature-three__item__link"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="feature-three__item__normal">
                        <h4 class="feature-three__item__normal__title">Business Of Growth</h4>
                        <p class="feature-three__item__normal__text">Growth</p>
                    </div>
                    <div class="feature-three__item__hover">
                        <div class="feature-three__item__icon">
                            <span class="icon-ads-campaign"></span>
                        </div>
                        <h4 class="feature-three__item__title">Business Of Growth</h4>
                        <p class="feature-three__item__text">We businesss standard chunk of Ipsum used since is Agency & Star tup.</p>
                    </div>
                </div><!-- feature-item -->
            </div>
            <div class="item">
                <div class="feature-three__item wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-three__item__image">
                        <img src="{{ asset("/assets/images/resources/feature-3-3.jpg") }}" alt="tolak">
                        <a href="{{ url("about") }}" class="feature-three__item__link"><i class="icon-right-arrow"></i></a>
                    </div>
                    <div class="feature-three__item__normal">
                        <h4 class="feature-three__item__normal__title">Business Projects</h4>
                        <p class="feature-three__item__normal__text">Marketing</p>
                    </div>
                    <div class="feature-three__item__hover">
                        <div class="feature-three__item__icon">
                            <span class="icon-advertisig-agency"></span>
                        </div>
                        <h4 class="feature-three__item__title">Business Projects</h4>
                        <p class="feature-three__item__text">We businesss standard chunk of Ipsum used since is Agency & Star tup.</p>
                    </div>
                </div><!-- feature-item -->
            </div>
        </div>
    </div>
</section>
<!-- Feature End -->
<section class="contact-two" id="contact">
    <div class="container">
        <div class="contact-two__wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-two__info">
                        <div class="contact-two__info__shape" style="background-image: url(assets/images/shapes/contact-2-shape-1.png);"></div>
                        <h4 class="contact-two__info__title">Contact Information :</h4>
                        <p class="contact-two__info__text">
                            Business tailored it design, management & support business agency elit, sed do eiusmod tempor.
                        </p>
                        <ul class="contact-two__info__box-wrapper">
                            <li class="contact-two__info__box">
                                <div class="contact-two__info__box__icon"><i class="icon-phone-call"></i></div>
                                <h4 class="contact-two__info__box__title">Call This Now</h4>
                                <p class="contact-two__info__box__text"><a href="{{ url("tel:025461556695") }}">+025461556695</a></p>
                            </li>
                            <li class="contact-two__info__box">
                                <div class="contact-two__info__box__icon"><i class="icon-open-mail"></i></div>
                                <h4 class="contact-two__info__box__title">Your Message</h4>
                                <p class="contact-two__info__box__text"><a href="{{ url("mailto:amar@mail.com") }}">amar@mail.com</a></p>
                            </li>
                            <li class="contact-two__info__box">
                                <div class="contact-two__info__box__icon"><i class="icon-pin"></i></div>
                                <h4 class="contact-two__info__box__title">Your location</h4>
                                <p class="contact-two__info__box__text">Dhaka ,56 Besta</p>
                            </li>
                        </ul>
                        <div class="contact-two__info__social">
                            <h5 class="contact-two__info__social__title">Follow Social:</h5>
                            <div class="contact-two__info__social__wrap">
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
                            </div>
                        </div><!-- contact-social -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-two__content">
                        <div class="sec-title-two text-left">
                            <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our COntact Us<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                            <h3 class="sec-title-two__title">Get free Business touch Customers me.</h3><!-- /.sec-title-two__title -->
                        </div><!-- /.sec-title-two -->
                        <p class="contact-two__content__text">
                            Business tailored it design, management & support services<br> business agency elit, sed do eiusmod tempor.
                        </p>
                        <form class="contact-two__form contact-form-validated form-one" action="inc/sendemail.php">
                            <div class="form-one__group">
                                <div class="form-one__control">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control">
                                    <input type="email" name="email" placeholder="Email address">
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <textarea name="message" placeholder="Message"></textarea><!-- /# -->
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="tolak-btn"><b>Send Request</b><span></span></button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.contact -->

<section class="blog-three" id="blog">
    <div class="container">
        <div class="sec-title-two text-center">
            <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Largest Blog<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
            <h3 class="sec-title-two__title">Latest News From The Blog</h3><!-- /.sec-title-two__title -->
        </div><!-- /.sec-title-two -->
        <div class="blog-three__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
    "items": 1,
    "margin": 30,
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
            "items": 2
        },
        "992": {
            "items": 3
        }
    }
    }'>
            <div class="item">
                <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                    <div class="blog-card-three__image">
                        <img src="{{ asset("/assets/images/blog/blog-3-1.png") }}" alt="Solution This Business For is Marketing Blog">
                        <img src="{{ asset("/assets/images/blog/blog-3-1.png") }}" alt="Solution This Business For is Marketing Blog">
                        <div class="blog-card-three__date">
                            <span>15</span>
                            Jun
                            <div class="blog-card-three__date__year">2023</div>
                        </div><!-- /.blog-card-three__date -->
                        <a href="{{ url("blog-details-right") }}" class="blog-card-three__image__link"><i class="icon-right-arrow"></i><span class="sr-only">Solution This Business For is Marketing Blog</span>
                            <!-- /.sr-only --></a>
                    </div><!-- /.blog-card-three__image -->
                    <div class="blog-card-three__content">
                        <h3 class="blog-card-three__title"><a href="{{ url("blog-details-right") }}">Solution This Business For is Marketing Blog</a></h3><!-- /.blog-card-three__title -->
                        <p class="blog-card-three__text">We business standard chunk ofI nibh vitae molestie id sed exthe.</p><!-- /.blog-card-three__text -->
                        <div class="blog-card-three__meta">
                            <div class="blog-card-three__meta__author">
                                <img src="{{ asset("/assets/images/blog/blog-2-author.png") }}" alt="tolak">Admin:<a href="{{ url("blog-details-right") }}">Mera</a>
                            </div>
                            <div class="blog-card-three__meta__comments">
                                <i class="icofont-speech-comments"></i>Comments (04)
                            </div>
                        </div>
                    </div><!-- /.blog-card-three__content -->
                </div><!-- /.blog-card-three -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="blog-card-three__image">
                        <img src="{{ asset("/assets/images/blog/blog-3-2.png") }}" alt="Business Rules of Running to Web Solution">
                        <img src="{{ asset("/assets/images/blog/blog-3-2.png") }}" alt="Business Rules of Running to Web Solution">
                        <div class="blog-card-three__date">
                            <span>19</span>
                            Jun
                            <div class="blog-card-three__date__year">2023</div>
                        </div><!-- /.blog-card-three__date -->
                        <a href="{{ url("blog-details-right") }}" class="blog-card-three__image__link"><i class="icon-right-arrow"></i><span class="sr-only">Business Rules of Running to Web Solution</span>
                            <!-- /.sr-only --></a>
                    </div><!-- /.blog-card-three__image -->
                    <div class="blog-card-three__content">
                        <h3 class="blog-card-three__title"><a href="{{ url("blog-details-right") }}">Business Rules of Running to Web Solution</a></h3><!-- /.blog-card-three__title -->
                        <p class="blog-card-three__text">We business standard chunk ofI nibh vitae molestie id sed exthe.</p><!-- /.blog-card-three__text -->
                        <div class="blog-card-three__meta">
                            <div class="blog-card-three__meta__author">
                                <img src="{{ asset("/assets/images/blog/blog-2-author.png") }}" alt="tolak">Admin:<a href="{{ url("blog-details-right") }}">Mera</a>
                            </div>
                            <div class="blog-card-three__meta__comments">
                                <i class="icofont-speech-comments"></i>Comments (04)
                            </div>
                        </div>
                    </div><!-- /.blog-card-three__content -->
                </div><!-- /.blog-card-three -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="blog-card-three__image">
                        <img src="{{ asset("/assets/images/blog/blog-3-3.png") }}" alt="We Should be Descriptive This Business">
                        <img src="{{ asset("/assets/images/blog/blog-3-3.png") }}" alt="We Should be Descriptive This Business">
                        <div class="blog-card-three__date">
                            <span>29</span>
                            Jun
                            <div class="blog-card-three__date__year">2023</div>
                        </div><!-- /.blog-card-three__date -->
                        <a href="{{ url("blog-details-right") }}" class="blog-card-three__image__link"><i class="icon-right-arrow"></i><span class="sr-only">We Should be Descriptive This Business</span>
                            <!-- /.sr-only --></a>
                    </div><!-- /.blog-card-three__image -->
                    <div class="blog-card-three__content">
                        <h3 class="blog-card-three__title"><a href="{{ url("blog-details-right") }}">We Should be Descriptive This Business</a></h3><!-- /.blog-card-three__title -->
                        <p class="blog-card-three__text">We business standard chunk ofI nibh vitae molestie id sed exthe.</p><!-- /.blog-card-three__text -->
                        <div class="blog-card-three__meta">
                            <div class="blog-card-three__meta__author">
                                <img src="{{ asset("/assets/images/blog/blog-2-author.png") }}" alt="tolak">Admin:<a href="{{ url("blog-details-right") }}">Mera</a>
                            </div>
                            <div class="blog-card-three__meta__comments">
                                <i class="icofont-speech-comments"></i>Comments (04)
                            </div>
                        </div>
                    </div><!-- /.blog-card-three__content -->
                </div><!-- /.blog-card-three -->
            </div><!-- /.item -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-three -->

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