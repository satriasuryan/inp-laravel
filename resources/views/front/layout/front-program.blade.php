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

    <link rel="shortcut icon" href="{{ asset('DSIM.ico')}}" type="image/x-icon">

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
    <style>
        .ftco-navbar-light {
            background: #46A7B6 !important;
            position: fixed;
            left: 0;
            right: 0;
            z-index: 3;
        }
        }
    </style>
    @yield('style')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('') }}">
                <img src="{{asset('middle-assets/dist/img/AdminLTELogo.png')}}" alt="user" class="rounded-circle"
                    width="31">
                Divisi Sosial Imam Nawawi
            </a>
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

                <div class="col-md-6 col-lg-6 pl-lg-5 mb-4 mb-md-0">
                    <h2 class="footer-heading">HALAMAN LAIN</h2>
                    <ul class="list-unstyled">
                        <li><a href="http://imamnawawi.school/" class="py-2 d-block" target="_blank">Home Schooling Imam
                                Nawawi</a></li>
                        <li><a href="https://www.instagram.com/annawawimedia/" class="py-2 d-block" target="_blank">Annawawi Media</a>
                        </li>
                        <ul class="ftco-footer-social pl-0 pt-2">
                            <li class="ftco-animate"><a href="https://www.youtube.com/c/annawawitv"
                                    data-toggle="tooltip" data-placement="top" title="Twitter" target="_blank"><span
                                        class="fa fa-youtube"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/imamnawawischool/"
                                    data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/imamnawawischool/"
                                    data-toggle="tooltip" data-placement="top" title="Instagram" target="_blank"><span
                                        class="fa fa-instagram"></span></a></li>
                        </ul>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6 mb-4 mb-md-0">
                    <h2 class="footer-heading">ADA PERTANYAAN?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><a href="https://www.google.com/search?q=imam%20nawawi%20school&oq=imam+&aqs=chrome.1.69i57j69i59j46i39i175i199j69i61l3j69i60l2.3460j0j1&sourceid=chrome
                &ie=UTF-8&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=ALeKk00aEGCpCqpCB097REU0EozQwsF-xg:1629885624852&rflfq=1&num=10&rldimm=4240894899017044483&lqi=
                ChJpbWFtIG5hd2F3aSBzY2hvb2xaFCISaW1hbSBuYXdhd2kgc2Nob29skgENc2Nob29sX2NlbnRlcg&ved=2ahUKEwjI58WN9cvyAhXfk2oFHVeIA3EQvS4wAXoECAgQGg&rlst=f#rlfi=hd:;si:
                4240894899017044483,l,ChJpbWFtIG5hd2F3aSBzY2hvb2xaFCISaW1hbSBuYXdhd2kgc2Nob29skgENc2Nob29sX2NlbnRlcg;mv:[[-6.2429438,106.92533680000001],[-6.6299472999999995,
                106.7398343]];tbs:lrf:!1m4!1u2!2m2!2m1!1e1!2m1!1e2!3sIAE,lf:1,lf_ui:2" target="_blank"><span
                                        class="icon fa fa-map"></span><span class="text">
                                        Gg. Mesjid No. 35, Pagelaran, Ciomas, Bogor, Jawa Barat 16610</span></a></li>
                            <li><a href="tel:+62 856 4988 0427"><span class="icon fa fa-phone"></span><span
                                        class="text">0856-4988-0427</span></a></li>
                            <li><span class="icon fa fa-envelope"></span>
                              <span class="text">imamnawawischool@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | by Annawawi Media
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{ asset('front-assets/js/google-map.js')}}"></script>
    <script src="{{ asset('front-assets/js/main.js')}}"></script>
    <script>
        let searchBtn = document.getElementById('search-btn');
        let search = document.getElementById('search');
        let tip = document.getElementById('tip');

        let i = 0;
        let message = 'Cari Program berdasar judul';
        let speed = 100;

        searchBtn.addEventListener('click', function () {
            search.style.width = '100%';
            search.style.paddingLeft = '50px';
            search.focus();

            typeWritter();
        });

        function typeWritter() {
            if (i < message.length) {
                msg = search.getAttribute('placeholder') + message.charAt(i);
                search.setAttribute('placeholder', msg);
                i++;
                setTimeout(typeWritter, speed);
            }
        }

        search.addEventListener('keydown', function () {
            tip.style.visibility = 'visible';
            tip.style.opacity = '1';
        });
    </script>
    <script>
        $('#report').on('click', function () {
            $('#show').removeClass('d-none')
            $('#span').html('Tuliskan Kecurigaan Anda');
        })

        $(window).on('scroll', function () {
            if ($(window).scrollTop()) {
                $('.card-donasi').addClass('card-fixed');
            } else {
                $('.card-donasi').removeClass('card-fixed');
            }
        })
    </script>
    @yield('script')
</body>

</html>