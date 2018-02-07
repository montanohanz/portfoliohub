@component('components.html')
  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Cover</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="/portfolio">Portfolio</a>
            <a class="nav-link" href="/contact">Contact</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <!-- replace with picture grid -->
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        </div>
      </footer>
    </div>


    @component('components.bootstrap.js') @endcomponent
  </body>
@endcomponent
