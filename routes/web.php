<?php

declare(strict_types=1);

use App\Http\Controllers\IncomesController;
use App\Http\Livewire\Categories\CategoriesOverview;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::resource('incomes', IncomesController::class);

    Route::get('categories', CategoriesOverview::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
