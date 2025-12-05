<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BudayaController extends Controller
{
    public function index()
    {
        $budaya = \App\Models\Budaya::first();
        return view('budaya', compact('budaya'));
    }
}
