<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/account', function () {
    return view('account');
})->name('account');

route::get('/cart', function () {
    return view('cart');
})->name('cart');

route::get('/loyalty', function () {
    return view('loyalty');
})->name('loyalty');

route::get('/recruitment', function () {
    return view('recruitment');
})->name('recruitment');

route::get('/sushiexperience', function () {
    return view('sushiexperience');
})->name('sushiexperience');    

route::get('/restaurants', function () {
    return view('restaurants');
})->name('restaurants');

route::get('/contact', function () {
    return view('contact');
})->name('contact');

route::get('/cgv', function () {
    return view('cgv');
})->name('cgv');

route::get('/personal-data', function () {
    return view('personal-data');
})->name('personal-data');

route::get('/legal-mentions', function () {
    return view('legal-mentions');
})->name('legal-mentions');

