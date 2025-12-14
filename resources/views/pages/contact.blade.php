@extends('layouts.layout2')
@section('title', __('common.contact_page_title'))
@php
    $title = __('common.contact');
    $subtitle = __('common.contact');
@endphp
@section('content')

    <x-strickyHeader />

    <section class="contact-two contact-two--contact-page">
        <div class="container">
            <div class="contact-two__wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-two__info">
                            <div class="contact-two__info__shape"
                                style="background-image: url(assets/images/shapes/contact-2-shape-1.png);"></div>
                            <h4 class="contact-two__info__title">{{ __('common.contact_information') }} :</h4>
                            <p class="contact-two__info__text">
                                {{ __('common.contact_description') }}
                            </p>
                            <ul class="contact-two__info__box-wrapper">
                                <li class="contact-two__info__box">
                                    <div class="contact-two__info__box__icon"><i class="icon-phone-call"></i></div>
                                    <h4 class="contact-two__info__box__title">{{ __('common.call_this_now') }}</h4>
                                    <p class="contact-two__info__box__text"><a href="tel:0135338190">+6013 533 8190</a></p>
                                </li>
                                <li class="contact-two__info__box">
                                    <div class="contact-two__info__box__icon"><i class="icon-open-mail"></i></div>
                                    <h4 class="contact-two__info__box__title">{{ __('common.your_message') }}</h4>
                                    <p class="contact-two__info__box__text"><a
                                            href="mailto:business@kreatifdigitaldinamik.com">business@kreatifdigitaldinamik.com</a>
                                    </p>
                                </li>
                                <li class="contact-two__info__box">
                                    <div class="contact-two__info__box__icon"><i class="icon-pin"></i></div>
                                    <h4 class="contact-two__info__box__title">{{ __('common.your_location') }}</h4>
                                    <p class="contact-two__info__box__text">Alor Setar, Kedah</p>
                                </li>
                            </ul>
                            <div class="contact-two__info__social">
                                <h5 class="contact-two__info__social__title">{{ __('common.follow_social') }}:</h5>
                                <div class="contact-two__info__social__wrap">
                                    <a href="https://www.facebook.com/KreatifDigitalDinamik" target="_blank">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="http://linkedin.com/company/kreatif-digital-dinamik" target="_blank">
                                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                        <span class="sr-only">LinkedIn</span>
                                    </a>
                                    <a href="https://www.youtube.com/@KreatifDigitalDinamik" target="_blank">
                                        <i class="fab fa-youtube" aria-hidden="true"></i>
                                        <span class="sr-only">YouTube</span>
                                    </a>
                                    <a href="https://www.instagram.com/kreatifdigitaldinamik/" target="_blank">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                    <a href="https://www.tiktok.com/@kreatifdigitaldinamik" target="_blank">
                                        <i class="fab fa-tiktok" aria-hidden="true"></i>
                                        <span class="sr-only">TikTok</span>
                                    </a>
                                    <a href="https://wa.me/60135338190" target="_blank">
                                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                        <span class="sr-only">WhatsApp</span>
                                    </a>
                                </div>
                            </div><!-- contact-social -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-two__content">
                            <div class="sec-title-two text-left">
                                <h6 class="sec-title-two__tagline">
                                    <span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>
                                    {{ __('common.contact_us_tagline') }}
                                    <span class="sec-title-two__tagline__right icofont-rounded-double-right"></span>
                                </h6>
                                <h3 class="sec-title-two__title">
                                    {{ __('common.contact_us_title') }}
                                </h3>
                            </div>
                            <p class="contact-two__content__text">
                                {{ __('common.contact_form_description') }}
                            </p>
                            <form class="contact-two__form contact-form-validated form-one" action="inc/sendemail.php" method="POST">
                                @csrf
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="{{ __('common.your_name_placeholder') }}" required>
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="{{ __('common.email_address_placeholder') }}" required>
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="{{ __('common.message_placeholder') }}" rows="5" required></textarea><!-- /# -->
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="tolak-btn"><b>{{ __('common.send_request') }}</b><span></span></button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.contact -->

    <x-footer />
    <x-mobileMenu />
    <x-sidebar />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
