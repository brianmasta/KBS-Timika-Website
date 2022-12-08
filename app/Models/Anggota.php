<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'nik',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'pendidikan',
        'pekerjaan',
        'darah',
        'perkawinan',
        'hubungan',
        'suku',
        'kewarganegaraan',
        'nama_ayah',
        'nama_ibu',
        'kk_id'
    ];
}
