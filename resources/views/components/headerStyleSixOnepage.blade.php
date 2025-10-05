<div class="topbar-five">
    <div class="container">
        <div class="topbar-five__inner">
            <div class="topbar-five__info">
                <div class="topbar-five__info__icon"><i class="tolak-icons-two-phone-call"></i></div>
                Emergency Call: <a href="{{ url("tel:+952512251425") }}">+95 2512 2514 25</a>
            </div><!-- /.topbar-five__info -->
            <div class="topbar-five__right">
                <ul class="topbar-five__links">
                    <li><a href="{{ url("login") }}">Login</a></li>
                    <li><a href="{{ url("contact") }}">Register</a></li>
                </ul><!-- /.topbar-five__links -->
                <div class="topbar-five__language">
                    <a href="{{ url("#") }}"><img src="{{ asset("/assets/images/shapes/flag.png") }}" alt="tolak" />English</a>
                    <div class="topbar-five__language__dropdown">
                        <a href="{{ url("#") }}"><img src="{{ asset("/assets/images/shapes/flag.png") }}" alt="tolak" />English</a>
                        <a href="{{ url("#") }}"><img src="{{ asset("/assets/images/shapes/flag-two.png") }}" alt="tolak" />French</a>
                    </div>
                </div><!-- / topbar-five__language -->
            </div><!-- topbar-five__right -->
        </div><!-- /.topbar-five__inner -->
    </div><!-- /.container -->
</div><!-- /.topbar-five -->

<header class="main-header-five sticky-header sticky-header--one-page">
    <div class="container">
        <div class="main-header-five__inner">
            <div class="main-header-five__logo">
                <a href="{{ url("/") }}">
                    <img src="{{ asset("/assets/images/logo-3.png") }}" alt="Tolak HTML" width="186">
                </a>
            </div><!-- /.main-header-five__logo -->
            <nav class="main-header-five__nav main-menu">
                <ul class="main-menu__list one-page-scroll-menu">
                    <li class="megamenu scrollToLink current"><a href="{{ url("#home") }}">Home</a></li>
                    <li class="scrollToLink"><a href="{{ url("#about") }}">About</a></li>
                    <li class="scrollToLink"><a href="{{ url("#services") }}">Service</a></li>
                    <li class="scrollToLink"><a href="{{ url("#project") }}">Project</a></li>
                    <li class="scrollToLink"><a href="{{ url("#team") }}">Team</a></li>
                    <li class="scrollToLink"><a href="{{ url("#testimonial") }}">Testimonial</a></li>
                    <li class="scrollToLink"><a href="{{ url("#blog") }}">Blog</a></li>
                </ul>
            </nav><!-- /.main-header-five__nav -->
            <div class="main-header-five__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                <a href="{{ url("#") }}" class="search-toggler main-header-five__search">
                    <i class="icon-magnifying-glass" aria-hidden="true"></i>
                    <span class="sr-only">Search</span>
                </a><!-- /.search-toggler -->
                <a href="{{ url("contact") }}" class="tolak-btn-two main-header-five__btn">
                    <span class="tolak-btn-two__left-star"></span>
                    <span>Contact Us<i class="tolak-icons-two-arrow-right-short"></i></span>
                    <span class="tolak-btn-two__right-star"></span>
                </a><!-- /.thm-btn main-header-five__btn -->
            </div><!-- /.main-header-five__right -->
        </div><!-- /.main-header-five__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header-five -->