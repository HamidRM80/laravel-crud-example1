<?php

/* Laravel */

use Illuminate\Support\Facades\Route;

/* App */

use Hamidreza\LaravelCrudExample\Http\Controllers\PostController;

/* Post routes */
Route::middleware(['web'])->prefix('post/')->name('post.')->group(function () {
    Route::get('index', [PostController::class, 'index'])->name('index');
    Route::get('create', [PostController::class, 'create'])->name('create');
    Route::post('store', [PostController::class, 'store'])->name('store');
    Route::get('edit/{post}', [PostController::class, 'edit'])->name('edit');
    Route::put('update/{post}', [PostController::class, 'update'])->name('update');
    Route::get('show/{post}', [PostController::class, 'show'])->name('show');
    Route::get('destroy/{post}', [PostController::class, 'destroy'])->name('destroy');
});
