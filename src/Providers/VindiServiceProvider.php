<?php

namespace Codemaxbr\Vindi\Providers;

use Codemaxbr\Vindi\Vindi;
use Illuminate\Support\ServiceProvider;

class VindiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/vindi.php' => config_path('vindi.php')
        ]);
    }

    public function register()
    {
        $this->app->bind('Codemaxbr\Vindi', function ($app) {
            return new Vindi(config()->get('vindi.apikey'));
        });
    }
}