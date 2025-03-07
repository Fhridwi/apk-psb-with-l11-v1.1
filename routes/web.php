<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CalonSantriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\TahunAjaranController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});


// Route Santri
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/daftar-santri', [UserController::class, 'create'])->name('daftar');
Route::post('/daftar-santri-submit', [UserController::class, 'store'])->name('submit.store');
 //export bukti psb
Route::get('/data-CalonSantri/{id}/export-add', [CalonSantriController::class, 'exportPDF'])->name('bukti.psb');
   



//Route Admin


Route::prefix('/admin')->middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin');
    
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
    Route::get('/data-program', [ProgramController::class, 'index'])->name('program.index');
    Route::get('/tambah-data-program', [ProgramController::class, 'create'])->name('program.create');
    Route::post('/data-program', [ProgramController::class, 'store'])->name('program.store');
    Route::get('/data-program/{id}', [ProgramController::class, 'edit'])->name('program.edit');
    Route::put('/data-program/{id}', [ProgramController::class, 'update'])->name('program.update');
    Route::delete('/data-program/{id}', [ProgramController::class, 'destroy'])->name('program.delete');
    // Pendaftar
    Route::get('/data-pendaftar', [PendaftarController::class, 'index'])->name('pendaftar.index');
    Route::get('/tambah-data-pendaftar', [PendaftarController::class, 'create'])->name('pendaftar.create');
    Route::post('/data-pendaftar', [PendaftarController::class, 'store'])->name('pendaftar.store');
    Route::get('/data-pendaftar/{id}', [PendaftarController::class, 'edit'])->name('pendaftar.edit');
    Route::get('/data-pendaftar/{id}/show', [PendaftarController::class, 'show'])->name('pendaftar.show');
    Route::put('/data-pendaftar/{id}', [PendaftarController::class, 'update'])->name('pendaftar.update');
    Route::delete('/data-pendaftar/{id}', [PendaftarController::class, 'destroy'])->name('pendaftar.delete'); 
    // Calon Santri
    Route::get('/data-CalonSantri', [CalonSantriController::class, 'index'])->name('CalonSantri.index');
    Route::get('/tambah-data-CalonSantri', [CalonSantriController::class, 'create'])->name('CalonSantri.create');
    Route::post('/data-CalonSantri', [CalonSantriController::class, 'store'])->name('CalonSantri.store');
    Route::get('/data-CalonSantri/{id}', [CalonSantriController::class, 'edit'])->name('CalonSantri.edit');
    Route::put('/data-CalonSantri/{id}', [CalonSantriController::class, 'update'])->name('CalonSantri.update');
    Route::delete('/data-CalonSantri/{id}', [CalonSantriController::class, 'destroy'])->name('CalonSantri.delete');
   
   
   
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


    
});
