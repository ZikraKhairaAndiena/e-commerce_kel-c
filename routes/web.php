<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function(){
    return view('customer.home');
});

Route::get('/another', function(){
    return view('another/another');
});



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/about', function(){
    return view('customer.about');
});

Route::get('/shop', function(){
    return view('customer.shop');
});

Route::get('/shop-single', function(){
    return view('customer.shop-single');
});

Route::get('/contact', function(){
    return view('customer.contact');
});
