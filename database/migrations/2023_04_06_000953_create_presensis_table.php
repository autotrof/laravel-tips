<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('karyawan_id')->constrained();
            // $table->unsignedBigInteger('karyawan')->index();
            // $table->foreign('karyawan')->on('karyawans')->references('id');
            $table->date('tanggal');
            $table->timestamp('masuk')->nullable();
            $table->timestamp('pulang')->nullable();
            $table->smallInteger('status')->default(0)->comment('1=masuk,2=masuk&pulang,3=izin,4=sakit,5=cuti');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
