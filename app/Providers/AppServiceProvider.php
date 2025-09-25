<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Noticia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.app', function ($view) {
        $ticker = [
            'Última hora: Alertan por déficit presupuestario que "pone en riesgo el corazón del plan de emergencia habitacional',
            'Deportes: El nuevo rol de Alexis Sánchez en el Sevilla y cuándo regresa a La Liga',
            'Negocios: Gigante china busca tomar el control de Transelec, la mayor empresa de transmisión eléctrica de Chile',
            'Otros: Mon Laferte recibe dos nominaciones a los Grammy Latinos 2025: Bad Bunny lidera candidaturas con 12'
        ];

        $view->with('ticker', $ticker);
        });
    }
}
