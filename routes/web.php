<?php

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

// File: routes/web.php

Route::get('/masyarakat', function () {
    return view('masyarakat.user');
});
// routes/web.php

Route::get('/beranda', function () {
    return view('masyarakat.content.beranda'); // Halaman Beranda
});

Route::get('/profile', function () {
    return view('masyarakat.content.profile'); // Halaman Profil Desa
});

Route::get('/layanan', function () {
    return view('masyarakat.content.layanan'); // Halaman layanan
});


require __DIR__.'/auth.php';
