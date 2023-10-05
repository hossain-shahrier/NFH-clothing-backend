<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    public function index(): JsonResponse
    {
        $categories = Category::all();

        return response()->json($categories);
    }

    public function show(Category $category): JsonResponse
    {
        return response()->json($category);
    }

    public function store(Request $request): JsonResponse
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        return response()->json($category);
    }

    public function update(Request $request, Category $category): JsonResponse
    {
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        return response()->json($category);
    }

    public function destroy(Category $category): JsonResponse
    {
        $category->delete();

        return response()->json();
    }
}
