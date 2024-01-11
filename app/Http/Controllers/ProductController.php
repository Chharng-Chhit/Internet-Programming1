<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function show($productId)
    {
        $product = Product::findOrFail($productId);
        return response()->json($product);
    }

    public function update(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $product->update($request->all());
        return response()->json($product);
    }

    public function destroy($productId)
    {
        $product = Product::findOrFail($productId);
        $product->delete();
        return response()->json(null, 204);
    }

    public function productsByCategory($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->get();
        return response()->json($products);
    }
}
