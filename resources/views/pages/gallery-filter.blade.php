
@extends('layouts.layout2')
@section('title', 'Gallery Filter || Tolak || Tolak Laravel Template')
@php
    $title = 'Our Project';
    $subtitle = 'Project';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="gallery-one">
            <div class="container-fluid">
                {{-- <div class="text-center">
                    <ul class="list-unstyled post-filter gallery-one__filter__list">
                        <li class="active" data-filter=".filter-item"><span>All</span></li>
                        <li data-filter=".photography"><span>Art</span></li>
                        <li data-filter=".design"><span>Design</photographyn>
                        </li>
                        <li data-filter=".branding"><span>Branding</span></li>
                        <li data-filter=".development"><span>Development</span></li>
                    </ul><!-- /.list-unstyledf -->
                </div><!-- /.text-center --> --}}
                <div class="row masonry-layout filter-layout">
                    @php
                        $filters = ['design', 'photography', 'branding', 'development'];
                    @endphp
                    @for ($i = 1; $i <= 24; $i++)
                        <div class="col-md-6 col-lg-3 filter-item {{ $filters[$i % 4] }}">
                            <div class="gallery-one__card">
                                <img src="{{ asset("/assets/images/gallery-2/image-" . $i . ".jpg") }}" alt="">
                                <div class="gallery-one__card__hover">
                                    <a href="{{ url("/assets/images/gallery-2/image-" . $i . ".jpg") }}" class="img-popup">
                                        <span class="gallery-one__card__icon"></span>
                                    </a>
                                </div><!-- /.gallery-one__card__hover -->
                            </div><!-- /.gallery-one__card -->
                        </div><!-- /.col-md-6 col-lg-4 -->
                    @endfor
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.gallery-one -->

        

<x-footer/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection