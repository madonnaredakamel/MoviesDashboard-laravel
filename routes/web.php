<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;




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
    return view('welcome');
});
Route::controller(HomeController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'log_in')->name('log_in');

    Route::get('/register', 'sign_in')->name('sign_in');
    Route::post('/register', 'register')->name('register');

    Route::get('/home', 'index')->name('home');
});
Route::controller(MovieController::class)->group(function () {
    Route::get('/all_movies', 'index')->name('movie.all');
    Route::get('/create', 'create')->name('movie.create');
    Route::post('/store', 'store')->name('movie.store');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/all_categories', 'index')->name('category.all');
    Route::get('/create', 'create')->name('category.create');
    Route::post('/store', 'store')->name('category.store');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/all_users', 'index')->name('user.all');
    Route::get('/create', 'create')->name('user.create');
    Route::post('/store', 'store')->name('user.store');
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
