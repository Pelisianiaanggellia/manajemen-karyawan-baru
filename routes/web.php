<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Route untuk fitur Penilaian Kinerja
Route::get('/penilaian-kinerja', function () {
    return view('Kinerja');
})->name('kinerja.index');

// Route untuk halaman Absensi //
Route::get('/absensi/riwayat', function () {
    return view('Absen');
})->name('absensi.riwayat');

// Route untuk halaman pengajuan izin //
Route::get('/pengajuan-izin', function () {
    return view('PengajuanSurat');
})->name('izin.index');

// untuk memproses pengiriman data ke HRD //
Route::post('/pengajuan-izin', function () {
    return redirect()->route('pengajuan.riwayat');
})->name('izin.store');

// Route untuk halaman Aturan perusagan //
Route::get('/aturan', function () {
    return view('Aturan');
});

// LOGOUT
Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirect kembali ke halaman utama atau login
    return redirect('/');
})->name('logout');
