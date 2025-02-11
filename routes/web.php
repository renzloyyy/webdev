<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/personal', function () {
    return view('personal');
})->name('personal');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/services', function () {
    return view('services');
})->name('services');


