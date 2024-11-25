<div class="form-popup__grid autenticacion__form-popup__grid">
    <div class="form-popup__grid__relleno">

    </div>
    <div class="form-popup__grid__titulo">
        <h2>
            Sistema de Autenticación
        </h2>
    </div>

    <div class="form-popup__grid__cerrar">
    </div>

    <form class="form-popup__grid__contenido autenticacion__form-popup__grid__contenido" wire:submit="verificar()">
        <div class="form-popup__grid__contenido__entradas">
            <div class="popup__grid__contenido__entradas__flex autenticacion__centrar">

                <div class="popup__grid__contenido__entradas__flex__entry">
                    <p>
                        Estimado/a {{$nombres}}, hemos enviado un código a tu correo electronico {{$email}}, el cual debes adjuntar a continuación.
                    </p>
                </div>

                <div class="popup__grid__contenido__entradas__flex__entry">
                    <p wire:click="enviarEmail">
                        Si crees no haberlo recibido, haz click aquí
                    </p>
                </div>

                <div class="popup__grid__contenido__entradas__flex__entry">
                    <label>Codigo:</label>
                    <input wire:model="codigo">
                    <p class="error"> @error('codigo')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
            </div>
        </div>

        <div class="form-popup__grid__contenido__boton">
            <button type="submit">
                Verificar
            </button>
        </div>
    </form>

    <style>
        .autenticacion__centrar {
            justify-content: space-around;
            align-items: center;
        }
    </style>
</div>

