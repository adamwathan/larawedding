<p>You've received a new RSVP!</p>

<strong>Name</strong>
<p>{{ $rsvp->name }}</p>
<br>
@if ($rsvp->guest_name)
<strong>Guest</strong>
<p>{{ $rsvp->guest_name }}</p>
<br>
@endif
<strong>Songs</strong>
<p>{{ $rsvp->songs }}</p>
