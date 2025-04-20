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
        Schema::create('datos_edad_cumplida', function (Blueprint $table) {
            $table->id('id_hora')->nullable(); // Clave primaria autoincremental
            $table->integer('minutos')->nullable();
            $table->integer('horas')->nullable();
            $table->integer('dias')->nullable();
            $table->integer('meses')->nullable();
            $table->integer('años_cumplidos')->nullable();
            $table->unsignedBigInteger('id_edad_cumplida')->nullable(); // Clave foránea
            $table->timestamps();

            $table->foreign('id_edad_cumplida')->references('id_edad_cumplida')->on('fallecido_edad')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_edad_cumplida');
    }
};
