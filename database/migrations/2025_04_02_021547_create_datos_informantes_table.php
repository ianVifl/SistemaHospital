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
        Schema::create('datos_informantes', function (Blueprint $table) {
        $table->id('id_informante'); // Clave primaria autoincremental
        $table->unsignedBigInteger('id_fallecido'); // Clave foránea
        $table->string('nombre_informante', 255);
        $table->string('primer_apellido_informante', 255);
        $table->string('segundo_apellido_informante', 255)->nullable();
        $table->string('parentesco_con_fallecido', 255)->nullable();
        $table->string('firma_informante', 255)->nullable();
        $table->string('sitio_defuncion', 50)->nullable();
        $table->string('nombre_unidad_medica', 255)->nullable();
        $table->string('clave_establecimientos_salud', 50)->nullable();
        $table->timestamps();

        $table->foreign('id_fallecido')->references('id_fallecido')->on('fallecido')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_informantes');
    }
};
