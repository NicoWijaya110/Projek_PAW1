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
        Schema::create('absensis', function (Blueprint $table) {
        $table->id();
        $table->foreignId('mata_kuliah', 50)->constrained()->onDelete('cascade');
        $table->foreignId('kelas', 50)->constrained()->onDelete('cascade');
        $table->unsignedInteger('pertemuan');
        $table->enum('status', ['H', 'I', 'A']);
        $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absens');
    }
};
