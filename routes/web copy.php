<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/details/{id}', [PageController::class, 'details'])->name('details');

Route::delete('/delete/{id}', [PageController::class, 'delete'])->name('delete');

Route::get('/modify/{id}', [PageController::class, 'modify'])->name('modify');
Route::put('/books/{id}', [PageController::class, 'update'])->name('books.update');



Route::get('/create', [PageController::class, 'create'])->name('create');

Route::post('/books', [PageController::class, 'store'])->name('books.store');
