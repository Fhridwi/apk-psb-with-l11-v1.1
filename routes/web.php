<?php

use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\TahunAjaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', [Auth])



Route::prefix('/admin')->middleware(['auth'])->group(function() {
    
Route::get('/', function() {
    return view('admin.dashboard');
});

//Tahun Ajaran
Route::get('/tahun-ajaran', [TahunAjaranController::class, 'index'])->name('tahun.index');
Route::get('/tambah-tahun-ajaran', [TahunAjaranController::class, 'create'])->name('tahun.create');
Route::post('/tahun-ajaran', [TahunAjaranController::class, 'store'])->name('tahun.store');
Route::get('/tahun-ajaran/{id}', [TahunAjaranController::class, 'edit'])->name('tahun.edit');
Route::put('/tahun-ajaran/{id}', [TahunAjaranController::class, 'update'])->name('tahun.update');
Route::delete('/tahun-ajaran/{id}', [TahunAjaranController::class, 'destroy'])->name('tahun.delete');
// sekolah
Route::get('/data-sekolah', [SekolahController::class, 'index'])->name('sekolah.index');
Route::get('/tambah-data-sekolah', [SekolahController::class, 'create'])->name('sekolah.create');
Route::post('/data-sekolah', [SekolahController::class, 'store'])->name('sekolah.store');
Route::get('/data-sekolah/{id}', [SekolahController::class, 'edit'])->name('sekolah.edit');
Route::put('/data-sekolah/{id}', [SekolahController::class, 'update'])->name('sekolah.update');
Route::delete('/data-sekolah/{id}', [SekolahController::class, 'destroy'])->name('sekolah.delete');
// program
Route::get('/data-Program', [ProgramController::class, 'index'])->name('program.index');
Route::get('/tambah-data-Program', [ProgramController::class, 'create'])->name('program.create');
Route::post('/data-Program', [ProgramController::class, 'store'])->name('program.store');
Route::get('/data-Program/{id}', [ProgramController::class, 'edit'])->name('program.edit');
Route::put('/data-Program/{id}', [ProgramController::class, 'update'])->name('program.update');
Route::delete('/data-Program/{id}', [ProgramController::class, 'destroy'])->name('program.delete');
// Pendaftar
Route::get('/data-pendaftar', [PendaftarController::class, 'index'])->name('pendaftar.index');
Route::get('/tambah-data-pendaftar', [PendaftarController::class, 'create'])->name('pendaftar.create');
Route::post('/data-pendaftar', [PendaftarController::class, 'store'])->name('pendaftar.store');
Route::get('/data-pendaftar/{id}', [PendaftarController::class, 'edit'])->name('pendaftar.edit');
Route::get('/data-pendaftar/{id}/show', [PendaftarController::class, 'show'])->name('pendaftar.show');
Route::put('/data-pendaftar/{id}', [Pe