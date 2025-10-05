
@extends('layouts.layout2')
@section('title', 'Project Details || Tolak || Tolak Laravel Template')
@php
    $title = 'Project Details';
    $subtitle = 'Project Details';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="project-details">
            <div class="container">
                <div class="project-details__image">
                    <img src="{{ asset("/assets/images/project/project-detail-1.jpg") }}" alt="tolak">
                </div>
                <div class="project-details__inner">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-9 col-lg-8 col-md-7">
                            <div class="project-details__content">
                                <h4 class="project-details__content__title">Projects Details:</h4>
                                <p class="project-details__content__text">
                                    About : Phis are bound to ensue; and equal blame belongs to those who
                                    through weakness of will, which is the same as through.We have the
                                    and industry expertise to develop solutions that can connect the
                                    you need to craft an idea for a completely new product or
                                    elevate the quality of an existing solution.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5">
                            <ul class="project-details__list">
                                <li><i class="icofont-check-circled"></i><span>Client :</span> Burosa (USA)</li>
                                <li><i class="icofont-check-circled"></i><span>Date :</span> March 21, 2020</li>
                                <li><i class="icofont-check-circled"></i><span>Category :</span> Technology</li>
                                <li><i class="icofont-check-circled"></i><span>Location :</span> Dhaka</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="project-details__text">
                    Commercial management in construction ensures the planning, execution, and coordination of a construction project from the start to finish.
                    These are often for specific projects such as building or renovation projects that are sold or leased.ssional this to It uses a dictionary
                    of 22with a handful of model sentence structures, to generate Lorem Ipsum which looks therefore always free from repetition, injected
                    humour,sure there isn’t anything hidden in the middle of text. reenergize your ome and enhance your life.
                </p>
                <p class="project-details__text">
                    will reenergize your ome and enhance your life. From everyday housekeeping to routine cleanings, our professional this to It uses a
                    dictionary of words, combined with a handful of model sentence structures,
                </p>
                <div class="row project-details__customer-wrapper">
                    <div class="col-lg-6">
                        <div class="project-details__image-two">
                            <img src="{{ asset("/assets/images/project/project-detail-2.jpg") }}" alt="tolak">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="project-details__customer">
                            <div class="project-details__customer__box">
                                <div class="project-details__customer__box__icon"><span class="icon-best-price"></span></div>
                                <h3 class="project-details__customer__box__title">Solution System Design</h3>
                                <p class="project-details__customer__box__text">Every team has a culture and set of ct ations that have either been aed orsve naturally evolved.</p>
                            </div>
                            <div class="project-details__customer__author">
                                <img src="{{ asset("/assets/images/resources/cta-1-author-1.jpg") }}" alt="tolak">
                                <img src="{{ asset("/assets/images/resources/cta-1-author-2.jpg") }}" alt="tolak">
                                <img src="{{ asset("/assets/images/resources/cta-1-author-3.jpg") }}" alt="tolak">
                                <a class="project-details__customer__author__rm" href="{{ url("contact") }}">More <span class="fas fa-arrow-right"></span></a>
                            </div>
                            <p class="project-details__customer__text">29,0000 customers with our services <a href="{{ url("contact") }}">( Let’s Started )</a></p>
                        </div>
                    </div>
                </div>
                <p class="project-details__text">
                    Commercial management in construction ensures the planning, execution, and coordination of a construction project from the start to finish.
                    These are often for specific projects such as building or renovation projects that are sold or leased.ssional this to It uses a dictionary
                    of 22with a handful of model sentence structures, to generate Lorem Ipsum which looks therefore always free from repetition, injected
                    humour,sure there isn’t anything hidden in the middle of text. reenergize your ome and enhance your life.
                </p>
            </div><!-- /.container -->
        </section><!-- /.project-details -->

        <section class="project-details-faq">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="project-details-faq__accordion tolak-accrodion" data-grp-name="tolak-accrodion">
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
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="project-details-faq__image">
                            <img src="{{ asset("/assets/images/resources/counter-1-1.jpg") }}" alt="tolak">
                            <div class="project-details-faq__item count-box tolak-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 9, "speed": 700, "scale": 1 }'>
                                <h3 class="project-details-faq__item__count"><span class="count-text" data-stop="34" data-speed="1500"></span>k+</h3><!-- /.project-details-faq__number -->
                                <p class="project-details-faq__item__text">Customers Support</p><!-- /.project-details-faq__title -->
                            </div><!-- /.project-details-faq__item -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.project-details-faq -->

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