<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\BasketController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/types', [TypeController::class, 'index']);
Route::get('/conditions', [ConditionController::class, 'index']);
Route::get('/basket', [BasketController::class, 'index']);
Route::post('/basket', [BasketController::class, 'store']);
Route::delete('/basket/{productId}', [BasketController::class, 'destroy']);