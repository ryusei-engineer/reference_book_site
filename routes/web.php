<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextbookController;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/reference_book1', function () {
    return view('reference_book1');
})->name('reference_book1');


Route::get('/textbooks', [TextbookController::class, 'index'])->name('textbooks.index');
Route::get('/textbooks/create', [TextbookController::class, 'create'])->name('textbooks.create');
Route::post('/textbooks/confirm', [TextbookController::class, 'confirm'])->name('textbooks.confirm');
Route::post('/textbooks/store', [TextbookController::class, 'store'])->name('textbooks.store');
Route::get('/textbooks/complete', [TextbookController::class, 'complete'])->name('textbooks.complete');
Route::get('/textbooks/{id}', [TextbookController::class, 'show'])->name('textbooks.show');