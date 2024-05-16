<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,'index'])->name('index');
Route::get('/details/{id}', [PageController::class,'details'])->name('details');
Route::get('/delete/{id}', [PageController::class,'delete'])->name('delete');
Route::get('/modify/{id}', [PageController::class,'modify'])->name('modify');
Route::get('/create', [PageController::class,'create'])->name('create');
