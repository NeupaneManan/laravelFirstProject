<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view("backend.product.index",compact("product"));
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brand = Brand::all();
        $category = Category::all();
          return view('backend.product.create',compact('category','brand'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'title' =>"required",
        "description"=> "required"
    ]);
       $product = new product();
       $product->title = $request->title;
       $product->description = $request->description;
       $product->price = $request->price;
       $image= $request->image;
       if($request->hasFile("image")){
       $image_new_name=time().$image->getClientOriginalName();
       $image->move('product',$image_new_name);
       $product->image = $image_new_name;
       }
       $product->brand_id = $request->brand_id;
       $product->category_id =$request->category_id;
       $product->stock = $request->stock;
       $product->quantity = $request->quantity;
       $product->color = $request->color;
       $product->size = $request->size;
       $product->save();
       return redirect()->back()->with('message','Data saved Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $product = product::find($id);
        return view('backend.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
           $request->validate([
        'title' =>"required",
        "description"=> "required"
    ]);
        $product = product::find($id);
       $product->title = $request->title;
       $product->description = $request->description;
       $product->price = $request->price;
       $image= $request->image;
       $image_new_name=time().$image->getClientOriginalName();
       $image->move('product',$image_new_name);
       $product->image = $image_new_name;
       $product->brand_id = $request->brand_id;
       $product->category_id =$request->category_id;
       $product->stock = $request->stock;
       $product->quantity = $request->quantity;
       $product->color = $request->color;
       $product->size = $request->size;
       $product->save();
       return redirect()->back()->with('message','Data saved Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Data Deleted Sucessfully');
    }
}
