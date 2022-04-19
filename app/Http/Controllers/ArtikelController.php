<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel', [
            "tittle" => "Artikel",
            "artikel" => Artikel::latest()->get()
        ]);
    }
    public function show(Artikel $artikel)
    {
        return view('post', [
            "tittle" => "Single Post",
            "artikel" => $artikel
        ]);
    }
}
