<?php

namespace App\Models;

use App\Models\Hubungan;
use App\Models\Pendidikan;
use App\Models\Perkawinan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggota extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'nik',
        'jenis_kelamin_id',
        'tempat_lahir',
        'tanggal_lahir',
        'agama_id',
        'pendidikan_id',
        'pekerjaan_id',
        'darah_id',
        'perkawinan_id',
        'hubungan_id',
        'suku',
        'kewarganegaraan_id',
        'nama_ayah',
        'nama_ibu',
        'kk_id'
    ];

    public function hubungan()
    {
        return $this->belongsTo(Hubungan::class);
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }

    public function perkawinan()
    {
        return $this->belongsTo(Perkawinan::class);
    }
}
