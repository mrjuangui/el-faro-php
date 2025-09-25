@extends('layouts.app')

@section('content')
<h1 class="mb-4">Noticias: {{ ucfirst($categoria) }}</h1>

<div class="row text-center">
    @foreach($noticias as $noticia)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="{{ asset('images/'.$noticia->imagen) }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $noticia->titulo }}</h5>
                    <p class="card-text">{!! Str::limit($noticia->contenido, 101) !!}</p>
                    <a href="{{ route('noticias.show', $noticia) }}" class="btn btn-primary">Leer más</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-4">
    {{ $noticias->links() }}
</div>
@endsection
