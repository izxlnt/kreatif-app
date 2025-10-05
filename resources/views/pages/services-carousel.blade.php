@extends('layouts.layout2')
@section('title', 'Servis Kami | Kreatif Digital Dinamik')
@php
    $title = 'Servis Kami';
    $subtitle = 'Portfolio Servis';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="service-one">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline">
                        <span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>
                        Portfolio Servis Teras KDD
                        <span class="sec-title-two__tagline__right icofont-rounded-double-right"></span>
                    </h6>
                    <h3 class="sec-title-two__title">Fokus Strategik Kami untuk Kejayaan Jenama Anda</h3>
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
                                <img src="{{ asset("/assets/images/resources/service-1-1.jpg") }}" alt="Strategi Pemasaran Digital">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-cooperation"></span>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="{{ url("strategi-pemasaran-digital") }}">Strategi Pemasaran Digital Berfokus ROI</a>
                                </h3>
                                <p class="service-one__item__text">
                                    Merangka strategi iklan berbayar (Meta Ads, Google Ads) yang disasarkan untuk memastikan pulangan pelaburan (ROI) yang optimum dan terukur.
                                </p>
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number">01</div>
                                <a class="service-one__item__bottom__rm" href="{{ url("strategi-pemasaran-digital") }}">Baca Lanjut<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                    
                    {{-- ITEM 2: Pengurusan Jenama Digital Konsisten --}}
                    <div class="item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-2.jpg") }}" alt="Pengurusan Jenama Digital">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-ads-campaign"></span>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="{{ url("pengurusan-jenama-digital") }}">Pengurusan Jenama Digital Konsisten</a>
                                </h3>
                                <p class="service-one__item__text">
                                    Pengurusan menyeluruh semua platform sosial untuk membina kewibawaan dan menjamin konsistensi jenama korporat.
                                </p>
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number">02</div>
                                <a class="service-one__item__bottom__rm" href="{{ url("pengurusan-jenama-digital") }}">Baca Lanjut<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                    
                    {{-- ITEM 3: Penerbitan Media Korporat Profesional --}}
                    <div class="item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-3.jpg") }}" alt="Penerbitan Media Korporat">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-headhunter"></span>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="{{ url("penerbitan-media-korporat") }}">Penerbitan Media Korporat Profesional</a>
                                </h3>
                                <p class="service-one__item__text">
                                    Menghasilkan aset visual (Fotografi, Videografi & Grafik) berpiawaian tinggi yang mematuhi panduan jenama (Brand Guidelines) anda.
                                </p>
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number">03</div>
                                <a class="service-one__item__bottom__rm" href="{{ url("penerbitan-media-korporat") }}">Baca Lanjut<span class="fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                    
                    {{-- ITEM 4: Perundingan Strategi Jangka Panjang --}}
                    <div class="item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset("/assets/images/resources/service-1-4.jpg") }}" alt="Perundingan Strategi">
                            </div>
                            <div class="service-one__item__content">
                                <div class="service-one__item__icon">
                                    <span class="icon-agency"></span>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="{{ url("perundingan-strategi") }}">Perundingan Strategi Jangka Panjang</a>
                                </h3>
                                <p class="service-one__item__text">
                                    Konsultasi bersama pakar KDD untuk menganalisis prestasi dan memeta pelan tindakan pertumbuhan jenama yang berterusan.
                                </p>
                            </div>
                            <div class="service-one__item__bottom">
                                <div class="service-one__item__bottom__number">04</div>
                                <a class="service-one__item__bottom__rm" href="{{ url("perundingan-strategi") }}">Baca Lanjut<span class="fas fa-angle-double-right"></span></a>
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