<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


Route::get('/', function (Request $request) {
    //  ganti bahasa
    $lang = $request->query('lang');
    if ($lang) {
        App::setLocale($lang);
        session(['locale' => $lang]);
    }

    return view('beranda');
});

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

// LOGOUT
Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirect kembali ke halaman utama atau login
    return redirect('/');
})->name('logout');
