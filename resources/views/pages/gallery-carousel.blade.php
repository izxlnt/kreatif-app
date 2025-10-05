
@extends('layouts.layout2')
@section('title', 'Gallery Carousel || Tolak || Tolak Laravel Template')
@php
    $title = 'Gallery Carousel';
    $subtitle = 'Gallery';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="gallery-one">
            <div class="container">
                <div class="gallery-one__carousel tolak-owl__carousel  tolak-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
            "items": 1,
            "margin": 0,
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
                "576": {
                    "items": 2,
                    "margin": 10
                },
                "992": {
                    "items": 3,
                    "margin": 10
                }
            }
        }'>
                    <div class="item">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-1.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-1.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="item">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-3.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-3.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="item">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-4.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-4.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="item">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-5.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-5.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="item">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-6.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-6.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="item">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-7.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-7.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="item">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-8.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-8.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="item">
                        <div class="gallery-one__card">
                            <img src="{{ asset("/assets/images/gallery/gallery-1-10.jpg") }}" alt="">
                            <div class="gallery-one__card__hover">
                                <a href="{{ url("assets/images/gallery/gallery-1-10.jpg") }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                </div><!-- /.gallery-one__carousel -->
            </div><!-- /.container-fluid -->
        </section><!-- /.gallery-one -->


<x-footer/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection