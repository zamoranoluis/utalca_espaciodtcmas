<div x-data="{
    editarFoto: 0,
    editarContrasena: 0,
    mostrarContrasena: false,
    tipoInputContrasena(){
        return this.mostrarContrasena ? 'text' : 'password';
    },
}" class="form-popup__grid">
    <div class="form-popup__grid__relleno">

    </div>
    <div class="form-popup__grid__titulo">
        <h2>
            {{$editarPerfil ? "Perfil" : "Editar usuario"}}
        </h2>
    </div>

    <div class="form-popup__grid__cerrar">
        <button wire:click="cerrarVentana()">
            X
        </button>
    </div>

    <form class="form-popup__grid__contenido" wire:submit="editar(editarFoto,editarContrasena)">
        <div class="form-popup__grid__contenido__entradas">
            <div class="popup__grid__contenido__entradas__flex">
                <div class="popup__grid__contenido__entradas__flex__entry">
                    <img class="popup__grid__contenido__entradas__flex__entry__img" src="{{$imagenParaMostrar}}"/>
                </div>

                <div class="popup__grid__contenido__entradas__flex__entry">
                    <label>Email:</label>
                    <input wire:model="email">
                    <p class="error"> @error('email')
                        {{ $message }}
                        @enderror
                    </p>
                </div>

                <div class="popup__grid__contenido__entradas__flex__entry">
                    <label>Nombres:</label>
                    <input wire:model="nombres">
                    <p class="error"> @error('nombres')
                        {{ $message }}
                        @enderror
                    </p>
                </div>

                <div class="popup__grid__contenido__entradas__flex__entry">
                    <label>Apellidos:</label>
                    <input wire:model="apellidos">
                    <p class="error"> @error('apellidos')
                        {{ $message }}
                        @enderror
                    </p>
                </div>

                <div class="popup__grid__contenido__entradas__flex__entry">
                    <label>Habilitado</label>
                    <select wire:model="habilitado">
                        <option selected>Sin seleccionar</option>
                        <option value="1">Habilitado</option>
                        <option value="0">Deshabilitado</option>
                    </select>
                    <p class="error">
                        @error('habilitado')
                        {{ $message }}
                        @enderror
                    </p>
                </div>

                <div class="popup__grid__contenido__entradas__flex__entry">
                    <label>¿Deseas editar la foto?</label>
                    <select x-model="editarFoto">
                        <option selected value="0">No</option>
                        <option value="1">Sí</option>
                    </select>
                </div>

                <div x-show="editarFoto == 1" class="popup__grid__contenido__entradas__flex__entry">
                    <label>Fotografia</label>
                    <input type="file" wire:model="foto">
                    <p class="error"> @error('foto')
                        {{ $message }}
                        @enderror
                    </p>
                </div>

                <div class="popup__grid__contenido__entradas__flex__entry">
                    <label>¿Deseas editar la contraseña?</label>
                    <select x-model="editarContrasena">
                        <option selected value="0">No</option>
                        <option value="1">Sí</option>
                    </select>
                </div>

                <div x-show="editarContrasena == 1" class="popup__grid__contenido__entradas__flex__entry">
                    <label>Contraseña:</label>
                    <div class="input_password">
                        <input x-bind:type="tipoInputContrasena" wire:model="password">
                        <img x-on:click="mostrarContrasena = !mostrarContrasena" x-show="mostrarContrasena == false" src="{{asset('css/images/icons/contrasena_visible.png')}}">
                        <img x-on:click="mostrarContrasena = !mostrarContrasena" x-show="mostrarContrasena == true" src="{{asset('css/images/icons/contrasena_oculta.png')}}">
                    </div>
                    <p class="error"> @error('password')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
            </div>
        </div>

        <div class="form-popup__grid__contenido__boton">
            <button type="submit">
                Editar
            </button>
        </div>
    </form>
</div>
