<footer class="main-footer background-base">
    <div class="main-footer__bg background-black"></div>
    <!-- /.main-footer__bg -->
    <div class="main-footer__shape" style="background-image: url(assets/images/shapes/footer-shape-1.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="footer-widget footer-widget--about">
                    <a href="{{ url('/') }}" class="footer-widget__logo">
                        <img src="assets/images/logo-4.png" width="184" alt="Tolak Laravel Template">
                    </a>
                    <ul class="footer-widget__info">
                        <li><span class="icofont-clock-time"></span>Open Hours:<br> Mon - Fri: 8.00 am. - 6.00 pm.</li>
                        <li><span class="icofont-location-pin"></span>Alor Setar, Kedah.</li>
                        <li><span class="icofont-phone"></span><a href="tel:0135338190">013 533 8190</a></li>
                    </ul>
                    <div class="footer-widget__social">
                        <a href="{{ url('https://www.facebook.com/KreatifDigitalDinamik') }}">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="{{ url('http://linkedin.com/company/kreatif-digital-dinamik') }}">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                            <span class="sr-only">LinkedIn</span>
                        </a>
                        <a href="{{ url('https://www.youtube.com/@KreatifDigitalDinamik') }}">
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                            <span class="sr-only">YouTube</span>
                        </a>
                        <a href="{{ url('https://www.instagram.com/kreatifdigitaldinamik/') }}">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                    </div>
                    {{-- <div class="footer-widget__image">
                        <img src="assets/images/new-images/image-ws2.jpeg" alt="tolak">
                    </div> --}}
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
            {{-- <div class="col-md-6 col-lg-4">
                <div class="footer-widget footer-widget--posts">
                    <h2 class="footer-widget__title">Our Gallery</h2><!-- /.footer-widget__title -->
                    <ul class="footer-widget__posts list-unstyled">
                        <li class="footer-widget__posts__item">
                            <div class="footer-widget__posts__image">
                                <img src="assets/images/blog/lp-1-1.jpg" alt="">
                            </div><!-- /.sidebar__posts__image -->
                            <div class="footer-widget__posts__content">
                                <p class="footer-widget__posts__meta">23 jun 2023</p><!-- /.sidebar__posts__date -->
                                <h4 class="footer-widget__posts__title"><a href="{{ url('/blog-details') }}">We round Solution york Blog</a></h4><!-- /.sidebar__posts__title -->
                            </div><!-- /.sidebar__posts__content -->
                        </li>
                        <li class="footer-widget__posts__item">
                            <div class="footer-widget__posts__image">
                                <img src="assets/images/blog/lp-1-2.jpg" alt="">
                            </div><!-- /.sidebar__posts__image -->
                            <div class="footer-widget__posts__content">
                                <p class="footer-widget__posts__meta">23 jun 2023</p><!-- /.sidebar__posts__date -->
                                <h4 class="footer-widget__posts__title"><a href="{{ url('/blog-details') }}">We Should be Descriptive</a></h4><!-- /.sidebar__posts__title -->
                            </div><!-- /.sidebar__posts__content -->
                        </li>
                    </ul><!-- /.sidebar__posts list-unstyled -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 --> --}}
            {{-- <div class="col-md-6 col-lg-2">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Service</h2><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="{{ url('/about') }}">Why choose us</a></li>
                        <li><a href="{{ url('/services') }}">Our Service</a></li>
                        <li><a href="{{ url('/reviews') }}">Partners</a></li>
                        <li><a href="{{ url('/contact') }}">Core values</a></li>
                        <li><a href="{{ url('/project') }}">Our projects</a></li>
                    </ul><!-- /.list-unstyled footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 --> --}}
            {{-- <div class="col-md-6 col-lg-2">
                <div class="footer-widget footer-widget--links footer-widget--last">
                    <h2 class="footer-widget__title">Quick Link</h2><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="{{ url('/team') }}">Team</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="{{ url('/blog-grid-right') }}">News</a></li>
                    </ul><!-- /.list-unstyled footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 --> --}}
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="main-footer__copyright">
                        &copy; Copyright <span class="dynamic-year"></span> by Kreatif Digital Dinamik.
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled main-footer__bottom__list">
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/photo-gallery') }}">Photo Gallery</a></li>
                        <li><a href="{{ url('/video-gallery') }}">Video Gallery</a></li>
                    </ul><!-- /.list-unstyled -->
                </div>
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->
</footer><!-- /.main-footer -->
</div><!-- /.page-wrapper -->
