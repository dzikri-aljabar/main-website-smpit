<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriSekolahController extends Controller
{
    public function index()
    {
        $galeris = Galeri::where('jenis', 'sekolah')->get();
        return view('galeri.sekolah', compact('galeris'));
    }

    public function show($slug)
    {
        $galeri = Galeri::where('slug', $slug)->where('jenis', 'sekolah')->firstOrFail();
        
        return view('galeri.detail-gambar-sekolah', compact('galeri'));
    }
}
