<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\HomeController;
use Spatie\Sitemap\SitemapGenerator;

Route::get('/', [HomeController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'show']);
Route::get('/profil/visi-misi', [VisiMisiController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/profil/sekolah/budaya', [\App\Http\Controllers\BudayaController::class, 'index']);

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

Route::get('/generate-sitemap', function () {
    SitemapGenerator::create(config('app.url'))
    ->configureCrawler(function (\Spatie\Crawler\Crawler $crawler) {
        $crawler->setMaximumDepth(3); // biar tidak terlalu dalam
        $crawler->setDelayBetweenRequests(200); // biar server aman
    })
    ->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap otomatis berhasil dibuat!';
});
