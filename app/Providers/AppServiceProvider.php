<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Request::macro('filter', function (...$args) {
            return collect($this->all())->filter(...$args);
        });
    }

    public function register()
    {
    }
}
