<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Request::macro('filter', function () {
            $collection = collect($this->all());
            return call_user_func_array([$collection, 'filter'], func_get_args());
        });
    }

    public function register()
    {
    }
}
