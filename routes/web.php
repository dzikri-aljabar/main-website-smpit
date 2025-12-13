<?php

use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SklController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\GaleriPondokController;
use App\Http\Controllers\GaleriSekolahController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'show']);
Route::get('/profil/visi-misi', [VisiMisiController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/profil/sekolah/budaya', [\App\Http\Controllers\BudayaController::class, 'index']);
Route::get('/profil/guru', [\App\Http\Controllers\GuruController::class, 'index']);
Route::get('/profil/sekolah/skl', [SklController::class, 'index']);
Route::get('/program/sekolah/kurikulum', [\App\Http\Controllers\SekolahKurikulum::class, 'index']);
Route::get('/program/sekolah/kesiswaan', [\App\Http\Controllers\SekolahKesiswaan::class, 'index']);
Route::get('/program/pondok/kurikulum', [\App\Http\Controllers\PondokKurikulum::class, 'index']);
Route::get('/program/pondok/kesantrian', [\App\Http\Controllers\PondokKesantrian::class, 'index']);
Route::get('/prestasi/guru', [\App\Http\Controllers\PrestasiGuru::class, 'index']);
Route::get('/prestasi/peserta-didik', [\App\Http\Controllers\PrestasiPesertaDidik::class, 'index']);
Route::get('/galeri/sekolah', [GaleriSekolahController::class, 'index']);
Route::get('/galeri/sekolah/{slug}', [GaleriSekolahController::class, 'show']);
Route::get('/galeri/pondok', [GaleriPondokController::class, 'index']);
Route::get('/galeri/pondok/{slug}', [GaleriPondokController::class, 'show']);


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
