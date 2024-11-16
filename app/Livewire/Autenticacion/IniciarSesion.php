<?php

namespace App\Livewire\Autenticacion;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class IniciarSesion extends Component
{
    public $email;

    public $contrasena;

    public function simularIniciarSesion()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->contrasena,
        ];

        if (Auth::attempt($credentials)) {
            Session::regenerate();

            session()->put('2fa', false);

            return redirect()->intended(route('verificacion-de-identidad'));
        }

        toastr()->error('Credenciales incorrectas');

        return back();
    }

    public function render()
    {
        return view('livewire.autenticacion.iniciar-sesion');
    }
}
