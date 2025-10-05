<div class="topbar-two">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="tolak-stretch-element-inside-column">
                    <div class="topbar-two__left">
                        <div class="topbar-two__left__title">NEWS:</div>
                        <div class="topbar-two__carousel tolak-owl__carousel owl-carousel" data-owl-options='{
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
                                <p class="topbar-two__left__text">Best It-Solution Business !</p>
                            </div>
                            <div class="item">
                                <p class="topbar-two__left__text">Best It-Solution Business !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <ul class="topbar-two__links">
                    <li><a href="{{ url("login") }}">Login</a></li>
                    <li><a href="{{ url("contact") }}">Register</a></li>
                    <li><a href="{{ url("services") }}">Service</a></li>
                </ul><!-- /.topbar-two__links -->
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.topbar-two -->

<header class="main-header-two sticky-header sticky-header--normal">
    <div class="container">
        <div class="main-header-two__inner">
            <div class="main-header-two__inner__bg-one"></div>
            <div class="main-header-two__inner__bg-two" style="background-image: url(assets/images/backgrounds/header-bg.jpg);"></div>
            <div class="main-header-two__logo">
                <a href="{{ url("/") }}">
                    <img src="{{ asset("/assets/images/logo-light.png") }}" alt="Tolak HTML" width="184">
                </a>
            </div><!-- /.main-header-two__logo -->

            <nav class="main-header-two__nav main-menu">
            <x-menuList/>
            </nav><!-- /.main-header-two__nav -->
            <div class="main-header-two__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                <a href="{{ url("contact") }}" class="tolak-btn main-header-two__btn">
                    <b>Get A Quote</b><span></span>
                </a><!-- /.thm-btn main-header-two__btn -->
            </div><!-- /.main-header-two__right -->
        </div><!-- /.main-header-two__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header-two -->