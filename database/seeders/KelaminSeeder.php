<?php

namespace Database\Seeders;

use App\Models\Kelamin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelamin = [
            ['name' => 'Laki-Laki'],
            ['name' => 'Perempuan']
        ];

        Kelamin::insert($kelamin);
    }
}
