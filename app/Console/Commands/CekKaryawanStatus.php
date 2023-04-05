<?php

namespace App\Console\Commands;

use App\Models\Karyawan;
use Illuminate\Console\Command;

class CekKaryawanStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-karyawan-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $batas_pensiun = 30;
        Karyawan::whereRaw("DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), tanggal_lahir)), '%Y') + 0 > " . $batas_pensiun)->whereNull('pensiun_at')->update(['pensiun_at' => date('Y-m-d')]);
    }
}
