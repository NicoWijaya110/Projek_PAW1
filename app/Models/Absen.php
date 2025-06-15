<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $fillable = ['mahasiswa_id', 'materi_id', 'pertemuan_ke', 'status'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }
}
