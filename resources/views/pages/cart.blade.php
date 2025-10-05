
@extends('layouts.layout2')
@section('title', 'Cart Page || Tolak || Tolak Laravel Template')
@php
    $title = 'Cart Page';
    $subtitle = 'Products';
@endphp
@section('content')

<x-strickyHeader/>

        <!-- Cart Start -->
        <section class="cart-page">
            <div class="container">
                <div class="table-responsive">
                    <table class="table cart-page__table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="cart-page__table__meta">
                                        <div class="cart-page__table__meta-img">
                                            <img src="{{ asset("/assets/images/products/cart-1-1.jpg") }}" alt="tolak">
                                        </div>
                                        <h3 class="cart-page__table__meta-title"><a href="{{ url("product-details") }}">Office Chair</a>
                                        </h3>
                                    </div>
                                </td>
                                <td>$10.99</td>
                                <td>
                                    <div class="product-details__quantity">
                                        <div class="quantity-box">
                                            <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                            <input type="text" value="1">
                                            <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td>$10.99</td>
                                <td>
                                    <a href="{{ url("cart") }}" class="table cart-page__table__remove"><span class="icon-close"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="cart-page__table__meta">
                                        <div class="cart-page__table__meta-img">
                                            <img src="{{ asset("/assets/images/products/cart-1-2.jpg") }}" alt="tolak">
                                        </div>
                                        <h3 class="cart-page__table__meta-title"><a href="{{ url("product-details") }}">Round Chair</a>
                                        </h3>
                                    </div>
                                </td>
                                <td>$10.99</td>
                                <td>
                                    <div class="product-details__quantity">
                                        <div class="quantity-box">
                                            <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                            <input type="text" value="1">
                                            <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td>$10.99</td>
                                <td><a href="{{ url("cart") }}" class="table cart-page__table__remove"><span class="icon-close"></span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <form action="#" class="cart-page__coupone-form">
                            <input type="text" placeholder="Enter coupon code" class="cart-cupon__input">
                            <button type="submit" class="tolak-btn tolak-btn--base"><b>Apply Coupon</b><span></span></button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <ul class="cart-page__cart-total list-unstyled">
                            <li><span>Subtotal</span><span class="cart-page__cart-total-amount">$20.98 USD</span></li>
                            <li><span>Shipping Cost</span><span class="cart-page__cart-total-amount">$0.00 USD</span></li>
                            <li><span>Total</span><span class="cart-page__cart-total-amount">$20.98 USD</span></li>
                        </ul>
                        <div class="cart-page__buttons">
                            <a href="{{ url("cart") }}" class="tolak-btn"><b>Update</b><span></span></a>
                            <a href="{{ url("checkout") }}" class="tolak-btn"><b>Checkout</b><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart End -->

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