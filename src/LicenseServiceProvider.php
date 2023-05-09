<?php

use Illuminate\Support\ServiceProvider;

class LicenseServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        $this->publishes(
//            [
//                __DIR__.'/../config/vandar.php'=>config_path('vandar.php')
//            ]
//        );
    }

    public function register()
    {
        $this->app->singleton(License::class, function () {
            return new License();
        });
    }
}
