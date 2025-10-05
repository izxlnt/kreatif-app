
@extends('layouts.layout2')
@section('title', 'Products Details || Tolak || Tolak Laravel Template')
@php
    $title = 'Products Details';
    $subtitle = 'Products';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="product-details">
            <div class="container">
                <!-- /.product-details -->
                <div class="row">
                    <div class="col-lg-6 col-xl-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="product-details__img">
                            <img src="{{ asset("/assets/images/products/product-d-1-1.jpg") }}" alt="">
                            <div class="product-details__img-search">
                                <a class="img-popup" href="{{ url("assets/images/products/product-d-1-1.jpg") }}"><span class="icon-magnifying-glass"></span></a>
                            </div><!-- /.product-image -->
                        </div>
                    </div><!-- /.column -->
                    <div class="col-lg-6 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="product-details__content">
                            <div class="product-details__top">
                                <h3 class="product-details__title">Office Chair</h3><!-- /.product-title -->
                                <div class="product-details__price">$78.00</div><!-- /.product-price -->
                            </div>
                            <div class="product-details__review">
                                <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                <a href="{{ url("product-details") }}">2 Customer Reviews</a>
                            </div><!-- /.review-ratings -->
                            <div class="product-details__divider"></div><!-- /.divider -->
                            <div class="product-details__excerpt">
                                <p class="product-details__excerpt-text1">
                                    Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo venenatis
                                    ligula commodo leez sed blandit
                                    convallis dignissim onec vel pellentesque neque.
                                </p>
                                <p class="product-details__excerpt-text2">REF. 4231/406 <br>Available in store</p>
                            </div><!-- /.excerp-text -->
                            <div class="product-details__quantity">
                                <h3 class="product-details__quantity-title">Quantity</h3>
                                <div class="quantity-box">
                                    <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                    <input type="text" id="1" value="1">
                                    <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                </div>
                            </div><!-- /.quantity -->
                            <div class="product-details__buttons">
                                <a href="{{ url("cart") }}" class="tolak-btn"><b>Add to Cart</b><span></span></a>
                                <a href="{{ url("cart") }}" class="tolak-btn"><b>Add to wishlist</b><span></span></a>
                            </div><!-- /.qty-btn -->
                            <div class="product-details__socials">
                                <h4 class="product-details__socials__title">Share with friends</h4>
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
                            </div><!-- /.social-share -->
                        </div>
                    </div>
                </div>
                <!-- /.product-details -->
                <!-- /.product-description -->
                <div class="product-details__description wow fadeInUp" data-wow-delay="300ms">
                    <h3 class="product-details__description__title">Description</h3>
                    <p class="product-details__description__text">
                        Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum. There are many variations of
                        passages of Lorem Ipsum available,
                        but the majority have alteration in some injected or words which don't look even slightly believable. If
                        you are going to use a
                        passage of Lorem Ipsum, you need to be sure there isn't anything embarrang hidden in the middle of text.
                    </p>
                    <ul class="list-unstyled product-details__description__lists">
                        <li><span class="icon-right-arrow"></span>Nam at elit nec neque suscipit gravida.</li>
                        <li><span class="icon-right-arrow"></span>Aenean egestas orci eu maximus tincidunt.</li>
                        <li><span class="icon-right-arrow"></span>Curabitur vel turpis id tellus cursus laoreet.</li>
                    </ul>
                    <p class="product-details__description__text">
                        All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
                        this the first true generator on the Internet.
                        It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to
                        generate Lorem Ipsum which looks reasonable.
                    </p>
                </div>
                <!-- /.product-description -->
                <!-- /.product-comment -->
                <div class="product-details__comment wow fadeInUp" data-wow-delay="400ms">
                    <h3 class="product-details__review-title">Comments (2)</h3>
                    <!--Start Comment Box-->
                    <div class="product-details__comment-box">
                        <figure class="product-details__comment-box__thumb"><img src="{{ asset("/assets/images/products/product-c-1-1.jpg") }}" alt="tolak">
                        </figure><!-- comment-image -->
                        <h4 class="product-details__comment-box__meta">Kevin martin<span class="product-details__comment-box__date">20 June, 2023 . 4:00 pm</span></h4>
                        <!-- comment-meta -->
                        <div class="product-details__comment-box__ratings">
                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                        </div><!-- comment-ratings -->
                        <p class="product-details__comment-box__text">
                            It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It
                            was popularised in the sheets containing lorem ipsum is simply free text. Class aptent taciti
                            sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin
                            varius mauris non dignissim.
                        </p><!-- comment-text -->
                    </div>
                    <!--End Comment Box-->
                    <!--Start Comment Box-->
                    <div class="product-details__comment-box">
                        <figure class="product-details__comment-box__thumb"><img src="{{ asset("/assets/images/products/product-c-1-2.jpg") }}" alt="tolak">
                        </figure><!-- comment-image -->
                        <h4 class="product-details__comment-box__meta">Sarah albert<span class="product-details__comment-box__date">20 June, 2023 . 4:00 pm</span></h4>
                        <!-- comment-meta -->
                        <div class="product-details__comment-box__ratings">
                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                        </div><!-- comment-ratings -->
                        <p class="product-details__comment-box__text">
                            It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It
                            was popularised in the sheets containing lorem ipsum is simply free text. Class aptent taciti
                            sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin
                            varius mauris non dignissim.
                        </p><!-- comment-text -->
                    </div>
                    <!--End Comment Box-->
                </div>
                <!-- /.product-comment -->
                <!-- /.product-comment-form -->
                <div class="product-details__form wow fadeInUp" data-wow-delay="500ms">
                    <h3 class="product-details__form-title">Add a review</h3>
                    <div class="product-details__form-ratings">
                        <p class="product-details__form-ratings__label">Rate this product?</p>
                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                    </div><!-- review-ratings -->
                    <form class="comments-form__form contact-form-validated product-details__form__form form-one">
                        <div class="form-one__group">
                            <div class="form-one__control form-one__control--full">
                                <textarea name="message" placeholder="Write  a message"></textarea><!-- /# -->
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control">
                                <input type="text" name="name" placeholder="Your name">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control">
                                <input type="email" name="email" placeholder="Email address">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <button type="submit" class="tolak-btn"><b>Submit Review</b><span></span></button>
                            </div><!-- /.form-one__control -->
                        </div><!-- /.form-one__group -->
                    </form>
                    <div class="result"></div>
                </div>
                <!-- /.product-comment-form -->
            </div>
        </section>
        <!-- Products End -->

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