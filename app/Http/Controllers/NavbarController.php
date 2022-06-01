<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavbarController extends Controller
{


    public function index()
    {
        $this->authorize('admin');
        return view('partials.navbar');
    }
}
