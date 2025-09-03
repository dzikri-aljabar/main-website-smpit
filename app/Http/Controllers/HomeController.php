<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController
{
    public function index()
    {
        $beritas = Berita::all();
        return view('home', compact('beritas'));
    }
}
