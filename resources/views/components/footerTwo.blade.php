<footer class="main-footer-three background-black">
    <div class="main-footer-three__bg background-black" style="background-image: url({{ asset('assets/images/backgrounds/footer-bg-3-1.jpg') }});"></div>
    <div class="main-footer-three__shape" style="background-image: url({{ asset('assets/images/shapes/footer-3-shape.png') }});"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="footer-widget footer-widget--about-two">
                    <a href="{{ url('/') }}" class="footer-widget__logo">
                        <img src="{{ asset('assets/images/footer-logo.png') }}" width="184" alt="Tolak Laravel Template">
                    </a>
                    <p class="footer-widget--about-two__text">
                        Automotive’s four Frederick locations continues its years tradition of quality auto repair services.
                    </p>
                    <div class="footer-widget__social">
                        <a href="https://www.facebook.com/KreatifDigitalDinamik"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://linkedin.com/company/kreatif-digital-dinamik"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/@KreatifDigitalDinamik"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/kreatifdigitaldinamik/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Service</h2>
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="{{ url('about') }}">Why choose us</a></li>
                        <li><a href="{{ url('services') }}">Our Service</a></li>
                        <li><a href="{{ url('reviews') }}">Partners</a></li>
                        <li><a href="{{ url('contact') }}">Core values</a></li>
                        <li><a href="{{ url('project') }}">Our projects</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="footer-widget footer-widget--links main-footer-three--ml30">
                    <h2 class="footer-widget__title">Quick Link</h2>
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="{{ url('gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('packages') }}">Packages</a></li>
                        <li><a href="{{ url('team') }}">Team</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                        <li><a href="{{ url('blog-grid-right') }}">News</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-widget footer-widget--posts">
                    <h2 class="footer-widget__title">Recent Posts</h2>
                    <ul class="footer-widget__posts list-unstyled">
                        <li class="footer-widget__posts__item">
                            <div class="footer-widget__posts__image">
                                <img src="{{ asset('assets/images/blog/lp-1-1.jpg') }}" alt="">
                            </div>
                            <div class="footer-widget__posts__content">
                                <p class="footer-widget__posts__meta">23 Jun 2023</p>
                                <h4 class="footer-widget__posts__title"><a href="{{ url('blog-details') }}">We round Solution York Blog</a></h4>
                            </div>
                        </li>
                        <li class="footer-widget__posts__item">
                            <div class="footer-widget__posts__image">
                                <img src="{{ asset('assets/images/blog/lp-1-2.jpg') }}" alt="">
                            </div>
                            <div class="footer-widget__posts__content">
                                <p class="footer-widget__posts__meta">23 Jun 2023</p>
                                <h4 class="footer-widget__posts__title"><a href="{{ url('blog-details') }}">We Should be Descriptive</a></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer-three__bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="main-footer-three__copyright">&copy; Copyright <span class="dynamic-year"></span> by Tolak Laravel Template.</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled main-footer-three__bottom__list">
                        <li><a href="{{ url('about') }}">About Us</a></li>
                        <li><a href="{{ url('services') }}">Services</a></li>
                        <li><a href="{{ url('blog-list-right') }}">News</a></li>
                        <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- /.page-wrapper -->




