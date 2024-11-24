<?php

namespace App\Livewire\Private\Usuarios;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Pagina extends Component
{
    #[Title('Usuarios')]
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.private.usuarios.pagina');
    }
}
