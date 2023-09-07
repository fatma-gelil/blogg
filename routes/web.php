<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
//posts endpoint
Route::get('posts',[PostsController::class,'index']);
////New way  in LARAVEL 8
//Route::get('/products',[ProductsController::class,'index']);
////Also new way in LARAVEL 8
//Route::get('/products','App\Http\Controllers\ProductsController@index');
////pattern is integer
////Route::get('/products/{id}',[ProductsController::class,'show'])->where('id','[0-9]+');
////pattern is string
//Route::get('/products/{name}',[ProductsController::class,'show'])->where('name','[A-Za-z]+');
////Route::get('/products/{name}',[ProductsController::class,'show']);


