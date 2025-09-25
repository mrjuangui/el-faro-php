@extends('layouts.app')
@section('title','Inicio')

@section('content')

<!-- Carrusel de noticias destacadas -->
<div id="carouselNoticias" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach($destacadas as $key => $noticia)
    <div class="carousel-item @if($key==0) active @endif">
      <img src="{{ asset('images/'.$noticia->imagen) }}" class="d-block w-100" alt="{{ $noticia->titulo }}">
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded">
        <h5 class="bg-light rounded bg-opacity-75">{{ $noticia->titulo }}</h5>
        <p>{{ Str::limit($noticia->contenido, 100) }}</p>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselNoticias" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselNoticias" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Sección de otras noticias -->
<h2 class="mb-3">Últimas noticias</h2>
<div class="row g-3">
  @foreach($otras as $noticia)
    <div class="col-md-4">
      <div class="card h-100">
        <img src="{{ asset('images/'.$noticia->imagen) }}" class="card-img-top" alt="{{ $noticia->titulo }}">
        <div class="card-body">
          <h5 class="card-title">{{ $noticia->titulo }}</h5>
          <p class="card-text">{{ Str::limit($noticia->contenido, 120) }}</p>
          <a href="{{ route('noticias.show', $noticia) }}" class="btn btn-primary">Leer más</a>
        </div>
      </div>
    </div>
  @endforeach
</div>

@endsection
