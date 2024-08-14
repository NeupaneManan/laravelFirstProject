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




//Category Route
Route::get('/category/create',[\App\http\Controllers\CategoryController::class,'create']);
Route::post('/category/store',[\App\http\Controllers\CategoryController::class,'store']);
Route::get('/category/delete{id}',[\App\http\Controllers\CategoryController::class,'destroy'])->name('category.delete');
Route::get('/category/edit/{id}',[\App\http\Controllers\CategoryController::class,'edit']);
Route::post('/category/update/{id}',[\App\http\Controllers\CategoryController::class,'update']);
Route::get('/product',[\App\http\Controllers\productController::class,'product']);
Route::get('/product/form',[\App\http\Controllers\productController::class,'addItem']);
Route::get('/',[\App\http\Controllers\CategoryController::class,'index']);


//Brand Route
Route::get('/brand/create',[\App\http\Controllers\BrandController::class,'create']);
Route::post('/brand/store',[\App\http\Controllers\BrandController::class,'store']);
Route::get('/brand/delete{id}',[\App\http\Controllers\BrandController::class,'destroy'])->name('brand.delete');
Route::get('/brand/edit/{id}',[\App\http\Controllers\BrandController::class,'edit']);
Route::post('/brand/update/{id}',[\App\http\Controllers\BrandController::class,'update']);
Route::get('/brand',[\App\http\Controllers\BrandController::class,'index']);


//product Routes

Route::get('/product/create',[\App\http\Controllers\productController::class,'create']);
Route::post('/product/store',[\App\http\Controllers\productController::class,'store']);
Route::get('/product/delete{id}',[\App\http\Controllers\productController::class,'destroy'])->name('product.delete');
Route::get('/product/edit/{id}',[\App\http\Controllers\productController::class,'edit']);
Route::post('/product/update/{id}',[\App\http\Controllers\productController::class,'update']);
Route::get('/products',[\App\http\Controllers\productController::class,'index']);


