<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'vamosfechar') }}</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"></script>
</head>
<body>
    <div id="app">
        <nav>
            <div class="nav-wrapper orange">
                 <div class="container">
                    <a href="{{ route('site_.site_.home') }}" class="brand-logo">vamosfechar</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#">Inicio</a></li>
                   </ul>
                 </div> 
             </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="#">Inicio</a></li>
        </ul>
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>           
     <script src="{{ asset('js/init.js') }}"></script>

    </body> 
            
</html>
