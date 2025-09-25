<?php

namespace App\Http\Controllers;

use App\Models\Suscripcion;
use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    public function create()
    {
        return view('suscripciones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'plan' => 'required|string|in:gratis,premium',
        ]);

        $user = $request->user();

        $suscripcion = Suscripcion::create([
            'user_id' => $user->id,
            'plan' => $request->plan,
            'estado' => 'activo',
            'fecha_inicio' => now(),
            'fecha_fin' => now()->addMonth(),
        ]);

        return redirect()->route('home')->with('success','Suscripción activada correctamente.');
    }
}
