@extends('layouts.layout5')
@section('title', 'Kreatif Digital Dinamik | Penyelesaian Pemasaran Digital & Strategi Jenama SME')

@section('content')

    <x-strickyHeader />

    <!-- Hero Video Section -->
    <section class="hero-video-section">
        <!-- Background Video Container -->
        <div class="video-background-container">
            <iframe id="background-video"
                src="https://www.youtube.com/embed/hFklkIWCuDM?autoplay=1&mute=1&loop=1&controls=0&rel=0&modestbranding=1&playsinline=1&playlist=hFklkIWCuDM"
                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen title="Background Video">
            </iframe>
            <div class="video-overlay"></div>
        </div>

        <!-- Hero Content -->
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="hero-content">
                        <h5 class="hero-subtitle">{{ __('common.welcome_to_kreatif') }}</h5>
                        <h3 class="hero-title-secondary">{{ __('common.we_marketing_process') }}</h3>
                        <h2 class="hero-title-primary">{{ __('common.solution_service') }}</h2>

                        <div class="hero-description">
                            <p>{{ __('common.business_description') }}</p>
                        </div>

                        <div class="hero-buttons">
                            {{-- <a href="{{ url('services') }}" class="btn btn-primary">
                                <span>{{ __('common.get_quote') }}</span>
                            </a> --}}
                            <a href="{{ url('contact') }}" class="btn btn-secondary">
                                <span>{{ __('common.contact_now') }}</span>
                            </a>
                        </div>

                        <div class="video-play-button" onclick="openVideoModal()">
                            <div class="play-icon">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </div>
                            <span class="play-text">{{ __('common.watch_full_video') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main-video-hero-end -->

    <!-- Video Modal -->
    <div id="videoModal" class="video-modal">
        <div class="video-modal-content">
            <span class="video-modal-close" onclick="closeVideoModal()">&times;</span>
            <div class="video-modal-body">
                <iframe id="modal-video" src="" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <style>
        /* ==========================================================================
                   Hero Video Section Styles
                   ========================================================================== */

        /* Base Layout */
        .hero-video-section {
            position: relative;
            height: 100vh;
            min-height: 700px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            margin: 0;
            padding: 0;
            margin-left: calc(-50vw + 50%);
            margin-right: calc(-50vw + 50%);
        }

        /* Video Background */
        .video-background-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .video-background-container iframe {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100vw;
            height: 56.25vw;
            /* 16:9 aspect ratio */
            min-width: 177.78vh;
            /* 16:9 aspect ratio */
            min-height: 100vh;
            transform: translateX(-50%) translateY(-50%);
            pointer-events: none;
            border: none;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg,
                    rgba(0, 0, 0, 0.7) 0%,
                    rgba(0, 0, 0, 0.5) 50%,
                    rgba(0, 0, 0, 0.7) 100%);
            z-index: 1;
        }

        /* Content Container */
        .hero-video-section .container {
            position: relative;
            z-index: 10;
            max-width: 1200px;
            width: 100%;
            padding: 0 15px;
        }

        /* ==========================================================================
                   Hero Content Styles
                   ========================================================================== */

        .hero-content {
            color: white;
            text-align: center;
            position: relative;
            z-index: 11;
        }

        /* Typography */
        .hero-subtitle {
            font-size: 1.125rem;
            /* 18px */
            font-weight: 600;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .hero-title-secondary {
            font-size: 3rem;
            /* 48px */
            font-weight: 700;
            color: #fff;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.9);
            margin-bottom: 0.75rem;
            line-height: 1.2;
        }

        .hero-title-primary {
            font-size: 3.5rem;
            /* 56px */
            font-weight: 800;
            color: #fff;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.9);
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .hero-description {
            margin-bottom: 2rem;
        }

        .hero-description p {
            font-size: 1.125rem;
            /* 18px */
            font-weight: 400;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            line-height: 1.6;
            margin: 0;
        }

        /* ==========================================================================
                   Button Styles
                   ========================================================================== */

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2.5rem;
            flex-wrap: wrap;
        }

        .hero-buttons .btn {
            padding: 0.875rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
            border: 2px solid transparent;
        }

        .hero-buttons .btn-primary {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .hero-buttons .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
        }

        .hero-buttons .btn-secondary {
            background-color: transparent;
            color: white;
            border-color: white;
        }

        .hero-buttons .btn-secondary:hover {
            background-color: white;
            color: #333;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.3);
        }

        /* ==========================================================================
                   Video Play Button Styles
                   ========================================================================== */

        .video-play-button {
            display: inline-flex;
            align-items: center;
            gap: 1.25rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .video-play-button:hover {
            transform: translateY(-5px);
        }

        .play-icon {
            width: 5rem;
            /* 80px */
            height: 5rem;
            /* 80px */
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            border: 3px solid rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            flex-shrink: 0;
        }

        .play-icon:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: white;
            transform: scale(1.1);
        }

        .play-icon i {
            font-size: 1.5rem;
            /* 24px */
            color: white;
            margin-left: 0.25rem;
            /* Slight offset for play icon */
        }

        .play-text {
            font-size: 1.25rem;
            /* 20px */
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            letter-spacing: 0.5px;
            text-transform: uppercase;
            border-left: 3px solid rgba(255, 255, 255, 0.8);
            padding-left: 1rem;
            transition: all 0.3s ease;
        }

        .video-play-button:hover .play-text {
            border-left-color: white;
            transform: translateX(5px);
        }

        /* ==========================================================================
                   Modal Styles
                   ========================================================================== */

        .video-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            animation: modalFadeIn 0.3s ease;
        }

        .video-modal-content {
            position: relative;
            margin: 3% auto;
            width: 90%;
            max-width: 1000px;
            height: 80%;
            background: #000;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        }

        .video-modal-close {
            position: absolute;
            top: -3rem;
            right: 0;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            cursor: pointer;
            z-index: 10000;
            transition: all 0.3s ease;
            width: 3rem;
            height: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .video-modal-close:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.1);
        }

        .video-modal-body {
            width: 100%;
            height: 100%;
        }

        .video-modal-body iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* ==========================================================================
                   Responsive Design
                   ========================================================================== */

        /* Large Desktop */
        @media (min-width: 1200px) {
            .hero-title-secondary {
                font-size: 3.5rem;
                /* 56px */
            }

            .hero-title-primary {
                font-size: 4rem;
                /* 64px */
            }
        }

        /* Desktop */
        @media (max-width: 1199px) {
            .hero-title-secondary {
                font-size: 2.75rem;
                /* 44px */
            }

            .hero-title-primary {
                font-size: 3.25rem;
                /* 52px */
            }
        }

        /* Tablet */
        @media (max-width: 768px) {
            .hero-video-section {
                min-height: 600px;
            }

            .video-background-container iframe {
                width: 177.77vh;
                height: 100vh;
                min-width: 100vw;
                min-height: 177.77vw;
            }

            .hero-title-secondary {
                font-size: 2rem;
                /* 32px */
            }

            .hero-title-primary {
                font-size: 2.25rem;
                /* 36px */
            }

            .hero-description p {
                font-size: 1rem;
                /* 16px */
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .hero-buttons .btn {
                width: 200px;
            }

            .play-icon {
                width: 3.75rem;
                /* 60px */
                height: 3.75rem;
                /* 60px */
            }

            .play-icon i {
                font-size: 1.125rem;
                /* 18px */
            }

            .play-text {
                font-size: 1rem;
                /* 16px */
            }

            .video-modal-content {
                width: 95%;
                height: 70%;
                margin: 10% auto;
            }
        }

        /* Mobile */
        @media (max-width: 480px) {
            .hero-video-section {
                min-height: 500px;
            }

            .hero-video-section .container {
                padding: 0 1rem;
            }

            .hero-title-secondary {
                font-size: 1.5rem;
                /* 24px */
            }

            .hero-title-primary {
                font-size: 1.75rem;
                /* 28px */
            }

            .hero-description p {
                font-size: 0.875rem;
                /* 14px */
            }

            .hero-description br {
                display: none;
            }

            .video-play-button {
                flex-direction: column;
                gap: 0.75rem;
            }

            .play-icon {
                width: 3.125rem;
                /* 50px */
                height: 3.125rem;
                /* 50px */
            }

            .play-icon i {
                font-size: 1rem;
                /* 16px */
            }

            .play-text {
                font-size: 0.875rem;
                /* 14px */
                border-left: none;
                padding-left: 0;
                text-align: center;
            }

            .video-modal-content {
                margin: 15% auto;
                height: 60%;
            }
        }

        /* Global Reset */
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
    </style>

    <script>
        /**
         * Video Modal Controller
         * Handles video modal functionality with proper error handling
         */
        class VideoModal {
            constructor() {
                this.modal = null;
                this.modalVideo = null;
                this.videoId = 'hFklkIWCuDM';
                this.isInitialized = false;

                // Initialize when DOM is ready
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', () => this.init());
                } else {
                    this.init();
                }
            }

            /**
             * Initialize the modal elements and event listeners
             */
            init() {
                try {
                    this.modal = document.getElementById('videoModal');
                    this.modalVideo = document.getElementById('modal-video');

                    if (!this.modal || !this.modalVideo) {
                        console.warn('Video modal elements not found');
                        return;
                    }

                    this.setupEventListeners();
                    this.isInitialized = true;
                } catch (error) {
                    console.error('Failed to initialize video modal:', error);
                }
            }

            /**
             * Set up event listeners for modal interaction
             */
            setupEventListeners() {
                // Close modal when clicking outside
                this.modal.addEventListener('click', (event) => {
                    if (event.target === this.modal) {
                        this.close();
                    }
                });

                // Close modal with escape key
                document.addEventListener('keydown', (event) => {
                    if (event.key === 'Escape' && this.isOpen()) {
                        this.close();
                    }
                });

                // Prevent modal content clicks from closing modal
                const modalContent = this.modal.querySelector('.video-modal-content');
                if (modalContent) {
                    modalContent.addEventListener('click', (event) => {
                        event.stopPropagation();
                    });
                }
            }

            /**
             * Open the video modal
             */
            open() {
                if (!this.isInitialized) {
                    console.warn('Video modal not initialized');
                    return;
                }

                try {
                    // Construct video URL with autoplay
                    const videoSrc =
                        `https://www.youtube.com/embed/${this.videoId}?autoplay=1&rel=0&modestbranding=1&iv_load_policy=3`;

                    // Set video source
                    this.modalVideo.src = videoSrc;

                    // Show modal
                    this.modal.style.display = 'block';

                    // Prevent body scrolling
                    document.body.style.overflow = 'hidden';

                    // Add modal-open class for additional styling
                    document.body.classList.add('modal-open');

                } catch (error) {
                    console.error('Failed to open video modal:', error);
                }
            }

            /**
             * Close the video modal
             */
            close() {
                if (!this.isInitialized) {
                    return;
                }

                try {
                    // Hide modal
                    this.modal.style.display = 'none';

                    // Stop video by clearing source
                    this.modalVideo.src = '';

                    // Restore body scrolling
                    document.body.style.overflow = 'auto';

                    // Remove modal-open class
                    document.body.classList.remove('modal-open');

                } catch (error) {
                    console.error('Failed to close video modal:', error);
                }
            }

            /**
             * Check if modal is currently open
             */
            isOpen() {
                return this.modal && this.modal.style.display === 'block';
            }

            /**
             * Update video ID and refresh if modal is open
             */
            setVideoId(newVideoId) {
                if (typeof newVideoId !== 'string' || !newVideoId.trim()) {
                    console.warn('Invalid video ID provided');
                    return;
                }

                this.videoId = newVideoId.trim();

                // If modal is open, update the video source
                if (this.isOpen()) {
                    const videoSrc =
                        `https://www.youtube.com/embed/${this.videoId}?autoplay=1&rel=0&modestbranding=1&iv_load_policy=3`;
                    this.modalVideo.src = videoSrc;
                }
            }
        }

        // Initialize video modal
        const videoModalController = new VideoModal();

        /**
         * Global functions for backward compatibility
         * These functions are called from the HTML onclick attributes
         */
        function openVideoModal() {
            videoModalController.open();
        }

        function closeVideoModal() {
            videoModalController.close();
        }

        /**
         * Additional utility functions
         */

        /**
         * Lazy load background video for performance
         */
        function initBackgroundVideo() {
            const backgroundVideo = document.getElementById('background-video');

            if (!backgroundVideo) {
                return;
            }

            // Add intersection observer for lazy loading if needed
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            // Video is already loaded via iframe src, but we can add additional logic here
                            observer.unobserve(entry.target);
                        }
                    });
                });

                observer.observe(backgroundVideo);
            }
        }

        /**
         * Handle video loading errors
         */
        function handleVideoError(event) {
            console.error('Video failed to load:', event);

            // Could implement fallback image or alternative content here
            const videoContainer = event.target.closest('.video-background-container');
            if (videoContainer) {
                videoContainer.classList.add('video-error');
                // You could add a fallback background image via CSS
            }
        }

        // Initialize additional features when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            initBackgroundVideo();

            // Add error handling to background video
            const backgroundVideo = document.getElementById('background-video');
            if (backgroundVideo) {
                backgroundVideo.addEventListener('error', handleVideoError);
            }

            // Performance optimization: preload modal video thumbnail
            const link = document.createElement('link');
            link.rel = 'prefetch';
            link.href = `https://img.youtube.com/vi/${videoModalController.videoId}/maxresdefault.jpg`;
            document.head.appendChild(link);
        });

        // Export for potential module usage
        if (typeof module !== 'undefined' && module.exports) {
            module.exports = {
                VideoModal,
                openVideoModal,
                closeVideoModal
            };
        }
    </script>

    {{-- <div class="client-carousel client-carousel--three">
        <div class="container">
            <div class="client-carousel__one tolak-owl__carousel owl-theme owl-carousel"
                data-owl-options='{
    "items": 5,
    "margin": 30,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": 6000,
    "nav":false,
    "dots":false,
    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
    "responsive":{
        "0":{
            "items":1
        },
        "360":{
            "items":2
        },
        "575":{
            "items":3
        },
        "768":{
            "items":3
        },
        "992":{
            "items": 4
        },
        "1200":{
            "items": 5
        }
    }
    }'>
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('/assets/images/resources/brand-1-1.png') }}" alt="tolak">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('/assets/images/resources/brand-1-1-hover.png') }}" alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('/assets/images/resources/brand-1-1.png') }}" alt="tolak">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('/assets/images/resources/brand-1-1-hover.png') }}" alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('/assets/images/resources/brand-1-1.png') }}" alt="tolak">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('/assets/images/resources/brand-1-1-hover.png') }}" alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('/assets/images/resources/brand-1-1.png') }}" alt="tolak">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('/assets/images/resources/brand-1-1-hover.png') }}" alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('/assets/images/resources/brand-1-1.png') }}" alt="tolak">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('/assets/images/resources/brand-1-1-hover.png') }}" alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('/assets/images/resources/brand-1-1.png') }}" alt="tolak">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('/assets/images/resources/brand-1-1-hover.png') }}" alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('/assets/images/resources/brand-1-1.png') }}" alt="tolak">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('/assets/images/resources/brand-1-1-hover.png') }}" alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('/assets/images/resources/brand-1-1.png') }}" alt="tolak">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('/assets/images/resources/brand-1-1-hover.png') }}" alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('/assets/images/resources/brand-1-1.png') }}" alt="tolak">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('/assets/images/resources/brand-1-1-hover.png') }}" alt="tolak">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('/assets/images/resources/brand-1-1.png') }}" alt="tolak">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('/assets/images/resources/brand-1-1-hover.png') }}" alt="tolak">
                </div><!-- /.owl-slide-item-->
            </div><!-- /.thm-owl__slider -->
        </div><!-- /.container -->
    </div><!-- /.client-carousel --> --}}

    <section class="about-four">
        <div class="container tabs-box">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__image">
                        <img src="{{ asset('/assets/images/new-images/image.png') }}" alt="kreatif">
                        <img src="{{ asset('/assets/images/gallery/DSC09582-3.jpg') }}" alt="kreatif">
                        <div class="about-four__image__shape tolak-tilt"
                            data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                            <img src="{{ asset('/assets/images/shapes/about-4-shape-1.png') }}" alt="kreatif">
                        </div>
                        <div class="about-four__fact count-box tolak-tilt"
                            data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                            <div class="about-four__fact__icon"><i class="icon-check-mark"></i></div>
                            <h3 class="about-four__fact__count"><span class="count-text" data-stop="100"
                                    data-speed="1500"></span>+</h3><!-- /.about-four__fact__number -->
                            <p class="about-four__fact__text">{{ __('common.successful_projects') }}</p><!-- /.about-four__fact__title -->
                        </div><!-- /.about-four__fact -->
                    </div>
                </div><!-- /.col-xl-6 -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="about-four__content">
                        <div class="sec-title-two text-left">
                            <h6 class="sec-title-two__tagline"><span
                                    class="sec-title-two__tagline__left icofont-rounded-double-left"></span>{{ __('common.about_us') }}<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6>
                            <!-- /.sec-title-two__tagline -->
                            <h3 class="sec-title-two__title">{{ __('common.company_title') }} <span>{{ __('common.company_subtitle') }}</span></h3>
                            <!-- /.sec-title-two__title -->
                        </div><!-- /.sec-title-two -->
                        <p class="about-four__content__text">
                            {{ __('common.company_description_1') }}
                        </p>
                        <p>
                            {{ __('common.company_description_2') }}
                        </p>
                        <p>
                            {{ __('common.company_description_3') }}
                        </p>
                        
                    </div><!-- /.about__content -->
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-four -->

    <!-- Service Start -->
    <section class="service-one service-one--home-four"
        style="background-image: url(assets/images/backgrounds/service-bg-2.jpg);">
        <div class="container">
            <div class="sec-title-two text-center">
                <h6 class="sec-title-two__tagline"><span
                        class="sec-title-two__tagline__left icofont-rounded-double-left"></span>{{ __('common.our_services') }}<span
                        class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6>
                <!-- /.sec-title-two__tagline -->
                <h3 class="sec-title-two__title">{{ __('common.services_description') }}</h3>
                <!-- /.sec-title-two__title -->
                <p>{{ __('common.services_full_description') }}</p>
            </div><!-- /.sec-title-two -->
            <div class="service-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel owl-theme"
                data-owl-options='{
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
            "items": 3
        },
        "1200": {
            "items": 4
        }    
    }
    }'>
                <div class="item">
                    <div class="service-one__item text-center">
                        <div class="service-one__item__image">
                            <img src="{{ asset('/assets/images/new-images/image1.jpeg') }}" alt="kreatif">
                        </div>
                        <div class="service-one__item__content">
                            <div class="service-one__item__icon">
                                <span class="icon-camera"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-one__item__title">
                                <a href="{{ url('fotografi-videografi') }}">{{ __('common.photography_videography') }}</a>
                            </h3><!-- /.service-title -->
                            <p class="service-one__item__text">
                                {{ __('common.photography_description') }}
                            </p><!-- /.service-text -->
                        </div>
                        {{-- <div class="service-one__item__bottom">
                            <div class="service-one__item__bottom__number"></div>
                            <a class="service-one__item__bottom__rm" href="{{ url('fotografi-videografi') }}">{{ __('common.read_more') }}<span class="fas fa-angle-double-right"></span></a>
                        </div> --}}
                    </div><!-- /.service-card-one -->
                </div>
                <div class="item">
                    <div class="service-one__item text-center">
                        <div class="service-one__item__image">
                            <img src="{{ asset('/assets/images/new-images/DSC09581-2.jpg') }}" alt="kreatif">
                        </div>
                        <div class="service-one__item__content">
                            <div class="service-one__item__icon">
                                <span class="icon-design"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-one__item__title">
                                <a href="{{ url('rekaan-grafik') }}">{{ __('common.graphic_design') }}</a>
                            </h3><!-- /.service-title -->
                            <p class="service-one__item__text">
                                {{ __('common.graphic_design_description') }}
                            </p><!-- /.service-text -->
                        </div>
                        {{-- <div class="service-one__item__bottom">
                            <div class="service-one__item__bottom__number"></div>
                            <a class="service-one__item__bottom__rm" href="{{ url('rekaan-grafik') }}">{{ __('common.read_more') }}<span class="fas fa-angle-double-right"></span></a>
                        </div> --}}
                    </div><!-- /.service-card-one -->
                </div>
                <div class="item">
                    <div class="service-one__item text-center">
                        <div class="service-one__item__image">
                            <img src="{{ asset('/assets/images/new-images/image3.jpg') }}" alt="kreatif">
                        </div>
                        <div class="service-one__item__content">
                            <div class="service-one__item__icon">
                                <span class="icon-social-media"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-one__item__title">
                                <a href="{{ url('pengurusan-media-sosial') }}">{{ __('common.social_media_management') }}</a>
                            </h3><!-- /.service-title -->
                            <p class="service-one__item__text">
                                {{ __('common.social_media_description') }}
                            </p><!-- /.service-text -->
                        </div>
                        {{-- <div class="service-one__item__bottom">
                            <div class="service-one__item__bottom__number"></div>
                            <a class="service-one__item__bottom__rm" href="{{ url('pengurusan-media-sosial') }}">{{ __('common.read_more') }}<span class="fas fa-angle-double-right"></span></a>
                        </div> --}}
                    </div><!-- /.service-card-one -->
                </div>
                <div class="item">
                    <div class="service-one__item text-center">
                        <div class="service-one__item__image">
                            <img src="{{ asset('/assets/images/new-images/IMG_9832-2.jpg') }}" alt="kreatif">
                        </div>
                        <div class="service-one__item__content">
                            <div class="service-one__item__icon">
                                <span class="icon-digital-marketing"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-one__item__title">
                                <a href="{{ url('strategi-pemasaran-digital') }}">{{ __('common.digital_marketing_strategy') }}</a>
                            </h3><!-- /.service-title -->
                            <p class="service-one__item__text">
                                {{ __('common.digital_marketing_description') }}
                            </p><!-- /.service-text -->
                        </div>
                        {{-- <div class="service-one__item__bottom">
                            <div class="service-one__item__bottom__number"></div>
                            <a class="service-one__item__bottom__rm" href="{{ url('strategi-pemasaran-digital') }}">{{ __('common.read_more') }}<span class="fas fa-angle-double-right"></span></a>
                        </div> --}}
                    </div><!-- /.service-card-one -->
                </div>
          
            </div>
        </div>
        <img class="service-one--home-four__shape" src="{{ asset('/assets/images/shapes/counter-border-1.png') }}"
            alt="tolak">
    </section>
    
    <!-- Custom CSS for Equal Height Service Boxes -->
    <style>
        /* Make all service boxes the same height */
        .service-one__carousel .service-one__item {
            display: flex;
            flex-direction: column;
            height: 100%;
            min-height: 420px; /* Set minimum height for consistency */
        }
        
        .service-one__item__image {
            height: 200px;
            overflow: hidden;
            border-radius: 10px 10px 0 0;
        }
        
        .service-one__item__image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .service-one__item__content {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        
        .service-one__item__text {
            flex: 1;
            display: flex;
            align-items: center;
            text-align: center;
            min-height: 60px; /* Ensure consistent text area height */
            font-size: 14px;
            line-height: 1.4;
        }
        
        .service-one__item__title {
            min-height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        
        .service-one__item__bottom {
            margin-top: auto; /* Push to bottom */
            padding: 15px 20px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .service-one__item {
                min-height: 380px;
            }
            
            .service-one__item__image {
                height: 180px;
            }
            
            .service-one__item__text {
                font-size: 13px;
                min-height: 50px;
            }
        }
        
        @media (max-width: 480px) {
            .service-one__item {
                min-height: 350px;
            }
            
            .service-one__item__image {
                height: 160px;
            }
            
            .service-one__item__text {
                font-size: 12px;
                min-height: 45px;
            }
        }
    </style>

    <!-- Professional Layout CSS for Clean Positioning -->
    <style>
        /* Clean and Professional Solution Section */
        .our-solution {
            padding: 80px 0;
        }

        .our-solution__content {
            padding-left: 30px;
        }

        .our-solution__content__text {
            font-size: 16px;
            line-height: 1.7;
            color: #555;
            margin-bottom: 30px;
            font-weight: 400;
        }

        /* Benefits Section Styling */
        .benefit-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border-left: 3px solid #0047ab;
        }

        .benefit-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,71,171,0.15);
        }

        .benefit-icon {
            flex-shrink: 0;
        }

        /* Solution Section Improvements */
        .our-solution__list {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .our-solution__list__title {
            color: #1a1a1a;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 22px;
        }

        .our-solution__list ul li {
            padding: 12px 0;
            border-bottom: 1px solid #f1f5f9;
            font-size: 15px;
            color: #555;
            display: flex;
            align-items: center;
        }

        .our-solution__list ul li:last-child {
            border-bottom: none;
        }

        .our-solution__list ul li span.fas {
            color: #0047ab;
            margin-right: 12px;
            font-size: 14px;
        }

        .our-solution__box {
            background: #0047ab;
            color: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,71,171,0.3);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .our-solution__box__icon {
            margin-bottom: 20px;
        }

        .our-solution__box__icon span {
            font-size: 40px;
            color: white;
        }

        .our-solution__box__text {
            font-size: 16px;
            font-weight: 600;
            line-height: 1.4;
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .our-solution__content {
                padding-left: 0;
                margin-top: 50px;
            }
        }

        @media (max-width: 768px) {
            .our-solution {
                padding: 60px 0;
            }

            .benefit-item {
                padding: 15px;
                margin-bottom: 15px;
            }
        }
    </style>
    <!-- Service End -->

    <section class="our-solution" style="background-image: url(assets/images/backgrounds/solution-bg-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="our-solution__image">
                        <div class="our-solution__border-one"></div>
                        {{-- <div class="our-solution__border-two"></div> --}}
                        <img src="{{ asset("/assets/images/new-images/image-ws3.jpeg") }}" alt="tolak">
                        <div class="our-solution__border-three"></div>
                        <div class="our-solution__image__shape"><img
                                src="{{ asset('/assets/images/shapes/solution-1-shape-1.png') }}" alt="tolak"></div>
                    </div><!-- /.our-solution__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="our-solution__content">
                        <div class="sec-title text-left">
                            <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>{{ __('common.why_choose_us') }}<span class="sec-title__tagline__right"></span></h6>
                            <!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">{{ __('common.strategic_partner_title') }}</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        {{-- <p class="our-solution__content__text">
                            Dengan pengalaman melayani lebih 100+ perniagaan di Malaysia, kami memahami cabaran sebenar yang dihadapi oleh syarikat tempatan. Berpusat di Alor Setar, Kedah, kami melayani klien dari seluruh Malaysia dengan komitmen memberikan solusi pemasaran digital yang berkesan dan terukur.
                        </p> --}}
                        
                        <!-- Key Benefits Section -->
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5">
                                <div class="our-solution__box">
                                    <div class="our-solution__box__icon">
                                        <img src="{{ asset('/assets/images/logo-4.png') }}" alt="Kreatif Digital Dinamik" style="max-width: 120px; height: auto;">
                                    </div>
                                    <p class="our-solution__box__text">
                                       <br>
                                        <span style="font-size: 14px; opacity: 0.9;">{{ __('common.strategic_partner_tagline') }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7">
                                <div class="our-solution__list">
                                    <h5 class="our-solution__list__title">{{ __('common.quality_commitment_title') }}</h5>
                                    <ul>
                                        <li><span class="fas fa-check-circle"></span>{{ __('common.portfolio_proven') }}</li>
                                        <li><span class="fas fa-check-circle"></span>{{ __('common.roi_measured') }}</li>
                                        <li><span class="fas fa-check-circle"></span>{{ __('common.quick_response') }}</li>
                                        <li><span class="fas fa-check-circle"></span>{{ __('common.personal_approach') }}</li>
                                        <li><span class="fas fa-check-circle"></span>{{ __('common.comprehensive_service') }}</li>
                                    </ul>
                                    <div class="our-solution__list__border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.our-solution -->
    <!-- Feature Start -->

  <section class="faq-one faq-one--dark" style="background-image: url(assets/images/shapes/faq-bg-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-one__accordion tolak-accrodion" data-grp-name="tolak-accrodion">
                    
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>
                                {{ __('common.faq_q1') }}
                                <span class="accrodion-title__icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>
                                    {{ __('common.faq_a1') }}
                                </p>
                            </div>
                        </div>
                    </div><div class="accrodion active">
                        <div class="accrodion-title">
                            <h4>
                                {{ __('common.faq_q2') }}
                                <span class="accrodion-title__icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>
                                    {{ __('common.faq_a2') }}
                                </p>
                            </div>
                        </div>
                    </div><div class="accrodion">
                        <div class="accrodion-title">
                            <h4>
                                {{ __('common.faq_q3') }}
                                <span class="accrodion-title__icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>
                                    {{ __('common.faq_a3') }}
                                </p>
                            </div>
                        </div>
                    </div><div class="accrodion">
                        <div class="accrodion-title">
                            <h4>
                                {{ __('common.faq_q4') }}
                                <span class="accrodion-title__icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>
                                    {{ __('common.faq_a4') }}
                                </p>
                            </div>
                        </div>
                    </div></div>
            </div><div class="col-lg-6 d-flex align-items-center">
                <div class="faq-one__content">
                    <div class="sec-title-two text-left">
                        <h6 class="sec-title-two__tagline"><span
                                class="sec-title-two__tagline__left icofont-rounded-double-left"></span>{{ __('common.faq_tagline') }}<span 
                                class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6>
                        <h3 class="sec-title-two__title">{{ __('common.faq_title') }}</h3>
                    </div><div class="row">
                        <div class="col-md-5">
                            <div class="faq-one__image tolak-tilt"
                                data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                <img src="{{ asset('/assets/images/new-images/image-ws2-r.jpeg') }}" alt="Kreatif Digital Dinamik">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="faq-one__right">
                                <div class="faq-one__experiance count-box">
                                    <h3 class="faq-one__experiance__count"><span class="count-text" data-stop="100"
                                            data-speed="1500"></span>+</h3>
                                    <h5 class="faq-one__experiance__title">{{ __('common.projects_successful') }}</h5>
                                </div>
                                <h4 class="faq-one__right__title">{{ __('common.faq_right_title') }}</h4>
                                <p class="faq-one__right__text">{{ __('common.faq_right_text') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></section>


    <x-footer />
    <x-mobileMenu />
    <x-sidebar />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
