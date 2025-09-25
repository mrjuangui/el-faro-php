<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticuloSecundario;

class ArticuloSecundarioController extends Controller
{
    /**
     * Mostrar listado de artículos secundarios con paginación
     */
    public function index()
    {
        // Trae todos los artículos secundarios ordenados por fecha, paginados
        $articulos = ArticuloSecundario::latest()->paginate(9);

        return view('articulos_secundarios.index', compact('articulos'));
    }

    /**
     * Mostrar un artículo secundario específico
     */
    public function show(ArticuloSecundario $articulo)
    {
        return view('articulos_secundarios.show', compact('articulo'));
    }
}
