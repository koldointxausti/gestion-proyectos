<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
        <script src="{{asset('/lib/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('/js/bootstrap/bootstrap.min.js')}}"></script>

    </head>
    <body>
        <nav>
            <ul>
                <li class="logo"><a href="#"><img src="/img/logo.svg"></a></li>
                <li><a href="#">Empleados</a></li>
                <li><a href="#">Proyectos</a></li>
                <li><a href="#">Departamentos</a></li>
            </ul>
        </nav>
        <div id="main-content">
            @yield('content')
        </div>
    </body>
</html>
