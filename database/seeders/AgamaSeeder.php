<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agama = [
            ['name' => 'Islam'],
            ['name' => 'Kristen Protestan'],
            ['name' => 'Hindu'],
            ['name' => 'Budha'],
            ['name' => 'Katolik'],
            ['name' => 'Konghucu']
        ];

        Agama::insert($agama);
    }
}
