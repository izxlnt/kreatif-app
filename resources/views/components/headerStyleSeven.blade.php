<header class="main-header-six sticky-header sticky-header--normal">
    <div class="container">
        <div class="main-header-six__inner">
            <div class="main-header-six__logo">
                <a href="{{ url("/") }}">
                    <img src="{{ asset("/assets/images/logo-5.png") }}" alt="Tolak HTML" width="186">
                </a>
            </div><!-- /.main-header-six__logo -->
            <nav class="main-header-six__nav main-menu">
            <x-menuList/>
            </nav><!-- /.main-header-six__nav -->
            <div class="main-header-six__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                <a href="{{ url("#") }}" class="search-toggler main-header-six__search">
                    <i class="icon-magnifying-glass" aria-hidden="true"></i>
                    <span class="sr-only">Search</span>
                </a><!-- /.search-toggler -->
                <a href="{{ url("contact") }}" class="tolak-btn-two main-header-six__btn">
                    <span class="tolak-btn-two__left-star"></span>
                    <span>Contact Us<i class="tolak-icons-two-arrow-right-short"></i></span>
                    <span class="tolak-btn-two__right-star"></span>
                </a><!-- /.thm-btn main-header-six__btn -->
            </div><!-- /.main-header-six__right -->
        </div><!-- /.main-header-six__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header-six -->