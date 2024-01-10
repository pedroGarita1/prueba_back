<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/dt/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/dt/css/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/dt/css/buttons.bootstrap5.min.css') }}">
    <title>Prueba Back-End || {{ $titulo }}</title>
</head>
<body>
    @yield('contenido')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('lib/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('lib/dt/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('lib/dt/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('lib/dt/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('lib/dt/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('lib/dt/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('lib/dt/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('lib/dt/js/jszip.min.js') }}"></script>
    <script src="{{ asset('lib/dt/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('lib/dt/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('lib/dt/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('lib/dt/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('lib/dt/js/buttons.colVis.min.js') }}"></script>
    @yield('js')
</body>
</html>