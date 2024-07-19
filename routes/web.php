<?php

use App\Http\Controllers\TestObj;
use Illuminate\Support\Facades\Route;

// $backtrace = debug_backtrace(limit: 2);
// $provider_class = $backtrace[1]['class'];
// $this->bind_to_providers = array_merge_recursive($this->bind_to_providers, [$provider_class => $abstract]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get', function () {
    return [app(TestObj::class)->getDate(), app(TestObj::class)->getObj()->get()];
});

Route::get('/inc', function () {
    app(TestObj::class)->getObj()->inc();
    return [app(TestObj::class)->getDate(), app(TestObj::class)->getObj()->get()];
});
