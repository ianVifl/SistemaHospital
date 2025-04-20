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
        Schema::create('necropsia_defuncion', function (Blueprint $table) {
            $table->id('id_necropsia');
            $table->unsignedBigInteger('id_fallecido');
            $table->string('necropsia', 20)->nullable();
            $table->string('hallazgos_necropsia', 20)->nullable();
            
            $table->timestamps();
            
            $table->foreign('id_fallecido')->references('id_fallecido')->on('fallecido')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('necropsia_defuncion');
    }
};
