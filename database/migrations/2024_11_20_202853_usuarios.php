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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('Nombre');
            $table->string('Apellido');
            $table->integer('Edad');
            $table->string('Genero');
            $table->string('Correo');
            $table->string('Telefono');
            $table->string('Ciudad');
            $table->string('Dirección');
            $table->string('imagen');
            $table->string('Descripción')->nullable;
            $table->string('Titulo')->nullable;
            $table->string('Fecha_Titulo')->nullable;
            $table->string('Experiencia')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
