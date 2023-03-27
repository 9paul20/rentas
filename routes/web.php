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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/table_two', function () {
    return view('table_two');
});
Route::get('/table_three', function () {
    return view('table_three');
});
Route::get('/daterange', function () {
    return view('daterange');
});
Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/sidebar', function () {
    return view('sidebar');
});
Route::get('/profile', function () {
    return view('profile');
});
