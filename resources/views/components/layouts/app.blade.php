<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/autenticacion.css.css') }}" rel="stylesheet">

</head>
<body>
    {{ $slot }}
</body>
</html>
