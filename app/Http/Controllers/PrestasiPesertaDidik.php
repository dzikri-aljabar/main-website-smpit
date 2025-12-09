<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestasiPesertaDidik extends Controller
{
    public function index()
    {
        $konten = \App\Models\PrestasiPesertaDidik::first();
        return view('prestasi.peserta-didik', compact('konten'));
    }
}
