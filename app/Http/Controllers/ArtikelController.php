<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('home', [
            "tittle" => "Home",
            "artikel" => Artikel::all()
        ]);
    }
    public function show($slug)
    {
        return view('artikel', [
            "tittle" => "Single Post",
            "artikel" => Artikel::find($slug)
        ]);
    }
}
