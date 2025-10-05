
@extends('layouts.layout2')
@section('title', 'About || Tolak || Tolak Laravel Template')
@php
    $title = 'About Page';
    $subtitle = 'About Page';
@endphp
@section('content')

<x-strickyHeader/>

        <!--Start About One-->
        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-three__image">
                            <div class="about-three__image__shape">
                                <img src="{{ asset('assets/images/shapes/about-3-shape-1.png') }}" alt="tolak">
                            </div>
                            <div class="about-three__image__shape-two">
                                <img src="{{ asset('assets/images/shapes/about-3-shape-2.png') }}" alt="tolak">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="about-three__image__one">
                                        <img src="{{ asset('assets/images/resources/about-3-1.jpg') }}" alt="tolak">
                                    </div>
                                 
                                </div>
                                <div class="col-md-6">
                                    <div class="about-three__image__two">
                                        <img src="{{ asset('assets/images/resources/about-3-2.jpg') }}" alt="tolak">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="about-three__content">
                            <div class="sec-title-two text-left">
                                <h6 class="sec-title-two__tagline">
                                    <span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>
                                    Siapa Kami
                                    <span class="sec-title-two__tagline__right icofont-rounded-double-right"></span>
                                </h6>
                                <h3 class="sec-title-two__title">Kreatif Digital Dinamik (KDD)</h3>
                            </div>
                            <p class="about-three__content__text">
                                Kreatif Digital Dinamik (KDD) ialah sebuah syarikat media dan pemasaran digital yang berdedikasi untuk memperkasakan jenama tempatan dan korporat.
<br><br>Kami percaya bahawa strategi yang konsisten adalah kunci untuk kekal relevan dalam pasaran yang dinamik. Oleh itu, kami menawarkan penyelesaian jangka panjang yang memberi impak berterusan, bukan sekadar projek sekali sahaja.
                            </p>
                            <div class="about-three__content__bar"></div>
                            <div class="row">
                                <div class="col-md-5">
                                    <ul class="about-three__content__list">
                                        <li>Fotografi & Videografi Profesional</li>
                                        <li>Rekaan Grafik Kreatif</li>
                                        <li>Pengurusan Media Sosial Harian</li>
                                        <li>Strategi Pemasaran Digital Berorientasikan Hasil</li>
                                    </ul>
                                </div>
                                <div class="col-md-7">
                                    <div class="about-three__content__skill">
                                        <h5 class="about-three__content__skill__title">Kenapa Pilih Kami</h5>
                                        <p class="about-three__content__skill__text"><b>Berpengalaman:</b> Rekod prestasi kami terbukti melalui kerjasama dengan syarikat dan organisasi terkemuka seperti PNB, SME Bank, Al-Ikhsan, Mergong Tiling, dan PERKIM.</p>
                                        <p class="about-three__content__skill__text"><b>Berkualiti Tinggi:</b> Setiap hasil kerja kami disampaikan dengan standard profesionalisme tertinggi.</p>
                                        <p class="about-three__content__skill__text"><b>Konsisten & Berimpak:</b> Fokus kami adalah untuk memberikan nilai tambah secara berterusan demi kejayaan jenama anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-three__content__quote">
                                Berpusat di Alor Setar, Kedah, kami bersedia menjadi rakan strategik kepada klien di seluruh Malaysia dalam membina jenama yang lebih kukuh dan dipercayai.
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="about-three__content__author">
                                        <p class="about-three__content__author__text">Kreatif Digital Dinamik – Rakan Strategi Bisnes Anda.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About One-->

        <section class="funfact-two">
    <div class="container">
        <ul class="list-unstyled funfact-two__list">
            
            {{-- 1. Projek Korporat Berjaya --}}
            <li class="funfact-two__item count-box">
                <div class="funfact-two__icon"><i class="icon-briefing"></i></div>
                <div class="funfact-two__content">
                    {{-- Sila GANTI angka 100 dengan data sebenar anda --}}
                    <h3 class="funfact-two__count"><span class="count-text" data-stop="100" data-speed="1500"></span> +</h3>
                    <p class="funfact-two__text">Projek Korporat Berjaya</p>
                </div>
            </li>
            
            {{-- 2. Jenama Dibangunkan --}}
            <li class="funfact-two__item count-box">
                <div class="funfact-two__icon"><i class="icon-ancestors"></i></div>
                <div class="funfact-two__content">
                    {{-- Sila GANTI angka 55 dengan data sebenar anda --}}
                    <h3 class="funfact-two__count"><span class="count-text" data-stop="55" data-speed="1500"></span> +</h3>
                    <p class="funfact-two__text">Jenama Dibangunkan</p>
                </div>
            </li>
            
            {{-- 3. Tahun Strategi Jenama --}}
            <li class="funfact-two__item count-box">
                <div class="funfact-two__icon"><i class="icon-admin"></i></div>
                <div class="funfact-two__content">
                    {{-- Sila GANTI angka 7 dengan data sebenar anda --}}
                    <h3 class="funfact-two__count"><span class="count-text" data-stop="7" data-speed="1500"></span> +</h3>
                    <p class="funfact-two__text">Tahun Strategi Jenama</p>
                </div>
            </li>
            
            {{-- 4. Jangkauan Audiens Impak --}}
            <li class="funfact-two__item count-box">
                <div class="funfact-two__icon"><i class="icon-trophy"></i></div>
                <div class="funfact-two__content">
                    {{-- Sila GANTI angka 10 dengan data sebenar anda --}}
                    <h3 class="funfact-two__count"><span class="count-text" data-stop="10" data-speed="1500"></span> M+</h3> 
                    <p class="funfact-two__text">Jangkauan Audiens Impak</p>
                </div>
            </li>
            
        </ul>
    </div>
</section>
<section class="cta-one cta-one--reverse">
            <div class="cta-one__bg">
                <div class="cta-one__bg__shape" style="background-image: url({{ asset('assets/images/shapes/cta-bg-1-rtl.png') }});"></div>
            </div>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="100ms">
                        <div class="cta-one__content">
                            <div class="cta-one__box">
                                {{-- Gantikan dengan ikon Strategi/Perancangan yang sesuai --}}
                                <div class="cta-one__box__icon"><span class="icon-settings"></span></div> 
                                <h3 class="cta-one__box__title">Jaminan Konsultasi Strategi Jenama Korporat</h3>
                                <p class="cta-one__box__text">
                                    Dapatkan sesi perundingan 1-ke-1 bersama pakar KDD untuk memeta pelan tindakan 
                                    pengurusan jenama digital yang konsisten dan berkesan.
                                </p>
                            </div>
                            <div class="cta-one__author">
                                {{-- Biarkan ini untuk menunjukkan wajah-wajah pasukan teras anda --}}
                                <img src="{{ asset('assets/images/resources/cta-1-author-1.jpg') }}" alt="Pakar KDD 1">
                                <img src="{{ asset('assets/images/resources/cta-1-author-2.jpg') }}" alt="Pakar KDD 2">
                                <img src="{{ asset('assets/images/resources/cta-1-author-3.jpg') }}" alt="Pakar KDD 3">
                                
                                <a class="cta-one__author__rm" href="{{ url('contact') }}">
                                    Hubungi Kami <span class="fas fa-arrow-right"></span>
                                </a>
                            </div>
                            <p class="cta-one__content__text">
                                Lebih 100+ Projek Korporat Berjaya** diselesaikan. 
                                <a href="{{ url('contact') }}">
                                    ( Mulakan Sekarang! )
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="100ms">
                        <div class="cta-one__image">
                            {{-- Gantikan dengan imej KDD yang menunjukkan Pasukan/Pusat Operasi/Visual Korporat --}}
                            <img src="{{ asset('assets/images/resources/cta-1-1.jpg') }}" alt="Strategi KDD"> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        ```

        <!-- Service Start -->
        <section class="service-two service-two--about">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Perkhidmatan Kami<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">Apa yang Kami Lakukan</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="service-two__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
				"items": 1,
				"margin": 30,
				"loop": false,
				"smartSpeed": 700,
				"nav": false,
				"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
				"dots": false,
				"autoplay": false,
				"responsive": {
					"0": {
						"items": 1
					},
					"768": {
						"items": 2
					},
					"992": {
						"items": 4
					}
				}
			}'>
                    <div class="item">
                        <div class="service-two__item wow fadeInUp" data-wow-delay="100ms">
                            <div class="service-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/service-2-1.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-two__item__normal">
                                <div class="service-two__item__normal__icon"><span class="icon-camera"></span></div>
                                <h3 class="service-two__item__normal__title">Fotografi & Videografi</h3>
                            </div><!-- normal-content -->
                            <div class="service-two__item__hover">
                                <div class="service-two__item__normal__icon"><span class="icon-camera"></span></div>
                                <h3 class="service-two__item__hover__title">
                                    <a href="#">Fotografi & Videografi</a>
                                </h3>
                                <p class="service-two__item__hover__text">Merakam visual yang memukau untuk jenama anda.</p>
                                <a class="service-two__item__hover__btn" href="#"><span class="icon-right-arrow"></span></a>
                            </div><!-- hover-content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-two__item wow fadeInUp" data-wow-delay="150ms">
                            <div class="service-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/service-2-2.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-two__item__normal">
                                <div class="service-two__item__normal__icon"><span class="icon-design"></span></div>
                                <h3 class="service-two__item__normal__title">Rekaan Grafik Kreatif</h3>
                            </div><!-- normal-content -->
                            <div class="service-two__item__hover">
                                <div class="service-two__item__normal__icon"><span class="icon-design"></span></div>
                                <h3 class="service-two__item__hover__title">
                                    <a href="#">Rekaan Grafik Kreatif</a>
                                </h3>
                                <p class="service-two__item__hover__text">Menghasilkan rekaan yang menarik dan berkesan.</p>
                                <a class="service-two__item__hover__btn" href="#"><span class="icon-right-arrow"></span></a>
                            </div><!-- hover-content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-two__item wow fadeInUp" data-wow-delay="200ms">
                            <div class="service-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/service-2-3.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-two__item__normal">
                                <div class="service-two__item__normal__icon"><span class="icon-social-media"></span></div>
                                <h3 class="service-two__item__normal__title">Pengurusan Media Sosial</h3>
                            </div><!-- normal-content -->
                            <div class="service-two__item__hover">
                                <div class="service-two__item__normal__icon"><span class="icon-social-media"></span></div>
                                <h3 class="service-two__item__hover__title">
                                    <a href="#">Pengurusan Media Sosial</a>
                                </h3>
                                <p class="service-two__item__hover__text">Mengurus akaun media sosial anda secara harian.</p>
                                <a class="service-two__item__hover__btn" href="#"><span class="icon-right-arrow"></span></a>
                            </div><!-- hover-content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-two__item wow fadeInUp" data-wow-delay="250ms">
                            <div class="service-two__item__thumb">
                                <img src="{{ asset("/assets/images/resources/service-2-4.jpg") }}" alt="tolak">
                            </div>
                            <div class="service-two__item__normal">
                                <div class="service-two__item__normal__icon"><span class="icon-digital-marketing"></span></div>
                                <h3 class="service-two__item__normal__title">Strategi Pemasaran Digital</h3>
                            </div><!-- normal-content -->
                            <div class="service-two__item__hover">
                                <div class="service-two__item__normal__icon"><span class="icon-digital-marketing"></span></div>
                                <h3 class="service-two__item__hover__title">
                                    <a href="#">Strategi Pemasaran Digital</a>
                                </h3>
                                <p class="service-two__item__hover__text">Membina strategi pemasaran yang berorientasikan hasil.</p>
                                <a class="service-two__item__hover__btn" href="#"><span class="icon-right-arrow"></span></a>
                            </div><!-- hover-content -->
                        </div><!-- /.service-card-two -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->
{{-- 
        <section class="testimonials-two testimonials-two--about">
            <div class="testimonials-two__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/testimonial-bg-2.jpg);"></div>
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our testimonial say<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">What Customers Awesome Reviews</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="testimonials-two__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
				"992": {
					"items": 2
				}
			}
			}'>
                    <div class="item">
                        <div class="testimonials-card-two">
                            <div class="testimonials-card-two__top">
                                <div class="testimonials-card-two__rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div><!-- /.testimonials-card-two__rating -->
                                <div class="testimonials-card-two__quote">
                                    <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                                </div><!-- /.testimonials-card-two__quote -->
                                <div class="testimonials-card-two__content">
                                    A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                                </div><!-- /.testimonials-card-two__content -->
                            </div>
                            <div class="testimonials-card-two__author">
                                <div class="testimonials-card-two__image">
                                    <img src="{{ asset("/assets/images/resources/testi-1-4.jpg") }}" alt="Lataro Marsena">
                                </div><!-- /.testimonials-card-two__image -->
                                <h3 class="testimonials-card-two__name">
                                    Lataro Marsena
                                </h3><!-- /.testimonials-card-two__name -->
                                <p class="testimonials-card-two__designation">Founder Ceo</p><!-- /.testimonials-card-two__designation -->
                            </div>
                        </div><!-- /.testimonials-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-two">
                            <div class="testimonials-card-two__top">
                                <div class="testimonials-card-two__rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div><!-- /.testimonials-card-two__rating -->
                                <div class="testimonials-card-two__quote">
                                    <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                                </div><!-- /.testimonials-card-two__quote -->
                                <div class="testimonials-card-two__content">
                                    A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                                </div><!-- /.testimonials-card-two__content -->
                            </div>
                            <div class="testimonials-card-two__author">
                                <div class="testimonials-card-two__image">
                                    <img src="{{ asset("/assets/images/resources/testi-1-5.jpg") }}" alt="Marsena Baran">
                                </div><!-- /.testimonials-card-two__image -->
                                <h3 class="testimonials-card-two__name">
                                    Marsena Baran
                                </h3><!-- /.testimonials-card-two__name -->
                                <p class="testimonials-card-two__designation">Founder</p><!-- /.testimonials-card-two__designation -->
                            </div>
                        </div><!-- /.testimonials-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-two">
                            <div class="testimonials-card-two__top">
                                <div class="testimonials-card-two__rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div><!-- /.testimonials-card-two__rating -->
                                <div class="testimonials-card-two__quote">
                                    <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                                </div><!-- /.testimonials-card-two__quote -->
                                <div class="testimonials-card-two__content">
                                    A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                                </div><!-- /.testimonials-card-two__content -->
                            </div>
                            <div class="testimonials-card-two__author">
                                <div class="testimonials-card-two__image">
                                    <img src="{{ asset("/assets/images/resources/testi-1-3.jpg") }}" alt="David Cooper">
                                </div><!-- /.testimonials-card-two__image -->
                                <h3 class="testimonials-card-two__name">
                                    David Cooper
                                </h3><!-- /.testimonials-card-two__name -->
                                <p class="testimonials-card-two__designation">Manager</p><!-- /.testimonials-card-two__designation -->
                            </div>
                        </div><!-- /.testimonials-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-two">
                            <div class="testimonials-card-two__top">
                                <div class="testimonials-card-two__rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div><!-- /.testimonials-card-two__rating -->
                                <div class="testimonials-card-two__quote">
                                    <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                                </div><!-- /.testimonials-card-two__quote -->
                                <div class="testimonials-card-two__content">
                                    A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                                </div><!-- /.testimonials-card-two__content -->
                            </div>
                            <div class="testimonials-card-two__author">
                                <div class="testimonials-card-two__image">
                                    <img src="{{ asset("/assets/images/resources/testi-1-4.jpg") }}" alt="Mike Hardson">
                                </div><!-- /.testimonials-card-two__image -->
                                <h3 class="testimonials-card-two__name">
                                    Mike Hardson
                                </h3><!-- /.testimonials-card-two__name -->
                                <p class="testimonials-card-two__designation">Customer</p><!-- /.testimonials-card-two__designation -->
                            </div>
                        </div><!-- /.testimonials-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-two">
                            <div class="testimonials-card-two__top">
                                <div class="testimonials-card-two__rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div><!-- /.testimonials-card-two__rating -->
                                <div class="testimonials-card-two__quote">
                                    <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                                </div><!-- /.testimonials-card-two__quote -->
                                <div class="testimonials-card-two__content">
                                    A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                                </div><!-- /.testimonials-card-two__content -->
                            </div>
                            <div class="testimonials-card-two__author">
                                <div class="testimonials-card-two__image">
                                    <img src="{{ asset("/assets/images/resources/testi-1-1.jpg") }}" alt="Mark Smith">
                                </div><!-- /.testimonials-card-two__image -->
                                <h3 class="testimonials-card-two__name">
                                    Mark Smith
                                </h3><!-- /.testimonials-card-two__name -->
                                <p class="testimonials-card-two__designation">Reviwers</p><!-- /.testimonials-card-two__designation -->
                            </div>
                        </div><!-- /.testimonials-card-two -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-card-two">
                            <div class="testimonials-card-two__top">
                                <div class="testimonials-card-two__rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div><!-- /.testimonials-card-two__rating -->
                                <div class="testimonials-card-two__quote">
                                    <img src="{{ asset("/assets/images/shapes/testimonial-bg-quote-two.png") }}" alt="quote">
                                </div><!-- /.testimonials-card-two__quote -->
                                <div class="testimonials-card-two__content">
                                    A wonderful serenity has taken possession of my entire so like these sweet mornings of spring which I enjoy whole heart. I am alone, and feel.
                                </div><!-- /.testimonials-card-two__content -->
                            </div>
                            <div class="testimonials-card-two__author">
                                <div class="testimonials-card-two__image">
                                    <img src="{{ asset("/assets/images/resources/testi-1-2.jpg") }}" alt="David Cooper">
                                </div><!-- /.testimonials-card-two__image -->
                                <h3 class="testimonials-card-two__name">
                                    David Cooper
                                </h3><!-- /.testimonials-card-two__name -->
                                <p class="testimonials-card-two__designation">Co Founder</p><!-- /.testimonials-card-two__designation -->
                            </div>
                        </div><!-- /.testimonials-card-two -->
                    </div><!-- /.item -->
                </div><!-- /.testimonials-two__carousel -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-two --> --}}

<x-footer/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection