<?php

namespace App\Http\Controllers;

use App\Models\Stokdarah;
use Illuminate\Http\Request;

class DarahController extends Controller
{
    public function index()
    {
        $stokdarah = Stokdarah::latest()->get();
        return view('dashboard.donor.index', compact('stokdarahs'));
    }
}
