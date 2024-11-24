<div class="contenedor-tabla" role="region" aria-label="Tabla de usuarios">
    <table class="tabla__usuarios">
        <tr>
            <th>Email</th>
            <th>Nombres</th>
            <th>Apellido</th>
            <th>Estado habilitado</th>
            <th class="acciones">Acciones</th>
        </tr>

        @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->nombres}}</td>
                <td>{{$usuario->apellidos}}</td>
                <td>{{$usuario->habilitado ? "Habilitado" : "Deshabilitado"}}</td>
                <td>
                    <button>Editar</button>
                </td>
            </tr>
        @endforeach
    </table>
    <div>
        <button {{ $this->paginaActual == 0 ? 'disabled' : '' }} wire:click="retrocederPagina"><</button>
        @for($i=0; $i<$cantidadPaginas; $i++)
            <button wire:click="cambiarPagina({{$i}})">
                {{$i+1}}
            </button>
        @endfor
        <button {{ $this->paginaActual == $cantidadPaginas - 1 ? 'disabled' : '' }} wire:click="avanzarPagina">></button>
    </div>



    <style>
        .contenedor-tabla {
            overflow: auto;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            max-height: 70vh;
            margin-bottom: 20px;
        }

        .tabla__usuarios {
            width: 100%;
            border-collapse: collapse;
            display: block;
        }

        .tabla__usuarios th:first-child,
        .tabla__usuarios td:first-child {
            width: 20vw;
        }

        .tabla__usuarios th:nth-child(2),
        .tabla__usuarios td:nth-child(2) {
            width: 20vw;
        }

        .tabla__usuarios th:nth-child(3),
        .tabla__usuarios td:nth-child(3) {
            width: 20vw;
        }

        .tabla__usuarios th:nth-child(4),
        .tabla__usuarios td:nth-child(4) {
            width: 20vw;
        }

        .tabla__usuarios th:last-child,
        .tabla__usuarios td:last-child {
            width: 20vw;
        }

        .tabla__usuarios th,
        .tabla__usuarios td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: center;
            white-space: nowrap;
        }

        .tabla__usuarios th {
            background-color: #f2f2f2;
            font-weight: bold;
        }


        /* Estilos para dispositivos móviles */
        @media screen and (max-width: 768px) {
            .contenedor-tabla {
                width: 95%; /* Ajusta el ancho para móvil si es necesario */
                max-height: 80vh;
            }

        }
    </style>
</div>
