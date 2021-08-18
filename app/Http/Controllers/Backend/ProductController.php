<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function list()

    {   
        $products = Product::with('category')-> paginate(3);
        

        return view('backend.layouts.product.list',compact('products'));
    }
    public function create()
    {
        $categories = Category:: all();
         return view('backend.layouts.product.create',compact('categories'));
    }
    public function store(Request $request)
    {
    //dd($request->all());
        Product::create([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
        ]);

        return redirect()->back();
    }
}
