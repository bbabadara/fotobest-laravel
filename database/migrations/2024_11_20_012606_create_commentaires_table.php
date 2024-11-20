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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom de l'auteur du commentaire
            $table->string('email'); // Email de l'auteur
            $table->text('message'); // Contenu du commentaire
            $table->foreignId('photo_id')->constrained()->onDelete('cascade'); // Photo concernée
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
