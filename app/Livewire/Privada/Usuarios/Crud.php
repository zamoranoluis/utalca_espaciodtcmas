<?php

namespace App\Livewire\Privada\Usuarios;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class Crud extends Component
{
    public $usuarios;

    public ?string $ventana = null;

    public function abrirVentana(string $ventana)
    {
        $this->ventana = $ventana;
    }

    #[On('usuarios-cerrar-ventana')]
    public function cerrarVentana()
    {
        $this->ventana = null;
    }

    public $cantidadUsuarios;

    public $cantidadPaginas;

    public $paginaActual = 0;

    public function cambiarPagina(int $numeroPagina)
    {
        $this->paginaActual = $numeroPagina;
        $this->obtenerUsuarios();
    }

    public function avanzarPagina()
    {
        if ($this->paginaActual + 1 < $this->cantidadPaginas) {
            $this->cambiarPagina($this->paginaActual + 1);
        } else {
            toastr()->error('Llegaste al limite máximo de páginas');
        }
    }

    public function retrocederPagina()
    {
        if ($this->paginaActual - 1 >= 0) {
            $this->cambiarPagina($this->paginaActual - 1);
        } else {
            toastr()->error('Llegaste al limite mínimo de páginas');
        }
    }

    public function obtenerUsuarios()
    {
        $filasPorPagina = config('tablas.filas_por_pagina');

        $this->usuarios = \DB::table('users')
            ->select('nombres', 'apellidos', 'email', 'habilitado')
            ->orderBy('email', 'asc')
            ->skip($filasPorPagina * ($this->paginaActual))
            ->take($filasPorPagina)
            ->get();
    }

    public function mount()
    {
        $this->cantidadUsuarios = User::count();
        $filasPorPagina = config('tablas.filas_por_pagina');
        $this->cantidadPaginas = ceil($this->cantidadUsuarios / $filasPorPagina);
        $this->obtenerUsuarios();
    }

    #[Title('Gestión de Usuarios')]
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.privada.usuarios.crud');
    }
}
