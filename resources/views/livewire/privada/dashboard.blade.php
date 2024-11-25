<div class="dashboard__inicio">
    <img src="data:image/{{$usuario->foto_extension}};base64,{{$usuario->foto_base64}}"/>
    <p>Bienvenido/a</p>
    <p>{{$usuario->nombres}} {{$usuario->apellidos}}</p>

    <style>
        .dashboard__inicio {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-width: 100%;
            max-width: 100%;
            min-height: 100%;
            max-height: 100%;
        }

        .dashboard__inicio img {
            margin-bottom: 25px;
            min-width: 250px;
            max-width: 250px;
            min-height: 250px;
            max-height: 250px;
            border-radius: 50%;
        }

        .dashboard__inicio p {
            font-size: 25px;
        }
    </style>
</div>
