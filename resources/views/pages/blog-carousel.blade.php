@extends('layouts.layout2')
@section('title', __('common.menu_video_gallery') . ' || Kreatif Digital Dinamik')
@php
    $title = __('common.menu_video_gallery');
    $subtitle = __('common.menu_video_gallery');
@endphp
@section('content')

    <x-strickyHeader />

    <section class="blog-three">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-md-6 col-lg-4">
                    <div class="item">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <video width="100%" height="auto"
                                        poster="{{ asset('/assets/images/gallery/untitled-1-2.jpg') }}"
                                        class="blog-card-three__video" preload="none">
                                        <source src="{{ asset('/assets/video/birdeyeview_bali.MP4') }}" type="video/mp4">
                                        {{-- <source src="{{ asset('/assets/videos/blog-3-1.mov') }}" type="video/quicktime"> --}}
                                        Your browser does not support the video tag.
                                    </video>
                                    <button class="play-btn"
                                        style="
                        position:absolute;
                        top:50%;
                        left:50%;
                        transform:translate(-50%,-50%);
                        background:rgba(0,0,0,0.6);
                        border:none;
                        border-radius:50%;
                        width:64px;
                        height:64px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(0,0,0,0.2);
                    ">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <polygon points="10,8 26,16 10,24" fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('blog-details-right') }}">Bird Eye
                                        View</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <video width="100%" height="auto"
                                        poster="{{ asset('/assets/images/gallery/untitled-1-2.jpg') }}"
                                        class="blog-card-three__video" preload="none">
                                        <source src="{{ asset('/assets/video/From_Bali_With_Love.mp4') }}" type="video/mp4">
                                        {{-- <source src="{{ asset('/assets/videos/blog-3-1.mov') }}" type="video/quicktime"> --}}
                                        Your browser does not support the video tag.
                                    </video>
                                    <button class="play-btn"
                                        style="
                        position:absolute;
                        top:50%;
                        left:50%;
                        transform:translate(-50%,-50%);
                        background:rgba(0,0,0,0.6);
                        border:none;
                        border-radius:50%;
                        width:64px;
                        height:64px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(0,0,0,0.2);
                    ">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <polygon points="10,8 26,16 10,24" fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('blog-details-right') }}">From Bali With
                                        Love</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">

                    <div class="item">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <video width="100%" height="auto"
                                        poster="{{ asset('/assets/images/gallery/untitled-1-2.jpg') }}"
                                        class="blog-card-three__video" preload="none">
                                        {{-- <source src="{{ asset('/assets/video/From_Bali_With_Love.mp4') }}" type="video/mp4"> --}}
                                        <source src="{{ asset('/assets/video/Perbadanan_Nasional_Berhad_(PNB).mov') }}"
                                            type="video/quicktime">
                                        Your browser does not support the video tag.
                                    </video>
                                    <button class="play-btn"
                                        style="
                        position:absolute;
                        top:50%;
                        left:50%;
                        transform:translate(-50%,-50%);
                        background:rgba(0,0,0,0.6);
                        border:none;
                        border-radius:50%;
                        width:64px;
                        height:64px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(0,0,0,0.2);
                    ">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <polygon points="10,8 26,16 10,24" fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('blog-details-right') }}">Perbadanan
                                        Nasional Berhad (PNB)</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-4">

                    <div class="item">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <video width="100%" height="auto"
                                        poster="{{ asset('/assets/images/gallery/untitled-1-2.jpg') }}"
                                        class="blog-card-three__video" preload="none">
                                        <source src="{{ asset('/assets/video/Villea_Port_Dickson_Property.MP4') }}"
                                            type="video/mp4">
                                        {{-- <source src="{{ asset('/assets/video/Perbadanan_Nasional_Berhad_(PNB).mov') }}" type="video/quicktime"> --}}
                                        Your browser does not support the video tag.
                                    </video>
                                    <button class="play-btn"
                                        style="
                        position:absolute;
                        top:50%;
                        left:50%;
                        transform:translate(-50%,-50%);
                        background:rgba(0,0,0,0.6);
                        border:none;
                        border-radius:50%;
                        width:64px;
                        height:64px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(0,0,0,0.2);
                    ">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <polygon points="10,8 26,16 10,24" fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('blog-details-right') }}">Villea Port
                                        Dickson Property</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">


                    <div class="item">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <video width="100%" height="auto"
                                        poster="{{ asset('/assets/images/gallery/untitled-1-2.jpg') }}"
                                        class="blog-card-three__video" preload="none">
                                        <source src="{{ asset('/assets/video/GameDay.MP4') }}" type="video/mp4">
                                        {{-- <source src="{{ asset('/assets/video/Perbadanan_Nasional_Berhad_(PNB).mov') }}" type="video/quicktime"> --}}
                                        Your browser does not support the video tag.
                                    </video>
                                    <button class="play-btn"
                                        style="
                        position:absolute;
                        top:50%;
                        left:50%;
                        transform:translate(-50%,-50%);
                        background:rgba(0,0,0,0.6);
                        border:none;
                        border-radius:50%;
                        width:64px;
                        height:64px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(0,0,0,0.2);
                    ">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <polygon points="10,8 26,16 10,24" fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('blog-details-right') }}">Gameday</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">


                    <div class="item">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <video width="100%" height="auto"
                                        poster="{{ asset('/assets/images/gallery/untitled-1-2.jpg') }}"
                                        class="blog-card-three__video" preload="none">
                                        <source src="{{ asset('/assets/video/Video_Highlight_Starbrite.mp4') }}"
                                            type="video/mp4">
                                        {{-- <source src="{{ asset('/assets/video/Perbadanan_Nasional_Berhad_(PNB).mov') }}" type="video/quicktime"> --}}
                                        Your browser does not support the video tag.
                                    </video>
                                    <button class="play-btn"
                                        style="
                        position:absolute;
                        top:50%;
                        left:50%;
                        transform:translate(-50%,-50%);
                        background:rgba(0,0,0,0.6);
                        border:none;
                        border-radius:50%;
                        width:64px;
                        height:64px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(0,0,0,0.2);
                    ">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <polygon points="10,8 26,16 10,24" fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('blog-details-right') }}">Video
                                        Highlight
                                        Starbrite</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">

                    <div class="item">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <video width="100%" height="auto"
                                        poster="{{ asset('/assets/images/gallery/untitled-1-2.jpg') }}"
                                        class="blog-card-three__video" preload="none">
                                        <source src="{{ asset('/assets/video/Mini_Hightlight_+_Backstage.mp4') }}"
                                            type="video/mp4">
                                        {{-- <source src="{{ asset('/assets/video/Perbadanan_Nasional_Berhad_(PNB).mov') }}" type="video/quicktime"> --}}
                                        Your browser does not support the video tag.
                                    </video>
                                    <button class="play-btn"
                                        style="
                        position:absolute;
                        top:50%;
                        left:50%;
                        transform:translate(-50%,-50%);
                        background:rgba(0,0,0,0.6);
                        border:none;
                        border-radius:50%;
                        width:64px;
                        height:64px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(0,0,0,0.2);
                    ">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <polygon points="10,8 26,16 10,24" fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('blog-details-right') }}">Mini
                                        Hightlight
                                        + Backstage</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">


                    <div class="item">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <video width="100%" height="auto"
                                        poster="{{ asset('/assets/images/gallery/untitled-1-2.jpg') }}"
                                        class="blog-card-three__video" preload="none">
                                        <source src="{{ asset('/assets/video/SME_BANK_VIDEO_FULL_HIGHLIGHT.mp4') }}"
                                            type="video/mp4">
                                        {{-- <source src="{{ asset('/assets/video/Perbadanan_Nasional_Berhad_(PNB).mov') }}" type="video/quicktime"> --}}
                                        Your browser does not support the video tag.
                                    </video>
                                    <button class="play-btn"
                                        style="
                        position:absolute;
                        top:50%;
                        left:50%;
                        transform:translate(-50%,-50%);
                        background:rgba(0,0,0,0.6);
                        border:none;
                        border-radius:50%;
                        width:64px;
                        height:64px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(0,0,0,0.2);
                    ">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <polygon points="10,8 26,16 10,24" fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('blog-details-right') }}">SME BANK
                                        VIDEO
                                        FULL HIGHLIGHT</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">



                    <div class="item">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <video width="100%" height="auto"
                                        poster="{{ asset('/assets/images/gallery/untitled-1-2.jpg') }}"
                                        class="blog-card-three__video" preload="none">
                                        <source src="{{ asset('/assets/video/New_Followers_Rapidly_Increasing.MP4') }}"
                                            type="video/mp4">
                                        {{-- <source src="{{ asset('/assets/video/Perbadanan_Nasional_Berhad_(PNB).mov') }}" type="video/quicktime"> --}}
                                        Your browser does not support the video tag.
                                    </video>
                                    <button class="play-btn"
                                        style="
                        position:absolute;
                        top:50%;
                        left:50%;
                        transform:translate(-50%,-50%);
                        background:rgba(0,0,0,0.6);
                        border:none;
                        border-radius:50%;
                        width:64px;
                        height:64px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(0,0,0,0.2);
                    ">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <polygon points="10,8 26,16 10,24" fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('blog-details-right') }}">New
                                        Followers
                                        Rapidly Increasing</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-lg-4">

                    <div class="item">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <video width="100%" height="auto"
                                        poster="{{ asset('/assets/images/gallery/untitled-1-2.jpg') }}"
                                        class="blog-card-three__video" preload="none">
                                        <source src="{{ asset('/assets/video/Clients_TikTok_Grid.mp4') }}"
                                            type="video/mp4">
                                        {{-- <source src="{{ asset('/assets/video/Perbadanan_Nasional_Berhad_(PNB).mov') }}" type="video/quicktime"> --}}
                                        Your browser does not support the video tag.
                                    </video>
                                    <button class="play-btn"
                                        style="
                        position:absolute;
                        top:50%;
                        left:50%;
                        transform:translate(-50%,-50%);
                        background:rgba(0,0,0,0.6);
                        border:none;
                        border-radius:50%;
                        width:64px;
                        height:64px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(0,0,0,0.2);
                    ">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <polygon points="10,8 26,16 10,24" fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('blog-details-right') }}">Clients
                                        TikTok
                                        Grid</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <video width="100%" height="auto"
                                        poster="{{ asset('/assets/images/gallery/untitled-1-2.jpg') }}"
                                        class="blog-card-three__video" preload="none">
                                        <source src="{{ asset('/assets/video/Video_&_Comments.MP4') }}" type="video/mp4">
                                        {{-- <source src="{{ asset('/assets/video/Perbadanan_Nasional_Berhad_(PNB).mov') }}" type="video/quicktime"> --}}
                                        Your browser does not support the video tag.
                                    </video>
                                    <button class="play-btn"
                                        style="
                        position:absolute;
                        top:50%;
                        left:50%;
                        transform:translate(-50%,-50%);
                        background:rgba(0,0,0,0.6);
                        border:none;
                        border-radius:50%;
                        width:64px;
                        height:64px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(0,0,0,0.2);
                    ">
                                        <svg width="32" height="32" viewBox="0 0 32 32">
                                            <polygon points="10,8 26,16 10,24" fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('blog-details-right') }}">Video &
                                        Comments</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container -->
        </div>
    </section><!-- /.blog-page -->



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.video-wrapper').forEach(function(wrapper) {
                var video = wrapper.querySelector('video');
                var btn = wrapper.querySelector('.play-btn');
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    btn.style.display = 'none';
                    video.controls = true;
                    video.play();
                });
                video.addEventListener('pause', function() {
                    btn.style.display = '';
                    video.controls = false;
                });
                video.addEventListener('ended', function() {
                    btn.style.display = '';
                    video.controls = false;
                    video.currentTime = 0;
                });
            });
        });
    </script>

    <x-footer />
    <x-mobileMenu />
    <x-sidebar />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
