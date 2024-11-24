<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link href="{{ asset('css/global__layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard-layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard-layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard-layout__crud.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard-layout__tabla.css') }}" rel="stylesheet">

</head>
<body>
    <div class="dashboard-layout__grid">
        <div class="dashboard-layout__grid__barra-lateral__cabezera">

        </div>

        <div class="dashboard-layout__grid__barra-lateral__contenido">
        </div>

        <div class="dashboard-layout__grid__barra-superior">
            <h1>{{$title}}</h1>
        </div>

        <div class="dashboard-layout__grid__contenido">
            {{$slot}}
        </div>
    </div>
</body>
</html>
