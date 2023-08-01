<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('register');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'create']);
Route::get('/payment', [RegisterController::class, 'show_payment']);
Route::post('/payment', [RegisterController::class, 'payment']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/home', [UserController::class, 'index'])->middleware('auth');
Route::post('/home', [UserController::class, 'index'])->middleware('auth');
Route::post('/home/{gender}', [UserController::class, 'filter'])->middleware('auth');

Route::post('/thumb', [UserController::class, 'wish'])->middleware('auth');
Route::get('/wishlist', [UserController::class, 'show_wish'])->middleware('auth');
Route::get('/requested', [UserController::class, 'requested'])->middleware('auth');
Route::post('/friend', [UserController::class, 'friend'])->middleware('auth');
Route::get('/friend', [UserController::class, 'show_friend'])->middleware('auth');
