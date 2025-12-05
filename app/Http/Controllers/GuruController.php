<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $konten = \App\Models\ProfilGuru::first();
        return view('guru', compact('konten'));
    }
}
