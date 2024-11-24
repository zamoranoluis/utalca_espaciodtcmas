<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link href="{{ asset('css/global__layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form-popup.css') }}" rel="stylesheet">
</head>
<body>
    {{ $slot }}
</body>
</html>
