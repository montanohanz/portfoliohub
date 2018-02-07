<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('siteTitle')</title>



    @component('components.bootstrap.css') @endcomponent
    @component('components.bootstrap.custom.css') @endcomponent
</head>
 <body class="text-center">
    <div class="container">
      <main role="main" class="inner cover">
        <h1 class="cover-heading">Hi! Im Hanz.</h1>
        <p class="lead">I’m a photographer, graphic artist, and YouTuber. I love taking portraits of my friends and giving them the opportunity to express themselves through photographs. I currently volunteer as a photographer, videographer, singer, and social media manager for GCF Youth L.I.V.E.</p>
        <p class="lead">Got ideas or wanna collaborate? Shoot me an e-mail! montanohanz@gmail.com</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
        </p>
      </main>
    </div>

    @component('components.bootstrap.js') @endcomponent
    </body>
</html>
