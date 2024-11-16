<form wire:submit="save">
    @csrf

    <input type="text" wire:model="name">
    <input type="text" wire:model="email">
    <input type="text" wire:model="password">

    <button type="submit">Crear usuario</button>
</form>
