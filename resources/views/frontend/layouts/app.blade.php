<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Live Dinner Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/classic.css') }}">    
    <link rel="stylesheet" href="{{ asset('assets/css/classic.date.css') }}">    
    <link rel="stylesheet" href="{{ asset('assets/css/classic.time.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


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

  <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

<!-- ALL JS FILES -->
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <!-- ALL PLUGINS -->
<script src="{{ asset('assets/js/jquery.superslides.min.js') }}"></script>
<script src="{{ asset('assets/js/images-loded.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/baguetteBox.min.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
  <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/picker.js') }}"></script>
	<script src="{{ asset('assets/js/picker.date.js') }}"></script>
	<script src="{{ asset('assets/js/picker.time.js') }}"></script>
  <script src="{{asset('assets/js/legacy.js') }}"></script>

@stack('scripts')


</body>


</html>