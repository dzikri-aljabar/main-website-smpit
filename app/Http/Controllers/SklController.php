<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SklController extends Controller
{
    public function index()
    {
        $konten = \App\Models\Skl::first();
        return view('profil.skl', compact('konten'));
    }
}
