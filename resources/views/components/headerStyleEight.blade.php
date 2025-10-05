<header class="main-header-seven sticky-header sticky-header--normal">
    <div class="container">
        <div class="main-header-seven__inner">
            <div class="main-header-seven__logo">
                <a href="{{ url("/") }}">
                    <img src="{{ asset("/assets/images/logo-6.png") }}" alt="Tolak HTML" width="186">
                </a>
            </div><!-- /.main-header-seven__logo -->
            <nav class="main-header-seven__nav main-menu">
            <x-menuList/>
            </nav><!-- /.main-header-seven__nav -->
            <div class="main-header-seven__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                <a href="{{ url("#") }}" class="search-toggler main-header-seven__search">
                    <i class="icon-magnifying-glass" aria-hidden="true"></i>
                    <span class="sr-only">Search</span>
                </a><!-- /.search-toggler -->
                <a href="{{ url("contact") }}" class="tolak-btn-two tolak-btn-two--home-seven main-header-seven__btn">
                    <span class="tolak-btn-two__left-star"></span>
                    <span>Contact Us<i class="tolak-icons-two-arrow-right-short"></i></span>
                    <span class="tolak-btn-two__right-star"></span>
                </a><!-- /.thm-btn main-header-seven__btn -->
            </div><!-- /.main-header-seven__right -->
        </div><!-- /.main-header-seven__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header-seven -->