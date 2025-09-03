<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'show']);
Route::get('/profil/visi-misi', [VisiMisiController::class, 'index']);
Route::get('/profil/sekolah/budaya', function () {
    return view('maintenance');
});
Route::get('/profil/sekolah/skl', function () {
    return view('maintenance');
});
Route::get('/profil/guru', function () {
    return view('maintenance');
});
Route::get('/program/sekolah/kurikulum', function () {
    return view('maintenance');
});
Route::get('/program/sekolah/kesiswaan', function () {
    return view('maintenance');
});
Route::get('/program/pondok/kurikulum', function () {
    return view('maintenance');
});
Route::get('/program/pondok/kesantrian', function () {
    return view('maintenance');
});
Route::get('/prestasi/guru', function () {
    return view('maintenance');
});
Route::get('/prestasi/peserta-didik', function () {
    return view('maintenance');
});
Route::get('/galeri/sekolah', function () {
    return view('maintenance');
});
Route::get('/galeri/pondok', function () {
    return view('maintenance');
});
Route::get('/spmb', function () {
    return view('maintenance');
});
Route::get('/berita', function () {
    return view('maintenance');
});
Route::get('/artikel', function () {
    return view('maintenance');
});