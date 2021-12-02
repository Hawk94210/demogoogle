<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function showHome()
    {
        $products = Product::all();
        return view('backend.home.index',compact('products'));
    }

    public function create()
    {   
        return view('backend.home.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantityInStock = $request->quantityInStock;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->featured = $request->featured;
        if($request->hasFile('image')){

        }else{

        }
        $product->save();
        return back();
    }

    public function edit($id)
    {   
        $product = Product::findOrFail($id);
        return view('backend.home.edit',compact('product'));
    }

    public function update($id,Request $request)
    {
        $products = Product::findOrFail($id);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantityInStock = $request->quantityInStock;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->featured = $request->featured;
        if($request->hasFile('image')){

        }else{

        }
        $product->save();
        $products->delete();
        return back();
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->destroy();
        return back();
    }
}
