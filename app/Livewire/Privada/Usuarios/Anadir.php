<?php

namespace App\Livewire\Privada\Usuarios;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class Anadir extends Component
{
    use WithFileUploads;

    public function cerrarVentana()
    {
        $this->dispatch('usuarios-cerrar-ventana');
    }

    public string $email = '';

    public string $nombres = '';

    public string $apellidos = '';

    public string $password = '';

    public ?TemporaryUploadedFile $foto = null;

    public ?bool $habilitado = null;

    public function existeUsuarioConEseMail(string $email)
    {
        $usuario = User::whereEmail($email)->first();

        return $usuario != null;
    }

    public function limpiarFormulario()
    {
        $this->email = '';
        $this->nombres = '';
        $this->apellidos = '';
        $this->password = '';
        $this->foto = null;
        $this->habilitado = null;
    }

    public function anadir()
    {
        $this->validate([
            'email' => config('reglas_validacion.usuario.email'),
            'nombres' => config('reglas_validacion.usuario.nombres'),
            'apellidos' => config('reglas_validacion.usuario.apellidos'),
            'password' => config('reglas_validacion.usuario.password'),
            'foto' => 'required|mimes:jpeg,png,jpg|max:2048',
            'habilitado' => config('reglas_validacion.usuario.habilitado'),
        ]);

        if (! $this->existeUsuarioConEseMail($this->email)) {
            $nombre = $this->foto->getClientOriginalName();
            $extension = pathinfo($nombre, PATHINFO_EXTENSION);
            $contenidoFoto = file_get_contents($this->foto->getRealPath());
            $base64 = base64_encode($contenidoFoto);

            User::create([
                'email' => $this->email,
                'nombres' => $this->nombres,
                'apellidos' => $this->apellidos,
                'password' => Hash::make($this->password),
                'foto_base64' => $base64,
                'foto_extension' => $extension,
                'habilitado' => $this->habilitado,
            ]);

            $this->dispatch('actualizar-usuarios');
            $this->limpiarFormulario();

            toastr()->success('Usuario creado exitosamente');
        } else {
            toastr()->error('Ya existe un usuario con ese email');
        }
    }

    public function render()
    {
        return view('livewire.privada.usuarios.anadir-usuario');
    }
}
