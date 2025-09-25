@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $noticia->titulo }}</h1>
    <p class="text-muted">{{ $noticia->created_at->format('d M Y') }}</p>
    <img src="{{ asset('images/' . $noticia->imagen) }}" alt="{{ $noticia->titulo }}" style="display: block; margin: 0 auto;" class="img-fluid rounded mb-4">
    <div class="mt-4">
        {!! ($noticia->contenido) !!}
    </div>
    
</div>
@endsection
