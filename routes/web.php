<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextbookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CategoryController;

// TOP ページ
Route::get('/', [TextbookController::class, 'index'])->name('index');

Route::group(['prefix' => 'textbooks', 'as' => 'textbooks.'], function () {
	Route::get('/', [TextbookController::class, 'index'])->name('index');
	Route::get('/create', [TextbookController::class, 'create'])->name('create');
	Route::post('/confirm', [TextbookController::class, 'confirm'])->name('confirm');
	Route::post('/store', [TextbookController::class, 'store'])->name('store');
	Route::get('/complete', [TextbookController::class, 'complete'])->name('complete');
	Route::get('search', [TextbookController::class, 'search'])->name('search');

	// 一番下
	Route::get('/{id}', [TextbookController::class, 'show'])->name('show');
});

Route::post('textbooks/{id}/review', [ReviewController::class, 'store'])->name('reviews.store');

// テスト表示用
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/category', [CategoryController::class, 'index'])->name('categories.index');
Route::post('category', [CategoryController::class, 'store'])->name('categories.store');