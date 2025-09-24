<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    // Listar todas las noticias
    public function index()
    {
        return Noticia::with('articulosSecundarios', 'user')->get();
    }

    // Crear noticia
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
        ]);

        $noticia = Noticia::create($validated);

        return response()->json($noticia, 201);
    }

    // Mostrar una noticia
    public function show($id)
    {
        return Noticia::with('articulosSecundarios', 'user')->findOrFail($id);
    }

    // Actualizar noticia
    public function update(Request $request, $id)
    {
        $noticia = Noticia::findOrFail($id);

        $noticia->update($request->all());

        return response()->json($noticia);
    }

    // Eliminar noticia
    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();

        return response()->json(['message' => 'Noticia eliminada']);
    }
}
