<header class="main-header-inner sticky-header sticky-header--normal">
    <div class="container">
        <div class="main-header-inner__inner">
            <div class="main-header-inner__logo">
                <a href="{{ url('/') }}">
                    <img src="assets/images/logo-light.png" alt="Tolak HTML" width="184">
                </a>
            </div><!-- /.main-header-inner__logo -->

            <nav class="main-header-inner__nav main-menu">
                <x-menuList/>
            </nav><!-- /.main-header-inner__nav -->
            <div class="main-header-inner__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                <a href="#" class="search-toggler main-header-inner__search">
                    <i class="icon-magnifying-glass"></i>
                </a><!-- /.search-toggler -->
                <a href="{{ url('/contact') }}" class="tolak-btn main-header-inner__btn">
                    <b>Discover More</b><span></span>
                </a><!-- /.thm-btn main-header-inner__btn -->
            </div><!-- /.main-header-inner__right -->
        </div><!-- /.main-header-inner__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header-inner -->