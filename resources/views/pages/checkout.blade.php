
@extends('layouts.layout2')
@section('title', 'Checkout Page || Tolak || Tolak Laravel Template')
@php
    $title = 'Checkout Page';
    $subtitle = 'Products';
@endphp
@section('content')

<x-strickyHeader/>

        <!-- Checkout Start -->
        <section class="checkout-page">
            <div class="container">
                <div class="checkout-page__notice">Returning Customer? <a href="{{ url("login") }}">Click here to Login</a></div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="checkout-page__billing-address">
                            <h2 class="checkout-page__billing-address__title">Billing details</h2>
                            <form class="checkout-page__form">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="checkout-page__input-box">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected="">Select a country</option>
                                                <option value="1">Canada</option>
                                                <option value="2">England</option>
                                                <option value="3">Australia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row bs-gutter-x-20">
                                    <div class="col-xl-6">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="first_name" value="" placeholder="First name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="last_name" value="" placeholder="Last name" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="company_name" value="" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="Address" value="" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="company_name" value="" placeholder="Appartment, unit, etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="Town/City" value="" placeholder="Town / City" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row bs-gutter-x-20">
                                    <div class="col-xl-6">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="State" value="" placeholder="State" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checkout-page__input-box">
                                            <input name="form_zip" type="text" pattern="[0-9]*" placeholder="Zip code">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checkout-page__input-box">
                                            <input name="email" type="email" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checkout-page__input-box">
                                            <input type="tel" name="form_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="checkout-page__check-box">
                                            <input type="checkbox" name="skipper4" id="skipper4" checked="">
                                            <label for="skipper4">Create an Account?<span></span></label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="checkout-page__shipping-address">
                            <h2 class="checkout-page__shipping-address__title">
                                <input type="checkbox" name="skipper2" id="skipper3" checked="">
                                <label for="skipper3"><span></span>Ship to a different address</label>
                            </h2>
                            <form class="checkout-page__form">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="checkout-page__input-box">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected="">Select a country</option>
                                                <option value="1">Canada</option>
                                                <option value="2">England</option>
                                                <option value="3">Australia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row bs-gutter-x-20">
                                    <div class="col-xl-6">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="first_name" value="" placeholder="First name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="last_name" value="" placeholder="Last name" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="company_name" value="" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="Address" value="" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="company_name" value="" placeholder="Appartment, unit, etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="Town/City" value="" placeholder="Town / City" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row bs-gutter-x-20">
                                    <div class="col-xl-6">
                                        <div class="checkout-page__input-box">
                                            <input type="text" name="State" value="" placeholder="State" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checkout-page__input-box">
                                            <input name="form_zip" type="text" pattern="[0-9]*" placeholder="Zip code">
                                        </div>
                                    </div>
                                </div>
                                <div class="row bs-gutter-x-20">
                                    <div class="col-xl-6">
                                        <div class="checkout-page__input-box">
                                            <input name="email" type="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checkout-page__input-box">
                                            <input type="tel" name="form_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="checkout-page__input-box">
                                            <textarea placeholder="Notes about your order" name="form_order_notes"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="checkout-page__your-order">
                    <h2 class="checkout-page__your-order__title">Your order</h2>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <table class="checkout-page__order-table">
                                <thead class="order_table_head">
                                    <tr>
                                        <th>Product</th>
                                        <th class="right">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro__title">Product Name</td>
                                        <td class="pro__price">$10.99 USD</td>
                                    </tr>
                                    <tr>
                                        <td class="pro__title">Subtotal</td>
                                        <td class="pro__price">$10.99 USD</td>
                                    </tr>
                                    <tr>
                                        <td class="pro__title">Shipping</td>
                                        <td class="pro__price">$0.00 USD</td>
                                    </tr>
                                    <tr>
                                        <td class="pro__title">Total</td>
                                        <td class="pro__price">$20.98 USD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout-page__payment">
                                <div class="checkout-page__payment__item checkout-page__payment__item--active">
                                    <h3 class="checkout-page__payment__title">Direct bank transfer</h3>
                                    <div class="checkout-page__payment__content" style="display: none;">
                                        Make your payment directly into our bank account. Please
                                        use your Order ID as the payment reference. Your order
                                        wont be shipped until the funds have cleared.
                                    </div><!-- /.checkout__payment__content -->
                                </div><!-- /.checkout__payment__item -->
                                <div class="checkout-page__payment__item">
                                    <h3 class="checkout-page__payment__title">Paypal payment <img src="{{ asset("/assets/images/products/paypal-1.jpg") }}" alt="tolak"></h3>
                                    <div class="checkout-page__payment__content" style="display: none;">
                                        Make your payment directly into our bank account. Please
                                        use your Order ID as the payment reference. Your order
                                        wont be shipped until the funds have cleared.
                                    </div><!-- /.checkout__payment__content -->
                                </div><!-- /.checkout__payment__item -->
                            </div><!-- /.checkout__payment -->
                            <div class="text-right d-flex justify-content-end">
                                <a href="{{ url("checkout") }}" class="tolak-btn">
                                    <b>Place your Order</b><span></span>
                                </a>
                            </div><!-- /.text-right -->

                        </div><!-- /.col-lg-6 -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Checkout End -->

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