<div class="topbar-one">
    <div class="container">
        <div class="topbar-one__inner">
            <ul class="list-unstyled topbar-one__info">
                <li class="topbar-one__info__item">
                    <i class="fas fa-envelope topbar-one__info__icon"></i>
                    <a href="mailto:demo@example.com">demo@example.com</a>
                </li>
                <li class="topbar-one__info__item">
                    <i class="fas fa-map-marker-alt topbar-one__info__icon"></i>
                    <a href="https://www.google.com/maps">27, Dhaka London City, LOT</a>
                </li>
            </ul><!-- /.list-unstyled topbar-one__info -->
            <ul class="topbar-one__links">
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/contact') }}">Register</a></li>
                <li><a href="{{ url('/services') }}">Service</a></li>
            </ul><!-- /.topbar-one__links -->
        </div><!-- /.topbar-one__inner -->
    </div><!-- /.container-fluid -->
</div><!-- /.topbar-one -->

<header class="main-header sticky-header sticky-header--normal">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo">
                <a href="{{ url('/') }}">
                    <img src="assets/images/logo-4.png" alt="Tolak HTML" width="184">
                </a>
            </div><!-- /.main-header__logo -->

            <nav class="main-header__nav main-menu">
            <x-menuList/>
            </nav><!-- /.main-header__nav -->
            <div class="main-header__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                <a href="#" class="search-toggler main-header__search">
                    <i class="icon-magnifying-glass" aria-hidden="true"></i>
                    <span class="sr-only">Search</span>
                </a><!-- /.search-toggler -->
                <a href="{{ url('cart') }}" class="main-header__cart">
                    <i class="icon-shopping-cart" aria-hidden="true"></i>
                    <span class="sr-only">Search</span>
                </a><!-- /.search-toggler -->
                <a href="#" class="main-header__toggler">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </a>
                <a href="{{ url('/contact') }}" class="tolak-btn main-header__btn">
                    <b>Discover More</b><span></span>
                </a><!-- /.thm-btn main-header__btn -->
            </div><!-- /.main-header__right -->
        </div><!-- /.main-header__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header -->
