<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');


Route::get('/tupoksi', function () {
    return view('tupoksi');
})->name('tupoksi');


Route::get('/struktur', function () {
    return view('struktur');
})->name('struktur');

Route::get('/kastrat-media', function () {
    return view('kastratMedia');
})->name('kastrat');