@extends('layouts.app')

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <h2 class="card-title">{{ $articulo->titulo }}</h2>
        <p class="card-text">{{ $articulo->contenido }}</p>
        <p class="text-muted">Relacionado con la noticia: 
            <a href="{{ route('noticias.show', $articulo->noticia) }}">
                {{ $articulo->noticia->titulo }}
            </a>
        </p>
    </div>
</div>
@endsection
