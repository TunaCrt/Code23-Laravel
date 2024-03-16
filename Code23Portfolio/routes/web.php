<?php

use App\Http\Controllers\cvController;
use App\Http\Controllers\hakkimdaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\iletisimController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index']);
Route::get('/cv',[cvController::class,'index']);
Route::get('/iletisim',[iletisimController::class,'index']);
Route::get('/hakkimda',[hakkimdaController::class,'index']);
/*{{ route('denemehakkimizda') }}*/




