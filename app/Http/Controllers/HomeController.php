<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController
{
    public function index()
    {
        $beritas = Berita::where('jenis', 'berita')->latest()->take(3)->get();
        $artikels = Berita::where('jenis', 'artikel')->latest()->take(3)->get();

        return view('home', compact([   'beritas', 'artikels']));
    }
}
