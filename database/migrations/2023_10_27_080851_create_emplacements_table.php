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
        Schema::create('emplacements', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->unsignedBigInteger('typeEmplacement_id');
            $table->foreign('typeEmplacement_id')->references('id')->on('typeemplacements')->onDelete('cascade');
            $table->unsignedBigInteger('marche_id');
            $table->foreign('marche_id')->references('id')->on('marches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emplacements');
    }
};
