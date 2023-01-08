<?php

namespace Database\Seeders;

use App\Models\Pendidikan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pendidikan = [
            ['name' => 'TAMAT SD / SEDERAJAT'],
            ['name' => 'TIDAK / BELUM SEKOLAH'],
            ['name' => 'SLTA / SEDERAJAT'],
            ['name' => 'SLTP/SEDERAJAT'],
            ['name' => 'BELUM TAMAT SD/SEDERAJAT'],
            ['name' => 'DIPLOMA IV/ STRATA I'],
            ['name' => 'AKADEMI/ DIPLOMA III/S. MUDA'],
            ['name' => 'DIPLOMA I / II'],
            ['name' => 'STRATA II'],
            ['name' => 'STRATA III']
        ];

        Pendidikan::insert($pendidikan);
    }
}
