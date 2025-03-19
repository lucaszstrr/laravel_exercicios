<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
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

Route::get('/teste', function(){
    return "Funcionou";
});

//Route::get('/products', [ProductController ::class, 'index']);
Route::apiResource('products', ProductController::class);

Route::apiResource('profile', ProfileController::class);

Route::apiResource('tag', TagController::class);

Route::apiResource('user', UserController::class);

Route::apiResource('post', PostController::class);

Route::apiResource('category', CategoryController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
