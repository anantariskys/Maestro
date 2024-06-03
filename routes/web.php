<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashoardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [DashoardController::class, 'index'])->name('home');
    
    // Rute untuk user
    Route::middleware('user')->group(function () {
        Route::get('/category', [DashoardController::class, 'allCategory'])->name('category');
        Route::get('/product/{id}', [DashoardController::class, 'show'])->name('product.show');
    });

    // Rute untuk semua pengguna terautentikasi
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute untuk admin
    Route::middleware('admin')->group(function () {
        Route::resource('products', ProductController::class);
        Route::resource('categories', CategoryController::class);
    });
});

require __DIR__.'/auth.php';