<?php

namespace App\Providers;

use App\Http\Controllers\TestObj;
use App\Http\Controllers\Dummy;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Laravel\Octane\Events\RequestReceived;


class DeferableServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        info("Deferable registered");
        $this->app->singleton('defobj', function () {
            return new TestObj(new Dummy());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        info("Deferable booted");
    }

    // public function when()
    // {
    //     return [RequestReceived::class];
    // }

    public function provides()
    {
        return ['defobj'];
    }
}
