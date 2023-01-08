<?php

namespace Database\Seeders;

use App\Models\Hubungan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HubunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hubungan = [
            ['name' => 'Suami'],
            ['name' => 'Istri'],
            ['name' => 'Anak'],
            ['name' => 'Menantu'],
            ['name' => 'Orang Tua'],
            ['name' => 'Mertua'],
            ['name' => 'Famili Lain'],
            ['name' => 'Pembantu']
        ];

        Hubungan::insert($hubungan);
    }
}
