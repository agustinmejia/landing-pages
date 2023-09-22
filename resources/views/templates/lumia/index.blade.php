@extends('templates.lumia.layouts.master')

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

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
        <h1>{{ setting('site.title') }}</h1>
        <h2>{{ setting('site.description') }}</h2>
        <a href="#about" class="btn-get-started scrollto">Conocer más</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= What We Do Section ======= -->
        <section id="what-we-do" class="what-we-do">
            <div class="container">

                <div class="section-title">
                    <h2>{{ setting('acerca-de.title') }}</h2>
                    <p>{{ setting('acerca-de.description') }}</p>
                </div>

                {{-- <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>
                </div> --}}

            </div>
        </section><!-- End What We Do Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>{{ setting('acerca-de.subtitle') }}</h3>
                        <p>{!! setting('acerca-de.details') !!}</p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        {{-- <section id="skills" class="skills">
            <div class="container">

                <div class="row skills-content">

                <div class="col-lg-6">

                    <div class="progress">
                    <span class="skill">HTML <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>

                    <div class="progress">
                    <span class="skill">CSS <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>

                    <div class="progress">
                    <span class="skill">JavaScript <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="progress">
                    <span class="skill">PHP <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>

                    <div class="progress">
                    <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>

                    <div class="progress">
                    <span class="skill">Photoshop <i class="val">55%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>

                </div>

                </div>

            </div>
        </section> --}}
        <!-- End Skills Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts mt-5">
            <div class="container">
                <div class="row">
                    @foreach (App\Models\Metric::where('status', 1)->where('deleted_at', NULL)->get() as $item)
                    <div class="col-lg-3 col-6">
                        <div class="count-box">
                            <i class="bi {{ $item->icon }}"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ $item->quantity }}" data-purecounter-duration="1" class="purecounter"></span>
                            <p>{{ $item->name }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>{{ setting('servicios.title') }}</h2>
                    <p>{{ setting('servicios.description') }}</p>
                </div>

                <div class="row">
                    @foreach (App\Models\Service::where('status', 1)->where('deleted_at', NULL)->get() as $item)
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="bi {{ $item->icon }}"></i>
                            <h4><a href="#">{{ $item->title }}</a></h4>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>{{ setting('portafolio.title') }}</h2>
                    <p>{{ setting('portafolio.description') }}</p>
                </div>

                @php
                    $portfolio = App\Models\Portfolio::where('status', 1)->where('deleted_at', NULL)->get();
                @endphp
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todos</li>
                            @foreach ($portfolio->groupBy('category') as $key => $item)
                            <li data-filter=".filter-{{ $key }}">{{ $key }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    @php
                        $cont = 0;
                    @endphp
                    @foreach ($portfolio as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->category }} wow fadeInUp" data-wow-delay="0.{{ $cont }}s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('storage/'.str_replace('.', '-small.', $item->banner)) }}" class="img-fluid" alt="{{ $item->name }}" width="100%">
                                <a href="{{ asset('storage/'.$item->banner) }}" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="Más Details"><i class="bx bx-link"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">{{ $item->name }}</a></h4>
                                <p>{{ $item->name }}</p>
                            </div>
                        </div>
                    </div>
                    @php
                        $cont++;
                    @endphp
                    @endforeach
                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>{{ setting('testimonios.title') }}</h2>
                    <p>{{ setting('testimonios.description') }}</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach (App\Models\Testimony::where('status', 1)->where('deleted_at', NULL)->get() as $item)
                        @php
                            $image = asset('images/user.png');
                            if ($item->image) {
                                $image = asset('Storage/'.str_replace('.', '-cropped.', $item->image));
                            }
                        @endphp
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{ $item->comment }}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ $image }}" class="testimonial-img" alt="{{ $item->full_name }}">
                                <h3>{{ $item->full_name }}</h3>
                                <h4>{{ $item->type }}</h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>{{ setting('equipo.title') }}</h2>
                    <p>{{ setting('equipo.description') }}</p>
                </div>

                <div class="row">
                    <div class="row">
                        @foreach (App\Models\Worker::where('status', 1)->where('deleted_at', NULL)->get() as $item)
                        @php
                            $image = asset('images/user.png');
                            if ($item->image) {
                                $image = asset('Storage/'.str_replace('.', '-cropped.', $item->image));
                            }
                        @endphp
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <img src="{{ $image }}" alt="">
                                <h4>{{ $item->full_name }}</h4>
                                <span>{{ $item->job }}</span>
                                <p>{{ $item->description }}</p>
                                <div class="social">
                                    <a href="{{ $item->facebook ?? '#' }}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ $item->instagram ?? '#' }}"><i class="bi bi-instagram"></i></a>
                                    <a href="{{ $item->twitter ?? '#' }}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ $item->linkedin ?? '#' }}"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>{{ setting('contacto.title') }}</h2>
                    <p>{{ setting('contacto.description') }}</p>
                </div>

                <div class="row mt-5 justify-content-center">

                <div class="col-lg-10">

                    <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-4 info">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Ubicación:</h4>
                            <p>
                                {{ setting('contacto.location') }} <br>
                                {{ setting('contacto.address') }}
                            </p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{ setting('contacto.email') }}</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="bi bi-phone"></i>
                            <h4>Telefono(s):</h4>
                            <p>{{ setting('contacto.phones') }}</p>
                        </div>
                    </div>
                    </div>

                </div>

                </div>

                {{-- <div class="row mt-5 justify-content-center">
                    <div class="col-lg-10">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div> --}}

            </div>
        </section><!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection

@section('css')
    <style>
        #hero {
            width: 100%;
            height: 60vh;
            background: url("{{ setting('site.banner') ? asset('storage/'.setting('site.banner')) : asset('assets/lumia/img/hero-bg.jpg') }}") center center;
            background-size: cover;
            position: relative;
            margin-top: 70px;
            padding: 0;
        }
    </style>
@endsection