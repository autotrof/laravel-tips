<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mobil::insert([
            [
                'merk' => 'Avansa',
                'roda' => 4
            ],
            [
                'merk' => 'Hino',
                'roda' => 6
            ],
            [
                'merk' => 'Obat Nyamuk',
                'roda' => 3
            ],
            [
                'merk' => 'Motor',
                'roda' => 2
            ]
        ]);
    }
}
