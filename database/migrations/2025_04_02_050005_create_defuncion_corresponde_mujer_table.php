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
        Schema::create('defuncion_corresponde_mujer', function (Blueprint $table) {
            $table->id('id_defuncion_corresponde_mujer');
            $table->unsignedBigInteger('id_fallecido');
            
            $table->string('muerte_embarazo', 50)->nullable();
            $table->string('causas_embarazo', 20)->nullable();
            $table->string('complicaciones_embarazo', 20)->nullable();

            $table->timestamps();
            
            $table->foreign('id_fallecido')->references('id_fallecido')->on('fallecido')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defuncion_corresponde_mujer');
    }
};
