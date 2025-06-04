<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal'; // Nama tabel
    protected $fillable = ['hari', 'mata_kuliah', 'kelas', 'dosen']; // Kolom yang boleh diisi
}
