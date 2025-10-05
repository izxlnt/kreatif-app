
@extends('layouts.layout2')
@section('title', 'Blog Grid Right || Tolak || Tolak Laravel Template')
@php
    $title = 'Our News';
    $subtitle = 'News Grid Right Sidebar';
@endphp
@section('content')

<x-strickyHeader/>

<section class="blog-three">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-8">
                <div class="row gutter-y-30">
                    <div class="col-md-6">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card-three__image">
                                <img src="{{ asset("/assets/images/blog/blog-3-1.png") }}" alt="Solution This Business For is Marketing Blog">
                                <img src="{{ asset("/assets/images/blog/blog-3-1.png") }}" alt="Solution This Business For is Marketing Blog">
                                <div class="blog-card-three__date">
                                    <span>15</span>
                                    Jun
                                    <div class="blog-card-three__date__year">2023</div>
                                </div><!-- /.blog-card-three__date -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card-three__image__link"><i class="icon-right-arrow"></i><span class="sr-only">Solution This Business For is Marketing Blog</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card-three__image -->
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url("blog-details-right") }}">Solution This Business For is Marketing Blog</a></h3><!-- /.blog-card-three__title -->
                                <p class="blog-card-three__text">We business standard chunk ofI nibh vitae molestie id sed exthe.</p><!-- /.blog-card-three__text -->
                                <div class="blog-card-three__meta">
                                    <div class="blog-card-three__meta__author">
                                        <img src="{{ asset("/assets/images/blog/blog-2-author.png") }}" alt="tolak">Admin:<a href="{{ url("blog-details-right") }}">Mera</a>
                                    </div>
                                    <div class="blog-card-three__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                            </div><!-- /.blog-card-three__content -->
                        </div><!-- /.blog-card-three -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="blog-card-three__image">
                                <img src="{{ asset("/assets/images/blog/blog-3-2.png") }}" alt="Business Rules of Running to Web Solution">
                                <img src="{{ asset("/assets/images/blog/blog-3-2.png") }}" alt="Business Rules of Running to Web Solution">
                                <div class="blog-card-three__date">
                                    <span>19</span>
                                    Jun
                                    <div class="blog-card-three__date__year">2023</div>
                                </div><!-- /.blog-card-three__date -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card-three__image__link"><i class="icon-right-arrow"></i><span class="sr-only">Business Rules of Running to Web Solution</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card-three__image -->
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url("blog-details-right") }}">Business Rules of Running to Web Solution</a></h3><!-- /.blog-card-three__title -->
                                <p class="blog-card-three__text">We business standard chunk ofI nibh vitae molestie id sed exthe.</p><!-- /.blog-card-three__text -->
                                <div class="blog-card-three__meta">
                                    <div class="blog-card-three__meta__author">
                                        <img src="{{ asset("/assets/images/blog/blog-2-author.png") }}" alt="tolak">Admin:<a href="{{ url("blog-details-right") }}">Mera</a>
                                    </div>
                                    <div class="blog-card-three__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                            </div><!-- /.blog-card-three__content -->
                        </div><!-- /.blog-card-three -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="blog-card-three__image">
                                <img src="{{ asset("/assets/images/blog/blog-3-3.png") }}" alt="We Should be Descriptive This Business">
                                <img src="{{ asset("/assets/images/blog/blog-3-3.png") }}" alt="We Should be Descriptive This Business">
                                <div class="blog-card-three__date">
                                    <span>29</span>
                                    Jun
                                    <div class="blog-card-three__date__year">2023</div>
                                </div><!-- /.blog-card-three__date -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card-three__image__link"><i class="icon-right-arrow"></i><span class="sr-only">We Should be Descriptive This Business</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card-three__image -->
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url("blog-details-right") }}">We Should be Descriptive This Business</a></h3><!-- /.blog-card-three__title -->
                                <p class="blog-card-three__text">We business standard chunk ofI nibh vitae molestie id sed exthe.</p><!-- /.blog-card-three__text -->
                                <div class="blog-card-three__meta">
                                    <div class="blog-card-three__meta__author">
                                        <img src="{{ asset("/assets/images/blog/blog-2-author.png") }}" alt="tolak">Admin:<a href="{{ url("blog-details-right") }}">Mera</a>
                                    </div>
                                    <div class="blog-card-three__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                            </div><!-- /.blog-card-three__content -->
                        </div><!-- /.blog-card-three -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="blog-card-three__image">
                                <img src="{{ asset("/assets/images/blog/blog-3-4.png") }}" alt="We Are Business For is call Marketing Blog">
                                <img src="{{ asset("/assets/images/blog/blog-3-4.png") }}" alt="We Are Business For is call Marketing Blog">
                                <div class="blog-card-three__date">
                                    <span>15</span>
                                    Jun
                                    <div class="blog-card-three__date__year">2023</div>
                                </div><!-- /.blog-card-three__date -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card-three__image__link"><i class="icon-right-arrow"></i><span class="sr-only">We Are Business For is call Marketing Blog</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card-three__image -->
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url("blog-details-right") }}">We Are Business For is call Marketing Blog</a></h3><!-- /.blog-card-three__title -->
                                <p class="blog-card-three__text">We business standard chunk ofI nibh vitae molestie id sed exthe.</p><!-- /.blog-card-three__text -->
                                <div class="blog-card-three__meta">
                                    <div class="blog-card-three__meta__author">
                                        <img src="{{ asset("/assets/images/blog/blog-2-author.png") }}" alt="tolak">Admin:<a href="{{ url("blog-details-right") }}">Mera</a>
                                    </div>
                                    <div class="blog-card-three__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                            </div><!-- /.blog-card-three__content -->
                        </div><!-- /.blog-card-three -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                            <div class="blog-card-three__image">
                                <img src="{{ asset("/assets/images/blog/blog-3-5.png") }}" alt="Business Shold Descriptive Solution Blog">
                                <img src="{{ asset("/assets/images/blog/blog-3-5.png") }}" alt="Business Shold Descriptive Solution Blog">
                                <div class="blog-card-three__date">
                                    <span>19</span>
                                    Jun
                                    <div class="blog-card-three__date__year">2023</div>
                                </div><!-- /.blog-card-three__date -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card-three__image__link"><i class="icon-right-arrow"></i><span class="sr-only">Business Shold Descriptive Solution Blog</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card-three__image -->
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url("blog-details-right") }}">Business Shold Descriptive Solution Blog</a></h3><!-- /.blog-card-three__title -->
                                <p class="blog-card-three__text">We business standard chunk ofI nibh vitae molestie id sed exthe.</p><!-- /.blog-card-three__text -->
                                <div class="blog-card-three__meta">
                                    <div class="blog-card-three__meta__author">
                                        <img src="{{ asset("/assets/images/blog/blog-2-author.png") }}" alt="tolak">Admin:<a href="{{ url("blog-details-right") }}">Mera</a>
                                    </div>
                                    <div class="blog-card-three__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                            </div><!-- /.blog-card-three__content -->
                        </div><!-- /.blog-card-three -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="blog-card-three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="blog-card-three__image">
                                <img src="{{ asset("/assets/images/blog/blog-3-6.png") }}" alt="Marketing Business Peratan This Business">
                                <img src="{{ asset("/assets/images/blog/blog-3-6.png") }}" alt="Marketing Business Peratan This Business">
                                <div class="blog-card-three__date">
                                    <span>29</span>
                                    Jun
                                    <div class="blog-card-three__date__year">2023</div>
                                </div><!-- /.blog-card-three__date -->
                                <a href="{{ url("blog-details-right") }}" class="blog-card-three__image__link"><i class="icon-right-arrow"></i><span class="sr-only">Marketing Business Peratan This Business</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card-three__image -->
                            <div class="blog-card-three__content">
                                <h3 class="blog-card-three__title"><a href="{{ url("blog-details-right") }}">Marketing Business Peratan This Business</a></h3><!-- /.blog-card-three__title -->
                                <p class="blog-card-three__text">We business standard chunk ofI nibh vitae molestie id sed exthe.</p><!-- /.blog-card-three__text -->
                                <div class="blog-card-three__meta">
                                    <div class="blog-card-three__meta__author">
                                        <img src="{{ asset("/assets/images/blog/blog-2-author.png") }}" alt="tolak">Admin:<a href="{{ url("blog-details-right") }}">Mera</a>
                                    </div>
                                    <div class="blog-card-three__meta__comments">
                                        <i class="icofont-speech-comments"></i>Comments (04)
                                    </div>
                                </div>
                            </div><!-- /.blog-card-three__content -->
                        </div><!-- /.blog-card-three -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <aside class="widget-area">
                        <div class="sidebar__single sidebar__single--search">
                            <form action="#" class="sidebar__search">
                                <input type="text" placeholder="Search Here..." />
                                <button type="submit" aria-label="search submit">
                                    <span><i class="icofont-search-2"></i></span>
                                </button>
                            </form><!-- /.sidebar__search -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h4 class="sidebar__title">Categories</h4><!-- /.sidebar__title -->
                            <ul class="sidebar__categories list-unstyled">
                                <li><a href="{{ url("blog-grid") }}">Business</a>(08)</li>
                                <li><a href="{{ url("blog-grid") }}">Ui/Ux Design</a>(14)</li>
                                <li><a href="{{ url("blog-grid") }}">Professional</a>(12)</li>
                                <li><a href="{{ url("blog-grid") }}">Technology</a>(23)</li>
                                <li><a href="{{ url("blog-grid") }}">Development</a>(17)</li>
                                <li><a href="{{ url("blog-grid") }}">Web Design</a>(22)</li>
                            </ul><!-- /.sidebar__categories list-unstyled -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single sidebar__single--tags">
                            <h4 class="sidebar__title">Tags</h4><!-- /.sidebar__title -->
                            <div class="sidebar__tags">
                                <a href="{{ url("blog-grid") }}">Design</a>
                                <a href="{{ url("blog-grid") }}">Service</a>
                                <a href="{{ url("blog-grid") }}">Top</a>
                                <a href="{{ url("blog-grid") }}">Help</a>
                                <a href="{{ url("blog-grid") }}">New</a>
                                <a href="{{ url("blog-grid") }}">Best</a>
                                <a href="{{ url("blog-grid") }}">Beauty</a>
                                <a href="{{ url("blog-grid") }}">Sounds</a>
                            </div><!-- /.sidebar__tags -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h4 class="sidebar__title">Recent Post</h4><!-- /.sidebar__title -->
                            <ul class="sidebar__posts list-unstyled">
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="{{ asset("/assets/images/blog/lp-1-3.jpg") }}" alt="tolak">
                                    </div><!-- /.sidebar__posts__image -->
                                    <div class="sidebar__posts__content">
                                        <p class="sidebar__posts__meta"><i class="icofont-calendar"></i>Aug 10, 2023</p><!-- /.sidebar__posts__date -->
                                        <h4 class="sidebar__posts__title"><a href="{{ url("blog-details-right") }}">We play chimney pot Chip bonne.</a></h4><!-- /.sidebar__posts__title -->
                                    </div><!-- /.sidebar__posts__content -->
                                </li>
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="{{ asset("/assets/images/blog/lp-1-4.jpg") }}" alt="tolak">
                                    </div><!-- /.sidebar__posts__image -->
                                    <div class="sidebar__posts__content">
                                        <p class="sidebar__posts__meta"><i class="icofont-calendar"></i>Aug 10, 2023</p><!-- /.sidebar__posts__date -->
                                        <h4 class="sidebar__posts__title"><a href="{{ url("blog-details-right") }}">Get deep knowledge your beauty</a></h4><!-- /.sidebar__posts__title -->
                                    </div><!-- /.sidebar__posts__content -->
                                </li>
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="{{ asset("/assets/images/blog/lp-1-5.jpg") }}" alt="tolak">
                                    </div><!-- /.sidebar__posts__image -->
                                    <div class="sidebar__posts__content">
                                        <p class="sidebar__posts__meta"><i class="icofont-calendar"></i>Aug 10, 2023</p><!-- /.sidebar__posts__date -->
                                        <h4 class="sidebar__posts__title"><a href="{{ url("blog-details-right") }}">We round solution of york blog</a></h4><!-- /.sidebar__posts__title -->
                                    </div><!-- /.sidebar__posts__content -->
                                </li>
                            </ul><!-- /.sidebar__posts list-unstyled -->
                        </div><!-- /.sidebar__single -->
                    </aside><!-- /.widget-area -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-one blog-one--page -->

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