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
        Schema::create('info_fallecido', function (Blueprint $table) {
            $table->id('id_info_falleciodo'); // Clave primaria autoincremental (id)
            $table->unsignedBigInteger('id_fallecido'); // Clave foránea
            $table->string('situacion_conyugal', 255);
            $table->string('escolaridad', 255);
            $table->boolean('escolaridad_completa');
            $table->boolean('trabajador');
            $table->string('afiliacion_servicios_salud', 50);
            $table->string('numero_afiliacion_social', 50);
            $table->boolean('lengua_indigena');
            $table->char('nacionalidad', 50);
            $table->char('ocupacion_habitual', 100);
            $table->timestamps();

            $table->foreign('id_fallecido')->references('id_fallecido')->on('fallecido')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_fallecido');
    }
};
