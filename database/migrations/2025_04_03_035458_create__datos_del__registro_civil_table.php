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
        Schema::create('_datos_del__registro_civil', function (Blueprint $table) {
            $table->id('id_registro_civil');
            $table->unsignedBigInteger('id_fallecido');
            
            $table->string('numero_registro', 50)->nullable();
            $table->string('numero_libro', 50)->nullable();
            $table->string('numero_acta', 50)->nullable();
            $table->string('registro_localidad', 100)->nullable();
            $table->string('registro_municipio', 100)->nullable();
            $table->string('entidad_registro', 100)->nullable();
            $table->date('fecha_de_registro')->nullable();
            
            $table->timestamps();
            
            // Relación con fallecido
            $table->foreign('id_fallecido')->references('id_fallecido')->on('fallecido')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_datos_del__registro_civil');
    }
};
