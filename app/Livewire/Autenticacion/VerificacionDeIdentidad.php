<?php

namespace App\Livewire\Autenticacion;

use Livewire\Component;

class VerificacionDeIdentidad extends Component
{
    public $codigo;

    // leer: https://laravel.com/docs/11.x/session#storing-data
    public function verificar()
    {
        if ($this->codigo == '1234') {
            toastr()->success('Codigo correcto');
            session()->put('2fa', true);
            $informacion = session()->only(['2fa']);
            toastr()->info(json_encode($informacion));

            return redirect()->intended(route('dashboard'));
        } else {
            toastr()->error('Codigo invalido');
        }
    }

    public function mount()
    {
        $informacion = session()->only(['2fa']);
        toastr()->info(json_encode($informacion));
    }

    public function render()
    {
        return view('livewire.autenticacion.verificacion-de-identidad');
    }
}
