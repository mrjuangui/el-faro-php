@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Iniciar Sesión</h2>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password">
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="remember" id="remember">
            <label class="form-check-label" for="remember">Recordarme</label>
        </div>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

    <p class="mt-3">¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
</div>
@endsection
