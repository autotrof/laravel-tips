<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'tanggal_lahir'];

    function presensis()
    {
        return $this->hasMany(Presensi::class);

        // contoh cara non standar, kalau nama kolomnya bukan karyawan_id
        // return $this->hasMany(Presensi::class, 'karyawan');
    }
}
