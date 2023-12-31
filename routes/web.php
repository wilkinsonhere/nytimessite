<?php

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
    return view('index');
})->name('index');

Route::get('/shop', function() {
	return view('shop');
})->name('shop');

Route::get('/register', function () {
	return view('register');
})->name('register');

Route::get('/about', function () {
	return view('about');
})->name('about');