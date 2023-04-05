<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karyawans = [];
        for ($i = 0; $i < 100; $i++) {
            $karyawans[] = [
                'name' => fake()->name(),
                'tanggal_lahir' => fake()->date('Y-m-d', '-10 years')
            ];
        }
        Karyawan::insert($karyawans);
    }
}
