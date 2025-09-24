<?php

use Illuminate\Support\Facades\Route;

// Ruta principal (frontend o página de bienvenida)
Route::get('/', function () {
    return view('welcome');
});

// Si quieres que las rutas web usen un prefijo (ej: /app) lo puedes hacer así:
Route::prefix('app')->group(function () {
    Route::get('/', function () {
        return view('dashboard'); // ejemplo de vista
    });
});
