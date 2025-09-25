@extends('layouts.app')

@section('content')
<h1 class="mb-4">Artículos Secundarios</h1>

<div class="row">
    @foreach($articulos as $articulo)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $articulo->titulo }}</h5>
                    <p class="card-text">{{ Str::limit($articulo->contenido, 100) }}</p>
                    <a href="{{ route('articulos_secundarios.show', $articulo) }}" class="btn btn-primary">Leer más</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-4">
    {{ $articulos->links() }}
</div>
@endsection
