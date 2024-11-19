<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/autenticacion.css') }}" rel="stylesheet">

</head>
<body id="body__autenticacion">
    <div id="autenticacion__layout">
        <div class="titulo">
            <h1>Sistema de autenticación</h1>
        </div>
        {{ $slot }}
    </div>
</body>
</html>
