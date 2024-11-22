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
        Schema::create('lineadetrabajo', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nombre')->unique();
            $table->string('slogan');
            $table->text('descripcion_corta');
            $table->text('descripcion_larga');
            // quiere decir que es una linea oficial y que puede ser compartida
            // de manera publica en la página web por los visitantes.
            $table->boolean("publica");
            // quiere decir que es una linea de trabajo interna (dentro del espacio dtc+
            // como por ejemplo savialab o el desafio dtc). EN caso de ser falsa se le asociará
            // a una linea de trabajo de la universidad de talca, que sea colaboradora (ej:
            // astrocurico) que sus actividades sean registradas en esta plataforma.
            $table->boolean("interna");
            $table->string('entidad_id');
            $table->foreign('entidad_id')->references('id')->on('entidad')->onDelete('cascade');
        });

        Schema::create('rol_lineadetrabajo', function (Blueprint $table) {
            $table->string('id')->primary();
            // posible futuro enum
            $table->string('rol');

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->string('lineadetrabajo_id');
            $table->foreign('lineadetrabajo_id')->references('id')->on('lineadetrabajo')->onDelete('cascade');

            // unique
            $table->unique(['user_id', 'lineadetrabajo_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol_lineadetrabajo');
        Schema::dropIfExists('lineadetrabajo');
    }
};
