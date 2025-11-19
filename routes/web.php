<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DosenController;
use App\Models\Fakultas;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\Dosen;
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

Route::get('/', [DashboardController::class,'index'])->middleware('auth')->name('dashboard.index');

//fakultas
Route::get('/fakultas', [FakultasController::class,'index'])->middleware('auth')->name('fakultas.index');
Route::get('/fakultas/create', [FakultasController::class,'create'])->middleware('auth')->name('fakultas.create');
Route::post('/fakultas/store', [FakultasController::class,'store'])->middleware('auth')->name('fakultas.store');
Route::get('/fakultas/edit/{id}', [FakultasController::class,'edit'])->middleware('auth')->name('fakultas.edit');
Route::post('/fakultas/update/{id}', [FakultasController::class,'update'])->middleware('auth')->name('fakultas.update');
Route::get('/fakultas/hapus/{id}', [FakultasController::class,'destroy'])->middleware('auth')->name('fakultas.hapus');


//prodi
Route::get('/prodi', [ProdiController::class,'index'])->middleware('auth')->name('prodi.index');
Route::get('/prodi/create', [ProdiController::class,'create'])->middleware('auth')->name('prodi.create');
Route::post('/prodi/store', [ProdiController::class,'store'])->middleware('auth')->name('prodi.store');
Route::get('/prodi/edit/{id}', [ProdiController::class,'edit'])->middleware('auth')->name('prodi.edit');
Route::post('/prodi/update/{id}', [ProdiController::class,'update'])->middleware('auth')->name('prodi.update');
Route::get('/prodi/hapus/{id}', [ProdiController::class,'destroy'])->middleware('auth')->name('prodi.hapus');

//mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class,'index'])->middleware('auth')->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class,'create'])->middleware('auth')->name('mahasiswa.create');
Route::post('/mahasiswa/store', [MahasiswaController::class,'store'])->middleware('auth')->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class,'edit'])->middleware('auth')->name('mahasiswa.edit');
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class,'update'])->middleware('auth')->name('mahasiswa.update');
Route::get('/mahasiswa/hapus/{id}', [MahasiswaController::class,'destroy'])->middleware('auth')->name('mahasiswa.hapus');

//dosen
Route::get('/dosen', [DosenController::class,'index'])->middleware('auth')->name('dosen.index');
Route::get('/dosen/create', [DosenController::class,'create'])->middleware('auth')->name('dosen.create');
Route::post('/dosen/store', [DosenController::class,'store'])->middleware('auth')->name('dosen.store');
Route::get('/dosen/edit/{id}', [DosenController::class,'edit'])->middleware('auth')->name('dosen.edit');
Route::post('/dosen/update/{id}', [DosenController::class,'update'])->middleware('auth')->name('dosen.update');
Route::get('/dosen/hapus/{id}', [DosenController::class,'destroy'])->middleware('auth')->name('dosen.hapus');


Route::get('/profil', function () {
    return view('profil');
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/register',[AuthController::class, 'formRegister'])->name('register');
Route::post('/post-register',[AuthController::class,'post'])->name('post');
Route::get('/login',[AuthController::class, 'formLogin'])->name('login');
Route::post('/post-login',[AuthController::class,'loginPost'])->name('post.login');
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');