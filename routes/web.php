<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController; // Menambahkan GuruController
use App\Http\Controllers\MataPelajaranController; // Menambahkan MataPelajaranController
use App\Http\Controllers\KelasController; // Menambahkan KelasController

// Rute Default, mengarah ke welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk login dan logout
Auth::routes(); // Otomatis mencakup login, register, dan logout

// Rute Home setelah login, hanya untuk pengguna yang sudah login
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Rute CRUD Ekstrakurikuler (dengan middleware auth)
Route::resource('ekstrakurikuler', EkstrakurikulerController::class)->middleware('auth');

// Rute CRUD Data Siswa dengan middleware auth
Route::resource('siswa', SiswaController::class)->middleware('auth');

// Rute CRUD Data Guru dengan middleware auth
Route::resource('guru', GuruController::class)->middleware('auth');

// Rute CRUD Data Mata Pelajaran dengan middleware auth
Route::resource('mata-pelajaran', MataPelajaranController::class)->middleware('auth');

// Rute CRUD Data Kelas dengan middleware auth
Route::resource('kelas', KelasController::class)->middleware('auth');
