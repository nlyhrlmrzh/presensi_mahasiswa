<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\PresesnsiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// routes/web.php

Route::get('/dosen', [DosenController::class, 'dosen'])->name('dosen');
Route::get('/dosen/tambah', [DosenController::class, 'tambah'])->name('dosen.tambah');

Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa'])->name('mahasiswa');
Route::get('/matakuliah', [MatakuliahController::class, 'matakuliah'])->name('matakuliah');
Route::get('/pertemuan', [PertemuanController::class, 'pertemuan'])->name('pertemuan');
Route::get('/presensi', [PresensiController::class, 'presensi'])->name('presensi');

require __DIR__.'/auth.php';
