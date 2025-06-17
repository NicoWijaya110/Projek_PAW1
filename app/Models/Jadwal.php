<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{

    protected $table = 'jadwal';
    protected $fillable = ['no','hari','jam','mata_kuliah','kelas','dosen'];

}
