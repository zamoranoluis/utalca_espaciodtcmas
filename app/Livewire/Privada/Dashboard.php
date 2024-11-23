<?php

namespace App\Livewire\Privada;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
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

    #[Title('Dashboard')]
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.privada.dashboard');
    }
}
