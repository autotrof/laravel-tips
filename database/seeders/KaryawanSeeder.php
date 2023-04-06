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
        for ($i=1;$i<=100;$i++) {
            $karyawans[] = [
                'nama' => fake()->name(),
                'tanggal_lahir' => fake()->date('Y-m-d', '-20 years')
            ];
        }
        Karyawan::insert($karyawans);
    }
}
