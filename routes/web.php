<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ArticuloSecundarioController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\SuscripcionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Página de inicio
Route::get('/', [NoticiaController::class, 'destacadas'])->name('home');

// Noticias
Route::get('/noticias', [NoticiaController::class,'index'])->name('noticias.index');
Route::get('/noticias/{noticia}', [NoticiaController::class,'show'])->name('noticias.show');
Route::get('/noticias/{slug}', [NoticiaController::class, 'show'])->name('noticias.show');

// Noticias por categoría
Route::get('/categoria/{categoria}', [NoticiaController::class, 'categoria'])->name('noticias.categoria');

// Artículos Secundarios
Route::get('/articulos_secundarios', [ArticuloSecundarioController::class,'index'])->name('articulos_secundarios.index');
Route::get('/articulos_secundarios/{articulo}', [ArticuloSecundarioController::class,'show'])->name('articulos_secundarios.show');

// Contacto
Route::get('/contacto', [ContactoController::class,'create'])->name('contacto.create');
Route::post('/contacto', [ContactoController::class,'store'])->name('contacto.store');

// Suscripciones (solo usuarios logueados)
Route::middleware(['auth'])->group(function(){
    Route::get('/suscripciones', [SuscripcionController::class,'create'])->name('suscripciones.create');
    Route::post('/suscripciones', [SuscripcionController::class,'store'])->name('suscripciones.store');
});

// Registro de usuarios
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Login de usuarios
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

// Logout de usuarios
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

// Dashboard (solo usuarios logueados)
Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
