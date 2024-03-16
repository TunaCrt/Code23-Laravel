<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Tuna';
        $dizi = ["Hakkımda","iletişim","CV"];

        return view('Homepage.index',compact('name','dizi'));
    }
}
