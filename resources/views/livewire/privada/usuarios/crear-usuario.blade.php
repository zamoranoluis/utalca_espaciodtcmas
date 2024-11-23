<form wire:submit="save">
    @csrf

    <div class="input">
        <label>Email</label>
        <input>
    </div>

    <div class="input">
        <label>Nombres</label>
        <input>
    </div>

    <div class="input">
        <label>Apellidos</label>
        <input>
    </div>

    <div class="input">
        <label>Contraseña</label>
        <input>
    </div>

    <div class="select">
        <label>Estado habilitado</label>
        <select>
            <option selected>Sin seleccionar</option>
            <option>Habilitado</option>
            <option>Deshabilitado</option>
        </select>
    </div>



    <button type="submit">Crear usuario</button>
</form>
