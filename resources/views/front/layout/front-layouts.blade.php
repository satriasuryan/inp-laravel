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
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('') }}">Imam Nawawi Peduli</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ url('') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/daftarprogram" class="nav-link">Program</a></li>
            </ul>
        </div>
    </div>
</nav>
  

  @yield('content')

	<!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
          <h2 class="footer-heading">IMAM NAWAWI PEDULI</h2>
          <p>Kami adalah A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          <ul class="ftco-footer-social p-0">
            <li class="ftco-animate"><a href="https://www.youtube.com/c/annawawitv" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-youtube"></span></a></li>
            <li class="ftco-animate"><a href="https://www.facebook.com/imamnawawischool/" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="https://www.instagram.com/imamnawawischool/" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-4 pl-lg-5 mb-4 mb-md-0">
          <h2 class="footer-heading">HALAMAN LAIN</h2>
          <ul class="list-unstyled">
            <li><a href="http://imamnawawi.school/home-schooling/" class="py-2 d-block">Home Schooling Imam Nawawi</a></li>
            <li><a href="https://www.instagram.com/annawawimedia/" class="py-2 d-block">Annawawi Media</a></li>
            <li><a href="https://www.instagram.com/annawawi.tv/" class="py-2 d-block">Annawawi TV</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
          <h2 class="footer-heading">ADA PERTANYAAN?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><a href="https://www.google.com/search?q=imam%20nawawi%20school&oq=imam+&aqs=chrome.1.69i57j69i59j46i39i175i199j69i61l3j69i60l2.3460j0j1&sourceid=chrome
                &ie=UTF-8&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=ALeKk00aEGCpCqpCB097REU0EozQwsF-xg:1629885624852&rflfq=1&num=10&rldimm=4240894899017044483&lqi=
                ChJpbWFtIG5hd2F3aSBzY2hvb2xaFCISaW1hbSBuYXdhd2kgc2Nob29skgENc2Nob29sX2NlbnRlcg&ved=2ahUKEwjI58WN9cvyAhXfk2oFHVeIA3EQvS4wAXoECAgQGg&rlst=f#rlfi=hd:;si:
                4240894899017044483,l,ChJpbWFtIG5hd2F3aSBzY2hvb2xaFCISaW1hbSBuYXdhd2kgc2Nob29skgENc2Nob29sX2NlbnRlcg;mv:[[-6.2429438,106.92533680000001],[-6.6299472999999995,
                106.7398343]];tbs:lrf:!1m4!1u2!2m2!2m1!1e1!2m1!1e2!3sIAE,lf:1,lf_ui:2"><span class="icon fa fa-map"></span><span class="text">
                  Gg. Mesjid No. 35, Pagelaran, Ciomas, Bogor, Jawa Barat 16610</span></a></li>
              <li><a href="tel:+62 812 8357 9744"><span class="icon fa fa-phone"></span><span class="text">0812-8357-9744</span></a></li>
              <li><a href="mailto:imamnawawischool@gmail.com"><span class="icon fa fa-paper-plane"></span><span class="text">imamnawawischool@gmail.com</span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by Annawawi Media
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  
    
    
  
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
    <script>
      $(document).ready(function() {
  
  
  $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
  
       //>=, not <=
      if (scroll >= 50) {
          //clearHeader, not clearheader - caps H
          $(".navbar").addClass("bg-blue");
      } else {
        $(".navbar").removeClass("bg-blue");
      }
  }); //missing );
    
    
    
    
  
    
  // document ready  
  });
      </script>   
  </body>
  </html>