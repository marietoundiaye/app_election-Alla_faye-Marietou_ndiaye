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
        Schema::create('nbre_voixes', function (Blueprint $table) {
            $table->id();
            $table->string('candidat_id');
            $table->integer('vote_id');
            $table->integer('bureau_vote_id');
            $table->string('centre_vote_id');
            $table->string('commune_id');
            $table->string('departement_id');
            $table->string('region_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nbre_voixes');
    }
};
