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
        Schema::create('fallecido_edad', function (Blueprint $table) {
            $table->id('id_edad_cumplida'); // Clave primaria autoincremental
            $table->unsignedBigInteger('id_fallecido'); // Clave foránea
            $table->string('folio_certificado_naci', 255)->nullable();
            $table->float('peso_nacimiento')->nullable();
            $table->integer('semanas_gestacion')->nullable();
            $table->timestamps();

            $table->foreign('id_fallecido')->references('id_fallecido')->on('fallecido')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fallecido_edad');
    }
};
