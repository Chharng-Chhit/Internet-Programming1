<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route Categories
Route::get('/categories', [CategoryController::class, 'index']);
Route::middleware('auth:api')->post('/categories', [CategoryController::class, 'store']);
Route::get('/categories/{categoryId}', [CategoryController::class, 'show']);
Route::middleware('auth:api')->patch('/categories/{categoryId}', [CategoryController::class, 'update']);
Route::middleware('auth:api')->delete('/categories/{categoryId}', [CategoryController::class, 'destroy']);

// Products routes
Route::get('/products', [ProductController::class, 'index']);
Route::middleware('auth:api')->post('/products', [ProductController::class, 'store']);
Route::get('/products/{productId}', [ProductController::class, 'show']);
Route::middleware('auth:api')->patch('/products/{productId}', [ProductController::class, 'update']);
Route::middleware('auth:api')->put('/products/{productId}', [ProductController::class, 'update']);
Route::middleware('auth:api')->delete('/products/{productId}', [ProductController::class, 'destroy']);

// Category Products routes
//Route::get('/categories/{categoryId}/products', [CategoryProductController::class, 'index']);
Route::get('/categories/{categoryId}/products', [CategoryProductController::class, 'index']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/verify-otp', [AuthController::class, 'verifyOTP']);

Route::middleware('auth:api')->get('/test', function(){
    return "Test page";
});
