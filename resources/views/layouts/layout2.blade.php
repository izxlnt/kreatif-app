<!DOCTYPE html>
<html lang="en">

<x-head css='{!! isset($css) ? $css : "" !!}'/>
<body class="{{ isset($bodyClass) ? $bodyClass . ' custom-cursor' : 'custom-cursor' }}">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">
        
        <x-headerStyleTwo/>

        <section class="page-header">
            <div class="page-header__bg"></div>
            <div class="page-header__shape"></div>
            <div class="page-header__shape-two"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="page-header__content">
                            <h2 class="page-header__title">{{ $title }}</h2>
                            <ul class="tolak-breadcrumb list-unstyled">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><span>{{ $subtitle }}</span></li>
                            </ul><!-- /.thm-breadcrumb list-unstyled -->
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="page-header__layer wow fadeInUp" data-wow-delay="100ms">
                            <img src="assets/images/backgrounds/page-banner-layer.png" alt="tolak">
                            <div class="page-header__layer__shape"></div>
                            <div class="page-header__layer__bg wow fadeInRight" data-wow-delay="200ms"></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.page-header -->


    @yield('content')
    

    <x-loader/>

   <x-scripts/>

</body>

</html>