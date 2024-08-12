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

Route::get('/', function () {
    return view('Backend.main');
});

Route::get('/contact',function(){
return view('contact');
});

// Route::get('/product',function(){
// return ("hello");
//  //return view('product.product');
// });

Route::get('/product',[\App\http\Controllers\ProductController::class,'product']);
Route::get('/product/form',[\App\http\Controllers\ProductController::class,'addItem']);