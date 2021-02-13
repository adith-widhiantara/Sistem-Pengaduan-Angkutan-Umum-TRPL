<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIDU BUSCARE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="{{asset('assets/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700')}}"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <!--==========================
  Header
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="/"><img src="assets/img/logo2.png" alt="" title="" /></img></a>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="#hero">Regna</a></h1>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/pengaduan">Pengaduan</a></li>
                    <li><a href="/cara">Cara Pengaduan</a></li>
                    <li>
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/profil') }}" class="nav-menu">Profil</a>
                        @else
                        <div class="top-right links">
                            <a href="{{ route('login') }}" class="btn btn-primary" role="button"
                                style="padding-right:1em; padding-left:1em;">Masuk</a>
                        </div>
                        @endauth
                        @endif
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    @yield('content')

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright SIDU BUSCARE. Teknik Rekayasa Perangkat Lunak B
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
                by <a href="#hero">Kelompok 1B</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('assets/lib/superfish/superfish.min.js')}}"></script>

    <!-- Contact Form JavaScript File -->
    <script src="{{asset('assets/contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/time.js')}}"></script>

</body>

</html>
