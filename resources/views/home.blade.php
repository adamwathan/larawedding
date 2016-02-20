<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <title>Adam &amp; Katharine are getting married!</title>
        <link rel="stylesheet" href="/css/app.css">
        <script src="https://use.typekit.net/qwi2wql.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
    </head>
    <body>
        <header class="hero">
            <div class="hero-content">
                <h1 class="text-uppercase text-xxl wt-lt line-height-tight text-justify text-justify-short">Adam &amp; Katharine</h1>
                <h2 class="text-uppercase text-xsl wt-hvy text-justify text-spaced-sm">are getting married.</h2>
                <h3 class="text-uppercase text-lg wt-lt text-justify text-spaced">May 27, 2016 in Cambridge, ON</h3>
            </div>
        </header>
        <section id="rsvp" class="page-section">
            @if (session('rsvp', false))
                <div class="text-center container-sm">
                    <h3>Thanks for your RSVP!</h3>
                </div>
            @else
                <h3>RSVP</h3>
                <form action="/rsvps" method="POST" class="text-left container-sm">
                    {{ csrf_field() }}
                    <label class="form-group {!! $errors->first('name', 'has-error') !!}">
                        <span class="form-label">Name</span>
                        <input type="text" class="form-control" name="name">
                        <p class="form-control-feedback">
                            It looks like you forgot to give us your name!
                        </p>
                        <label class="form-checkbox">
                            <input type="checkbox" name="vegetarian" value="1">
                            Vegetarian?
                        </label>
                    </label>
                    <label class="form-group">
                        <span class="form-label">Guest (if applicable)</span>
                        <input type="text" class="form-control" name="guest_name">
                        <label class="form-checkbox">
                            <input type="checkbox" name="guest_vegetarian" value="1">
                            Vegetarian?
                        </label>
                    </label>
                    <label class="form-group">
                        <span class="form-label">Recommend a song (or 3) you'd like to hear</span>
                        <textarea class="form-control" name="songs"></textarea>
                    </label>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">RSVP</button>
                </form>
            @endif
        </section>
        <section class="page-section bg-gray">
            <h3>Schedule</h3>
        </section>
        <section class="page-section">
            <h3>Location &amp; Accommodations</h3>
        </section>
        <section class="page-section bg-gray">
            <h3>Gift Registry</h3>
        </section>
    </body>
</html>
