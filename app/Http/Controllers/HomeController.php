<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use App\Models\Product\Category;
use App\Models\Product\Product;
use App\Models\Product\Promotion;


class HomeController extends Controller
{
    public function renderHome(){

        $categories = Category::withCount("products as n_of_product")->get();
        $promotions = Promotion::all();
        $products   = Product::with(['category'])->get();
        return view('home',compact('categories', 'promotions', 'products'));
    }

    public function add(){
        $categories = Category::all();

        return view('product.form', compact('categories'));
    }

    public function store(Request $request){

        $product = new Product();

        $product->name               = $request->name;
        $product->category_id        = $request->category;
        $product->pricing            = $request->pricing;
        $product->discount_pricing   = $request->promotion;
        $product->description        = $request->description;
        $product->rating             = $request->rating;
        $product->weight             = $request->weight;

        $currentDateTime = date('Ymd_His');
        $originalName = $request->image->getClientOriginalName();
        $extension = $request->image->getClientOriginalExtension();
        $fileName = $currentDateTime . '_' . $product->name . $extension;

        if ($request->image) {
            $fileName = $product->name . '_' . $currentDateTime . '.'. $extension;

            $store_image = $request->file('image')->storeAs('public/assets', $fileName);
        }
        $product->image = $product->name . '_' . $currentDateTime . '.'. $extension;

        $product->save();


        return redirect()->route('home')->with('message','success');
    }

}
