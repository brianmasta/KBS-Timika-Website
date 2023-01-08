<?php

namespace Database\Seeders;

use App\Models\Rayon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rayon = [
            ['name' => 'Rayon 1'],
            ['name' => 'Rayon 2'],
            ['name' => 'Rayon 3'],
            ['name' => 'Rayon 4'],
            ['name' => 'Rayon 5']
        ];

        Rayon::insert($rayon);
    }
}
