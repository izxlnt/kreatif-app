<div class="topbar-three">
    <div class="container">
        <div class="topbar-three__carousel tolak-owl__carousel owl-carousel" data-owl-options='{
    "loop": true,
    "animateOut": "slideOutDown",
    "animateIn": "flipInX",
    "items": 1,
    "autoplay": true,
    "autoplayTimeout": 6000,
    "smartSpeed": 1000,
    "nav": false,
    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
    "dots": false,
    "margin": 0
    }'>
            <div class="item">
                <p class="topbar-three__text">Wellcome To It-Solution !</p>
            </div>
            <div class="item">
                <p class="topbar-three__text">Best It-Solution Business !</p>
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.topbar-three -->

<header class="main-header-three sticky-header sticky-header--normal">
    <div class="container">
        <div class="main-header-three__inner">
            <div class="main-header-three__logo">
                <a href="{{ url("/") }}">
                    <img src="{{ asset("/assets/images/logo-light.png") }}" alt="Tolak HTML" width="184">
                </a>
            </div><!-- /.main-header-three__logo -->

            <nav class="main-header-three__nav main-menu">
            <x-menuList/>
            </nav><!-- /.main-header-three__nav -->
            <div class="main-header-three__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                <a href="{{ url("contact") }}" class="tolak-btn main-header-three__btn">
                    <b>Discover More</b><span></span>
                </a><!-- /.thm-btn main-header-three__btn -->
            </div><!-- /.main-header-three__right -->
        </div><!-- /.main-header-three__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header-three -->