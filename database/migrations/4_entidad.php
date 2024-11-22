<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entidad', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nombre')->unique();
            $table->text('descripcion');
            $table->string('slogan');
            $table->string("instagram");
            $table->string("telefono");
            $table->string("email");
            $table->string("ubicacion_nombre");
            $table->float('ubicacion_latitud');
            $table->float('ubicacion_longitud');
        });

        Schema::create('rol_entidad', function (Blueprint $table) {
            $table->string('id')->primary();
            // usuario
            $table
                ->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            // entidad
            $table->string('entidad_id');
            $table->foreign('entidad_id')
                ->references('id')
                ->on('entidad')
                ->onDelete('cascade');

            $table->string('rol')
                ->enum('administrador/a', 'director/a','coordinador/a general');
            // unique
            $table->unique(['user_id', 'entidad_id']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_entidad');
        Schema::dropIfExists('entidad');
    }
};
