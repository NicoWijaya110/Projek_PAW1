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
        Schema::create('jadwal', function (Blueprint $table) {

$table->id();
$table->timestamps();
$table->string('no',10);
$table->string('hari',30);
$table->string('jam',30);
$table->string('mata_kuliah',50);
$table->string('kelas',30);
$table->string('dosen',50);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
