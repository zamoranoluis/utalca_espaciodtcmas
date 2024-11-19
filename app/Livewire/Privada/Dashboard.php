<?php

namespace App\Livewire\Privada;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function cerrarSesion()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->to(route('iniciar-sesion'));
    }

    public function render()
    {
        return view('livewire.privada.dashboard');
    }
}
