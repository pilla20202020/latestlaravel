<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
        <meta name="author" content="DynamicLayers">

        <title>SERAP LEE FOUNDATION</title>

		<link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/assets/images/logo.jfif')}}">

        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
        <!-- Elegant Font Icons CSS -->
        <link rel="stylesheet" href="{{ asset('css/elegant-font-icons.css') }}">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="{{ asset('css/elegant-line-icons.css') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{ asset('css/venobox/venobox.css') }}">
        <!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <!-- Slick Nav CSS -->
        <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
        <!-- Css Animation CSS -->
        <link rel="stylesheet" href="{{ asset('css/css-animation.min.css') }}">
        <!-- Nivo Slider CSS -->
        <link rel="stylesheet" href="{{ asset('css/nivo-slider.css') }}">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">



        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
<body>

<!-- LOADER -->
<div id="preloader">
    <span class="spinner"></span>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- END LOADER -->

@include('frontend.layouts.partials.header')

    @yield('content')

  @include('frontend.layouts.partials.footer')

  <a data-scroll href="#header" id="scroll-to-top"><i class="ti-angle-double-up"></i></a>

<!-- ALL JS FILES -->
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<!-- Tether JS -->
<script src="{{ asset('js/vendor/tether.min.js') }}"></script>
<!-- Imagesloaded JS -->
<script src="{{ asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<!-- OWL-Carousel JS -->
<script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
<!-- isotope JS -->
<script src="{{ asset('js/vendor/jquery.isotope.v3.0.2.js') }}"></script>
<!-- Smooth Scroll JS -->
<script src="{{ asset('js/vendor/smooth-scroll.min.js') }}"></script>
<!-- venobox JS -->
<script src="{{ asset('js/vendor/venobox.min.js') }}"></script>
<!-- ajaxchimp JS -->
<script src="{{ asset('js/vendor/jquery.ajaxchimp.min.js') }}"></script>
<!-- Counterup JS -->
<script src="{{ asset('js/vendor/jquery.counterup.min.js') }}"></script>
<!-- waypoints JS -->
<script src="{{ asset('js/vendor/jquery.waypoints.v2.0.3.min.js') }}"></script>
<!-- Slick Nav JS -->
<script src="{{ asset('js/vendor/jquery.slicknav.min.js') }}"></script>
<!-- Nivo Slider JS -->
<script src="{{ asset('js/vendor/jquery.nivo.slider.pack.js') }}"></script>
<!-- Letter Animation JS -->
<script src="{{ asset('js/vendor/letteranimation.min.js') }}"></script>
<!-- Wow JS -->
<script src="{{ asset('js/vendor/wow.min.js') }}"></script>
<!-- Contact JS -->
<script src="{{ asset('js/contact.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('js/main.js') }}"></script>


@stack('scripts')


</body>


</html>

