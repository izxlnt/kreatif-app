@extends('layouts.layout2')
@section('title', 'Penerbitan Media Korporat | Perincian Servis | Kreatif Digital Dinamik')
@php
    $title = 'Penerbitan Media Korporat';
    $subtitle = 'Perincian Servis';
@endphp
@section('content')

<x-strickyHeader/>

<section class="service-details">
    <div class="container">
        <div class="row gutter-y-30">
            {{-- ---------------------------------------------------- --}}
            {{-- BAHAGIAN VISUAL UTAMA & NAVIGASI SISI --}}
            {{-- ---------------------------------------------------- --}}
            <div class="col-md-12 col-xl-8">
                <div class="service-details__thumbnail">
                    {{-- Gantikan dengan Imej Profesional KDD untuk Servis ini --}}
                    <img src="{{ asset("/assets/images/resources/service-d-1.jpg") }}" alt="Penerbitan Media Korporat KDD">
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="service-details__sidebar">
                    <h3 class="service-details__sidebar__title">Portfolio Servis KDD:</h3>
                    <ul class="list-unstyled service-details__sidebar__nav">
                        <li><a href="{{ url("strategi-pemasaran-digital") }}">Strategi Pemasaran Digital</a></li>
                        <li><a href="{{ url("pengurusan-media-sosial") }}">Pengurusan Media Sosial</a></li>
                        <li class="active"><a href="{{ url("penerbitan-media-korporat") }}">Penerbitan Media Korporat</a></li>
                        <li><a href="{{ url("rekaan-grafik-korporat") }}">Rekaan Grafik Korporat</a></li>
                        <li><a href="{{ url("kajian-kes-laporan") }}">Kajian Kes & Laporan</a></li>
                        <li><a href="{{ url("perundingan-jenama") }}">Perundingan Jenama</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        {{-- ---------------------------------------------------- --}}
        {{-- BAHAGIAN KANDUNGAN UTAMA SERVIS --}}
        {{-- ---------------------------------------------------- --}}
        <div class="service-details__content">
            <h2 class="service-details__title">Penerbitan Visual dan Kandungan Berpiawaian Tinggi</h2>
            
            <p class="service-details__text">
                Kreatif Digital Dinamik (KDD) menyediakan solusi menyeluruh untuk memastikan bisnes anda bukan sahaja 
                kelihatan lebih menarik, tetapi juga mendapat hasil yang berterusan. Servis **Penerbitan Media Korporat** kami 
                adalah tulang belakang kepada strategi visual jenama anda.
            </p>
            <p class="service-details__text">
                **Fotografi & Videografi:** Menghasilkan gambar dan video profesional untuk promosi, iklan, korporat, 
                acara rasmi, dan produk. Visual yang berkualiti tinggi dapat meningkatkan keyakinan pelanggan terhadap 
                jenama anda dan memastikan **konsistensi penyampaian jenama** korporat.
            </p>
            
            <div class="row gutter-y-30">
                <div class="col-lg-6">
                    <h4 class="service-details__subtitle">Fokus Utama Perkhidmatan:</h4>
                    <p class="service-details__text">
                        Penerbitan media korporat kami menjamin kualiti studio yang mematuhi **panduan jenama korporat** anda sepenuhnya, membezakan jenama anda daripada pesaing.
                    </p>
                    <div class="row gutter-y-30">
                        <div class="col-md-6">
                            <div class="service-details__skill">
                                <div class="progress-box">
                                    {{-- Gantikan peratusan ini dengan metrik yang relevan dengan kualiti media, cth: 98% Client Satisfaction --}}
                                    <input type="text" class="dial" data-fgColor="#3d72fc" data-bgColor="#c8c8c8" data-width="60" data-height="60" data-linecap="normal" value="98">
                                    <div class="inner-text count-box">
                                        <span class="count-text" data-stop="98" data-speed="2000"></span><span class="count-Parsent">%</span>
                                    </div>
                                </div>
                                <h5 class="service-details__skill__title">Kepuasan Klien</h5>
                                <p class="service-details__skill__text">Tahap Kualiti Studio</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-details__skill">
                                <div class="progress-box">
                                    {{-- Gantikan peratusan ini dengan metrik yang relevan, cth: 85% On-Time Delivery --}}
                                    <input type="text" class="dial" data-fgColor="#3d72fc" data-bgColor="#c8c8c8" data-width="60" data-height="60" data-linecap="normal" value="85">
                                    <div class="inner-text count-box">
                                        <span class="count-text" data-stop="85" data-speed="2000"></span><span class="count-Parsent">%</span>
                                    </div>
                                </div>
                                <h5 class="service-details__skill__title">Penghantaran Tepat Masa</h5>
                                <p class="service-details__skill__text">Pengurusan Projek</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled service-details__list">
                                <li><i class="fas fa-check-circle"></i>Mematuhi Panduan Jenama Korporat</li>
                                <li><i class="fas fa-check-circle"></i>Penghasilan *Showreel* Tahunan</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled service-details__list">
                                <li><i class="fas fa-check-circle"></i>Peralatan Produksi Berkaliber Industri</li>
                                <li><i class="fas fa-check-circle"></i>Proses *Post-Production* yang Teliti</li>
                            </ul>
                        </div>
                    </div>
                    <p class="service-details__text">
                        <span>Laporan:</span> Setiap projek visual disertakan dengan laporan ringkas mengenai strategi penggunaan kandungan untuk pulangan yang maksimum.
                    </p>
                </div>
                
                <div class="col-lg-6">
                    <div class="service-details__content__image">
                        {{-- Gantikan dengan imej KDD yang menunjukkan penggambaran atau peralatan --}}
                        <img src="{{ asset("/assets/images/resources/service-d-content.jpg") }}" alt="Produksi Media KDD">
                    </div>
                </div>
            </div>
            
            <p class="service-details__text service-details__text--last">
                Servis **Penerbitan Media Korporat** kami adalah pelaburan strategik untuk visual jenama anda. Kami memastikan 
                setiap tangkapan dan klip video bukan sahaja cantik, tetapi berfungsi sebagai aset digital yang kuat dalam 
                kempen pemasaran dan pelaporan korporat anda.
            </p>
        </div>
    </div>
</section>

{{-- ---------------------------------------------------- --}}
{{-- BAHAGIAN STATISTIK KREDIBILITI (Fun Facts) --}}
{{-- ---------------------------------------------------- --}}
<section class="funfact-two funfact-two--service-details">
    <div class="container">
        <ul class="list-unstyled funfact-two__list">
            <li class="funfact-two__item count-box">
                <div class="funfact-two__icon"><i class="icon-briefing"></i></div>
                <div class="funfact-two__content">
                    <h3 class="funfact-two__count"><span class="count-text" data-stop="100" data-speed="1500"></span> +</h3>
                    <p class="funfact-two__text">Projek Korporat Berjaya</p>
                </div>
            </li>
            <li class="funfact-two__item count-box">
                <div class="funfact-two__icon"><i class="icon-ancestors"></i></div>
                <div class="funfact-two__content">
                    <h3 class="funfact-two__count"><span class="count-text" data-stop="55" data-speed="1500"></span> +</h3>
                    <p class="funfact-two__text">Jenama Dibangunkan</p>
                </div>
            </li>
            <li class="funfact-two__item count-box">
                <div class="funfact-two__icon"><i class="icon-admin"></i></div>
                <div class="funfact-two__content">
                    <h3 class="funfact-two__count"><span class="count-text" data-stop="7" data-speed="1500"></span> +</h3>
                    <p class="funfact-two__text">Tahun Strategi Jenama</p>
                </div>
            </li>
            <li class="funfact-two__item count-box">
                <div class="funfact-two__icon"><i class="icon-trophy"></i></div>
                <div class="funfact-two__content">
                    <h3 class="funfact-two__count"><span class="count-text" data-stop="10" data-speed="1500"></span> M+</h3>
                    <p class="funfact-two__text">Jangkauan Audiens Impak</p>
                </div>
            </li>
        </ul>
    </div>
</section>

<x-footer/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection