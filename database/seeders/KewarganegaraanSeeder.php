<?php

namespace Database\Seeders;

use App\Models\Kewarganegaraan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KewarganegaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kewarganegaraan = [
            ['name' => 'Indonesia'],
            ['name' => 'Asing']
        ];

        Kewarganegaraan::insert($kewarganegaraan);
    }
}
