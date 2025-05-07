<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/blog')
    ->name('blog.')
    ->controller(BlogController::class)
    ->group(function () {
    Route::get('/', 'index')
        ->name('index');
    Route::get('/show', 'show')
        ->name('show');
})->middleware(['auth', 'verified']);

require __DIR__.'/settings.php';require __DIR__.'/auth.php';
