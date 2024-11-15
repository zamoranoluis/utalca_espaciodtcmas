<?php

use Livewire\Volt\Volt;

Volt::route('/', 'inicio');
Volt::route('/autenticacion/iniciar-sesion', 'iniciar-sesion');
Volt::route('/autenticacion/verificacion-acceso', 'verificacion-acceso');
Volt::route('/plataforma/dashboard', 'dashboard');
