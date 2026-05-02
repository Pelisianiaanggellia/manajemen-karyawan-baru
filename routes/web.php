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

Route::get('/absensi/riwayat', function () {
    return view('Absen');
})->name('absensi.riwayat');


// LOGOUT
Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirect kembali ke halaman utama atau login
    return redirect('/');
})->name('logout');

Route::get('/pengajuan-izin', function () {
    return view('izin');
})->name('izin.index');
