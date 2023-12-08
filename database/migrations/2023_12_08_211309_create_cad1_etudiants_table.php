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
        Schema::create('cad1_etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 45);
            $table->text('adresse');
            $table->string('phone', 20);
            $table->string('email', 45);
            $table->string('date_naissance', 12);
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('cad1_villes');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cad1_etudiants');
    }
};
