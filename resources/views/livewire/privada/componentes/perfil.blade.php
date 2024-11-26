<div class="dashboard-layout__grid__barra-superior__perfil">

    <img wire:click="abrirPerfil()" class="icono_perfil"
         src="data:image/{{Auth::user()->foto_extension}};base64,{{Auth::user()->foto_base64}}"/>

    @if($perfil)
        <div class="form-popup--overlay">
            <livewire:privada.usuarios.editar-informacion editar-perfil="1"/>
        </div>
    @endif
</div>
