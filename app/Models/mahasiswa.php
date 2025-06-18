<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // WAJIB: kasih tahu Laravel nama tabelnya secara eksplisit
    protected $table = 'mahasiswas';

    protected $fillable = [
        'npm', 'nama', 'jk', 'tanggal_lahir', 
        'tempat_lahir', 'asal_sma', 'foto',
    ];

    public $timestamps = true;
}

