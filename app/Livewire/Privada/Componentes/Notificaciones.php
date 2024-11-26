<?php

namespace App\Livewire\Privada\Componentes;

use Livewire\Component;

class Notificaciones extends Component
{
    public $notificaciones = false;

    public function render()
    {
        return view('livewire.privada.componentes.notificaciones');
    }

    public function abrirNotificaciones()
    {
        $this->notificaciones = true;
    }

    public function cerrarNotificaciones()
    {
        $this->notificaciones = false;
    }
}
