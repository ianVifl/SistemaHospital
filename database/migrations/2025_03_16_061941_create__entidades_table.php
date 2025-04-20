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
        Schema::create('_entidades', function (Blueprint $table) {
            $table->id('id_entidades'); // Clave primaria autoincremental
            $table->string('entidad_nacimiento_', 255);
            $table->boolean('afromexicano');
            $table->boolean('indigena');
            $table->unsignedBigInteger('id_fallecido'); //llave foranea
            $table->timestamps();

            $table->foreign('id_fallecido')->references('id_fallecido')->on('fallecido')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_entidades');
    }
};
