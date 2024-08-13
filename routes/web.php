<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/contact',function(){
return view('contact');
});

// Route::get('/product',function(){
// return ("hello");
//  //return view('product.product');
// });


//Category Route
Route::get('/category/create',[\App\http\Controllers\CategoryController::class,'create']);
Route::post('/category/store',[\App\http\Controllers\CategoryController::class,'store']);
Route::get('/category/delete{id}',[\App\http\Controllers\CategoryController::class,'destroy'])->name('category.delete');
Route::get('/category/edit/{id}',[\App\http\Controllers\CategoryController::class,'edit']);
Route::post('/category/update/{id}',[\App\http\Controllers\CategoryController::class,'update']);
Route::get('/product',[\App\http\Controllers\ProductController::class,'product']);
Route::get('/product/form',[\App\http\Controllers\ProductController::class,'addItem']);
Route::get('/',[\App\http\Controllers\CategoryController::class,'index']);


//Brand Route
Route::get('/brand/create',[\App\http\Controllers\BrandController::class,'create']);
Route::post('/brand/store',[\App\http\Controllers\BrandController::class,'store']);
Route::get('/brand/delete{id}',[\App\http\Controllers\BrandController::class,'destroy'])->name('brand.delete');
Route::get('/brand/edit/{id}',[\App\http\Controllers\BrandController::class,'edit']);
Route::post('/brand/update/{id}',[\App\http\Controllers\BrandController::class,'update']);
Route::get('/brand',[\App\http\Controllers\BrandController::class,'index']);


//Product Routes
Route::get('/product/create',[\App\http\Controllers\ProductController::class,'create']);
Route::post('/product/store',[\App\http\Controllers\ProductController::class,'store']);
Route::get('/product/delete{id}',[\App\http\Controllers\ProductController::class,'destroy'])->name('product.delete');
Route::get('/product/edit/{id}',[\App\http\Controllers\ProductController::class,'edit']);
Route::post('/product/update/{id}',[\App\http\Controllers\ProductController::class,'update']);
Route::get('/',[\App\http\Controllers\ProductController::class,'index']);