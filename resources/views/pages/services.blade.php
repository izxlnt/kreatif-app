@extends('layouts.layout2')
@section('title', __('common.services_page_title'))
@php
    $title = __('common.Our Services Title');
    $subtitle = __('common.services_portfolio_subtitle');
@endphp
@section('content')

<x-strickyHeader/>

<style>
    .service-one__item__image-fixed {
        height: 250px; /* You can adjust this value as needed */
        object-fit: cover;
    }
</style>

        <section class="service-one">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline">
                        <span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>
                        {{ __('common.services_tagline') }}
                        <span class="sec-title-two__tagline__right icofont-rounded-double-right"></span>
                    </h6>
                    <h3 class="sec-title-two__title">{{ __('common.services_main_title') }}</h3>
                </div>
                
                {{-- Hanya 4 Servis, Susunan 2x2 --}}
                <div class="row gutter-y-30 justify-content-center"> 
                    
                    {{-- BARIS 1, ITEM 1: Strategi Pemasaran Digital Berfokus ROI --}}
                    <div class="col-lg-4 col-md-6 wow fadeInUp d-flex align-items-stretch" data-wow-delay="100ms">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/new-images/IMG_0091-comp.jpg") }}" alt="{{ __('common.service_1_alt') }}" class="service-one__item__image-fixed">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-cooperation"></span>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="{{ url(__('common.service_1_url')) }}">{{ __('common.service_1_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_1_description') }}
                                </p>
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number">01</div>
                                {{-- <a class="service-one__item__bottom__rm" href="{{ url(__('common.service_1_url')) }}">{{ __('common.read_more') }}<span class="fas fa-angle-double-right"></span></a> --}}
                            </div>
                        </div>
                    </div>
                    
                    {{-- BARIS 1, ITEM 2: Pengurusan Jenama Digital Konsisten --}}
                    <div class="col-lg-4 col-md-6 wow fadeInUp d-flex align-items-stretch" data-wow-delay="150ms">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/gallery/untitled-4-2.jpg") }}" alt="{{ __('common.service_2_alt') }}" class="service-one__item__image-fixed">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-ads-campaign"></span>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="{{ url(__('common.service_2_url')) }}">{{ __('common.service_2_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_2_description') }}
                                </p>
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number">02</div>
                                {{-- <a class="service-one__item__bottom__rm" href="{{ url(__('common.service_2_url')) }}">{{ __('common.read_more') }}<span class="fas fa-angle-double-right"></span></a> --}}
                            </div>
                        </div>
                    </div>
               
                    
                    {{-- BARIS 2, ITEM 3: Penerbitan Media Korporat Profesional --}}
                    <div class="col-lg-4 col-md-6 wow fadeInUp d-flex align-items-stretch" data-wow-delay="200ms">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/gallery/untitled-1-2.jpg") }}" alt="{{ __('common.service_3_alt') }}" class="service-one__item__image-fixed">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-headhunter"></span>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="{{ url(__('common.service_3_url')) }}">{{ __('common.service_3_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_3_description') }}
                                </p>
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number">03</div>
                                {{-- <a class="service-one__item__bottom__rm" href="{{ url(__('common.service_3_url')) }}">{{ __('common.read_more') }}<span class="fas fa-angle-double-right"></span></a> --}}
                            </div>
                        </div>
                    </div>
                    
                    {{-- BARIS 2, ITEM 4: Perundingan Strategi Jangka Panjang --}}
                    <div class="col-lg-4 col-md-6 wow fadeInUp d-flex align-items-stretch" data-wow-delay="250ms">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/new-images/image-ws2.jpeg") }}" alt="{{ __('common.service_4_alt') }}" class="service-one__item__image-fixed">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-agency"></span>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="{{ url(__('common.service_4_url')) }}">{{ __('common.service_4_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_4_description') }}
                                </p>
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number">04</div>
                                {{-- <a class="service-one__item__bottom__rm" href="{{ url(__('common.service_4_url')) }}">{{ __('common.read_more') }}<span class="fas fa-angle-double-right"></span></a> --}}
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <x-footer/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection