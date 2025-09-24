<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Listar todos
    public function index()
    {
        return User::all();
    }

    // Mostrar uno
    public function show($id)
    {
        return User::findOrFail($id);
    }

    // Crear usuario
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json($user, 201);
    }

    // Actualizar usuario
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->only('name', 'email'));

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
            $user->save();
        }

        return response()->json($user);
    }

    // Eliminar usuario
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'Usuario eliminado']);
    }

    // Perfil del usuario autenticado
    public function profile(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'user' => $request->user()
        ]);
    }

}
