<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index']);
Route::get('/create-book', [BookController::class, 'create']);
Route::post('/store-book', [BookController::class, 'store'])->name('store-book');


Route::get('/edit-book/{book}', [BookController::class, 'edit'])->name('edit-book');
Route::put('/update-book/{book}', [BookController::class, 'update'])->name('update-book');
Route::delete('/destroy-book/{book}', [BookController::class, 'destroy'])->name('destroy-book');