
@extends('layouts.layout2')
@section('title', 'Blog Details Right || Tolak || Tolak Laravel Template')
@php
    $title = 'News Details';
    $subtitle = 'Blog Details Right';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="blog-details">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="blog-details__content">
                            <div class="blog-details__image">
                                <img src="{{ asset("/assets/images/blog/blog-details-1.jpg") }}" alt="tolak">
                            </div><!-- /.blog-details__image -->
                            <div class="blog-details__meta">
                                <div class="blog-details__meta__cats">
                                    <a href="{{ url("blog-grid") }}">Business</a>
                                </div>
                                <div class="blog-details__meta__date">
                                    <a href="{{ url("blog-grid") }}">Loran Berasa</a> / Jun 4, 2023
                                </div>
                            </div><!-- /.list-unstyled blog-details__meta -->
                            <h3 class="blog-details__title">
                                Business solution is a leading provider of software development, software outsourcing services programming service.
                            </h3><!-- /.blog-details__title -->
                            <p class="blog-details__text">
                                There are many variations of passages agency we have covered many special events such as
                                fireworks, fairs, parades, races, walks, a Lorem Ipsum Fasts injecte dedicated product design
                                team can help you achieve your business goals. Whether you need to craft an idea for a
                                completely new product or elevate the quality of an existing solution, we’ll help you to
                                create a product that is laser targeted to your users’ needs and business results
                            </p><!-- /.blog-details__text -->
                            <p class="blog-details__text">
                                There are many variations of passages agency we have covered many special events such as
                                fireworks, fairs, parades, races, walks, a Lorem Ipsum .
                            </p><!-- /.blog-details__text -->
                            <div class="row gutter-y-30 blog-details__content__mr">
                                <div class="col-md-6">
                                    <div class="blog-details__item wow fadeInUp" data-wow-delay="00ms">
                                        <div class="blog-details__item__icon">
                                            <span class="icon-family"></span>
                                        </div>
                                        <h4 class="blog-details__item__title">Our Success Team Man</h4>
                                    </div><!-- blog-details__item -->
                                </div>
                                <div class="col-md-6">
                                    <div class="blog-details__item wow fadeInUp" data-wow-delay="100ms">
                                        <div class="blog-details__item__icon">
                                            <span class="icon-agency"></span>
                                        </div>
                                        <h4 class="blog-details__item__title">Professional Service</h4>
                                    </div><!-- blog-details__item -->
                                </div>
                                <div class="col-md-6">
                                    <div class="blog-details__item wow fadeInUp" data-wow-delay="200ms">
                                        <div class="blog-details__item__icon">
                                            <span class="icon-refund"></span>
                                        </div>
                                        <h4 class="blog-details__item__title">Latest Business Technology</h4>
                                    </div><!-- blog-details__item -->
                                </div>
                                <div class="col-md-6">
                                    <div class="blog-details__item wow fadeInUp" data-wow-delay="300ms">
                                        <div class="blog-details__item__icon">
                                            <span class="icon-management"></span>
                                        </div>
                                        <h4 class="blog-details__item__title">Long Experience Support</h4>
                                    </div><!-- blog-details__item -->
                                </div>
                            </div>
                            <p class="blog-details__text">
                                There are many variations of passages agency we have covered many special events such as
                                fireworks, fairs, parades, races, walks, a Lorem Ipsumpassages agency we have covered many
                                fireworks, fairs, parades, races, walks, a Lorem Ipsum Fasts injecte.
                            </p><!-- /.blog-details__text -->
                            <blockquote class="blog-details__blockquote">
                                <p class="blog-details__blockquote__text">
                                    Wesay are many variations of passages of Lorem Ipsum available, but the have suffered alteration
                                    in some form, by injected humour, oris ut. In interdum sem quis congue accumsan ellentesque
                                    convallis eros tiam ultricies finibus. . Nunc ac sem sit amet purus luctus.
                                </p>
                                <div class="blog-details__blockquote__meta">
                                    <img src="{{ asset("/assets/images/blog/blog-details-author.jpg") }}" alt="tolak">
                                    <h5 class="blog-details__blockquote__meta__name">Morata bara - <span>Founder</span></h5>
                                    <div class="blog-details__blockquote__meta__social">
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
                                </div>
                            </blockquote>
                        </div><!-- /.blog-details -->

                        <div class="comments-one">
                            <h3 class="comments-one__title">Comments (2)</h3><!-- /.comments-one__title -->
                            <ul class="list-unstyled comments-one__list">
                                <li class="comments-one__card">
                                    <div class="comments-one__card__image">
                                        <img src="{{ asset("/assets/images/blog/blog-comment-1-1.jpg") }}" alt="tolak">
                                    </div><!-- /.comments-one__card__image -->
                                    <div class="comments-one__card__content">
                                        <h3 class="comments-one__card__title">Porata Baran</h3><!-- /.comments-one__card__title -->
                                        <p class="comments-one__card__text">
                                            Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing elit sed do iusmod tempor incididu.
                                        </p><!-- /.comments-one__card__text -->
                                        <div class="comments-one__card__meta">November 16, 2018 at 4:31 am<a href="{{ url("blog-details-right") }}" class="comments-one__card__reply">Reply</a></div><!-- /.comments-one__meta -->
                                    </div><!-- /.comments-one__card__content -->
                                </li><!-- /.comments-one__card -->
                                <li class="comments-one__card">
                                    <div class="comments-one__card__image">
                                        <img src="{{ asset("/assets/images/blog/blog-comment-1-2.jpg") }}" alt="tolak">
                                    </div><!-- /.comments-one__card__image -->
                                    <div class="comments-one__card__content">
                                        <h3 class="comments-one__card__title">Korata Mana</h3><!-- /.comments-one__card__title -->
                                        <p class="comments-one__card__text">
                                            Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing elit sed do iusmod tempor incididu.
                                        </p><!-- /.comments-one__card__text -->
                                        <div class="comments-one__card__meta">November 16, 2018 at 4:31 am<a href="{{ url("blog-details-right") }}" class="comments-one__card__reply">Reply</a></div><!-- /.comments-one__meta -->
                                    </div><!-- /.comments-one__card__content -->
                                </li><!-- /.comments-one__card -->
                            </ul><!-- /.list-unstyled comments-one__list -->
                        </div><!-- /.comments-one -->

                        <div class="comments-form">
                            <h3 class="comments-form__title">Leave a comment</h3><!-- /.comments-form__title -->
                            <form class="comments-form__form contact-form-validated form-one">
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="Email address">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Write  a message"></textarea><!-- /# -->
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="tolak-btn"><b>Submit Comment</b><span></span></button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form>
                            <div class="result"></div>
                        </div><!-- /.comments-form -->
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