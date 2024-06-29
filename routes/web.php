<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/reference_book1', function () {
    return view('reference_book1');
})->name('reference_book1');