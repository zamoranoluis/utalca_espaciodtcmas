<div>
    <h1>Verificación de identidad</h1>
    <form wire:submit="verificar">
        @csrf
        <div>
            <label>Codigo</label>
            <input wire:model="codigo">
        </div>
        <button type="submit">
            Verificar codigo
        </button>
    </form>
    <button wire:click="enviarEmail">Enviar email nuevamente</button>
</div>
