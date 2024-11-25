<div class="form-popup__grid">
    <div class="form-popup__grid__relleno">

    </div>
    <div class="form-popup__grid__titulo">
        <h2>
            Añadir usuario
        </h2>
    </div>

    <div class="form-popup__grid__cerrar">
        <button wire:click="cerrarVentana()">
            X
        </button>
    </div>

    <form class="form-popup__grid__contenido" wire:submit="anadir()">
        <div class="form-popup__grid__contenido__entradas">
            <div class="popup__grid__contenido__entradas__flex">
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
                    <label>Contraseña:</label>
                    <input wire:model="password">
                    <p class="error"> @error('password')
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
                    <label>Fotografia</label>
                    <input type="file" wire:model="foto">
                    <p class="error"> @error('foto')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
            </div>
        </div>

        <div class="form-popup__grid__contenido__boton">
            <button type="submit">
                Añadir
            </button>
        </div>
    </form>
</div>
