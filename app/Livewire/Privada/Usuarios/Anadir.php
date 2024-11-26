<?php

namespace App\Livewire\Privada\Usuarios;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class Anadir extends Component
{
    use WithFileUploads;

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
            'foto' => config('reglas_validacion.usuario.foto'),
            'habilitado' => config('reglas_validacion.usuario.habilitado'),
        ]);

        if (! $this->existeUsuarioConEseMail($this->email)) {
            $pathFotoLivewire = $this->foto->getPathName();

            $extension = strtolower($this->foto->getClientOriginalExtension());

            // Create image resource based on extension
            switch ($extension) {
                case 'jpeg':
                case 'jpg':
                    $image = imagecreatefromjpeg($pathFotoLivewire);
                    break;
                case 'png':
                    $image = imagecreatefrompng($pathFotoLivewire);
                    break;
                default:
                    toastr()->error('Tipo de archivo no permitido');

                    return;
            }

            ob_start();
            imagewebp($image, null, 50);
            $imageData = ob_get_contents();
            ob_end_clean();
            imagedestroy($image);

            User::create([
                'email' => strtolower($this->email),
                'nombres' => ucwords($this->nombres),
                'apellidos' => ucwords($this->apellidos),
                'password' => Hash::make($this->password),
                'foto_base64' => base64_encode($imageData),
                'foto_extension' => 'webp',
                'habilitado' => $this->habilitado,
            ]);

            $this->limpiarFormulario();

            toastr()->success('Usuario creado exitosamente');
        } else {
            toastr()->error('Ya existe un usuario con ese email');
        }
    }

    #[Title("Añadir usuario")]
    #[Layout("components.layouts.dashboard")]
    public function render()
    {
        return view('livewire.privada.usuarios.anadir-usuario');
    }
}
