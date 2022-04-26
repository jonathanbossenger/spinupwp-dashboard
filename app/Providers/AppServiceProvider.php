<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DeliciousBrains\SpinupWp\SpinupWp;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SpinupWp::class, fn ($app) => new SpinupWp(config('services.spinupwp.api_token')));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
