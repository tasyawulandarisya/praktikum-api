<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = prodi::all();
        return view('prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        $prodi = prodi::all();
        return view('prodi.create',compact('prodi','fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_prodi' => 'required|max:50',
            'kode_prodi' => 'required',
            'fakultas_id' => 'required'
        ]);
        $prodi = prodi::create([
            'nama_prodi' => $request->nama_prodi,
            'kode_prodi' => $request->kode_prodi,
            'fakultas_id' =>$request->fakultas_id
        ]);

        return redirect()->route('prodi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = prodi::findOrFail($id);
        $fakultas = Fakultas::all();
        return view('prodi.edit', compact('prodi','fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'nama_prodi' => 'required|max:50',
            'kode_prodi' => 'required',
        ]);

        $prodi = prodi::findOrFail($id);
        $prodi->update([
            'nama_prodi'=> $request->nama_prodi,
            'kode_prodi'=> $request->kode_prodi,
        ]);

        return redirect()->route('prodi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = prodi::findOrFail($id);

        $prodi->delete();
        return redirect()->route('prodi.index');
    }
}
