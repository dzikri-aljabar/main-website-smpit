<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahKurikulum extends Controller
{
    public function index()
    {
        $konten = \App\Models\SekolahKurikulum::first();
        return view('program.sekolah-kurikulum', compact('konten'));
    }
}
