<div class="dashboard-layout__crud__grid">
    <!--barra busqueda-->
    <div class="dashboard-layout__crud__grid__busqueda">
        <div class="dashboard-layout__crud__grid__busqueda__flex">
            <label>Busqueda:</label>
            <input>
        </div>
    </div>

    <!--acciones-->
    <div class="dashboard-layout__crud__grid__acciones">
        <button>Agregar</button>
    </div>

    <!-- tabla -->
    <div class="dashboard-layout__crud__grid__tabla">
        <table>
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

    </div>

    <!-- paginador -->
    <div class="dashboard-layout__crud__grid__paginador">
        <div class="dashboard-layout__crud__grid__paginador__flex">
            <button {{ $this->paginaActual == 0 ? 'disabled' : '' }} wire:click="retrocederPagina"><</button>
            @for($i=0; $i<$cantidadPaginas; $i++)
                <button wire:click="cambiarPagina({{$i}})">
                    {{$i+1}}
                </button>
            @endfor
            <button {{ $this->paginaActual == $cantidadPaginas - 1 ? 'disabled' : '' }} wire:click="avanzarPagina">>
            </button>
        </div>
    </div>
</div>
