<header class="main-header-four sticky-header sticky-header--one-page">
    <div class="container-fluid">
        <div class="main-header-four__inner">
            <div class="main-header-four__logo">
                <a href="{{ url("/") }}">
                    <img src="{{ asset("/assets/images/logo-dark.png") }}" alt="Tolak HTML" width="184">
                </a>
            </div><!-- /.main-header-four__logo -->

            <nav class="main-header-four__nav main-menu">
                <ul class="main-menu__list one-page-scroll-menu">
                    <li class="megamenu scrollToLink current"><a href="{{ url("#home") }}">Home</a></li>
                    <li class="scrollToLink"><a href="{{ url("#services") }}">Service</a></li>
                    <li class="scrollToLink"><a href="{{ url("#team") }}">Team</a></li>
                    <li class="scrollToLink"><a href="{{ url("#pricing") }}">Pricing</a></li>
                    <li class="scrollToLink"><a href="{{ url("#testimonial") }}">Testimonial</a></li>
                    <li class="scrollToLink"><a href="{{ url("#blog") }}">Blog</a></li>
                </ul>
            </nav><!-- /.main-header-four__nav -->
            <div class="main-header-four__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                <a href="{{ url("#") }}" class="search-toggler main-header-four__search">
                    <i class="icon-magnifying-glass" aria-hidden="true"></i>
                    <span class="sr-only">Search</span>
                </a><!-- /.search-toggler -->
                <a href="{{ url("cart") }}" class="main-header-four__cart">
                    <i class="icon-shopping-cart" aria-hidden="true"></i>
                    <span class="main-header-four__cart__count">02</span>
                    <span class="sr-only">Search</span>
                </a><!-- /.search-toggler -->
                <a class="main-header-four__call" href="{{ url("tel:25844132") }}">
                    <span class="main-header-four__call__icon"><i class="icofont-phone-circle"></i></span>
                    <span class="main-header-four__call__content">
                        <span class="main-header-four__call__text">Need Help Now?</span><!-- /.main-header__call__text -->
                        <span class="main-header-four__call__number">++(25)844132</span><!-- /.main-header__call__number -->
                    </span><!-- /.main-header__call__content -->
                </a>
                <a href="{{ url("#") }}" class="main-header-four__toggler">
                    <div class="main-header-four__toggler__wrapper">
                        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                    </div>
                </a>
            </div><!-- /.main-header-four__right -->
        </div><!-- /.main-header-four__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header-four -->