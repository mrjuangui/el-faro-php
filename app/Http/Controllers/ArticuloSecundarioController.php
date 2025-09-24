<?php

namespace App\Http\Controllers;

use App\Models\ArticuloSecundario;
use Illuminate\Http\Request;

class ArticuloSecundarioController extends Controller
{
    public function index()
    {
        return ArticuloSecundario::with('noticia')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'noticia_id' => 'required|exists:noticias,id',
        ]);

        $articulo = ArticuloSecundario::create($validated);

        return response()->json($articulo, 201);
    }

    public function show($id)
    {
        return ArticuloSecundario::with('noticia')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $articulo = ArticuloSecundario::findOrFail($id);

        $articulo->update($request->all());

        return response()->json($articulo);
    }

    public function destroy($id)
    {
        $articulo = ArticuloSecundario::findOrFail($id);
        $articulo->delete();

        return response()->json(['message' => 'Artículo eliminado']);
    }
}
