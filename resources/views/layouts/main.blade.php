<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Grupo HR</title>
    <meta name="description" content="El objetivo de cada trabajo de construcción es encontrar una expresión que vaya más allá de lo necesario..">
    <meta name="keywords" content="diseño, interiores, diseño de interiores">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1c1917">
    <meta name="msapplication-TileColor" content="#1c1917">
    <meta name="theme-color" content="#1c1917">    

    <meta property="og:type" content="website">
    <meta property="og:image:height" content="266">
    <meta property="og:image:width" content="508">
    <meta property="og:title" content="Grupo HR">
    <meta property="og:description" content="Los proyectos se desarrollan dentro de su contexto cultural y reflejan las características específicas de su situación.">
    <meta property="og:url" content="www.grupohr.mx">
    <meta property="og:image" content="www.grupohr.mx/tile-wide.png">
    
    <link rel="canonical" href="http://www.grupohr.mx">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    @stack('styles')

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
  <body>
    <main>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Gsap -->
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>

    <script src="{{ asset('vendor/rellax-master/rellax.min.js') }}"></script>
    <script>
      // Accepts any class name
      var rellax = new Rellax('.parallax', {
        center:true,
      });
    </script>

    <script src="{{ asset('js/scripts.js') }}"></script>
    @stack('scripts')     
</body>
</html>