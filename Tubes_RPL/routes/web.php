<?php

use App\Http\Controllers\SellerControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\AuthController;

use App\Models\Post;
use Illuminate\Http\Request;


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
Route::get('login', function () {
    return view('landing.login');
});
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

//NEWS

Route::get('/home', function () {
    $posts = Post::all(); // Fetch all posts
    return view('home', compact('posts')); // Ensure 'home' view exists and is properly set up
})->name('home');

Route::get('post/create', function () {
    return view('posts.create'); // Ensure 'post.create' view exists
});

Route::post('post', function (Request $request) {
    $post = Post::create($request->all()); // Validate and create a new post
    return redirect()->route('home'); // Redirect to the home page or another appropriate route
});

Route::get('post/{post}/edit', function (Post $post) {
    return view('post.edit', compact('post')); // Ensure 'post.edit' view exists
});

Route::get('post/{post}', function (Post $post) {
    return view('post.show', compact('post')); // Ensure 'post.show' view exists
});

Route::put('post/{post}', function (Request $request, Post $post) {
    $post->update($request->all()); // Validate and update the post
    return redirect()->route('home'); // Redirect to the home page or another appropriate route
});

Route::delete('post/{post}', function (Post $post) {
    $post->delete(); // Delete the post
    return redirect()->route('home'); // Redirect to the home page or another appropriate route
});

//NEWS

Route::get('profile', function () {
    return view('profile.profile');
});
Route::get('editprofile', function () {
    return view('profile.editprofile');
});


//weather

Route::post('/weather', [WeatherController::class, 'getWeather'])->name('getWeather');

//seller
Route::get('/sellerlist', [SellerControllers::class, 'index']);
Route::get('/sellerlist', [SellerControllers::class, 'showSeller']);

Route::get('/cart', function () {
    return view('catalog.cart');
});

Route::get('/checkout', function () {
    return view('catalog.pembayaran');
});
