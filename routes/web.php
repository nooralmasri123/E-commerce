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
    return view(view: 'home');
})->name('home');

Route::get('products' , function () {
    return view('products');
})->name('products');

Route::get('contact-us' , function () {
    return view('contact_us');
})->name('contact_us');

Route::get('about-us' , function () {
    return view('about_us');
})->name('about_us');

