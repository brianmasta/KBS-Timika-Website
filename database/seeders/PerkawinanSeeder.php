<?php

namespace Database\Seeders;

use App\Models\Perkawinan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerkawinanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perkawinan = [
            ['name' => 'Belum Kawin'],
            ['name' => 'Kawin'],
            ['name' => 'Cerai Hidup'],
            ['name' => 'Cerai Mati']
        ];

        Perkawinan::insert($perkawinan);
    }
}
