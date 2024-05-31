<?php

use App\Http\Controllers\SellerControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\AuthController;


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
    return view('map.map');
});
#Route::get('login', function () {
    #return view('landing.login');
#});
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');



Route::get('signup', function () {
    return view('landing.signup');
});


Route::get('information', function () {
    return view('detail.information');
});


Route::get('sellerlist', function () {
    return view('sellerList.index');
});
Route::get('profile', function () {
    return view('profile.profile');
});
Route::get('catalogproduk', function () {
    return view('catalog.catalogproduk');
});
Route::get('detailcatalog', function () {
    return view('catalog.detailcatalog');
});


Route::get('contact', function () {
    return view('contact.contact');
});



Route::get('profile', function () {
    return view('profile.profile');
});
Route::get('editprofile', function () {
    return view('profile.editprofile');
});


//weather
Route::get('/', [WeatherController::class, 'index']);
Route::post('/weather', [WeatherController::class, 'getWeather'])->name('getWeather');

//seller
Route::get('/sellerlist', [SellerControllers::class, 'index']);
Route::get('/sellerlist', [SellerControllers::class, 'showSeller']);


