<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hakkimdaController extends Controller
{
    public function index()
    {
        $name = "Tuna";
        $department = "Bilgisayar Mühendislği";
        $age = 20;
        $area = "Web Development";
        return view('homepage.hakkimda',compact('name','department','age','area'));
    }
}
