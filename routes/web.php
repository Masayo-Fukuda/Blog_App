<?php

use App\Http\Controllers\LoginController;
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
    return view('welcome');
});

Route::get('login', [LoginController::class, 'login']);

Route::get('register', function () {
    return view('register');
});

Route::get('posts', function () {
    return view('posts.index');
});

// UserPostController
Route::get('user/{userId}/posts', function () {
    return view('user.posts.index');
});

Route::get('posts/create', function () {
    return view('posts.create');
});

Route::get('posts/{id}/edit', function () {
    return view('posts.edit');
});

Route::get('posts/{id}/show', function () {
    return view('posts.show');
});

Route::get('user/posts', function () {
    return view('users.index');
});
