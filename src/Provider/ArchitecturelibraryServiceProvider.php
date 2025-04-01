<?php

namespace Architecturelibrary\Providers;

use Architecturelibrary\Commands\MakeDtos;
use Architecturelibrary\Commands\MakeRepository;
use Architecturelibrary\Commands\MakeService;
use Architecturelibrary\Commands\OptimizeApp;
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
