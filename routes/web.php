<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPostController;
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

Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'register'])->name('register');

Route::group(['middleware' => 'auth'], function(){
 
    Route::resource('posts', PostController::class);
    Route::get('users_posts/{id}', [UserPostController::class, 'index'])->name('users_posts.index');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
   
});