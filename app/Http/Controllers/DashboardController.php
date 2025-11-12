<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\prodi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (){

        $fakultas = Fakultas::first();
        $prodi = prodi::first();
        $mahasiswa = Mahasiswa::first();

        return view('welcome', compact('fakultas','prodi','mahasiswa'));
    }
}
