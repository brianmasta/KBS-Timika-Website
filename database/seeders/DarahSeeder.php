<?php

namespace Database\Seeders;

use App\Models\Darah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $darah = [
            ['name' => 'A'],
            ['name' => 'B'],
            ['name' => 'AB'],
            ['name' => 'O']
        ];

        Darah::insert($darah);
    }
}
