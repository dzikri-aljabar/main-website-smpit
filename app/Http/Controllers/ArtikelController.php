<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Berita::where('jenis', 'artikel')->latest()->get();
        $artikelTerbaru = Berita::where('jenis', 'artikel')->latest()->first();

        return view('artikel', compact(['artikels', 'artikelTerbaru']));
    }
}
