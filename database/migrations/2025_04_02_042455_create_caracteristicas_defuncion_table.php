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
        Schema::create('caracteristicas_defuncion', function (Blueprint $table) {
            $table->id('id_caracteristicas_defuncion');
            $table->unsignedBigInteger('id_fallecido');
            
            $table->date('fecha_defuncion')->nullable();
            $table->time('hora_defuncion')->nullable();
            $table->string('atencionMedica_antes_fallecer', 20)->nullable(); 
            $table->string('cirugia_reciente', 20)->nullable(); 
            $table->date('fecha_cirugia')->nullable();
            $table->string('motivo_cirugia', 255)->nullable();
            $table->string('defuncion_violenta', 20)->nullable();
            $table->string('tipo_defuncion', 50)->nullable();
            $table->timestamps();
            
            
            $table->foreign('id_fallecido')->references('id_fallecido')->on('fallecido')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracteristicas_defuncion');
    }
};
