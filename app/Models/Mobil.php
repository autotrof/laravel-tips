<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk', 'roda'
    ];

    protected static function booted(): void
    {
        static::creating(function (Mobil $mobil) {
            Log::info("MODEL MOBIL SEDANG DIBIKIN");
        });
        static::created(function (Mobil $mobil) {
            Log::info("MODEL MOBIL SUDAH DIBIKIN DENGAN ID : $mobil->id");
        });
    }
}
