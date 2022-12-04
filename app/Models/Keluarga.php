<?php

namespace App\Models;

use App\Models\Anggota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alamat',
        'rayon',
        'provinsi',
        'kabupaten',
        'distrik',
        'kelurahan',
        'rt',
        'pos',
        'hp'
    ];


    public function anggotas()
    {
        return $this->hasMany(Anggota::class, 'kk_id', 'id');
    }
}
