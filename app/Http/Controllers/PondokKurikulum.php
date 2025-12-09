<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PondokKurikulum extends Controller
{
    public function index()
    {
        $konten = \App\Models\PondokKurikulum::first();
        return view('program.pondok-kurikulum', compact('konten'));
    }
}
