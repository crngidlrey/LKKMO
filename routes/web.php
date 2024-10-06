<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('masyarakat.user-beranda');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// File: routes/web.php

Route::get('/sku', function () {
    return view('masyarakat.user-sku');
});

Route::get('/sktm', function () {
    return view('masyarakat.user-sktm');
});

Route::get('/skck', function () {
    return view('masyarakat.user-skck');
});

// routes/web.php

Route::get('/beranda', function () {
    return view('masyarakat.user-beranda'); // Halaman Beranda
});

Route::get('/profile', function () {
    return view('masyarakat.user-profile'); // Halaman Profil Desa
});

Route::get('/layanan', function () {
    return view('masyarakat.user-layanan'); // Halaman layanan
});

Route::get('/informasi', function () {
    return view('masyarakat.user-informasi'); // Halaman informasi
});

Route::get('/user-login', function () {
    return view('masyarakat.user-login'); // Halaman informasi
});

Route::get('/daftar', function () {
    return view('masyarakat.user-daftar'); // Halaman informasi
});

require __DIR__.'/auth.php';
