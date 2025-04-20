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
        Schema::create('_domicilio__telefono_certificante', function (Blueprint $table) {
            $table->id('id_domicilio_certificante');
            $table->unsignedBigInteger('id_fallecido');
            
            $table->string('tipo_vialidad_41', 100)->nullable();
            $table->string('nombre_vialidad_41', 255)->nullable();
            $table->string('num_ext_41', 20)->nullable();
            $table->string('num_int_41', 20)->nullable();
            $table->string('tipo_asentamiento_41', 100)->nullable();
            $table->string('nombre_asentamiento_41', 255)->nullable();
            $table->string('certificante_codigo_postal', 10)->nullable();
            $table->string('certificante_localidad', 100)->nullable();
            $table->string('certificante_municipio', 100)->nullable();
            $table->string('entidad_federativa_41', 100)->nullable();
            $table->string('telefono_41', 20)->nullable();
            $table->date('fecha_certificacion')->nullable();
            
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
        Schema::dropIfExists('_domicilio__telefono_certificante');
    }
};
