<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestasiGuru extends Controller
{
    public function index()
    {
        $konten = \App\Models\PrestasiGuru::first();
        return view('prestasi.guru', compact('konten'));
    }
}
