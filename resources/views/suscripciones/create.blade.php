@extends('layouts.app')

@section('content')
<h2>Suscribirse a El Faro</h2>
@if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif

<form action="{{ route('suscripciones.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="plan" class="form-label">Selecciona un plan:</label>
        <select name="plan" id="plan" class="form-select" required>
            <option value="gratis">Gratis</option>
            <option value="premium">Premium</option>
        </select>
    </div>
    <button class="btn btn-primary">Activar Suscripción</button>
</form>
@endsection
