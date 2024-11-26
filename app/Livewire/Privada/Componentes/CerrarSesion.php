<?php

namespace App\Livewire\Privada\Componentes;

use Livewire\Component;

class CerrarSesion extends Component
{
    public function cerrarSesion()
    {
        session()->invalidate();
        toastr()->success('Sesion cerrada correctamente');

        return redirect()->route('iniciar-sesion');
    }

    public function render()
    {
        return view('livewire.privada.componentes.cerrar-sesion');
    }
}
