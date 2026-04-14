<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Berita;
use App\Models\StrukturSekolah;

class HomeController
{
    public function index()
    {
        $beritas = Berita::where('jenis', 'berita')->latest()->take(3)->get();
        $artikels = Berita::where('jenis', 'artikel')->latest()->take(3)->get();
        $kepalaSekolah = StrukturSekolah::where('jabatan', 'Kepala Sekolah')->first();
        $kepalaPondok = StrukturSekolah::where('jabatan', 'Kepala Pondok')->first();
        $banners = Banner::latest()->take(3)->get();

        return view('home', compact(['beritas', 'artikels', 'kepalaSekolah', 'kepalaPondok', 'banners']));
    }
}
