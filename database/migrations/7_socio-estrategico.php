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
        Schema::create('socio_estrategico', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nombre')->unique();
            $table->string('url');
            $table->string('entidad_id');
            $table->foreign('entidad_id')->references('id')->on('entidad')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socio_estrategico');
    }
};
