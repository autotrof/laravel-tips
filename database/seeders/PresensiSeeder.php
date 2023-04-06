<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use App\Models\Presensi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PresensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karyawans = Karyawan::all();
        $presensis = [];
        foreach ($karyawans as $karyawan) {
            for ($i = 0; $i < fake()->numberBetween(10, 20); $i++) {
                // untuk karyawan ini, presensinya -> create
                // $karyawan->presensis()->create([]);
                $tanggal = date('Y-m-d', strtotime('-'.$i.'day'));
                $presensis[] = [
                    'karyawan_id' => $karyawan->id,
                    'tanggal' => $tanggal,
                    'masuk' => date('Y-m-d H:i:s', strtotime($tanggal.' 08:00:00')),
                    'pulang' => date('Y-m-d H:i:s', strtotime($tanggal.' 17:00:00')),
                    'status' => 2
                ];
            }
        }
        Presensi::insert($presensis);
    }
}
