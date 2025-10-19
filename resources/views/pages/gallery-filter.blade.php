
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
                <div class="text-center">
                    <ul class="list-unstyled post-filter gallery-one__filter__list">
                        <li class="active" data-filter=".filter-item"><span>All</span></li>
                        <li data-filter=".photography"><span>Photography</span></li>
                       <li data-filter=".branding"><span>Brand Design</span></li> 
                        <li data-filter=".design"><span>Misi Kemanusian</span></li>
                        <li data-filter=".live-action"><span>Live Action Shoot</span></li>
                        <li data-filter=".development"><span>Al-Ikhsan Bowling Tour</span></li>
                    </ul><!-- /.list-unstyledf -->
                </div><!-- /.text-center -->
                <div class="row masonry-layout filter-layout">
                    @php
                        // Create an array of image numbers, shuffle it for random order
                        $images = range(1, 40);
                        shuffle($images);

                        // Function to get the filter class based on image number
                        function getFilterClass($imageNumber) {
                            if ($imageNumber >= 1 && $imageNumber <= 7) {
                                return 'photography';
                            } elseif ($imageNumber >= 8 && $imageNumber <= 13) {
                                return 'design'; // Misi Kemanusian
                            } elseif ($imageNumber >= 14 && $imageNumber <= 24) { // Live Action Shoot
                                return 'live-action';
                            } elseif ($imageNumber >= 33 && $imageNumber <= 40) {
                                return 'branding'; // Brand Design
                            }else {
                                return 'development'; // Al-Ikhsan Bowling Tour
                            }
                        }
                    @endphp
                    @foreach ($images as $i)
                        <div class="col-md-6 col-lg-3 filter-item {{ getFilterClass($i) }}">
                            <div class="gallery-one__card">
                                <img src="{{ asset("/assets/images/gallery-2/image-" . $i . ".jpg") }}" alt="">
                                <div class="gallery-one__card__hover">
                                    <a href="{{ url("/assets/images/gallery-2/image-" . $i . ".jpg") }}" class="img-popup">
                                        <span class="gallery-one__card__icon"></span>
                                    </a>
                                </div><!-- /.gallery-one__card__hover -->
                            </div><!-- /.gallery-one__card -->
                        </div><!-- /.col-md-6 col-lg-4 -->
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.gallery-one -->

        

<x-footer/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection