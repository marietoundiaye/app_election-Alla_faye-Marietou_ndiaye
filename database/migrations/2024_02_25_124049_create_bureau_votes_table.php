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
    Schema::create('bureau_votes', function (Blueprint $table) {
        $table->id();
        $table->string('bureau_vote_id'); 
        $table->string('centre_vote_id');
        // Ajoutez d'autres colonnes selon vos besoins
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bureau_votes');
    }
};
