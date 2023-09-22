<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>@yield('title')</title>

        @yield('meta')

        @php
            $icon = setting('site.logo') ? asset('storage/'.setting('site.logo')) : asset('images/icon.png');
        @endphp

        <!-- Favicons -->
        <link href="{{ $icon }}" rel="icon">
        <link href="{{ $icon }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/lumia/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lumia/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lumia/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lumia/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lumia/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/lumia/css/style.css') }}" rel="stylesheet">
        
        @yield('css')

        <!-- =======================================================
        * Template Name: Lumia - v4.10.0
        * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="{{ url('') }}">{{ setting('site.title') }}</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                <li><a class="nav-link scrollto" href="#what-we-do">{{ setting('acerca-de.title') }}</a></li>
                <li><a class="nav-link scrollto" href="#services">{{ setting('servicios.title') }}</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">{{ setting('portafolio.title') }}</a></li>
                <li><a class="nav-link scrollto" href="#testimonials">{{ setting('testimonios.title') }}</a></li>
                <li><a class="nav-link scrollto" href="#contact">{{ setting('contacto.title') }}</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex align-items-center">
                <a href="{{ setting('redes-sociales.facebook') }}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{ setting('redes-sociales.twitter') }}" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="{{ setting('redes-sociales.instagram') }}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="{{ setting('redes-sociales.linkedin') }}" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>

            </div>
        </header><!-- End Header -->

        @yield('content')

        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h3>{{ setting('site.title') }}</h3>
                        <p>{{ setting('site.description') }}</p>
                        <br><br>
                        <p>
                            {{ setting('contacto.address') }}<br>
                            {{ setting('contacto.location') }} <br><br>
                            <strong>Telefonos:</strong> {{ setting('contacto.phones') }}<br>
                            <strong>Email:</strong> {{ setting('contacto.email') }}
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Enlaces</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Acerca de</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Políticas de privacidad</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Servicios</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div> --}}

                </div>
            </div>
            </div>

            <div class="container d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>{{ setting('site.title') }}</span></strong>. Todos los derechos reserados
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
                        Desarrollado por <a href="https://ideacreativa.dev" target="_blank">IdeaCreativa</a>
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="{{ setting('redes-sociales.facebook') }}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="{{ setting('redes-sociales.twitter') }}" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="{{ setting('redes-sociales.instagram') }}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="{{ setting('redes-sociales.linkedin') }}" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/lumia/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('assets/lumia/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/lumia/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/lumia/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/lumia/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/lumia/vendor/waypoints/noframework.waypoints.js') }}"></script>
        <script src="{{ asset('assets/lumia/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/lumia/js/main.js') }}"></script>
    </body>
</html>