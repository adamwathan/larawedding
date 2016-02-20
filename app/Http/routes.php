<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::post('rsvps', 'RsvpsController@store');
});
