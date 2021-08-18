<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function list()
    {
        $categories=Category::all();
        return view('backend.layouts.category.list',compact('categories'));
    }

    

    public function create()
    {
        
         return view('backend.layouts.category.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
       Category::create([
           'name'=>$request->name,
           'description'=>$request->description,



        ]);

        return redirect()->route('category.list');
                
   
    }

    public function allProduct($id)
    {
          $products=Product::where('category_id',$id)->get();
          return view('backend.layouts.category.product-list', compact('products'));
    }
}
