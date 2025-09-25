<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    // Noticias destacadas para la página de inicio
    public function destacadas()
    {
        $ticker = [
            'Última hora: Alertan por déficit presupuestario que "pone en riesgo el corazón del plan de emergencia habitacional',
            'Deportes: El nuevo rol de Alexis Sánchez en el Sevilla y cuándo regresa a La Liga',
            'Negocios: Gigante china busca tomar el control de Transelec, la mayor empresa de transmisión eléctrica de Chile',
            'Otros: Mon Laferte recibe dos nominaciones a los Grammy Latinos 2025: Bad Bunny lidera candidaturas con 12'
        ];

        // Noticias destacadas para el carrusel
        $destacadas = Noticia::where('destacado', 1)->latest()->take(3)->get();

        // Noticias por categorías
        $deportes = Noticia::where('categoria', 'deporte')->latest()->take(3)->get();
        $negocios = Noticia::where('categoria', 'negocios')->latest()->take(3)->get();
        $otros = Noticia::where('categoria', 'otros')->latest()->take(3)->get();

        return view('index', compact('destacadas', 'deportes', 'negocios', 'otros', 'ticker'));
    }

    // Listado de todas las noticias
    public function index()
    {
        $noticias = Noticia::latest()->paginate(9);
        return view('noticias.index', compact('noticias'));
    }

    // Mostrar noticia individual
    public function show($slug)
{
    $ticker = [
            'Última hora: Alertan por déficit presupuestario que "pone en riesgo el corazón del plan de emergencia habitacional',
            'Deportes: El nuevo rol de Alexis Sánchez en el Sevilla y cuándo regresa a La Liga',
            'Negocios: Gigante china busca tomar el control de Transelec, la mayor empresa de transmisión eléctrica de Chile',
            'Otros: Mon Laferte recibe dos nominaciones a los Grammy Latinos 2025: Bad Bunny lidera candidaturas con 12'
        ];
    $noticia = Noticia::where('slug', $slug)->firstOrFail();
    return view('noticias.show', compact('noticia', 'ticker'));
}


    // Noticias filtradas por categoría
    public function categoria($categoria)
    {
        $noticias = Noticia::where('categoria', $categoria)->latest()->paginate(9);
        return view('noticias.categoria', compact('noticias', 'categoria'));
    }
}
