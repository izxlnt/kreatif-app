
@extends('layouts.layout2')
@section('title', 'Team Details || Tolak || Tolak Laravel Template')
@php
    $title = 'Team Details';
    $subtitle = 'Team Details';
@endphp
@section('content')

<x-strickyHeader/>

        <section class="team-details">
            <div class="container">
                <div class="team-details__inner">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="team-details__image">
                                <img src="{{ asset("/assets/images/team/team-d-1.jpg") }}" alt="tolak">
                            </div><!-- /.team-details__image -->
                        </div><!-- /.col-lg-5 -->
                        <div class="col-lg-7">
                            <div class="team-details__content">
                                <h3 class="team-details__title">Team Details:</h3><!-- /.team-details__title -->
                                <ul class="list-unstyled team-details__list">
                                    <li>Name : Ltaro Mera Basa</li>
                                    <li>
                                        About : Phis are bound to ensue; and equal blame belongs to those who
                                        through weakness of will, which is the same as through.We have the
                                        and industry expertise to develop solutions that can connect.
                                    </li>
                                    <li>Call: <a href="{{ url("tel:5544221556656") }}">++5544221556656</a></li>
                                    <li>
                                        Follow us:
                                        <div class="team-details__social">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-details__social -->
                                    </li>
                                </ul>
                            </div><!-- /.team-details__content -->
                        </div><!-- /.col-lg-7 -->
                    </div><!-- /.row -->
                </div><!-- /.team-details__inner -->
                <p class="team-details__text">
                    There are many variations of passages of Lorem Ipsum Fasts There are many variations of passages of Lorem Ipsum Fastsby we are the fast to
                    injected humour,by injected humour, or randomised coved ceilings. are bound to ensue; and equal blame belongs can to bo erwtg mont be
                    fao go not be hie best to those who through weakness .....
                </p>
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="team-details__progress">
                            <p class="team-details__progress__title">Medical Project</p>
                            <div class="team-details__progress__bar">
                                <div class="team-details__progress__inner count-bar" data-percent="70%"></div>
                                <div class="team-details__progress__number count-text">70%</div>
                            </div>
                        </div><!-- /.skills-item -->
                        <div class="team-details__progress">
                            <p class="team-details__progress__title">Medical Engineering</p>
                            <div class="team-details__progress__bar">
                                <div class="team-details__progress__inner count-bar" data-percent="88%"></div>
                                <div class="team-details__progress__number count-text">88%</div>
                            </div>
                        </div><!-- /.skills-item -->
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="team-details__progress">
                            <p class="team-details__progress__title">Team Support</p>
                            <div class="team-details__progress__bar">
                                <div class="team-details__progress__inner count-bar" data-percent="45%"></div>
                                <div class="team-details__progress__number count-text">45%</div>
                            </div>
                        </div><!-- /.skills-item -->
                        <div class="team-details__progress">
                            <p class="team-details__progress__title">Medicine of Health</p>
                            <div class="team-details__progress__bar">
                                <div class="team-details__progress__inner count-bar" data-percent="70%"></div>
                                <div class="team-details__progress__number count-text">70%</div>
                            </div>
                        </div><!-- /.skills-item -->
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.team-details -->

        <section class="funfact-two">
            <div class="container">
                <ul class="list-unstyled funfact-two__list">
                    <li class="funfact-two__item count-box">
                        <div class="funfact-two__icon"><i class="icon-briefing"></i></div><!-- /.funfact-two__icon -->
                        <div class="funfact-two__content">
                            <h3 class="funfact-two__count"><span class="count-text" data-stop="426" data-speed="1500"></span> k+</h3>
                            <!-- /.funfact-two__count -->
                            <p class="funfact-two__text">Completed Project</p><!-- /.funfact-two__text -->
                        </div><!-- /.funfact-two__content -->
                    </li><!-- /.funfact-two__item -->
                    <li class="funfact-two__item count-box">
                        <div class="funfact-two__icon"><i class="icon-ancestors"></i></div><!-- /.funfact-two__icon -->
                        <div class="funfact-two__content">
                            <h3 class="funfact-two__count"><span class="count-text" data-stop="1425" data-speed="1500"></span> +</h3>
                            <!-- /.funfact-two__count -->
                            <p class="funfact-two__text">Happy Clients</p><!-- /.funfact-two__text -->
                        </div><!-- /.funfact-two__content -->
                    </li><!-- /.funfact-two__item -->
                    <li class="funfact-two__item count-box">
                        <div class="funfact-two__icon"><i class="icon-admin"></i></div><!-- /.funfact-two__icon -->
                        <div class="funfact-two__content">
                            <h3 class="funfact-two__count"><span class="count-text" data-stop="750" data-speed="1500"></span> +</h3>
                            <!-- /.funfact-two__count -->
                            <p class="funfact-two__text">Business Partners</p><!-- /.funfact-two__text -->
                        </div><!-- /.funfact-two__content -->
                    </li><!-- /.funfact-two__item -->
                    <li class="funfact-two__item count-box">
                        <div class="funfact-two__icon"><i class="icon-trophy"></i></div><!-- /.funfact-two__icon -->
                        <div class="funfact-two__content">
                            <h3 class="funfact-two__count"><span class="count-text" data-stop="884" data-speed="1500"></span> k+</h3>
                            <!-- /.funfact-two__count -->
                            <p class="funfact-two__text">Award Win</p><!-- /.funfact-two__text -->
                        </div><!-- /.funfact-two__content -->
                    </li><!-- /.funfact-two__item -->
                </ul><!-- /.list-unstyled funfact-two__list -->
            </div><!-- /.container -->
        </section><!-- /.funfact-two -->

        <section class="team-one">
            <div class="container">
                <div class="sec-title-two text-center">
                    <h6 class="sec-title-two__tagline"><span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>Our Team Member<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6><!-- /.sec-title-two__tagline -->
                    <h3 class="sec-title-two__title">Meet The Team Metting Solution</h3><!-- /.sec-title-two__title -->
                </div><!-- /.sec-title-two -->
                <div class="team-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel" data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": false,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": false,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"768": {
					"items": 2,
					"margin": 30
				},
				"992": {
					"items": 3,
					"margin": 30
				}
			}
			}'>
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-1.jpg") }}" alt="Lorata Barsa">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Lorata Barsa</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-2.jpg") }}" alt="Moras Batas">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Moras Batas</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Manager</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-3.jpg") }}" alt="Korata Mana">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Korata Mana</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-4.jpg") }}" alt="Christine Eve">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Christine Eve</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-5.jpg") }}" alt="David Copers">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">David Copers</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Manager</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="team-card__image">
                                <img src="{{ asset("/assets/images/team/team-1-6.jpg") }}" alt="Kevin Martin">
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__hover">
                                    <div class="team-card__social">
                                        <i class="fa fa-plus"></i>
                                        <div class="team-card__social__list">
                                            <a href="https://facebook.com">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                <span class="sr-only">Facebook</span>
                                            </a>
                                            <a href="https://pinterest.com">
                                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                                <span class="sr-only">Pinterest</span>
                                            </a>
                                            <a href="https://twitter.com">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                                <span class="sr-only">Twitter</span>
                                            </a>
                                            <a href="https://instagram.com">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                                <span class="sr-only">Instagram</span>
                                            </a>
                                        </div><!-- /.team-card__social__list -->
                                    </div><!-- /.team-card__social -->
                                </div><!-- /.team-card__hover -->
                                <h3 class="team-card__title">
                                    <a href="{{ url("team-details") }}">Kevin Martin</a>
                                </h3><!-- /.team-card__title -->
                                <p class="team-card__designation">Founder</p><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-one -->

        <div class="client-carousel client-carousel--no-border">
            <div class="container">
                <div class="client-carousel__one tolak-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1
                },
                "360":{
                    "items":2
                },
                "575":{
                    "items":3
                },
                "768":{
                    "items":3
                },
                "992":{
                    "items": 4
                },
                "1200":{
                    "items": 5
                }
            }
            }'>
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img class="client-carousel__one__item__normal" src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="tolak">
                        <img class="client-carousel__one__item__hover" src="{{ asset("/assets/images/resources/brand-1-1-hover.png") }}" alt="tolak">
                    </div><!-- /.owl-slide-item-->
                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

        <section class="mail-section-two">
            <div class="container">
                <div class="mail-section-two__wrapper">
                    <div class="mail-section-two__bg" style="background-image: url(assets/images/shapes/mail-bg.png);"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mail-section-two__content">
                                <div class="mail-section-two__content__icon"><i class="icon-messages"></i></div>
                                <h3 class="mail-section-two__content__title">Subscribe To Our Newsletter</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form action="#" data-url="MAILCHIMP_FORM_URL" class="mail-section-two__newsletter mc-form">
                                <input type="text" name="EMAIL" placeholder="Enter your email">
                                <button type="submit" class="tolak-btn">
                                    <b>Subscribe</b><span></span>
                                    <span class="sr-only">Subscribe</span><!-- /.sr-only -->
                                </button>
                            </form><!-- /.footer-widget__newsletter mc-form -->
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

<x-footerTwo/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection