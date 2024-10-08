<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){
        $products = Product::with('brand')->get();
        return view("frontend.index", compact("products"));
    }
}
