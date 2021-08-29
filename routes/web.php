<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        "name" => "Ucup",
        "email" => "ucup@gmail.com",
        "image" => "ucup.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
// halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
