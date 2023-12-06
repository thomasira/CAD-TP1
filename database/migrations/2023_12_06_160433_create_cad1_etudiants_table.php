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
            $table->string('adresse', 150);
            $table->string('telephone', 25);
            $table->string('email', 60)->unique();
            $table->string('date_naissance', 20);
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
