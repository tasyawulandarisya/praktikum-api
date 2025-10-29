<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Models\Fakultas;
use App\Models\prodi;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class,'index'])->name('dashboard.index');

Route::get('/fakultas', [FakultasController::class,'index'])->name('fakultas.index');
Route::get('/fakultas/create', [FakultasController::class,'create'])->name('fakultas.create');
Route::post('/fakultas/store', [FakultasController::class,'store'])->name('fakultas.store');
Route::get('/fakultas/edit/{id}', [FakultasController::class,'edit'])->name('fakultas.edit');
Route::post('/fakultas/update/{id}', [FakultasController::class,'update'])->name('fakultas.update');
Route::get('/fakultas/hapus/{id}', [FakultasController::class,'destroy'])->name('fakultas.hapus');


//prodi
Route::get('/prodi', [ProdiController::class,'index'])->name('prodi.index');
Route::get('/prodi/create', [ProdiController::class,'create'])->name('prodi.create');
Route::post('/prodi/store', [ProdiController::class,'store'])->name('prodi.store');
Route::get('/prodi/edit/{id}', [ProdiController::class,'edit'])->name('prodi.edit');
Route::post('/prodi/update/{id}', [ProdiController::class,'update'])->name('prodi.update');
Route::get('/prodi/hapus/{id}', [ProdiController::class,'destroy'])->name('prodi.hapus');

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/data', function () {
    return view('data');
});