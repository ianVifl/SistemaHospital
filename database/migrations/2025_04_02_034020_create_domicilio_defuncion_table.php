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
        Schema::create('domicilio_defuncion', function (Blueprint $table) {
            $table->id('id_domicilio_defuncion'); // Clave primaria autoincremental
            $table->unsignedBigInteger('id_fallecido'); // Clave foránea

            $table->string('tipo_vialidad_lugar_defuncion', 100)->nullable();
            $table->string('nombre_vialidad_lugar_defuncion', 255)->nullable();
            $table->string('num_exterior_lugar_defuncion', 20)->nullable();
            $table->string('num_interior_lugar_defuncion', 20)->nullable();
            $table->string('asentamiento_humano_lugar_defuncion', 100)->nullable();
            $table->string('nombre_asentamiento_lugar_defuncion', 255)->nullable();
            $table->string('codigoPostal_lugar_defuncion', 10)->nullable();
            $table->string('lugar_defuncion_localidad', 100)->nullable();
            $table->string('lugar_defuncion_municipio', 100)->nullable();
            $table->string('entidadFederativa_lugar_defuncion', 100)->nullable();
            $table->timestamps();
            
            // Relación con tabla fallecido
            $table->foreign('id_fallecido')->references('id_fallecido')->on('fallecido')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domicilio_defuncion');
    }
};
