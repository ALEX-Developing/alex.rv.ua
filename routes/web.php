<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class, 'welcome'])->name('welcome');
Route::get('/projects', [RouteController::class, 'projects'])->name('projects');
Route::get('/team', [RouteController::class, 'team'])->name('team');
Route::get('/services', [RouteController::class, 'services'])->name('services');

Route::get('/account', [RouteController::class, 'account'])->middleware(['auth', 'verified'])->name('account');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
