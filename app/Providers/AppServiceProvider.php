<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Request::macro('validate', function ($rules, $messages = [], $customAttributes = []) {
            (new class {
                use ValidatesRequests;
            })->validate($this, $rules, $messages, $customAttributes);
        });
    }

    public function register()
    {
    }
}
