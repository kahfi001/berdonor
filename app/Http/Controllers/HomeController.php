<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Models\Stokdarah;


class HomeController extends Controller
{
    public function index()
    {

        $stokdarah = Stokdarah::all();
        $artikel = Artikel::all();

        return view('home', [
            'tittle' => 'Home',
            'stokdarah' => $stokdarah,
            "artikel" => $artikel,
        ]);
    }

    // public function show(Stokdarah $stokdarah)
    // {
    //     return Stokdarah::all();
    //     // return view('home', [
    //     //     "tittle" => "Home",
    //     //     "stokdarah" => $stokdarah
    //     // ]);
    // }
}
