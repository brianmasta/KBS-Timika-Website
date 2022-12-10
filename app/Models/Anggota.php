<?php

namespace App\Models;

use App\Models\Agama;
use App\Models\Darah;
use App\Models\Hubungan;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Perkawinan;
use App\Models\Kewarganegaraan;
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

    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function darah()
    {
        return $this->belongsTo(Darah::class);
    }

    public function kewarganegaraan()
    {
        return $this->belongsTo(Kewarganegaraan::class);
    }
}
