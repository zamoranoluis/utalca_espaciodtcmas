<?php

use App\Http\Middleware\Verificar2FA;
use App\Http\Middleware\VerificarAutenticado;
use App\Livewire\Autenticacion\IniciarSesion;
use App\Livewire\Autenticacion\VerificacionDeIdentidad;
use App\Livewire\Privada\Dashboard;
use App\Livewire\Publica\Inicio;

Route::get('/', Inicio::class)->name('inicio');

Route::get('/autenticacion/iniciar-sesion',
    IniciarSesion::class)
    ->name('iniciar-sesion');

Route::middleware([
    VerificarAutenticado::class,
])->group(function () {

    Route::get('/autenticacion/verificacion-de-identidad',
        VerificacionDeIdentidad::class)
        ->name('verificacion-de-identidad');

});

Route::middleware([
    VerificarAutenticado::class,
    Verificar2FA::class,
])->group(function () {

    Route::get('/plataforma/dashboard',
        Dashboard::class)
        ->name('dashboard');

});
