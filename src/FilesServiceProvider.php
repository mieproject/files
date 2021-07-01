<?php

namespace MieProject\Files;

use Illuminate\Support\ServiceProvider;

class FilesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require_once __DIR__ . '/helpers.php';

        $this->publishes([
            __DIR__.'/config/mie_files.php' => config_path('mie_files.php'),
        ]);
        $this->mergeConfigFrom(
            __DIR__.'/config/mie_files.php' , 'mie_files'
        );

        $this->loadViewsFrom(__DIR__.'/views', 'mie-files');

        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadMigrationsFrom(__DIR__.'/migrations');

    }
}
