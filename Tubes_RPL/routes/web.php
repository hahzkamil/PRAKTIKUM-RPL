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
<<<<<<< HEAD

Route::get('/login', function () {
=======
Route::get('/', function () {
    return view('map.map');
});
Route::get('login', function () {
>>>>>>> f056fdbbe4a058ae1f345edd46044b6525487adb
    return view('landing.login');
});

Route::get('signup', function () {
    return view('landing.signup');
});
<<<<<<< HEAD

Route::get('information', function () {
    return view('detail.information');
});

=======
Route::get('sellerlist', function () {
    return view('sellerList.index');
});
Route::get('profile', function () {
    return view('profile.profile');
});
>>>>>>> f056fdbbe4a058ae1f345edd46044b6525487adb
