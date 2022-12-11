<?php

namespace App\Models;

use App\Models\Rayon;
use App\Models\Anggota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alamat',
        'rayon_id',
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

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }
}
