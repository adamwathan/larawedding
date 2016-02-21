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
                <h1 class="hero-h1">Adam &amp; Katharine</h1>
                <h2 class="hero-h2">are getting married.</h2>
                <h3 class="hero-h3">May 27, 2016 in Cambridge, ON</h3>
            </div>
        </header>
        <section class="page-section">
            @include('rsvp')
        </section>
        <section class="page-section bg-gray">
            @include('schedule')
        </section>
        <section class="page-section">
            @include('location')
        </section>
        <section class="page-section bg-gray">
            @include('accommodations')
        </section>
        <section class="page-section">
            @include('gift-registry')
        </section>
    </body>
</html>
