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
            session()->put('errores_codigo', 0);
            session()->put('emails_enviados', 0);

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
