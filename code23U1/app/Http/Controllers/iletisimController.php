<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class iletisimController extends Controller
{
    public function index()
    {
        return view('homepage.iletisim');
    }
}
