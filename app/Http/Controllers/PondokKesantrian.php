<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PondokKesantrian extends Controller
{
    public function index()
    {
        $konten = \App\Models\PondokKesantrian::first();
        return view('program.kesantrian', compact('konten'));
    }
}
