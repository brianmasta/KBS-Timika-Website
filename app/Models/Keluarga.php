<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alamat',
        'provinsi',
        'kabupaten',
        'distrik',
        'kelurahan',
        'rt',
        'pos',
        'hp'
    ];
}
