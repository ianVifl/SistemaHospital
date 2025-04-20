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
        Schema::create('domicilio_lesion', function (Blueprint $table) {
            $table->id('id_domicilio_lesion');
            $table->unsignedBigInteger('id_fallecido');
            
            $table->string('tipo_vialidad_donde_ocurrio', 100)->nullable();
            $table->string('nombre_vialidad', 255)->nullable();
            $table->string('num_ext', 20)->nullable();
            $table->string('num_int', 20)->nullable();
            $table->string('tipo_asentamiento', 100)->nullable();
            $table->string('nombre_asentamiento', 255)->nullable();
            $table->string('ocurrio_lesion_codigo_postal', 10)->nullable();
            $table->string('ocurrio_lesion_localidad', 100)->nullable();
            $table->string('ocurrio_lesion_municipio', 100)->nullable();
            $table->string('entidad_federativa', 100)->nullable();
            
            $table->timestamps();
            
        
            $table->foreign('id_fallecido')->references('id_fallecido')->on('fallecido')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domicilio_lesion');
    }
};
