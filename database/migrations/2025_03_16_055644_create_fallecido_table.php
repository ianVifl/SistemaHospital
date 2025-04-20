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
        Schema::create('fallecido', function (Blueprint $table) {
            $table->id('id_fallecido'); // Clave primaria autoincremental
            $table->string('nombre_fallecido', 255);
            $table->string('apellido_paterno', 255);
            $table->string('apellido_materno', 255);
            $table->dateTime('fecha_nacimiento');
            $table->string('sexo');
            $table->string('CURP', 18);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fallecido');
    }
};
