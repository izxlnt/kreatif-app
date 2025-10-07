@extends('layouts.layout2')
@section('title', __('common.services_carousel_page_title'))
@php
    $title = __('common.services_carousel_title');
    $subtitle = __('common.services_carousel_subtitle');
@endphp
@section('content')

<x-strickyHeader/>

        <section class="service-one">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline">
                        <span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>
                        {{ __('common.services_carousel_tagline') }}
                        <span class="sec-title-two__tagline__right icofont-rounded-double-right"></span>
                    </h6>
                    <h3 class="sec-title-two__title">{{ __('common.services_carousel_main_title') }}</h3>
                </div>
                
                <div class="service-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
                    
                    {{-- ITEM 1: Strategi Pemasaran Digital Berfokus ROI --}}
                    <div class="item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-1.jpg") }}" alt="{{ __('common.service_1_alt') }}">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-cooperation"></span>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="{{ url(__('common.service_1_url')) }}">{{ __('common.service_carousel_1_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_carousel_1_description') }}
                                </p>
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number">01</div>
                                <a class="service-one__item__bottom__rm" href="{{ url(__('common.service_1_url')) }}">{{ __('common.read_more') }}<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                    
                    {{-- ITEM 2: Pengurusan Jenama Digital Konsisten --}}
                    <div class="item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-2.jpg") }}" alt="{{ __('common.service_2_alt') }}">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-ads-campaign"></span>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="{{ url(__('common.service_2_url')) }}">{{ __('common.service_carousel_2_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_carousel_2_description') }}
                                </p>
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number">02</div>
                                <a class="service-one__item__bottom__rm" href="{{ url(__('common.service_2_url')) }}">{{ __('common.read_more') }}<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                    
                    {{-- ITEM 3: Penerbitan Media Korporat Profesional --}}
                    <div class="item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-3.jpg") }}" alt="{{ __('common.service_3_alt') }}">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-headhunter"></span>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="{{ url(__('common.service_3_url')) }}">{{ __('common.service_carousel_3_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_carousel_3_description') }}
                                </p>
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number">03</div>
                                <a class="service-one__item__bottom__rm" href="{{ url(__('common.service_3_url')) }}">{{ __('common.read_more') }}<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                    
                    {{-- ITEM 4: Perundingan Strategi Jangka Panjang --}}
                    <div class="item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-4.jpg") }}" alt="{{ __('common.service_4_alt') }}">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-agency"></span>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="{{ url(__('common.service_4_url')) }}">{{ __('common.service_carousel_4_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_carousel_4_description') }}
                                </p>
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number">04</div>
                                <a class="service-one__item__bottom__rm" href="{{ url(__('common.service_4_url')) }}">{{ __('common.read_more') }}<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                    
                    {{-- ITEM 5 & 6 (LAMA) DIKELUARKAN UNTUK FOKUS 4 TERAS --}}
                    
                </div>
            </div>
        </section>
        <x-footer/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection