<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class, 'welcome'])->name('welcome');
Route::get('/projects', [RouteController::class, 'projects'])->name('projects');
Route::get('/team', [RouteController::class, 'team'])->name('team');
Route::get('/services', [RouteController::class, 'services'])->name('services');

Route::post('/login', function(){});
Route::post('/register', function(){});
Route::post('/logout', function(){});