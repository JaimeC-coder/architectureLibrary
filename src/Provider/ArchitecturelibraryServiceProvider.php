<?php

namespace MiPaquete\Providers;

use App\Console\Commands\MakeDtos;
use App\Console\Commands\MakeRepository;
use App\Console\Commands\MakeService;
use App\Console\Commands\OptimizeApp;
use Architecturelibrary\Commands\MakeArchitecture;
use Illuminate\Support\ServiceProvider;


class ArchitecturelibraryServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Registrar comandos
        $this->commands([
            MakeArchitecture::class,
            MakeDtos::class,
            MakeRepository::class,
            MakeService::class,
            OptimizeApp::class,

        ]);
    }

    public function boot()
    {
        // Opcional: Publicar archivos de configuración, rutas, vistas, etc.
    }
}
