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
        Schema::create('causas_defuncion', function (Blueprint $table) {
            $table->id('id_causas_defuncion');
            $table->unsignedBigInteger('id_fallecido');

            $table->string('causa_a', 255)->comment('Enfermedad o condición que causó directamente la defunción');
            $table->string('intervalo_a', 50)->comment('Intervalo aproximado');
            $table->text('cadena_afectaciones')->nullable()->comment('Cadena de afectaciones o eventos');
            $table->text('otras_condiciones')->nullable();
            $table->string('codigo_cie', 50)->nullable();
            
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
        Schema::dropIfExists('causas_defuncion');
    }
};
