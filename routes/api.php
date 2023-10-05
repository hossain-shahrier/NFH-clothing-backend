<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// routes/api.php

// Product routes
Route::group(['middleware' => ['auth:api']], function () {
    // Get all products
    Route::get('/products', [ProductController::class, 'index']);

    // Create a new product
    Route::post('/products', [ProductController::class, 'store']);

    // Get a specific product
    Route::get('/products/{product}', [ProductController::class, 'show']);

    // Update an existing product
    Route::put('/products/{product}', [ProductController::class, 'update']);

    // Delete a product
    Route::delete('/products/{product}', [ProductController::class, 'destroy']);
});

// Category routes
Route::group(['middleware' => ['auth:api']], function () {
    // Get all categories
    Route::get('/categories', [CategoryController::class, 'index']);

    // Create a new category
    Route::post('/categories', [CategoryController::class, 'store']);

    // Get a specific category
    Route::get('/categories/{category}', [CategoryController::class, 'show']);

    // Update an existing category
    Route::put('/categories/{category}', [CategoryController::class, 'update']);

    // Delete a category
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);
});

// Customer routes
Route::group(['middleware' => ['auth:api']], function () {
    // Get all customers
    Route::get('/customers', [CustomerController::class, 'index']);

    // Create a new customer
    Route::post('/customers', [CustomerController::class, 'store']);

    // Get a specific customer
    Route::get('/customers/{customer}', [CustomerController::class, 'show']);

    // Update an existing customer
    Route::put('/customers/{customer}', [CustomerController::class, 'update']);

    // Delete a customer
    Route::delete('/customers/{customer}', [CustomerController::class, 'destroy']);
});

// Order routes
Route::group(['middleware' => ['auth:api']], function () {
    // Get all orders
    Route::get('/orders', [OrderController::class, 'index']);

    // Create a new order
    Route::post('/orders', [OrderController::class, 'store']);

    // Get a specific order
    Route::get('/orders/{order}', [OrderController::class, 'show']);

    // Update an existing order
    Route::put('/orders/{order}', [OrderController::class, 'update']);

    // Delete an order
    Route::delete('/orders/{order}', [OrderController::class, 'destroy']);
});

// Post routes
Route::group(['middleware' => ['auth:api']], function () {
    // Get all posts
    Route::get('/posts', [PostController::class, 'index']);

    // Create a new post
    Route::post('/posts', [PostController::class, 'store']);

    // Get a specific post
    Route::get('/posts/{post}', [PostController::class, 'show']);

    // Update an existing post
    Route::put('/posts/{post}', [PostController::class, 'update']);

    // Delete a post
    Route::delete('/posts/{post}', [PostController::class, 'destroy']);
});
