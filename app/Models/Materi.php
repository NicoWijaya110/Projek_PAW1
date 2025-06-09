<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materis';
    protected $primaryKey = 'no'; // Primary key
    protected $fillable = ['no','mata_kuliah', 'dosen', 'kelas'];
    
}
