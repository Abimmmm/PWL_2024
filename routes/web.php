<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

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

// tugas praktikum 1
// home
Route::get('/', [HomeController::class, 'index']);

//product
Route::prefix('category')->group(function(){

    Route::get('/food', [ProductController::class, 'food']);
    Route::get('/beauty', [ProductController::class, 'beauty']);
    Route::get('/homeCare', [ProductController::class, 'homeCare']);
    Route::get('/baby', [ProductController::class, 'baby']);

});

//user
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);


//sales
Route::get('/user/sales', [SalesController::class, 'index']);

// Route::get('/', function () {
//     return view('Selamat Datang');
// });

// Route::get('/hello', [WelcomeController::class, 'hello']);
// Route::get('/greeting', [WelcomeController::class, 'greeting']);

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Route::resource('photos', PhotoController::class);
// Route::resource('photos', PhotoController::class)->only(['index', 'show']);
// Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);


// Route::get ('/world', function (){
//     return 'World';
// });

// Route::get('/about', function () {
//     return ('244107020078 | Abim Mustawa');
// });

// Route::get('/user/{name}', function ($name) {
//     return ('Nama Saya '.$name);
// });

// Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return ('Halaman artikel dengan ID '.$id);
// });


// Route::get('/user/{name?}', function ($name='John') {
//     return ('Nama Saya '.$name);
// });

