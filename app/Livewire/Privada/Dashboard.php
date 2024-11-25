<?php

namespace App\Livewire\Privada;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    public $usuario;

    public function mount()
    {
        $this->usuario = Auth::user();
    }

    #[Title('Inicio')]
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.privada.dashboard');
    }
}
