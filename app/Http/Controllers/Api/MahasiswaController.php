<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return response()->json([
            'status' => true,
            'data' => $mahasiswa
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_mahasiswa' => 'required|max:50',
            'nim' => 'required|unique:mahasiswas',
            'prodi_id' => 'required'
        ]);

        $mahasiswa = Mahasiswa::create($validate);

        return response()->json([
            'status'=>true,
            'message'=>"Data berhasil ditambahkan",
            'data'=>$mahasiswa
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
