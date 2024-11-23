<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // ----- CAMPO DE VALIDACION PERSONALIZADO _--------
        Validator::extend('email_utalca', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[^@]+@(?:utalca\.cl|alumnos\.utalca\.cl)$/', $value);
        });

        Validator::replacer('email_utalca', function ($message, $attribute, $rule, $parameters) {
            return 'El campo email debe ser un correo electrónico válido de la universidad (ejemplo: usuario@utalca.cl o usuario@alumnos.utalca.cl)';
        });
    }
}
