<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{

    public function index()
    {
        return view('faq', [
            'tittle' => 'FAQ',
            'active' => 'faq',
            'faq' => Faq::all()
        ]);
    }
}
