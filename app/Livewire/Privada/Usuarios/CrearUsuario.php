<?php

namespace App\Livewire\Privada\Usuarios;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CrearUsuario extends Component
{
    #[Validate(['required'])]
    public $name = '';

    #[Validate(['required', 'email', 'max:254'])]
    public $email = '';

    #[Validate(['required'])]
    public $password = '';

    public function save()
    {
        $existe = User::where('email', $this->email)->first();

        if (! $existe) {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => \Hash::make($this->password),
            ]);

            toastr()->success('Usuario creado correctamente');
        } else {
            toastr()->error('El usuario ya existe');
        }
    }

    public function render()
    {
        return view('livewire.privada.usuarios.crear-usuario');
    }
}
