<?php

namespace LBHurtado\XLegal;

use Illuminate\Support\ServiceProvider;

class XLegalServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/x-legal.php',
            'x-legal'
        );
    }

    public function boot(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../config/x-legal.php' => config_path('x-legal.php'),
            ],
            'x-legal-config'
        );
    }
}
