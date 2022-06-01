<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stokdarah;


class HomeController extends Controller
{
    public function index()
    {
        $stokdarah = Stokdarah::all();

        return view('home', [
            'tittle' => 'Home',
            'stokdarah' => $stokdarah,

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
