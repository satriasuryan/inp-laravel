<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- META UNTUK GOOGLE MAX:100-140 -->
    <meta name="description" content="" />

    <!-- META UNTUK FACEBOOK -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">

    <!-- META UNTUK TWITTER -->
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:card" content="">

    <title>@yield('title')</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('front-assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{ asset('front-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/magnific-popup.css')}}">


    <link rel="stylesheet" href="{{ asset('front-assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{ asset('front-assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/style.css')}}">
    @yield('style')
</head>

<body>


  @yield('content')

	
  
    
    
  
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  
    <script src="{{ asset('front-assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('front-assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset('front-assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('front-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('front-assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('front-assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('front-assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('front-assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('front-assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('front-assets/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{ asset('front-assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('front-assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('front-assets/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('front-assets/js/google-map.js')}}"></script>
    <script src="{{ asset('front-assets/js/main.js')}}"></script>
    @yield('script')
  </body>
  </html>