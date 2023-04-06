<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mobil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobil $mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        //
    }

    public function contohRelasiOneToMany($id)
    {
        // $karyawans = Karyawan::limit(2)->with('presensis')->get();
        // $karyawan = Karyawan::with('presensis')->findOrFail($id);
        // $karyawan->load('presensis');
        // return $karyawans;
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->presensis()->create([
            // 'karyawan_id' => $karyawan->id,   ===> ga perlu
            'tanggal' => date('Y-m-d'),
            'masuk' => date('Y-m-d H:i:s'),
            'status' => 1
        ]);
    }
}
