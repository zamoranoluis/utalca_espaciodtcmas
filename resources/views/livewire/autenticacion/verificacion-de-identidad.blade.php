<div id="autenticacion__page">
    <form id="form_verificacion_codigo" wire:submit="verificar">
        @csrf

        <p>
            Estimado/a {{$nombre}}, hemos enviado un código a tu correo electronico {{$email}}, el cual debes adjuntar a continuación.
        </p>

        <p wire:click="enviarEmail">
            Si crees no haberlo recibido, haz click aquí
        </p>

        <div class="input">
            <label>Codigo</label>
            <input wire:model="codigo">
        </div>

        <button type="submit">
            Verificar codigo
        </button>
    </form>

    <style>
        #autenticacion__page #form_verificacion_codigo {
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 1fr 2fr 1fr;
        }

        #autenticacion__page #reenviar-correo {

        }
    </style>
</div>
