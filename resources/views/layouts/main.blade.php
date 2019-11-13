<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
        <script src="{{asset('/lib/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('/js/bootstrap/bootstrap.min.js')}}"></script>

    </head>
    <body>
        <nav>
            <ul>
                <li class="logo"><a href="#"><img src="{{asset('/img/logo.svg')}}"></a></li>
                <li><a href="{{route('empleados')}}">Empleados</a></li>
                <li><a href="{{route('proyectos')}}">Proyectos</a></li>
                <li><a href="{{route('departamentos')}}">Departamentos</a></li>
            </ul>
        </nav>
        <div id="main-content">
            @yield('content')
        </div>
        <footer>Koldo Intxausti &copy 2019</footer>
    </body>
</html>
