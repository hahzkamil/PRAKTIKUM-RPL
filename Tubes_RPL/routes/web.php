<?php

use App\Http\Controllers\SellerControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelControllerAdmin;
use App\Http\Controllers\Artikelcontroller;

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
    return view('map.dashboard');
});
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//artikel

Route::get('/show-artikel', [Artikelcontroller::class, 'showArtikel']);
Route::get('/show-artikel/{id}', [Artikelcontroller::class, 'detailArtikel']);

//artikel

Route::get('/kebijakanprivasi', function () {
    return view('kebijakanprivasi');
});

// Route untuk menampilkan form signup
Route::get('/signup', [AuthController::class, 'showRegistrationForm'])->name('signup');

// Route untuk memproses data form signup
Route::post('/signup', [AuthController::class, 'register'])->name('register');


Route::get('information', function () {
    return view('detail.information');
});


// Route::get('sellerlist', function () {
//     return view('sellerList.index');
// });
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

// Route::get('events', function () {
//     return view('event.event');
// });

//weather

Route::post('/weather', [WeatherController::class, 'getWeather'])->name('getWeather');

//seller
Route::get('/sellerlist', [SellerControllers::class, 'index']);
Route::get('/sellerlist/{id}', [SellerControllers::class, 'showSeller'])->where('id', '[0-9]+')->name('sellerList.detailmitra');
// Route::get('/detailmitra', function () {
//     return view('sellerlist.detailmitra');
// });

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{id}', [EventController::class, 'showEvent'])->where('id', '[0-9]+')->name('event.detailevent');

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

Route::get('/cart', function () {
    return view('catalog.cart');
});

Route::get('/checkout', function () {
    return view('catalog.pembayaran');
});

Route::get('/aboutus', function () {
    return view('tentang.aboutus');
});

Route::get('/listdonasi', function () {
    return view('donasi.listdonasi');
});

Route::get('/tampilandonasi', function () {
    return view('donasi.tampilandonasi');
});

Route::get('/complaint-success', function () {
    return view('tentang.complaint-success');
});


