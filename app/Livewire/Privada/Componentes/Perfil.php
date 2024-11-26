<?php

namespace App\Livewire\Privada\Componentes;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Perfil extends Component
{
    public $perfil = false;

    public function abrirPerfil()
    {
        session()->put('email-usuario-seleccionado', Auth::user()->email);
        $this->perfil = true;
    }

    #[On('cerrar-perfil')]
    public function cerrarPerfil()
    {
        $this->perfil = false;
    }

    public function render()
    {
        return view('livewire.privada.componentes.perfil');
    }
}
