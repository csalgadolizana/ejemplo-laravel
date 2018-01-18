<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('cdd/grid.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('cdd/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('cdd/camera.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('cdd/owl.carousel.css') }}">
        <script src="{{ 'js/jquery.js' }}"></script>
        <script src="{{ 'js/jquery-migrate-1.2.1.js' }}"></script>

            
    </head>
    <body>
        @yield('content')
        
    </body>
</html>
