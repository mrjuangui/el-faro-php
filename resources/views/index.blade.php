@extends('layouts.app')
@section('title','Inicio')

@section('content')



<!-- Carrusel de noticias destacadas -->
<section id="inicio" class="container my-4">
    <div id="carouselNoticias" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($destacadas as $key => $noticia)
            <div class="carousel-item @if($key==0) active @endif">
                <img src="{{ asset('images/'.$noticia->imagen) }}" class="d-block w-100" alt="{{ $noticia->titulo }}">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded">
                    <h5 class="bg-light rounded bg-opacity-75">
                        <a href="{{ route('noticias.show', $noticia->slug) }}" class="text-carrusel text-decoration-none">
                {{ $noticia->titulo }}
            </a></h5>
                    <p>{!! Str::limit($noticia->contenido, 100) !!}</p>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselNoticias" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselNoticias" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>

<!-- Sección Deportes -->
<section id="deporte" class="container my-5">
    <h2 class="mb-3">Deportes</h2>
    <div class="row g-3 text-center">
        @foreach($deportes as $noticia)
        <div class="col-md-4">
            <div class="card h-100">
                <img src="{{ asset('images/'.$noticia->imagen) }}" class="card-img-top" alt="{{ $noticia->titulo }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $noticia->titulo }}</h5>
                    <p class="card-text">{!! Str::limit($noticia->contenido, 120) !!}</p>
                    <a href="{{ route('noticias.show', $noticia->slug) }}" class="btn btn-primary">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Sección Negocios -->
<section id="negocios" class="container my-5">
    <h2 class="mb-3">Negocios</h2>
    <div class="row g-3 text-center">
        @foreach($negocios as $noticia)
        <div class="col-md-4">
            <div class="card h-100">
                <img src="{{ asset('images/'.$noticia->imagen) }}" class="card-img-top" alt="{{ $noticia->titulo }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $noticia->titulo }}</h5>
                    <p class="card-text">{!! Str::limit($noticia->contenido, 120) !!}</p>
                    <a href="{{ route('noticias.show', $noticia) }}" class="btn btn-primary">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Sección Otros Artículos -->
<section id="otros" class="container my-5">
    <h2 class="mb-3">Otros artículos</h2>
    <div class="row g-3 text-center">
        @foreach($otros as $noticia)
        <div class="col-md-4">
            <div class="card h-100">
                <img src="{{ asset('images/'.$noticia->imagen) }}" class="card-img-top" alt="{{ $noticia->titulo }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $noticia->titulo }}</h5>
                    <p class="card-text">{!! Str::limit($noticia->contenido, 120) !!}</p>
                    <a href="{{ route('noticias.show', $noticia) }}" class="btn btn-primary">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection