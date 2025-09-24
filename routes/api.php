<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;

// Todas las rutas aquí ya tienen el prefijo /api automáticamente
// (ejemplo: http://127.0.0.1:8000/api/login)

// Autenticación
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Usuarios (ejemplo CRUD protegido con sanctum o middleware de auth si luego activas)
Route::middleware('auth:sanctum')->group(function () {
    // Perfil del usuario autenticado
    Route::get('/profile', [UserController::class, 'profile']);

    // CRUD de usuarios
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::post('/users', [UserController::class, 'store']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);

    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);
});
