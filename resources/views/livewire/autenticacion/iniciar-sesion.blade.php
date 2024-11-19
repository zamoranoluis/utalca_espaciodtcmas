<div id="autenticacion__page">
    <form id="form_iniciar-sesion" wire:submit="iniciarSesion">
        <div class="input">
            <label>Email</label>
            <input wire:model="email">
        </div>

        <div class="input">
            <label>Contraseña</label>
            <input wire:model="contrasena">
        </div>

        <button type="submit">
            Iniciar sesión
        </button>
    </form>

    <style>
        #autenticacion__page #form_iniciar-sesion {
            grid-template-columns: 1fr;
            grid-template-rows: 2fr 2fr 1fr;
        }
    </style>
</div>

