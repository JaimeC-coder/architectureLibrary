<?php

namespace Architecturelibrary\Providers;


use Architecturelibrary\Commands\MakeRepository;
use Architecturelibrary\Commands\MakeService;
use Architecturelibrary\Commands\OptimizeApp;
use Architecturelibrary\Commands\MakeArchitecture;
use Architecturelibrary\Commands\MakeDtos;
use Illuminate\Support\ServiceProvider;


class ArchitecturelibraryServiceProvider extends ServiceProvider
{
    public function register()
    {
         \Illuminate\Support\Facades\Log::info('CommandsServiceProvider boot method called');
        // Registrar comandos
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeArchitecture::class,
                MakeDtos::class,
                MakeRepository::class,
                MakeService::class,
                OptimizeApp::class,
    
            ]);
        }
    }

    public function boot()
    {
        // Opcional: Publicar archivos de configuración, rutas, vistas, etc.
    }
}
