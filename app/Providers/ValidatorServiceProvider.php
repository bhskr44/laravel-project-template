<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ValidatorService;

class ValidatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ValidatorService::class, function ($app) {
            return new ValidatorService();
        });
    }

    public function boot()
    {
        //
    }
}
