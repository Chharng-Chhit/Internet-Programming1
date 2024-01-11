<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $categories = Category::all();
        return response()->json($categories);
    }
//    public function index(): View
//    {
//        $users = DB::table('category')->get();
//
//        return response()->json($users);
//    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    public function show($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        return response()->json($category);
    }

    public function update(Request $request, $categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $category->update($request->all());
        return response()->json($category);
    }
//    public function destroy($categoryId)
//    {
//        $category = Category::findOrFail($categoryId);
//        $category->delete();
//        return response()->json(null, 204);
//    }

    public function destroy($categoryId)
    {
        // Find the category
        $category = Category::findOrFail($categoryId);

        // Delete associated products
        $category->products()->delete();

        // Then delete the category
        $category->delete();

        return response()->json(null, 204);
    }

}
