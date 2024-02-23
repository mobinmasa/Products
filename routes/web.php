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


Route::prefix('users')
    ->controller(UserController::class)
    ->name('users.')
    ->group(function(){
       Route::get('/', 'index')->name('users');
       Route::get('/{id}', 'show')->name('index');
    });
//Route::get('/users', [UserController::class, 'index']);
Route::get("users.login" , [UserController::class, 'login']);
Route::get("users.register", [UserController::class, 'register']);





Route::prefix('posts')
    ->controller(PostController::class)
    ->name('posts.')
    ->group(function (){
        Route::get('/', 'index')->name('index');
        Route::get('/{id}', 'show')->name('show');
        Route::get('create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
    });
Route::get('/posts', [PostController::class , 'index'])->name('posts.index');
Route::get('posts.create', [PostController::class , 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class , 'show'])->name('posts.show');






Route::prefix('tags')
    ->controller(TagController::class)
    ->name('tags.')
    ->group(function (){
        Route::get('/', 'index')->name('index');
        Route::get('/{id}', 'show')->name('index');
        Route::get('create', 'create')->name('index');
    });
//Route::get('/tags', [TagController::class , 'index']);
Route::get('tags.create', [TagController::class , 'create']);



// Route::get('/products', [ProductController::class , 'index']);

// Route::prefix('products')
//     ->controller(ProductController::class)
//     ->name('products.')
//     ->group(function (){
//         Route::get('/', 'index')->name('index');
//         Route::get('/{id}', 'index')->name('show');
//         Route::get('create', 'create')->name('index');
//     });







Route::get('/products', [ProductController::class , 'index'])->name('products.index');
Route::get('products/create', [ProductController::class , 'create'])->name('products.create');
Route::post('/products', [ProductController::class , 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class , 'show'])->name('products.show');

