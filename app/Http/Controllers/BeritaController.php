<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::where('jenis', 'berita')->latest()->get();
        $beritaTerbaru = Berita::where('jenis', 'berita')->latest()->first();
        

        return view('berita', compact(['beritas', 'beritaTerbaru']));
    }
    public function show($slug)
    {
        $beritas = Berita::all(); // list berita
        $berita = Berita::where('slug', $slug)->firstOrFail(); // detail berita
        return view('detail-berita', compact(['berita', 'beritas']));
    }
}
