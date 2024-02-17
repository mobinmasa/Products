<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home-page', [HomeController::class , 'index']);
Route::get('/users-page', [UserController::class, 'index']);
Route::get('/posts-page', [PostController::class , 'index']);
Route::get('/tags-page', [TagController::class , 'index']);

Route::get('/products', [ProductController::class , 'index']);
Route::get('/products/{id}', [ProductController::class , 'show']);
