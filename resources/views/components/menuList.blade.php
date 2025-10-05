<ul class="main-menu__list">

    {{-- <li class="megamenu megamenu-clickable megamenu-clickable--toggler {{ Request::is('/') || Request::is('index-*') ? 'current' : '' }}">
        <a href="{{ url('/') }}">Demos</a>
        <ul>
            <li>
                <div class="megamenu-popup">
                    <a href="#" class="megamenu-clickable--close"><span class="icon-close"></span></a>
                    <!-- /.megamenu-clickable--close -->
                    <div class="megamenu-popup__content">
                        <div class="demo-one">
                            <div class="container">
                                <div class="row">
                                    <!-- Home Page 05 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-5.jpg" alt="tolak">
                                                <span class="demo-one__image__new">New</span>
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('/index-5') }}" class="tolak-btn demo-one__btn {{ Request::is('index-5') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('/index-5-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-5-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('/index-5') }}" class="{{ Request::is('index-5') ? 'current' : '' }}">Home Page 05</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Page 06 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-6.jpg" alt="tolak">
                                                <span class="demo-one__image__new">New</span>
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('/index-6') }}" class="tolak-btn demo-one__btn {{ Request::is('index-6') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('/index-6-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-6-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('/index-6') }}" class="{{ Request::is('index-6') ? 'current' : '' }}">Home Page 06</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Page 07 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-7.jpg" alt="tolak">
                                                <span class="demo-one__image__new">New</span>
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('/index-7') }}" class="tolak-btn demo-one__btn {{ Request::is('index-7') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('/index-7-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-7-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('/index-7') }}" class="{{ Request::is('index-7') ? 'current' : '' }}">Home Page 07</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Page 01 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-1.jpg" alt="tolak">
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('/') }}" class="tolak-btn demo-one__btn {{ Request::is('/') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('/index-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('/index-dark') }}" class="tolak-btn demo-one__btn {{ Request::is('index-dark') ? 'current' : '' }}">
                                                        <b>Dark Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'current' : '' }}">Home Page 01</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Page 02 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-2.jpg" alt="tolak">
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('index-2') }}" class="tolak-btn demo-one__btn {{ Request::is('index-2') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('index-2-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-2-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('index-2-dark') }}" class="tolak-btn demo-one__btn {{ Request::is('index-2-dark') ? 'current' : '' }}">
                                                        <b>Dark Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('index-2') }}" class="{{ Request::is('index-2') ? 'current' : '' }}">Home Page 02</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Page 03 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-3.jpg" alt="tolak">
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('index-3') }}" class="tolak-btn demo-one__btn {{ Request::is('index-3') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('index-3-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-3-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('index-3-dark') }}" class="tolak-btn demo-one__btn {{ Request::is('index-3-dark') ? 'current' : '' }}">
                                                        <b>Dark Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('index-3') }}" class="{{ Request::is('index-3') ? 'current' : '' }}">Home Page 03</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Page 04 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-4.jpg" alt="tolak">
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('index-4') }}" class="tolak-btn demo-one__btn {{ Request::is('index-4') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('index-4-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-4-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('index-4-dark') }}" class="tolak-btn demo-one__btn {{ Request::is('index-4-dark') ? 'current' : '' }}">
                                                        <b>Dark Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('index-4') }}" class="{{ Request::is('index-4') ? 'current' : '' }}">Home Page 04</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Boxed -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-boxed.jpg" alt="tolak">
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('index-boxed') }}" class="tolak-btn demo-one__btn {{ Request::is('index-boxed') ? 'current' : '' }}">
                                                        <b>View Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('index-boxed') }}" class="{{ Request::is('index-boxed') ? 'current' : '' }}">Home Boxed</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home RTL -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-rtl.jpg" alt="tolak">
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('index-rtl') }}#googtrans(en|ar)" class="tolak-btn demo-one__btn {{ Request::is('index-rtl') ? 'current' : '' }}">
                                                        <b>View Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('index-rtl') }}#googtrans(en|ar)" class="{{ Request::is('index-rtl') ? 'current' : '' }}">Home RTL</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </div><!-- /.demos-one -->
                    </div><!-- /.megamenu-popup__content -->
                </div><!-- /.megamenu-popup -->
            </li>
        </ul>
    </li> --}}

    <li class="{{ Request::is('/') ? 'current' : '' }}">
        <a href="{{ url('home') }}">Home</a>
    </li>
    <li class="{{ Request::is('about') ? 'current' : '' }}">
        <a href="{{ url('about') }}">About</a>
    </li>

    <li class="dropdown {{ Request::is('project*') || Request::is('team*') || Request::is('reviews*') || Request::is('packages*') || Request::is('gallery*') || Request::is('faq') || Request::is('login') || Request::is('404') ? 'current' : '' }}">
        <a href="#">Pages</a>
        <ul>
            <li class="{{ Request::is('project') ? 'current' : '' }}">
                <a href="{{ url('project') }}">Our Project</a>
                <ul>
                    <li class="{{ Request::is('project') ? 'current' : '' }}"><a href="{{ url('project') }}">Project Page</a></li>
                    <li class="{{ Request::is('project-carousel') ? 'current' : '' }}"><a href="{{ url('project-carousel') }}">Project Carousel</a></li>
                    <li class="{{ Request::is('project-details') ? 'current' : '' }}"><a href="{{ url('project-details') }}">Project Details</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('team') ? 'current' : '' }}"><a href="{{ url('team') }}">Our Team</a></li>
            <li class="{{ Request::is('team-carousel') ? 'current' : '' }}"><a href="{{ url('team-carousel') }}">Team Carousel</a></li>
            <li class="{{ Request::is('team-details') ? 'current' : '' }}"><a href="{{ url('team-details') }}">Team Details</a></li>
            <li class="{{ Request::is('reviews') ? 'current' : '' }}"><a href="{{ url('reviews') }}">Testimonial</a></li>
            <li class="{{ Request::is('reviews-carousel') ? 'current' : '' }}"><a href="{{ url('reviews-carousel') }}">Testimonial Carousel</a></li>
            <li class="{{ Request::is('packages') ? 'current' : '' }}"><a href="{{ url('packages') }}">Pricing Page</a></li>
            <li class="{{ Request::is('packages-carousel') ? 'current' : '' }}"><a href="{{ url('packages-carousel') }}">Pricing Carousel</a></li>
            <li class="{{ Request::is('gallery*') ? 'current' : '' }}">
                <a href="{{ url('gallery') }}">Gallery</a>
                <ul>
                    <li class="{{ Request::is('gallery') ? 'current' : '' }}"><a href="{{ url('gallery') }}">Gallery Masonry</a></li>
                    <li class="{{ Request::is('gallery-filter') ? 'current' : '' }}"><a href="{{ url('gallery-filter') }}">Gallery Filter</a></li>
                    <li class="{{ Request::is('gallery-grid') ? 'current' : '' }}"><a href="{{ url('gallery-grid') }}">Gallery Grid</a></li>
                    <li class="{{ Request::is('gallery-carousel') ? 'current' : '' }}"><a href="{{ url('gallery-carousel') }}">Gallery Carousel</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('faq') ? 'current' : '' }}"><a href="{{ url('faq') }}">FAQs</a></li>
            <li class="{{ Request::is('login') ? 'current' : '' }}"><a href="{{ url('/login') }}">Login</a></li>
            <li class="{{ Request::is('404') ? 'current' : '' }}"><a href="{{ url('404') }}">404 Error</a></li>
        </ul>
    </li>

    <li class="dropdown {{ Request::is('services*') ? 'current' : '' }}">
        <a href="#">Services</a>
        <ul>
            <li class="{{ Request::is('services') ? 'current' : '' }}"><a href="{{ url('/services') }}">Services One</a></li>
            <li class="{{ Request::is('services-carousel') ? 'current' : '' }}"><a href="{{ url('services-carousel') }}">Services One Carousel</a></li>
            <li class="{{ Request::is('services-two') ? 'current' : '' }}"><a href="{{ url('services-two') }}">Services Two</a></li>
            <li class="{{ Request::is('services-two-carousel') ? 'current' : '' }}"><a href="{{ url('services-two-carousel') }}">Services Two Carousel</a></li>
            <li class="{{ Request::is('business-growth') ? 'current' : '' }}"><a href="{{ url('business-growth') }}">Business of Growth</a></li>
            <li class="{{ Request::is('business-solution') ? 'current' : '' }}"><a href="{{ url('business-solution') }}">Solution to Business</a></li>
            <li class="{{ Request::is('marketing-solution') ? 'current' : '' }}"><a href="{{ url('marketing-solution') }}">Markting of Solution</a></li>
            <li class="{{ Request::is('technology-services') ? 'current' : '' }}"><a href="{{ url('technology-services') }}">Technology Services</a></li>
            <li class="{{ Request::is('business-marketing') ? 'current' : '' }}"><a href="{{ url('business-marketing') }}">Marketing Business</a></li>
            <li class="{{ Request::is('business-support') ? 'current' : '' }}"><a href="{{ url('business-support') }}">Support of Business</a></li>
        </ul>
    </li>

    <li class="dropdown {{ Request::is('shop*') || Request::is('products*') || Request::is('cart') || Request::is('checkout') ? 'current' : '' }}">
        <a href="#">Shop</a>
        <ul class="sub-menu">
            <li class="dropdown {{ Request::is('products*') ? 'current' : '' }}">
                <a href="#">Products</a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('products') ? 'current' : '' }}"><a href="{{ url('products') }}">No Sidebar</a></li>
                    <li class="{{ Request::is('products-left') ? 'current' : '' }}"><a href="{{ url('products-left') }}">Left Sidebar</a></li>
                    <li class="{{ Request::is('products-right') ? 'current' : '' }}"><a href="{{ url('products-right') }}">Right Sidebar</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('products-carousel') ? 'current' : '' }}"><a href="{{ url('products-carousel') }}">Products Carousel</a></li>
            <li class="{{ Request::is('product-details') ? 'current' : '' }}"><a href="{{ url('product-details') }}">Product Details</a></li>
            <li class="{{ Request::is('cart') ? 'current' : '' }}"><a href="{{ url('cart') }}">Cart</a></li>
            <li class="{{ Request::is('checkout') ? 'current' : '' }}"><a href="{{ url('checkout') }}">Checkout</a></li>
        </ul>
    </li>

    <li class="dropdown {{ Request::is('blog*') ? 'current' : '' }}">
        <a href="#">News</a>
        <ul class="sub-menu">
            <li class="dropdown {{ Request::is('blog-grid*') ? 'current' : '' }}">
                <a href="#">News Grid</a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('blog-grid') ? 'current' : '' }}"><a href="{{ url('blog-grid') }}">No Sidebar</a></li>
                    <li class="{{ Request::is('blog-grid-left') ? 'current' : '' }}"><a href="{{ url('blog-grid-left') }}">Left Sidebar</a></li>
                    <li class="{{ Request::is('blog-grid-right') ? 'current' : '' }}"><a href="{{ url('blog-grid-right') }}">Right Sidebar</a></li>
                </ul>
            </li>
            <li class="dropdown {{ Request::is('blog-list*') ? 'current' : '' }}">
                <a href="#">News List</a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('blog-list') ? 'current' : '' }}"><a href="{{ url('blog-list') }}">No Sidebar</a></li>
                    <li class="{{ Request::is('blog-list-left') ? 'current' : '' }}"><a href="{{ url('blog-list-left') }}">Left Sidebar</a></li>
                    <li class="{{ Request::is('blog-list-right') ? 'current' : '' }}"><a href="{{ url('blog-list-right') }}">Right Sidebar</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('blog-carousel') ? 'current' : '' }}"><a href="{{ url('blog-carousel') }}">News Carousel</a></li>
            <li class="dropdown {{ Request::is('blog-details*') ? 'current' : '' }}">
                <a href="#">News Details</a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('blog-details') ? 'current' : '' }}"><a href="{{ url('blog-details') }}">No Sidebar</a></li>
                    <li class="{{ Request::is('blog-details-left') ? 'current' : '' }}"><a href="{{ url('blog-details-left') }}">Left Sidebar</a></li>
                    <li class="{{ Request::is('blog-details-right') ? 'current' : '' }}"><a href="{{ url('blog-details-right') }}">Right Sidebar</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li class="{{ Request::is('contact') ? 'current' : '' }}">
        <a href="{{ url('/contact') }}">Contact</a>
    </li>
    
    <li class="dropdown language-selector">
        <a href="#">
            <i class="fa fa-globe"></i> <span class="current-lang"> &nbsp; {{ strtoupper(app()->getLocale()) }}</span>
            
        </a>
        <ul>
            <li class="{{ app()->getLocale() == 'ms' ? 'current' : '' }}">
                <a href="{{ route('language.switch', ['locale' => 'ms']) }}">
                    <span class="flag-emoji">🇲🇾</span>&nbsp;
                    <span>{{ __('common.malay') }}</span>
                </a>
            </li>
            <li class="{{ app()->getLocale() == 'en' ? 'current' : '' }}">
                <a href="{{ route('language.switch', ['locale' => 'en']) }}">
                    <span class="flag-emoji">🇬🇧</span> &nbsp;
                    <span>{{ __('common.english') }}</span>
                </a>
            </li>
        </ul>
    </li>
    
    
</ul>