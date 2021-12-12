<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('includes.mainWebsite.style')
  </head>
  <body>

    @include('includes.mainWebsite.navbar')
    <main>
        @yield('main')
    </main>
    @include('includes.mainWebsite.footer')
    @stack('addon-script')
    @include('includes.mainWebsite.script')
    
  </body>
</html>