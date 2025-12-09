<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahKesiswaan extends Controller
{
    public function index()
    {
        $konten = \App\Models\SekolahKesiswaan::first();
        return view('program.kesiswaan', compact('konten'));
    }
}
