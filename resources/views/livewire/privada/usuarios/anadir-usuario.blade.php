<form class="form-popup" wire:submit="crear">
    @csrf
    <!-- --------- HEADER ---------------->
    <div class="form-popup__header">
        <div class="form-popup__header__relleno">

        </div>
        <div class="form-popup__header__titulo">
            <h1>Crear Usuario</h1>
        </div>
        <div class="form-popup__header__cerrar">
            <button wire:click="cerrarVentana()">X</button>
        </div>
    </div>

    <!-- ---------  CONTENIDO ---------------->
    <div class="form-popup__contenido">
        <div class="input">
            <label>Email</label>
            <input wire:model="email">
            <p class="error"> @error('email')
                {{ $message }}
                @enderror
            </p>
        </div>

        <div class="input">
            <label>Nombres</label>
            <input wire:model="nombres">
            <p class="error"> @error('nombres')
                {{ $message }}
                @enderror
            </p>
        </div>

        <div class="input">
            <label>Apellidos</label>
            <input wire:model="apellidos">
            <p class="error"> @error('apellidos')
                {{ $message }}
                @enderror
            </p>
        </div>

        <div class="input">
            <label>Contraseña</label>
            <input wire:model="password">
            <p class="error"> @error('password')
                {{ $message }}
                @enderror
            </p>
        </div>

        <div class="input__file">
            <label>Fotografia</label>
            <input type="file" wire:model="foto">
            <p class="error"> @error('foto')
                {{ $message }}
                @enderror
            </p>
        </div>

        <div class="select">
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
    </div>

    <!-- ---------  BOTONERA ---------------->
    <div class="form-popup__barra-inferior">
        <div class="form-popup__barra-inferior__botonera">
            <button type="submit">Crear usuario</button>
        </div>
    </div>
</form>

