<?php

use App\Http\Middleware\RedirigirSiPasoIniciarSesionMiddleware;
use App\Http\Middleware\Verificar2FA;
use App\Http\Middleware\VerificarAutenticado;
use App\Livewire\Autenticacion\IniciarSesion;
use App\Livewire\Autenticacion\VerificacionDeIdentidad;
use App\Livewire\Privada\Dashboard;
use App\Livewire\Privada\Usuarios\Crud;
use App\Livewire\Publica\Inicio;

Route::get('/', Inicio::class)->name('inicio');
// se pone este middleware, sólo para esta ruta con la finalidad de
// redirigir al siguiente paso si ya se autenticó
Route::middleware([
    RedirigirSiPasoIniciarSesionMiddleware::class,
])->group(function () {

    Route::get('/autenticacion/iniciar-sesion',
        IniciarSesion::class)
        ->name('iniciar-sesion');
});

Route::middleware([
    VerificarAutenticado::class,
    // lo mismo que el middleware único anterior, verifica si ya pasó el
    // 2fa para redirigir a Dashboard. Es importante destacar que
    // si se quiere redirigir 'por rol' a diferentes dashboard, debe
    // cambiarse esta lógica
    \App\Http\Middleware\RedirigirSiPaso2FA::class,
])->group(function () {

    Route::get('/autenticacion/verificacion-de-identidad',
        VerificacionDeIdentidad::class)
        ->name('verificacion-de-identidad');

});

Route::middleware([
    VerificarAutenticado::class,
    Verificar2FA::class,
])->group(function () {
    Route::get('/plataforma/inicio', Dashboard::class)->name('dashboard');
    Route::get('/plataforma/usuarios', Crud::class)->name('usuarios');
});
