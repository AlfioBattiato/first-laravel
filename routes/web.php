<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/details/{id}', [PageController::class, 'details'])->name('details');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {


    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');


    Route::delete('/delete/{id}', [PageController::class, 'delete'])->name('delete');
    Route::get('/modify/{id}', [PageController::class, 'modify'])->name('modify');
    Route::put('/books/{id}', [PageController::class, 'update'])->name('books.update');
    Route::get('/create', [PageController::class, 'create'])->name('create');
    Route::post('/books', [PageController::class, 'store'])->name('books.store');

});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

require __DIR__ . '/auth.php';


