<?php

namespace App\Livewire\Autenticacion;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class VerificacionDeIdentidad extends Component
{
    public $codigo;

    public function cerrarSesion(string $mensajeError)
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        toastr()->error($mensajeError);

        return redirect()->to(route('iniciar-sesion'));
    }

    public function enviarEmail()
    {
        $emails_enviados = session()->get('emails_enviados');
        $max_emails = config('session.max_email_validar_codigo');
        $email_restantes = $max_emails - $emails_enviados;

        if ($email_restantes > 0) {
            $codigo = Str::random(8);
            session()->put('codigo', $codigo);
            session()->put('emails_enviados', $emails_enviados + 1);
            toastr()->info("Codigo: $codigo ; intentos restantes: $email_restantes");
        } else {
            $this->cerrarSesion('Superaste el máximo de email enviados para verificar tu identidad, inicia sesión nuevamente');
        }
    }

    // leer: https://laravel.com/docs/11.x/session#storing-data
    public function verificar()
    {
        $codigoSesion = session()->get('codigo');
        if ($this->codigo == $codigoSesion) {
            session()->put('2fa', true);
            toastr()->success('Se ha verificado tu identidad ¡Bienvenido/a!');

            return redirect()->intended(route('dashboard'));
        } else {
            $errores_codigo = session()->get('errores_codigo');
            $max_errores = config('session.max_errores_codigo');

            if ($errores_codigo >= $max_errores) {
                $this->cerrarSesion('Superaste el máximo de errores de código, inicia de sesión nuevamente');
            } else {
                session()->put('errores_codigo', $errores_codigo + 1);
                $errores_restantes = $max_errores - $errores_codigo;
                toastr()->error("Codigo invalido, te quedan $errores_restantes intentos");
            }

        }
    }

    public function mount()
    {
        $this->enviarEmail();
    }

    public function render()
    {
        return view('livewire.autenticacion.verificacion-de-identidad');
    }
}
