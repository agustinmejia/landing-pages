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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Variables CSS Files. Uncomment your preferred color scheme -->

        @php
            $color = 'pink';
        @endphp
        @if (false)
            <link href="assets/css/variables-{{ $color }}.css" rel="stylesheet">    
        @else
            <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">    
        @endif
        <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
        <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

        <!-- =======================================================
        * Template Name: HeroBiz - v2.1.0
        * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->

        @yield('css')
    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top" data-scrollto-offset="0">
            <div class="container-fluid d-flex align-items-center justify-content-between">

                <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    @php
                        $icon_alt = setting('site.logo-alt') ? asset('storage/'.setting('site.logo-alt')) : null;
                    @endphp
                    @if ($icon_alt)
                    <img src="{{ $icon_alt }}" alt="{{ setting('site.title') }}">
                    @endif

                    @if (setting('site.show_site_title_navbar'))
                        @php
                            $title = setting('site.title');
                            $title_array = str_split($title);
                            $index = 0;
                            for($i = 1; $i < count($title_array); $i++){
                                if(ctype_upper($title_array[$i])){
                                    $index = $i;
                                }
                            }
                        @endphp
                        <h1 style="margin: 0px">{{ substr($title, 0, $index) }}<span>{{ substr($title, $index) }}</span></h1>
                    @endif
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto" href="{{ url('/') }}#navbar">Inicio</a></li>
                        <li><a class="nav-link scrollto" href="{{ url('/') }}#about">Acerca de</a></li>
                        <li><a class="nav-link scrollto" href="{{ url('/') }}#services">Servicios</a></li>
                        <li><a class="nav-link scrollto" href="{{ url('/') }}#portfolio">Portafolio</a></li>
                        <li><a class="nav-link scrollto" href="{{ url('/') }}#team">Equipo</a></li>
                        <li><a class="nav-link scrollto" href="{{ url('/') }}#contact">Contacto</a></li>
                        <li class="dropdown"><a href="#"><span>Proyectos</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                            <li><a href="https://gerente.rest" target="_blank">Restaurantes</a></li>
                            <li><a href="https://phonestore.ideacreativa.dev" target="_blank">Tienda de celulares</a></li>
                            <li><a href="https://eshop.ideacreativa.dev" target="_blank">Ecommerce</a></li>
                            </ul>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle d-none"></i>
                </nav><!-- .navbar -->

                <a class="btn-getstarted scrollto" href="{{ url('/') }}#about">Conocer más</a>

            </div>
        </header><!-- End Header -->

        @yield('main')

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="footer-content">
                <div class="container">
                    <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                        <h3>Idea<span>Creativa</span></h3>
                        <p>
                            {{-- A108 Adam Street <br> --}}
                            Santísima Trinidad, Bolivia<br><br>
                            <strong>Telefonos:</strong> +591 75199157<br>
                            <strong>Email:</strong> soporte.idea.creativa@gmail.com<br>
                        </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Enlaces</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Inicio</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#features">Acerca de</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#services">Servicios</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#portfolio">Portafolio</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#team">Equipo</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Proyectos</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://gerente.rest" target="_blank">GerenteRest</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://eshop.ideacreativa.dev" target="_blank">Eshop</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://phonestore.ideacreativa.dev" target="_blank">PhoneStore</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://facturacion.ideacreativa.dev" target="_blank">Facturación</a></li>
                            {{-- <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Suscribirse</h4>
                        <p>Puedes sucribirte a nuestro boletín para recibir noticias y notificaciones de actualizaciones</p>
                        <form action="#" method="post">
                            <input type="email" name="email" required><input type="submit" value="Subscribirse">
                        </form>

                    </div>

                    </div>
                </div>
            </div>

            <div class="footer-legal text-center">
                <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                    <div class="d-flex flex-column align-items-center align-items-lg-start">
                        <div class="copyright">
                            &copy; Copyright <strong><span>IdeaCreativa</span></strong> {{ date('Y') }}. Todos los derechos reservados.
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                            Diseñado por <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
                        </div>
                    </div>

                    <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/ideacreativa2022" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UC7WoO8aDoR7Lf6g0uwVE9TQ" class="youtube"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>

                </div>
            </div>

        </footer><!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>