@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Bienvenido, {{ Auth::user()->name }}!</h1>
    <p>Este es tu dashboard.</p>
</div>

<div class="card mb-3">
    <div class="card-header">Tu información</div>
    <div class="card-body">
        <p><strong>Nombre:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>Registrado desde:</strong> {{ Auth::user()->created_at->format('d/m/Y') }}</p>
    </div>
</div>



@endsection
