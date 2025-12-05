<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $konten = VisiMisi::first();
        return view('visi-misi', compact('konten'));
    }
}
