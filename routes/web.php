<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;


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

// Rute untuk menampilkan semua anggota
Route::get('/', function () {
    return redirect()->route('anggota.index');
});

// Rute untuk menampilkan formulir tambah anggota
Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');

// Rute untuk menangani penyimpanan data anggota yang baru
Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');

// Rute untuk menampilkan detail anggota
Route::get('/anggota/{id}', [AnggotaController::class, 'show'])->name('anggota.show');

// Rute untuk menampilkan formulir edit anggota
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');

// Rute untuk menangani pembaruan data anggota
Route::put('/anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');

// Rute untuk menangani penghapusan anggota
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');