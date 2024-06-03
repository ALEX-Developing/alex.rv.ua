<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class, 'projects'])->name('welcome');
Route::get('/projects', [RouteController::class, 'projects'])->name('projects');
Route::get('/projects/{name}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/team', [RouteController::class, 'team'])->name('team');
Route::get('/services', [RouteController::class, 'services'])->name('services');

Route::get('/account', [RouteController::class, 'account'])->middleware(['auth', 'verified'])->name('account');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/submit-order', [OrderController::class, 'store'])->name('submit.order');

Route::post('/orders/{order}/archive', [OrderController::class, 'archive'])->name('orders.archive');
Route::post('/orders/{order}/success', [OrderController::class, 'success'])->name('orders.success');
Route::post('/orders/{order}/new', [OrderController::class, 'new'])->name('orders.new');

Route::get('/pay', [PaymentController::class, 'index']);
Route::post('/pay', [PaymentController::class, 'pay']);
Route::post('/liqpay/callback', [PaymentController::class, 'callback']);
Route::post('/liqpay/callback', [PaymentController::class, 'callback'])->name('liqpay.callback');

Route::get('/pay/success', [PaymentController::class, 'success'])->name('payment.success');

require __DIR__.'/auth.php';
