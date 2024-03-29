<?php

use App\Http\Controllers\Frontend\BlogFController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("front.index");

Route::get('/blogsF',[BlogFController::class,'index'])->name("front.blogs.index");
Route::get('/blogs/show/{id}',[BlogFController::class,'show'])->name("front.blogs.show");
