<div class="dashboard-layout__crud__grid">
    <!--barra busqueda-->
    <div class="dashboard-layout__crud__grid__busqueda">
        <div class="dashboard-layout__crud__grid__busqueda__flex">
            <img src="{{asset("css/images/icons/buscar.svg")}}"/>
            <input>
        </div>
    </div>

    <!--acciones-->
    <div class="dashboard-layout__crud__grid__acciones">
        <button wire:click="abrirVentana('anadir')" class="layout__crud__grid__acciones__btn-accion">
            <img src="{{asset("css/images/icons/anadir_usuario.svg")}}"/>
            Añadir
        </button>
    </div>

    <!-- tabla -->
    <div class="dashboard-layout__crud__grid__tabla">
        <table>
            <tr>
                <th>Email</th>
                <th>Nombres</th>
                <th>Apellido</th>
                <th class="acciones">Acciones</th>
            </tr>

            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->nombres}}</td>
                    <td>{{$usuario->apellidos}}</td>
                    <td>
                        <button wire:click="abrirVentana('editarInformacion')">
                            <img src="{{asset("css/images/icons/editar_informacion.svg")}}"/>
                        </button>

                        <button wire:click="abrirVentana('editarRoles')">
                            <img src="{{asset("css/images/icons/editar_roles.svg")}}"/>
                        </button>

                        <button wire:click="abrirVentana('restablecerContrasena' )">
                            <img src="{{asset("css/images/icons/resetear_contrasena.svg")}}"/>
                        </button>
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

    @if($ventana != null )
        <div class="form-popup--overlay">
            @if($ventana == "anadir")
                <livewire:privada.usuarios.anadir/>
            @endif

            @if($ventana == "editarInformacion")
                <livewire:privada.usuarios.editar-informacion/>
            @endif

            @if($ventana == "editarRoles")
                <livewire:privada.usuarios.editar-roles/>
            @endif

            @if($ventana == "restablecerContrasena")
                <livewire:privada.usuarios.restablecer-contrasena/>
            @endif
        </div>
    @endif
</div>
