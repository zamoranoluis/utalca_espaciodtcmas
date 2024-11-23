<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

</head>
<body id="body__dashboard">
<div id="dashboard_layout">
    <div id="dashboard__barra-lateral">
        <livewire:privada.barra-lateral/>
    </div>

    <div>
        <div id="dashboard__barra-navegacion">
            <livewire:privada.barra-navegacion/>
        </div>

        <div id="dashboard__contenido">
            {{ $slot }}
        </div>
    </div>
</div>

<style>
    #dashboard_layout {
        display: flex;
        flex-direction: row;
        min-width: 100vw;
        max-width: 100vw;
        max-height: 100vh;
        min-height: 100vh;
    }


    #dashboard__barra-navegacion {
        background-color: #f69032;
        max-height: 8vh;
        min-height: 8vh;

        @media (max-width: 700px) {
            min-width: 100vw;
            max-width: 100vw;
        }

        @media (min-width: 700px) {
            min-width: 80vw;
            max-width: 80vw;
        }
    }

    #dashboard__barra-lateral {
        background-color: #355f90;

        @media (max-width: 700px) {
            display: none;
            position: fixed;
            min-width: 70vw;
            max-width: 70vw;
            max-height: 100vh;
            min-height: 100vh;
        }

        @media (min-width: 700px) {
            min-width: 20vw;
            max-width: 20vw;
            max-height: 100vh;
            min-height: 100vh;
        }
    }

    #dashboard__contenido {
        max-height: 92vh;
        min-height: 92vh;

        @media (max-width: 700px) {
            min-width: 100vw;
            max-width: 100vw;
        }

        @media (min-width: 700px) {
            min-width: 80vw;
            max-width: 80vw;
        }
    }

</style>
</body>
</html>
