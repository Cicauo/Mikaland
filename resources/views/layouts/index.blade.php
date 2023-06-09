<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Mida Karya Abadi Land">
        <meta name="author" content="DynamicLayers">
       
        <title>Mika Karya Abadi Land</title>
        
        
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="css/elegant-line-icons.css">
        <!-- Elegant Icons CSS -->
        <link rel="stylesheet" href="css/elegant-font-icons.css">
        <!-- Flat Icons CSS -->
        <link rel="stylesheet" href="css/flaticon.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Slicknav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
        <!--Slick Slider-->
        <link rel="stylesheet" href="css/slick.css">
        <!--Slider CSS-->
        <link rel="stylesheet" href="css/slider.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox/venobox.css">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
        @include('layouts.partials.spinner')
       <!--Spinner-End -->
        
        @include('layouts.partials.header')
        <!--.header-End -->
		
        <!-- Content-Start -->
        @yield('pages')
        <!-- Content-End -->

        @include('layouts.partials.footer')
		<!-- /.footer-section -->

		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>
	
		<!-- jQuery Lib -->
         <script src="{{ asset('js/app.js') }}" defer></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/vendor/bootstrap.min.js"></script>
		<!-- Tether JS -->
		<script src="js/vendor/tether.min.js"></script>
		<!-- Slicknav JS -->
		<script src="js/vendor/jquery.slicknav.min.js"></script>
		<!-- OWL-Carousel JS -->
		<script src="js/vendor/owl.carousel.min.js"></script>
		<!-- Smooth Scroll JS -->
		<script src="js/vendor/smooth-scroll.min.js"></script>
        <!-- Venobox JS -->
        <script src="js/vendor/venobox.min.js"></script>
		<!-- Ajaxchimp JS -->
		<script src="js/vendor/jquery.ajaxchimp.min.js"></script>
		<!--Slick Slider-->
		<script src="js/vendor/slick.min.js"></script>
		<!--Counterup JS-->
		<script src="js/vendor/jquery.counterup.min.js"></script>
		<!--Waypoints JS-->
		<script src="js/vendor/jquery.waypoints.v2.0.3.min.js"></script>
		<!--YTPlayer Js-->
		<script src="js/vendor/jquery.mb.YTPlayer.min.js"></script>
		<!-- Wow JS -->
		<script src="js/vendor/wow.min.js"></script>
        <!-- Google Map JS -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPH8h1UpcK01BdcvoZeOzq-_wJqRxN1Pc"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

    </body>
</html>