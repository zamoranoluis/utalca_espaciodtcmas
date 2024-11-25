<?php

namespace App\Livewire\Privada\Usuarios;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class EditarInformacion extends Component
{
    use WithFileUploads;

    public ?string $imagenParaMostrar = null;

    public ?string $usuario = null;

    public ?string $email = null;

    public ?string $emailBackup = null;

    public ?string $nombres = null;

    public ?string $apellidos = null;

    public ?int $habilitado = null;

    public ?TemporaryUploadedFile $foto = null;

    public ?string $password = null;

    public $photo;

    public function mount()
    {
        $this->emailBackup = session()->pull('email-usuario-seleccionado');
        $usuarioBuscado = User::whereEmail($this->emailBackup)
            ->select('email', 'nombres', 'apellidos', 'habilitado', 'foto_extension', 'foto_base64')
            ->first();

        if ($usuarioBuscado) {
            $this->email = $usuarioBuscado->email;
            $this->nombres = $usuarioBuscado->nombres;
            $this->apellidos = $usuarioBuscado->apellidos;
            $this->habilitado = $usuarioBuscado->habilitado ? 1 : 0;
            $this->imagenParaMostrar = "data:image/$usuarioBuscado->foto_extension;base64,$usuarioBuscado->foto_base64";
        }
    }

    public function editar(bool $editarFoto, bool $editarContrasena)
    {
        $reglasValidacion = [
            'email' => config('reglas_validacion.usuario.email'),
            'nombres' => config('reglas_validacion.usuario.nombres'),
            'apellidos' => config('reglas_validacion.usuario.apellidos'),
            'habilitado' => config('reglas_validacion.usuario.habilitado'),
        ];

        if ($editarFoto) {
            $reglasValidacion['foto'] = config('reglas_validacion.usuario.foto');
        }

        if ($editarContrasena) {
            $reglasValidacion['password'] = config('reglas_validacion.usuario.password');
        }

        $this->validate($reglasValidacion);

        User::whereEmail($this->emailBackup)
            ->update([
                'email' => $this->email,
                'nombres' => $this->nombres,
                'apellidos' => $this->apellidos,
                'habilitado' => $this->habilitado,
            ]);

        if ($editarContrasena) {
            User::whereEmail($this->email)
                ->update([
                    'password' => Hash::make($this->password),
                ]);
        }

        if ($editarFoto) {
            $nombre = $this->foto->getClientOriginalName();
            $extension = pathinfo($nombre, PATHINFO_EXTENSION);
            $contenidoFoto = file_get_contents($this->foto->getRealPath());
            $base64 = base64_encode($contenidoFoto);

            User::whereEmail($this->email)
                ->update([
                    'foto_extension' => $extension,
                    'foto_base64' => $base64,
                ]);

            $this->imagenParaMostrar = "data:image/$extension;base64,$base64";
        }

        $this->dispatch('actualizar-usuarios');
        toastr()->success('Información del usuario actualizada correctamente');
    }

    public function cerrarVentana()
    {
        $this->dispatch('usuarios-cerrar-ventana');
    }

    public function render()
    {
        return view('livewire.privada.usuarios.editar-informacion');
    }
}
