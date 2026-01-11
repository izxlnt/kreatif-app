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
                        <div class="blog-card-three">
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <div class="youtube-thumbnail" style="position:relative; cursor:pointer;" onclick="loadYouTubeVideo(this, 'uLrJu94QyB0')">
                                        <img src="https://img.youtube.com/vi/uLrJu94QyB0/maxresdefault.jpg" 
                                             alt="Bird Eye View" 
                                             style="width:100%; height:250px; object-fit:cover; border-radius: 8px;">
                                        <div class="play-overlay" style="
                                            position:absolute;
                                            top:50%;
                                            left:50%;
                                            transform:translate(-50%,-50%);
                                            background:rgba(255,0,0,0.8);
                                            border:none;
                                            border-radius:10px;
                                            width:80px;
                                            height:60px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            cursor:pointer;
                                            transition: all 0.3s ease;
                                        ">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                                <polygon points="9,6 20,12 9,18" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('https://www.youtube.com/watch?v=uLrJu94QyB0') }}">Bird's Eye View - Aerial Photography & Videography</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item">
                        <div class="blog-card-three">
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <div class="youtube-thumbnail" style="position:relative; cursor:pointer;" onclick="loadYouTubeVideo(this, 'VHSqJpDUh30')">
                                        <img src="https://img.youtube.com/vi/VHSqJpDUh30/maxresdefault.jpg" 
                                             alt="From Bali With Love" 
                                             style="width:100%; height:250px; object-fit:cover; border-radius: 8px;">
                                        <div class="play-overlay" style="
                                            position:absolute;
                                            top:50%;
                                            left:50%;
                                            transform:translate(-50%,-50%);
                                            background:rgba(255,0,0,0.8);
                                            border:none;
                                            border-radius:10px;
                                            width:80px;
                                            height:60px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            cursor:pointer;
                                            transition: all 0.3s ease;
                                        ">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                                <polygon points="9,6 20,12 9,18" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('https://www.youtube.com/watch?v=VHSqJpDUh30') }}">From Bali With Love - Travel Content Creation</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">

                    <div class="item">
                        <div class="blog-card-three">
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <div class="youtube-thumbnail" style="position:relative; cursor:pointer;" onclick="loadYouTubeVideo(this, 'WVHMjDwvLs0')">
                                        <img src="https://img.youtube.com/vi/WVHMjDwvLs0/maxresdefault.jpg" 
                                             alt="Perbadanan Nasional Berhad (PNB)" 
                                             style="width:100%; height:250px; object-fit:cover; border-radius: 8px;">
                                        <div class="play-overlay" style="
                                            position:absolute;
                                            top:50%;
                                            left:50%;
                                            transform:translate(-50%,-50%);
                                            background:rgba(255,0,0,0.8);
                                            border:none;
                                            border-radius:10px;
                                            width:80px;
                                            height:60px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            cursor:pointer;
                                            transition: all 0.3s ease;
                                        ">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                                <polygon points="9,6 20,12 9,18" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('https://www.youtube.com/watch?v=WVHMjDwvLs0') }}">Perbadanan Nasional Berhad (PNB) - Corporate Video Production</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-6 col-lg-4">

                    <div class="item">
                        <div class="blog-card-three">
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <div class="youtube-thumbnail" style="position:relative; cursor:pointer;" onclick="loadYouTubeVideo(this, 'RFBmocfgzmk')">
                                        <img src="https://img.youtube.com/vi/RFBmocfgzmk/maxresdefault.jpg" 
                                             alt="Villea Port Dickson Property" 
                                             style="width:100%; height:250px; object-fit:cover; border-radius: 8px;">
                                        <div class="play-overlay" style="
                                            position:absolute;
                                            top:50%;
                                            left:50%;
                                            transform:translate(-50%,-50%);
                                            background:rgba(255,0,0,0.8);
                                            border:none;
                                            border-radius:10px;
                                            width:80px;
                                            height:60px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            cursor:pointer;
                                            transition: all 0.3s ease;
                                        ">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                                <polygon points="9,6 20,12 9,18" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('https://www.youtube.com/watch?v=RFBmocfgzmk&list=PLu8fu66J6zhWogvwE32yr5czp3aBN-p5f') }}">Villea Port Dickson - Property Marketing Video</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">


                    <div class="item">
                        <div class="blog-card-three">
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <div class="youtube-thumbnail" style="position:relative; cursor:pointer;" onclick="loadYouTubeVideo(this, 'GrTlhDGjlI0')">
                                        <img src="https://img.youtube.com/vi/GrTlhDGjlI0/maxresdefault.jpg" 
                                             alt="Gameday" 
                                             style="width:100%; height:250px; object-fit:cover; border-radius: 8px;">
                                        <div class="play-overlay" style="
                                            position:absolute;
                                            top:50%;
                                            left:50%;
                                            transform:translate(-50%,-50%);
                                            background:rgba(255,0,0,0.8);
                                            border:none;
                                            border-radius:10px;
                                            width:80px;
                                            height:60px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            cursor:pointer;
                                            transition: all 0.3s ease;
                                        ">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                                <polygon points="9,6 20,12 9,18" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('https://www.youtube.com/watch?v=GrTlhDGjlI0') }}">Game Day - Sports Event Coverage</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">


                    <div class="item">
                        <div class="blog-card-three">
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <div class="youtube-thumbnail" style="position:relative; cursor:pointer;" onclick="loadYouTubeVideo(this, '3azQamf9iE4')">
                                        <img src="https://img.youtube.com/vi/3azQamf9iE4/maxresdefault.jpg" 
                                             alt="Video Highlight Starbrite" 
                                             style="width:100%; height:250px; object-fit:cover; border-radius: 8px;">
                                        <div class="play-overlay" style="
                                            position:absolute;
                                            top:50%;
                                            left:50%;
                                            transform:translate(-50%,-50%);
                                            background:rgba(255,0,0,0.8);
                                            border:none;
                                            border-radius:10px;
                                            width:80px;
                                            height:60px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            cursor:pointer;
                                            transition: all 0.3s ease;
                                        ">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                                <polygon points="9,6 20,12 9,18" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('https://www.youtube.com/watch?v=3azQamf9iE4') }}">Starbrite Video Highlights - Event Documentation</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">

                    <div class="item">
                        <div class="blog-card-three">
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <div class="youtube-thumbnail" style="position:relative; cursor:pointer;" onclick="loadYouTubeVideo(this, 'n2rb3bd33vM')">
                                        <img src="https://img.youtube.com/vi/n2rb3bd33vM/maxresdefault.jpg" 
                                             alt="Mini Highlight + Backstage" 
                                             style="width:100%; height:250px; object-fit:cover; border-radius: 8px;">
                                        <div class="play-overlay" style="
                                            position:absolute;
                                            top:50%;
                                            left:50%;
                                            transform:translate(-50%,-50%);
                                            background:rgba(255,0,0,0.8);
                                            border:none;
                                            border-radius:10px;
                                            width:80px;
                                            height:60px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            cursor:pointer;
                                            transition: all 0.3s ease;
                                        ">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                                <polygon points="9,6 20,12 9,18" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('https://www.youtube.com/watch?v=n2rb3bd33vM') }}">Mini Highlights + Behind The Scenes</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">


                    <div class="item">
                        <div class="blog-card-three">
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <div class="youtube-thumbnail" style="position:relative; cursor:pointer;" onclick="loadYouTubeVideo(this, '2VCpptOGVZY')">
                                        <img src="https://img.youtube.com/vi/2VCpptOGVZY/maxresdefault.jpg" 
                                             alt="SME BANK VIDEO FULL HIGHLIGHT" 
                                             style="width:100%; height:250px; object-fit:cover; border-radius: 8px;">
                                        <div class="play-overlay" style="
                                            position:absolute;
                                            top:50%;
                                            left:50%;
                                            transform:translate(-50%,-50%);
                                            background:rgba(255,0,0,0.8);
                                            border:none;
                                            border-radius:10px;
                                            width:80px;
                                            height:60px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            cursor:pointer;
                                            transition: all 0.3s ease;
                                        ">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                                <polygon points="9,6 20,12 9,18" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('https://www.youtube.com/watch?v=2VCpptOGVZY') }}">SME Bank - Corporate Event Full Highlights</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">



                    <div class="item">
                        <div class="blog-card-three">
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <div class="youtube-thumbnail" style="position:relative; cursor:pointer;" onclick="loadYouTubeVideo(this, 'ZwNEnDe8pp8')">
                                        <img src="https://img.youtube.com/vi/ZwNEnDe8pp8/maxresdefault.jpg" 
                                             alt="New Followers Rapidly Increasing" 
                                             style="width:100%; height:250px; object-fit:cover; border-radius: 8px;">
                                        <div class="play-overlay" style="
                                            position:absolute;
                                            top:50%;
                                            left:50%;
                                            transform:translate(-50%,-50%);
                                            background:rgba(255,0,0,0.8);
                                            border:none;
                                            border-radius:10px;
                                            width:80px;
                                            height:60px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            cursor:pointer;
                                            transition: all 0.3s ease;
                                        ">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                                <polygon points="9,6 20,12 9,18" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('https://www.youtube.com/watch?v=ZwNEnDe8pp8') }}">Social Media Growth - Followers Rapidly Increasing</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-lg-4">

                    <div class="item">
                        <div class="blog-card-three">
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <div class="youtube-thumbnail" style="position:relative; cursor:pointer;" onclick="loadYouTubeVideo(this, '2Z3n0VjGvpI')">
                                        <img src="https://img.youtube.com/vi/2Z3n0VjGvpI/maxresdefault.jpg" 
                                             alt="Clients TikTok Grid" 
                                             style="width:100%; height:250px; object-fit:cover; border-radius: 8px;">
                                        <div class="play-overlay" style="
                                            position:absolute;
                                            top:50%;
                                            left:50%;
                                            transform:translate(-50%,-50%);
                                            background:rgba(255,0,0,0.8);
                                            border:none;
                                            border-radius:10px;
                                            width:80px;
                                            height:60px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            cursor:pointer;
                                            transition: all 0.3s ease;
                                        ">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                                <polygon points="9,6 20,12 9,18" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('https://www.youtube.com/watch?v=2Z3n0VjGvpI&pp=0gcJCSkKAYcqIYzv') }}">Client Success Stories - TikTok Content Grid</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item">
                        <div class="blog-card-three">
                            <div class="blog-card-three__image">
                                <div class="video-wrapper" style="position:relative;">
                                    <div class="youtube-thumbnail" style="position:relative; cursor:pointer;" onclick="loadYouTubeVideo(this, 'hFklkIWCuDM')">
                                        <img src="https://img.youtube.com/vi/hFklkIWCuDM/maxresdefault.jpg" 
                                             alt="Video & Comments" 
                                             style="width:100%; height:250px; object-fit:cover; border-radius: 8px;">
                                        <div class="play-overlay" style="
                                            position:absolute;
                                            top:50%;
                                            left:50%;
                                            transform:translate(-50%,-50%);
                                            background:rgba(255,0,0,0.8);
                                            border:none;
                                            border-radius:10px;
                                            width:80px;
                                            height:60px;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            cursor:pointer;
                                            transition: all 0.3s ease;
                                        ">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                                <polygon points="9,6 20,12 9,18" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url('https://www.youtube.com/watch?v=hFklkIWCuDM') }}">Client Testimonials & Video Comments</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-page -->



    <style>
        /* Force immediate display - override all animations */
        .blog-card-three {
            animation: none !important;
            transform: none !important;
            transition: none !important;
            opacity: 1 !important;
            visibility: visible !important;
        }

        .blog-card-three__image {
            position: relative;
            border-radius: 8px;
            overflow: visible !important;
            animation: none !important;
            transform: none !important;
            transition: none !important;
        }

        .youtube-thumbnail {
            position: relative;
            cursor: pointer;
            border-radius: 8px;
            animation: none !important;
            transform: none !important;
            transition: none !important;
            opacity: 1 !important;
            visibility: visible !important;
        }



        .play-overlay {
            position: absolute !important;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;
            background: rgba(255,0,0,0.9) !important;
            border: 3px solid rgba(255,255,255,0.9) !important;
            border-radius: 15px !important;
            width: 90px !important;
            height: 70px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            cursor: pointer !important;
            z-index: 10 !important;
            animation: none !important;
            transition: none !important;
        }

        .play-overlay svg {
            width: 35px !important;
            height: 35px !important;
            fill: white !important;
        }

        /* Override any WOW animations */
        .wow {
            animation-name: none !important;
            animation-duration: 0s !important;
            animation-delay: 0s !important;
        }
        
        /* Override the blog-card-three image hover effects specifically for YouTube thumbnails */
        .youtube-thumbnail img {
            transition: none !important;
            transform: none !important;
            opacity: 1 !important;
            filter: none !important;
            position: relative !important;
            width: 100% !important;
            height: 250px !important;
            object-fit: cover !important;
            display: block !important;
        }
        
        /* Hide any second images that might be interfering */
        .blog-card-three__image img:nth-child(2) {
            display: none !important;
        }
    </style>

    <script>
        // Function to load YouTube video
        function loadYouTubeVideo(element, videoId) {
            const iframe = document.createElement('iframe');
            iframe.width = '100%';
            iframe.height = '250';
            iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
            iframe.title = 'YouTube video player';
            iframe.frameBorder = '0';
            iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
            iframe.allowFullscreen = true;
            iframe.style.borderRadius = '8px';
            
            element.parentNode.replaceChild(iframe, element);
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.video-wrapper').forEach(function(wrapper) {
                var video = wrapper.querySelector('video');
                var btn = wrapper.querySelector('.play-btn');
                
                // Only add event listeners if video and btn exist (for local videos)
                if (video && btn) {
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
                }
            });
        });
    </script>

    <x-footer />
    <x-mobileMenu />
    <x-sidebar />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
