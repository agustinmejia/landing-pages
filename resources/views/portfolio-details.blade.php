@extends('layouts.master')

@section('title', $data->name.'| IdeaCreativa')

@section('meta')
    <meta name="keywords"           content="{{ $data->tags }}" />
    <meta property="og:title"       content="{{ $data->name }}" />
    <meta property="og:description" content="{{ $data->description }}" />
    <meta property="og:image"       content="{{ $data->images ? asset('storage/'.json_decode($data->images)[0]) : '' }}" />
    <meta property="og:type"        content="{{ Str::ucfirst($data->category) }}" />
    <meta property="og:url"         content="{{ $data->url }}" />
@endsection

@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Detalle de {{ $data->name }}</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Página Principal</a></li>
                    <li>Detalle de portafolio</li>
                </ol>
            </div>
  
        </div>
    </div><!-- End Breadcrumbs -->
  
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            @if ($data->images)
                                @foreach (json_decode($data->images) as $item)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/'.$item) }}" alt="{{ $data->name }}">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Información de proyecto</h3>
                        <ul>
                            <li><strong>Nombre</strong>: {{ $data->name }}</li>
                            <li><strong>Categoría</strong>: {{ Str::ucfirst($data->category) }}</li>
                            <li><strong>Visto</strong>: {{ $data->views }} veces</li>
                            @if ($data->url)
                            <li><strong>URL</strong>: <a href="{{ $data->url }}" target="_blank">{{ $data->url }}</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Descripción del proyecto</h2>
                        <p>{{ $data->description }}</p>
                    </div>
                </div>
    
            </div>
    
        </div>
    </section><!-- End Portfolio Details Section -->
@endsection

@section('css')
    <style>
        .checked {
            color: #ffb400;
        }
    </style>
@endsection