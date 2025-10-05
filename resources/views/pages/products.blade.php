
@extends('layouts.layout2')
@section('title', 'Products || Tolak || Tolak Laravel Template')
@php
    $title = 'Products Grid';
    $subtitle = 'Products';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="product-one">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="product__info-top">
                            <div class="product__showing-text-box">
                                <p class="product__showing-text">Showing 1–9 of 12 Results</p>
                            </div>
                            <div class="product__showing-sort">
                                <select class="selectpicker" aria-label="Sort by popular">
                                    <option selected>Sort by popular</option>
                                    <option value="1">Sort by view</option>
                                    <option value="2">Sort by price</option>
                                    <option value="3">Sort by ratings</option>
                                </select>
                            </div>
                        </div>

                        <div class="row gutter-y-30">
                            <div class="col-md-6 col-lg-3">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                    <div class="product__item__img">
                                        <img src="{{ asset("/assets/images/products/product-1-1.jpg") }}" alt="tolak">
                                        <div class="product__item__btn">
                                            <a href="{{ url("cart") }}"><i class="far fa-heart"></i></a>
                                            <a href="{{ url("product-details") }}"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div><!-- /.product-image -->
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div><!-- /.product-ratings -->
                                        <h4 class="product__item__title"><a href="{{ url("product-details") }}">Boss Sofa</a></h4><!-- /.product-title -->
                                        <div class="product__item__price">$82.00</div><!-- /.product-price -->
                                        <a href="{{ url("cart") }}" class="tolak-btn product__item__link"><b>Add to Cart</b><span></span></a>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-md-6 col-lg-4 -->
                            <div class="col-md-6 col-lg-3">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                    <div class="product__item__img">
                                        <img src="{{ asset("/assets/images/products/product-1-2.jpg") }}" alt="tolak">
                                        <div class="product__item__btn">
                                            <a href="{{ url("cart") }}"><i class="far fa-heart"></i></a>
                                            <a href="{{ url("product-details") }}"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div><!-- /.product-image -->
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div><!-- /.product-ratings -->
                                        <h4 class="product__item__title"><a href="{{ url("product-details") }}">Office Chair</a></h4><!-- /.product-title -->
                                        <div class="product__item__price">$78.00</div><!-- /.product-price -->
                                        <a href="{{ url("cart") }}" class="tolak-btn product__item__link"><b>Add to Cart</b><span></span></a>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-md-6 col-lg-4 -->
                            <div class="col-md-6 col-lg-3">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                    <div class="product__item__img">
                                        <img src="{{ asset("/assets/images/products/product-1-3.jpg") }}" alt="tolak">
                                        <div class="product__item__btn">
                                            <a href="{{ url("cart") }}"><i class="far fa-heart"></i></a>
                                            <a href="{{ url("product-details") }}"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div><!-- /.product-image -->
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div><!-- /.product-ratings -->
                                        <h4 class="product__item__title"><a href="{{ url("product-details") }}">Long Stool</a></h4><!-- /.product-title -->
                                        <div class="product__item__price">$33.00</div><!-- /.product-price -->
                                        <a href="{{ url("cart") }}" class="tolak-btn product__item__link"><b>Add to Cart</b><span></span></a>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-md-6 col-lg-4 -->
                            <div class="col-md-6 col-lg-3">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                    <div class="product__item__img">
                                        <img src="{{ asset("/assets/images/products/product-1-4.jpg") }}" alt="tolak">
                                        <div class="product__item__btn">
                                            <a href="{{ url("cart") }}"><i class="far fa-heart"></i></a>
                                            <a href="{{ url("product-details") }}"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div><!-- /.product-image -->
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div><!-- /.product-ratings -->
                                        <h4 class="product__item__title"><a href="{{ url("product-details") }}">Round Chair</a></h4><!-- /.product-title -->
                                        <div class="product__item__price">$49.00</div><!-- /.product-price -->
                                        <a href="{{ url("cart") }}" class="tolak-btn product__item__link"><b>Add to Cart</b><span></span></a>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-md-6 col-lg-4 -->
                            <div class="col-md-6 col-lg-3">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                                    <div class="product__item__img">
                                        <img src="{{ asset("/assets/images/products/product-1-5.jpg") }}" alt="tolak">
                                        <div class="product__item__btn">
                                            <a href="{{ url("cart") }}"><i class="far fa-heart"></i></a>
                                            <a href="{{ url("product-details") }}"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div><!-- /.product-image -->
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div><!-- /.product-ratings -->
                                        <h4 class="product__item__title"><a href="{{ url("product-details") }}">Sofa Chair</a></h4><!-- /.product-title -->
                                        <div class="product__item__price">$31.00</div><!-- /.product-price -->
                                        <a href="{{ url("cart") }}" class="tolak-btn product__item__link"><b>Add to Cart</b><span></span></a>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-md-6 col-lg-4 -->
                            <div class="col-md-6 col-lg-3">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <div class="product__item__img">
                                        <img src="{{ asset("/assets/images/products/product-1-6.jpg") }}" alt="tolak">
                                        <div class="product__item__btn">
                                            <a href="{{ url("cart") }}"><i class="far fa-heart"></i></a>
                                            <a href="{{ url("product-details") }}"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div><!-- /.product-image -->
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div><!-- /.product-ratings -->
                                        <h4 class="product__item__title"><a href="{{ url("product-details") }}">White Chair</a></h4><!-- /.product-title -->
                                        <div class="product__item__price">$50.00</div><!-- /.product-price -->
                                        <a href="{{ url("cart") }}" class="tolak-btn product__item__link"><b>Add to Cart</b><span></span></a>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-md-6 col-lg-4 -->
                            <div class="col-md-6 col-lg-3">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>
                                    <div class="product__item__img">
                                        <img src="{{ asset("/assets/images/products/product-1-7.jpg") }}" alt="tolak">
                                        <div class="product__item__btn">
                                            <a href="{{ url("cart") }}"><i class="far fa-heart"></i></a>
                                            <a href="{{ url("product-details") }}"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div><!-- /.product-image -->
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div><!-- /.product-ratings -->
                                        <h4 class="product__item__title"><a href="{{ url("product-details") }}">Wood Stool</a></h4><!-- /.product-title -->
                                        <div class="product__item__price">$15.00</div><!-- /.product-price -->
                                        <a href="{{ url("cart") }}" class="tolak-btn product__item__link"><b>Add to Cart</b><span></span></a>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-md-6 col-lg-4 -->
                            <div class="col-md-6 col-lg-3">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                                    <div class="product__item__img">
                                        <img src="{{ asset("/assets/images/products/product-1-8.jpg") }}" alt="tolak">
                                        <div class="product__item__btn">
                                            <a href="{{ url("cart") }}"><i class="far fa-heart"></i></a>
                                            <a href="{{ url("product-details") }}"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div><!-- /.product-image -->
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div><!-- /.product-ratings -->
                                        <h4 class="product__item__title"><a href="{{ url("product-details") }}">Sofa Seat</a></h4><!-- /.product-title -->
                                        <div class="product__item__price">$27.00</div><!-- /.product-price -->
                                        <a href="{{ url("cart") }}" class="tolak-btn product__item__link"><b>Add to Cart</b><span></span></a>
                                    </div><!-- /.product-content -->
                                </div><!-- /.product-item -->
                            </div><!-- /.col-md-6 col-lg-4 -->
                        </div><!-- /.row -->
                    </div><!-- /.col-lg-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.product-one product-one--page -->

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