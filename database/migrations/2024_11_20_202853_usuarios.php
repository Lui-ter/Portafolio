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
            // Datos iniciales del usuario
            $table->id();
            $table->string('Nombre', 30);
            $table->string('Apellido', 30);
            $table->integer('Edad'); 
            $table->string('Genero', 20);
            $table->string('Correo', 40);
        
            // Datos después de la creación del portafolio
            $table->string('imagen')->nullable();
            $table->string('Telefono', 12)->nullable();
            $table->string('Ciudad', 30)->nullable();
            $table->string('Dirección', 40)->nullable();
            $table->string('Descripción', 255)->nullable();
            $table->string('Titulo1', 40)->nullable();
            $table->date('Fecha_Titulo1')->nullable();
            $table->string('Titulo2', 40)->nullable();
            $table->date('Fecha_Titulo2')->nullable();
            $table->string('Experiencia', 255)->nullable();
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
