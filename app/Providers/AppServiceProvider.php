<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Request::macro('validate', function (...$args) {
        //     (new class { use ValidatesRequests; })->validate($this, ...$args);
        // });
    }

    public function register()
    {
    }
}
