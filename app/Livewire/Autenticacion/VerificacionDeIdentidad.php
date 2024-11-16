<?php

namespace App\Livewire\Autenticacion;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class VerificacionDeIdentidad extends Component
{
    public $codigo;

    // leer: https://laravel.com/docs/11.x/session#storing-data
    public function verificar()
    {
        /* ------ SI EL CÓDIGO INGRESADO ES EL CORRECTO ---- */
        if ($this->codigo == '1234') {
            toastr()->success('Codigo correcto');
            session()->put('2fa', true);
            $informacion = session()->only(['2fa']);
            toastr()->info(json_encode($informacion));

            return redirect()->intended(route('dashboard'));
        } else { /* ---------- SI NO LO ES -------- */
            $errores_codigo = session()->get('errores_codigo');
            $max_errores = config('session.max_errores_codigo');
            // cerraremos la sesión si supera el máximo de errores
            if ($errores_codigo >= $max_errores) {
                Auth::logout();
                session()->invalidate();
                session()->regenerateToken();
                toastr()->error('Superaste el máximo de errores de código, inicia de sesión nuevamente');

                return redirect()->to(route('iniciar-sesion'));
            } else {
                session()->put('errores_codigo', $errores_codigo + 1);
                $errores_restantes = $max_errores - $errores_codigo;
                toastr()->error("Codigo invalido, te quedan $errores_restantes intentos");
            }
        }
    }

    public function mount()
    {
        // generando el código y disponiendolo en la sesión
        // se pondrá encriptado en un futuro
        $codigo = Str::random(8);

        session()->put('codigo', $codigo);

        $informacion = session()->only(['2fa', 'codigo', 'errores_codigo']);
        toastr()->info(json_encode($informacion));
    }

    public function render()
    {
        return view('livewire.autenticacion.verificacion-de-identidad');
    }
}
