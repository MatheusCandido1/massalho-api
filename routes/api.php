<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::group(['prefix' => 'v1'], function() {
Route::get('/unauthorized', [AuthController::class, 'unauthorized'])->name('login');

// Authentication
Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/account', [AuthController::class, 'register']);
});


// Solicitations
Route::get('/solicitations', [SolicitationController::class,  'getSolicitations']);
Route::post('/solicitations', [SolicitationController::class,  'createSolicitation']);


Route::post('/orders', [OrderController::class,  'createOrder']);

// Orders
Route::get('/orders/solicitation/{id}', [OrderController::class,  'getOrders']);

// Products
Route::get('/products', [ProductController::class, 'getProducts']);

});