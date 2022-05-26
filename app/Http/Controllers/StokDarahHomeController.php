<?php

namespace App\Http\Controllers;

use App\Models\Stokdarah;
use Illuminate\Http\Request;

class StokDarahHomeController extends Controller
{
    public function index()
    {
        $stokdarah = Stokdarah::select('*')
            ->get();

        return view('home', ['stokdarah' => $stokdarah]);
    }
    // public function show(Stokdarah $stokdarah)
    // {
    //     return view('home', [
    //         "stokdarah" => $stokdarah
    //     ]);
    // }
}
