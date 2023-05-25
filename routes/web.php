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
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('posts', function () {
    return view('posts.index');
});

Route::get('posts/create', function () {
    return view('posts.create');
});

Route::get('posts/edit', function () {
    return view('posts.edit');
});

Route::get('posts/show', function () {
    return view('posts.show');
});

Route::get('user/posts', function () {
    return view('users.index');
});
