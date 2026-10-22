<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/jurusan', function () {
    return view('siswa.jurusan');
});
