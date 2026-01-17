@extends('layouts.layout2')
@section('title', 'Error Page || Tolak || Tolak Laravel Template')
@php
    $title = 'Error Page';
    $subtitle = 'Error Page';
@endphp
@section('content')

    <x-strickyHeader />

    <section class="error-404">
        <div class="container">
            <h2 class="error-404__title">
                Error 404
            </h2><!-- /.error-404__title -->
            <div class="error-404__image wow fadeInUp">
                <img src="{{ asset('/assets/images/resources/404.jpg') }}" alt="tolak">
            </div><!-- /.error-404__title -->
            <h3 class="error-404__sub-title">Page not found</h3><!-- /.error-404__title -->
            <p class="error-404__text">Sorry This Page Not found take a look at our most popular</p>
            <!-- /.error-404__text -->
            <div class="error-404__btns">
                <a href="{{ url('/') }}" class="tolak-btn"><b>Go To Home</b><span></span></a>
            </div><!-- /.error-404__btns -->
        </div><!-- /.container -->
    </section><!-- /.error-404 -->
    <x-footer />
    <x-mobileMenu />
    <x-sidebar />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
