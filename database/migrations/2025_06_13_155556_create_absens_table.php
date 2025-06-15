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
        Schema::create('absens', function (Blueprint $table) {
    $table->id();
    $table->foreignId('mahasiswa_id')->constrained()->onDelete('cascade');
    $table->foreignId('materi_id')->constrained('materis')->onDelete('cascade');
    $table->unsignedInteger('pertemuan_ke');
    $table->enum('status', ['H', 'I', 'A']);
    $table->timestamps();
});


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absen');
    }
};
