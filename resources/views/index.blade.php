@extends('layouts.master')

@section('title', 'Bienvenido | '.(setting('site.title') ?? 'IdeaCreativa'))

@section('meta')
    <meta name="keywords"           content="{{ setting('site.title').','.setting('site.tags') }}" />
    <meta name="description"        content="{{ setting('site.description') }}" >
    <meta property="og:title"       content="{{ "Bienvenido | ".(setting('site.title') ?? 'IdeaCreativa') }}" />
    <meta property="og:description" content="{{ setting('site.description') }}" />
    <meta property="og:image"       content="{{ setting('site.logo') ? asset('storage/'.setting('site.logo')) : asset('assets/img/favicon.png') }}" />
    <meta property="og:type"        content="website" />
    <meta property="og:url"         content="{{ url('/') }}" />
@endsection

@section('main')
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <img src="{{ setting('site.banner') ? asset('storage/'.setting('site.banner')) :  asset('assets/img/hero-carousel/hero-carousel-3.svg') }}" class="img-fluid animated" alt="{{ setting('site.title') ?? 'IdeaCreativa' }}">
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
            <h2>Bienvenido a {{ substr($title, 0, $index) }}<span>{{ substr($title, $index) }}</span></h2>
            <p>{{ setting('site.description') ?? "Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut." }}</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Iniciar</a>
                @if (setting('site.video'))
                <a href="{{ setting('site.video') }}" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Ver Video</span></a>
                @endif
            </div>
        </div>
    </section>

    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">
                <div class="row gy-4">
                    @php
                        $delay = 0;
                    @endphp
                    @forelse (App\Models\Feature::where('status', 1)->where('deleted_at', NULL)->get() as $item)
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="{{ $delay }}">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi {{ $item->icon }} icon"></i></div>
                                <h4><a href="#featured-services" class="stretched-link">{{ $item->title }}</a></h4>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                        @php
                            $delay += 200;
                        @endphp
                    @empty
                        
                    @endforelse
                </div>
            </div>
        </section>
        <!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>{{ setting('acerca-de.title') ?? 'Acerca de' }}</h2>
                    <p>{{ setting('acerca-de.description') }}</p>
                </div>
                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="{{ setting('acerca-de.banner') ? asset('storage/'.setting('acerca-de.banner')) : asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h3 class="pt-0 pt-lg-5">{{ setting('acerca-de.subtitle') }}</h3>
                        {!! setting('acerca-de.details') !!}
                    </div>
        
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients mt-5">
            {{-- <div class="section-header">
                <h2>Our Customers</h2>
                <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
            </div> --}}
            <div class="container" data-aos="zoom-out">
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt="img"></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt="img"></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt="img"></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt="img"></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt="img"></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt="img"></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt="img"></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt="img"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Clients Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="cta" class="cta mt-5">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                    <h3>Quieres potenciar la <em>Administración</em> de tu <em>Restaurante</em>?</h3>
                    <p>Administra tu Restaurante con nuestro sistema web GerenteRest y accede a tu información desde cualquier dispositivo conectado a internet.</p>
                    <a class="read-more cta-btn align-self-start" href="https://gerente.rest" target="_blank">Ir ahora <i class="bi bi-arrow-right icon"></i></a>
                </div>

                <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                    <div class="img">
                        <img src="{{ asset('assets/img/gerenterest-vertical.webp') }}" alt="gerente.res" class="img-fluid">
                    </div>
                </div>

                </div>

            </div>
        </section>
        <!-- End Call To Action Section -->

        <!-- ======= On Focus Section ======= -->
        <section id="onfocus" class="onfocus">
            <div class="container-fluid p-0" data-aos="fade-up">

                <div class="row g-0">
                    <div class="col-lg-6 video-play position-relative">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="content d-flex flex-column justify-content-center h-100">
                            <h3>Sistematiza tu emprendimiento con nosotros</h3>
                            <p class="fst-italic"><b>IdeaCreativa</b> te ayudará a sistematizar los procesos que llevas a cabo en tu negocio o empresa para maximizar tus ingresos.</p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> Maneja desde un sistema web la información de tus clientes y proveedores.</li>
                                <li><i class="bi bi-check-circle"></i> Lleva el control de tus productos o servicios que brindas al mercado.</li>
                                <li><i class="bi bi-check-circle"></i> Genera reportes de tus actividades desde cualquier dispositivo con acceso a internet en cualquier momento.</li>
                                <li><i class="bi bi-check-circle"></i> Obtén actualizaciones periodicas con el fin de mejorar tu experiencia de usuario y sacar el mayor provecho.</li>
                            </ul>
                            <a href="#" class="read-more align-self-start"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End On Focus Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Nuestros Servicios</h2>
                    <p>A continuación te describimos los servicios que <b>IdeaCreativa</b> te brinda para mejorar la administración de tu negocio o empresa.</p>
                </div>

                <div class="row gy-5">

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item">
                    <div class="img">
                        <img src="assets/img/services-1.webp" class="img-fluid" alt="img">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-layout-text-window-reverse"></i>
                        </div>
                        <a href="#" class="stretched-link">
                        <h3>Diseño de páginas web</h3>
                        </a>
                        <p>Creamos tu página web personal o empresarial totalmente personalizada y con toda la información acerca de los servicios que brindas y de contacto.</p>
                    </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-item">
                    <div class="img">
                        <img src="assets/img/services-2.webp" class="img-fluid" alt="img">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Sistemas web a medida</h3>
                        </a>
                        <p>Desarrollamos una variedad de sistemas web a la medida de los requerimientos que necesites para la administración y el control de tu negocio o empresa.</p>
                    </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-item">
                    <div class="img">
                        <img src="assets/img/services-3.webp" class="img-fluid" alt="img">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-phone-fill"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Aplicaciones móviles</h3>
                        </a>
                        <p>Desarrollo de todo tipo de aplicaciones móviles tales como, aplicaciones para delivery, mapas, tienda en línea, videoconferencias, etc. </p>
                    </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                    <div class="service-item">
                    <div class="img">
                        <img src="assets/img/services-5.webp" class="img-fluid" alt="img">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                        <i class="bi bi-list-check"></i>
                        </div>
                        <a href="#" class="stretched-link">
                        <h3>Asesoría informática</h3>
                        </a>
                        <p>Te brindamos asesoramiento profesional en temas de planificación, desarrollo y despliegue de aplicaciones web y móviles.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                    <div class="service-item">
                    <div class="img">
                        <img src="assets/img/services-4.webp" class="img-fluid" alt="img">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                        <i class="bi bi-hdd-stack"></i>
                        </div>
                        <a href="#" class="stretched-link">
                        <h3>Hosting y dominio</h3>
                        </a>
                        <p>Realizamos compra de dominios, alquiler y administración de hosting en servidores compratidos y VPS (Digital Ocean, AWS y Google Cloud Platform).</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                    <div class="img">
                        <img src="assets/img/services-6.webp" class="img-fluid" alt="img">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                        <i class="bi bi-easel"></i>
                        </div>
                        <a href="#" class="stretched-link">
                        <h3>Capacitación y cursos</h3>
                        </a>
                        <p>Brindamos cursos, charlas y capacitaciones acerca de desarrollo web, uso de herramientas informáticas, migración a software libre, seguridad informática, etc.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                    </div>
                </div><!-- End Service Item -->

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="img">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="img">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="img">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="img">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="img">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Features Section ======= -->
        {{-- <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row gy-4 d-flex">

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a href="#" class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <i class="bi bi-binoculars color-cyan"></i>
                        <h4>Modinest</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <i class="bi bi-box-seam color-indigo"></i>
                        <h4>Undaesenti</h4>
                        </a>
                    </li><!-- End Tab 2 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <i class="bi bi-brightness-high color-teal"></i>
                        <h4>Pariatur</h4>
                        </a>
                    </li><!-- End Tab 3 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <i class="bi bi-command color-red"></i>
                        <h4>Nostrum</h4>
                        </a>
                    </li><!-- End Tab 4 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                        <i class="bi bi-easel color-blue"></i>
                        <h4>Adipiscing</h4>
                        </a>
                    </li><!-- End Tab 5 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                        <i class="bi bi-map color-orange"></i>
                        <h4>Reprehit</h4>
                        </a>
                    </li><!-- End Tab 6 Nav -->

                </ul>

                <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                    <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h3>Modinest</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/features-1.svg" alt="img" class="img-fluid">
                    </div>
                    </div>
                </div><!-- End Tab Content 1 -->

                <div class="tab-pane" id="tab-2">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1">
                            <h3>Undaesenti</h3>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-2.svg" alt="img" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 2 -->

                <div class="tab-pane" id="tab-3">
                    <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <h3>Pariatur</h3>
                        <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                        </ul>
                        <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        </p>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-3.svg" alt="img" class="img-fluid">
                    </div>
                    </div>
                </div><!-- End Tab Content 3 -->

                <div class="tab-pane" id="tab-4">
                    <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <h3>Nostrum</h3>
                        <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        </p>
                        <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-4.svg" alt="img" class="img-fluid">
                    </div>
                    </div>
                </div><!-- End Tab Content 4 -->

                <div class="tab-pane" id="tab-5">
                    <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <h3>Adipiscing</h3>
                        <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        </p>
                        <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-5.svg" alt="img" class="img-fluid">
                    </div>
                    </div>
                </div><!-- End Tab Content 5 -->

                <div class="tab-pane" id="tab-6">
                    <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <h3>Reprehit</h3>
                        <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        </p>
                        <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-6.svg" alt="img" class="img-fluid">
                    </div>
                    </div>
                </div><!-- End Tab Content 6 -->

                </div>

            </div>
        </section> --}}
        <!-- End Features Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio" data-aos="fade-up">

            <div class="container">
                <div class="section-header">
                    <h2>Portafolio</h2>
                    <p>Te presentamos nuestro portafolio de negocios en el cual mostramos algunos de nuestros proyectos que hemos ido desarrollado a los largo del tiempo y que están en uso por nuestros clientes.</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
                    <ul class="portfolio-flters">
                        <li data-filter="*" class="filter-active">Todos</li>
                        @foreach (App\Models\Portfolio::where('deleted_at', NULL)->groupBy('category')->get() as $item)
                        <li data-filter=".filter-{{ $item->category }}">{{ Str::ucfirst($item->category) }}</li>
                        @endforeach
                    </ul><!-- End Portfolio Filters -->
                    <div class="row g-0 portfolio-container">
                        @foreach (App\Models\Portfolio::where('deleted_at', NULL)->get() as $item)
                            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-{{ $item->category }}">
                                <img src="{{ asset('storage/'.str_replace('.', '-medium.', $item->banner)) }}" class="img-fluid" alt="{{ $item->name }}">
                                <div class="portfolio-info">
                                    <h4>{{ $item->name }}</h4>
                                    <a href="{{ asset('storage/'.$item->banner) }}" title="{{ $item->name }}" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{ url('portfolio-details/'.$item->slug) }}" title="Más Detalles" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>    
                        @endforeach
                    </div><!-- End Portfolio Container -->
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row gy-4">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content px-xl-5">
                    <h3>Frequently Asked <strong>Questions</strong></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p>
                    </div>

                    <div class="accordion accordion-flush px-xl-5" id="faqlist">

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                            <i class="bi bi-question-circle question-icon"></i>
                            Non consectetur a erat nam at lectus urna duis?
                        </button>
                        </h3>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                            <i class="bi bi-question-circle question-icon"></i>
                            Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                        </button>
                        </h3>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                        </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                            <i class="bi bi-question-circle question-icon"></i>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                        </button>
                        </h3>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                        </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                        <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                            <i class="bi bi-question-circle question-icon"></i>
                            Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                        </button>
                        </h3>
                        <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">
                            <i class="bi bi-question-circle question-icon"></i>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                        </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                        <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                            <i class="bi bi-question-circle question-icon"></i>
                            Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                        </button>
                        </h3>
                        <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                        </div>
                        </div>
                    </div><!-- # Faq item-->

                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
                </div>

            </div>
        </section>
        <!-- End F.A.Q Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Nuestro equipo</h2>
                    <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
                </div>

                <div class="row gy-5">

                <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                    <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="img">
                    </div>
                    <div class="member-info">
                        <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                    </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
                    <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="img">
                    </div>
                    <div class="member-info">
                        <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                    </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
                    <div class="team-member">
                    <div class="member-img">
                        <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="img">
                    </div>
                    <div class="member-info">
                        <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                    </div>
                    </div>
                </div><!-- End Team Member -->

                </div>

            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-header">
                <h2>Contactanos</h2>
                <p>Puedes comunicarte con nosotros para solicitar más información acerca de nuestros productos y servicios, por medio de los siguientes canales de comunicación.</p>
                </div>

            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7471.225963878232!2d-64.90488092686039!3d-14.836934217838715!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93dd6fd6a686c60b%3A0x796a40110f0b37e8!2zMTTCsDUwJzEzLjQiUyA2NMKwNTQnMDMuNSJX!5e0!3m2!1ses!2sbo!4v1655324503378!5m2!1ses!2sbo" frameborder="0" allowfullscreen></iframe>
            </div>
            <!-- End Google Maps -->

            <div class="container">

                <div class="row gy-5 gx-lg-5">

                <div class="col-lg-4">

                    <div class="info">
                        {{-- <h3>Get in touch</h3>
                        <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p> --}}

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                            <h4>Ubicación:</h4>
                            <p>C/ Ipurupuro, Santísima Trinidad, Bolivia</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                            <h4>Email:</h4>
                            <p>soporte.idea.creativa@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                            <h4>Telefono:</h4>
                            <p>+591 75199157</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" placeholder="Mensaje" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                    </form>
                </div><!-- End Contact Form -->

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection