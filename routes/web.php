<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halaman_login');
});

// Dashboard routes dengan role-based access
use App\Http\Controllers\DashboardAdminController;

Route::get('/dashboard', function () {
    $user = request()->user();
    if ($user && method_exists($user, 'isAdmin') && $user->isAdmin()) {
        return app(DashboardAdminController::class)->index(request());
    } else {
        return view('dashboard_petugas');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin only routes
Route::middleware(['auth', 'verified', 'checkrole:admin'])->group(function () {
    // Admin features: semua akses ke statistik, manajemen kategori, dll
    Route::view('/laporan', 'laporan_statistik')->name('laporan');
    // Category management handled by controller
    Route::view('/kategori', 'manajemen_kategori')->name('kategori');
});

// Petugas + Admin routes (manajemen data)
Route::middleware(['auth', 'verified', 'checkrole:admin,petugas'])->group(function () {
    Route::view('/buku', 'manajemen_buku')->name('buku');
    Route::view('/anggota', 'manajemen_anggota')->name('anggota');
    Route::view('/peminjaman', 'peminjaman_pengembalian')->name('peminjaman');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
