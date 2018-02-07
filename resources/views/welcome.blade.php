@component('components.html')
 <body class="text-center">
    <div class="container d-flex" style="height: 500px;">
      <main role="main" class="inner cover justify-content-center align-self-center">
        <h1 class="cover-heading">Hi! Im Hanz.</h1>
        <p class="lead">I’m a photographer, graphic artist, and <a style="color: #fa7465;" href="https://www.youtube.com/channel/UCNopgqss-UM_RYuqhnPRreg">YouTuber</a>. I love taking portraits of my friends and giving them the opportunity to express themselves through photographs. I currently volunteer as a photographer, videographer, singer, and social media manager for <a style="color: #fa7465;" href="http://www.facebook.com/gcfyouthlive">GCF Youth L.I.V.E.</a></p>
        <p class="lead">Got ideas or wanna collaborate? Shoot me an e-mail! <a style="color: #fa7465;" href="mailto:montanohanz@gmail.com">montanohanz@gmail.com</a></p>
        <p class="lead">Social type? - <a style="color: #fa7465;" href="http://www.twitter.com/hanz_ome">Twitter</a> and <a style="color: #fa7465;" href="http://instagram.com/montanohanz">Instagram</a></p>
        <p class="lead">
          <a href="{{ url('portfolio') }}" class="btn btn-lg btn-secondary">Portfolio</a>
        </p>
      </main>
    </div>

    @component('components.bootstrap.js') @endcomponent
    </body>
@endcomponent
