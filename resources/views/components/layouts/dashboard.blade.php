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
            <img src="{{asset('css/images/espaciodtc.png')}}" />
        </div>

        <div class="dashboard-layout__grid__barra-lateral__contenido">
            <div class="dashboard-layout__grid__barra-lateral__contenido__flex">
                <div class="dashboard-layout__grid__barra-lateral__contenido__entry">
                   <img src="{{asset("/css/images/icons/home.svg")}}"/>
                    <a>Inicio</a>
                </div>

                <div class="dashboard-layout__grid__barra-lateral__contenido__entry">
                    <img src="{{asset("/css/images/icons/users.svg")}}"/>
                    <a>Usuarios</a>
                </div>

                <div class="dashboard-layout__grid__barra-lateral__contenido__entry">
                    <img src="{{asset("/css/images/icons/entidades.svg")}}"/>
                    <a>Entidades</a>
                </div>

                <div class="dashboard-layout__grid__barra-lateral__contenido__entry">
                    <img src="{{asset("/css/images/icons/lineas-de-trabajo.svg")}}"/>
                    <a>Lineas de trabajo</a>
                </div>

                <div class="dashboard-layout__grid__barra-lateral__contenido__entry">
                    <img src="{{asset("/css/images/icons/actividades.svg")}}"/>
                    <a>Actividades</a>
                </div>

                <div class="dashboard-layout__grid__barra-lateral__contenido__entry">
                    <img src="{{asset("/css/images/icons/calendario.svg")}}"/>
                    <a>Calendario</a>
                </div>

                <div class="dashboard-layout__grid__barra-lateral__contenido__entry">
                    <img src="{{asset("/css/images/icons/impacto.svg")}}"/>
                    <a>Impacto</a>
                </div>

            </div>
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
