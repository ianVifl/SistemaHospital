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
        Schema::create('detalles_medicos_defuncion', function (Blueprint $table) {
            $table->id('id_detalles_medicos');
            $table->unsignedBigInteger('id_fallecido');

            // Sección 29 - Muerte encefálica
            $table->string('muerte_encefalica', 20)->nullable();
            $table->string('donacion_organos', 20)->nullable();
            // Sección 30 - Causas
            $table->string('causa_basica', 255)->nullable();
            $table->string('codigo_adicional', 50)->nullable();
            $table->string('desempeno_trabajo', 20)->nullable();
            $table->string('lugar_lesion', 50)->nullable();
            $table->string('acta_ministerio', 50)->nullable();
            $table->string('relacion_agresor', 255)->nullable();
            $table->text('descripcion_lesion')->nullable();
            
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
        Schema::dropIfExists('detalles_medicos_defuncion');
    }
};
