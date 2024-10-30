<?php

namespace App\Providers;

use App\Http\Controllers\TestObj;
use App\Http\Controllers\Dummy;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        info("AppServiceProvider registered");
        $this->app->singleton(Dummy::class, function () {
            return new Dummy();
        });
        $this->app->singleton(TestObj::class, function () {
            return new TestObj(app(Dummy::class)); # Dummy:class is resolved right away, so it will be passed to the sandbox.
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        info("AppServiceProvider booted");
        app(TestObj::class); # TestObj:class gets resolved during boot process, so sandbox will use original instance.
        # app('defobj');
    }
}
