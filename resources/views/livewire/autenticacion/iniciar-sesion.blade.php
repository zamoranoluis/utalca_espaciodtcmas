<div>
    <h1>Iniciar sesión</h1>
    <div>
        <label>Email</label>
        <input wire:model="email">
    </div>

    <div>
        <label>Contraseña</label>
        <input wire:model="contrasena">
    </div>
    <button wire:click="simularIniciarSesion">Simular iniciar sesión</button>

    <h2>Crear usuario</h2>
    <!-- temporal -->
    <livewire:privada.usuarios.crear-usuario/>
</div>
