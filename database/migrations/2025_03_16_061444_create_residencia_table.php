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
        Schema::create('residencia', function (Blueprint $table) {
            $table->id('id_residencia');
            $table->unsignedBigInteger('id_fallecido'); // Clave foránea
            $table->string('localidad', 255);
            $table->string('municipio', 255);
            $table->string('codigo_postal', 10);
            $table->string('calle', 255);
            $table->integer('numero_ext');
            $table->integer('numero_int');
            $table->string('tipo_asentamiento_humano', 50);
            $table->string('nombre_asentamiento_humano', 100);
            $table->string('pais', 50);

            $table->timestamps();

            $table->foreign('id_fallecido')->references('id_fallecido')->on('fallecido')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residencia');
    }
};
