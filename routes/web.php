<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    // Logika ganti bahasa
    $lang = Request::get('lang');
    if ($lang) {
        App::setLocale($lang);
    }

    return view('beranda');
});
