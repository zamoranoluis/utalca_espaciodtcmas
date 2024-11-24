<?php

namespace App\Livewire\Private\Usuarios;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Lista extends Component
{
    public $usuarios;

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

    #[Title('Usuarios')]
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.private.usuarios.lista');
    }
}
