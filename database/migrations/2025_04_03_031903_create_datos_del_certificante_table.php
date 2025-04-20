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
        Schema::create('datos_del_certificante', function (Blueprint $table) {
            $table->id('id_certificacion');
            $table->unsignedBigInteger('id_fallecido');
            
            $table->string('certificada_por', 50)->nullable();
            $table->string('otro_certificada_por', 255)->nullable();
            $table->string('nombre_certificante', 255)->nullable();
            $table->string('apellidoPaterno_certificante', 255)->nullable();
            $table->string('apellidoMaterno_certificante', 255)->nullable();
            $table->string('certificante_sies_medico', 255)->nullable();
            $table->string('firma_certificante', 255)->nullable();
            
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
        Schema::dropIfExists('datos_del_certificante');
    }
};
