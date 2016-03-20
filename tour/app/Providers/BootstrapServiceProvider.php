<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     * Move twitter bootstrap CSS and JS into public directory     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(['vendor/twbs/bootstrap/dist' => public_path('vendor/bootstrap'),], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
