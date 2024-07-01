<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Root/Dashboard
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dosen
Route::get('/dosen', [DosenController::class, 'show'])->name('dosen');
Route::get('/dosen/add', [DosenController::class, 'add'])->name('dosen.add');
Route::get('/dosen/{id?}', [DosenController::class, 'edit'])->name('dosen.edit');
Route::post('/dosen/submitAdd', [DosenController::class, 'submitAdd'])->name('dosen.submitAdd');
Route::post('/dosen/submitEdit/{id}', [DosenController::class, 'submitEdit'])->name('dosen.submitEdit');
Route::post('/dosen/delete/{id}', [DosenController::class, 'delete'])->name('dosen.delete');
// Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'show'])->name('mahasiswa');
// Mata Kuliah
Route::get('/matakuliah', [MatakuliahController::class, 'show'])->name('matakuliah');
// Pertemuan
Route::get('/pertemuan', [PertemuanController::class, 'show'])->name('pertemuan');
// Presensi
Route::get('/presensi', [PresensiController::class, 'show'])->name('presensi');

require __DIR__ . '/auth.php';
