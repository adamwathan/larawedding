<?php

namespace App\Http\Controllers;

use App\Rsvp;
use Illuminate\Support\Facades\Mail;

class RsvpsController extends Controller
{
    public function store()
    {
        $this->validate(request(), ['name' => 'required']);

        $rsvp = Rsvp::create(request()->filter()->only([
            'name',
            'vegetarian',
            'guest_name',
            'guest_vegetarian',
            'songs'
        ])->all());

        Mail::send('emails.rsvp', ['rsvp' => $rsvp], function ($m) {
            $m->to(['adam.wathan@gmail.com', 'katharine.lichty@gmail.com'])
                ->subject("New RSVP!");
        });

        return redirect('/#rsvp')->with('rsvp', true);
    }

    protected function getRedirectUrl()
    {
        return '/#rsvp';
    }
}
