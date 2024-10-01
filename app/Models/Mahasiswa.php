<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'jurusan',
    ];
}
