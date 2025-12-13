<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriPondokController extends Controller
{
    public function index()
    {
        $galeris = Galeri::where('jenis', 'pondok')->get();
        return view('galeri.pondok', compact('galeris'));
    }

    public function show($slug)
    {
        $galeri = Galeri::where('slug', $slug)->where('jenis', 'pondok')->firstOrFail();
        
        return view('galeri.detail-gambar-pondok', compact('galeri'));
    }
}
