<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;


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
    return view('my-account');
})->name('account');

Route::get('/cart', 'App\Http\Controllers\CartController@showCart')->name('cart');

Route::get('/add-to-cart', 'App\Http\Controllers\CartController@addtoCart');

Route::post('/store-in-session', 'App\Http\Controllers\SessionController@storeInSession');

Route::get('/zones', 'App\Http\Controllers\ZoneController@fetchZones');

Route::get('/check-delivery-zone', 'App\Http\Controllers\checkDeliveryZone@checkDeliveryZone');

//pages

route::get('/cgv', function () {
    return view('pages.cgv');
})->name('cgv');

route::get('/contact', function () {
    return view('contact');
})->name('contact');

route::get('/donnees-personnelles', function () {
    return view('pages.donness');
})->name('donnees-personnelles');

route::get('/loyaute', function () {
    return view('pages.loyaute');
})->name('loyaute');

route::get('/mentions-legales', function () {
    return view('pages.mentions');
})->name('mentions-legales');

route::get('/nos-restaurants', function () {
    return view('nosrestaurents');
})->name('nos-restaurants');

route::get('/recrutment', function () {
    return view('recrutment');
})->name('recrutment');

route::get('/sushi-experience', function () {
    return view('sushiexp');
})->name('sushi-experience');

// menu routes
Route::get('/menu', [MenuController::class, 'allCategories'])->name('menu');

Route::get('/menu/{category}', [MenuController::class, 'subcategories'])->name('menu.subcategories');

Route::get('/menu/{category}/{subcategory}', [MenuController::class, 'products'])->name('menu.products');

Route::get('/menu/{category}/{subcategory}/{product}', [MenuController::class, 'productDetails'])->name('menu.productDetails');

Auth::routes();
