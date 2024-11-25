<div x-data="{
    mostrarContrasena: false,
    tipoInputContrasena(){
        return this.mostrarContrasena ? 'text' : 'password';
    },
}" class="form-popup__grid autenticacion__form-popup__grid">
    <div class="form-popup__grid__relleno">

    </div>
    <div class="form-popup__grid__titulo">
        <h2>
            Sistema de Autenticación
        </h2>
    </div>

    <div class="form-popup__grid__cerrar">
    </div>

    <form class="form-popup__grid__contenido autenticacion__form-popup__grid__contenido" wire:submit="iniciarSesion()">
        <div class="form-popup__grid__contenido__entradas">
            <div class="popup__grid__contenido__entradas__flex autenticacion__centrar">

                <div class="popup__grid__contenido__entradas__flex__entry">
                    <label>Email:</label>
                    <input wire:model="email">
                    <p class="error"> @error('email')
                        {{ $message }}
                        @enderror
                    </p>
                </div>

                <div class="popup__grid__contenido__entradas__flex__entry">
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
                Iniciar sesión
            </button>
        </div>
    </form>
</div>
