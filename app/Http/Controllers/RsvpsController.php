<?php

namespace App\Http\Controllers;

use App\Rsvp;

class RsvpsController extends Controller
{
    public function store()
    {
        $this->validate(request(), ['name' => 'required']);

        Rsvp::create(array_filter(request()->only([
            'name',
            'vegetarian',
            'guest_name',
            'guest_vegetarian',
            'songs'
        ])));

        return redirect('/#rsvp')->with('rsvp', true);
    }

    protected function getRedirectUrl()
    {
        return '/#rsvp';
    }
}
