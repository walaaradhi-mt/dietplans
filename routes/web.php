<?php

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
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/workouts', function () {
    return view('workouts');
})->name('workouts');

Route::get('/trainers', function () {
    return view('trainers');
})->name('trainers');

Route::get('/plans', function () {
    return view('plans');
})->name('plans');

