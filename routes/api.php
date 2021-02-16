<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout']);
Route::post('/auth/refresh', [AuthController::class, 'refresh']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/solicitations', [SolicitationController::class,  'getSolicitations']);
Route::post('/solicitations', [SolicitationController::class,  'createSolicitation']);

Route::get('/orders/solicitation/{id}', [OrderController::class,  'getOrders']);