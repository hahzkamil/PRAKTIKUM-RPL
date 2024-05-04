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
    return view('map.map');
});
Route::get('login', function () {
    return view('landing.login');
});
Route::get('/signup', function () {
    return view('landing.signup');
});
Route::get('sellerlist', function () {
    return view('sellerList.index');
});
Route::get('profile', function () {
    return view('profile.profile');
});
<<<<<<< HEAD
Route::get('editprofile', function () {
    return view('profile.editprofile');
});
=======

Route::resource('sellerList', SellerController::class);
>>>>>>> d1b7433499dade7831d76bed3df30422322a90f3
