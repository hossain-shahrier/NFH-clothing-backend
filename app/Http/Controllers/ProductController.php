<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    // Get all the products
    public function index(): JsonResponse
    {
        $products = Product::all();

        return response()->json($products);
    }

    // Get a single product
    public function show(Product $product): JsonResponse
    {
        return response()->json($product);
    }

    // Create a new product
    public function store(Request $request): JsonResponse
    {
        $product = new Product();
        $product->image = $request->file('image')->store('products');
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->stock = $request->input('stock');
        $product->price = $request->input('price');
        $product->cost = $request->input('cost');
        $product->category_id = $request->input('category_id');
        $product->note = $request->input('note');
        $product->save();

        return response()->json($product);
    }

    // Update a product
    public function update(Request $request, Product $product): JsonResponse
    {
        $product->image = $request->file('image')->store('products');
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->stock = $request->input('stock');
        $product->price = $request->input('price');
        $product->cost = $request->input('cost');
        $product->category_id = $request->input('category_id');
        $product->note = $request->input('note');
        $product->save();

        return response()->json($product);
    }

    // Delete a product
    public function destroy(Product $product): JsonResponse
    {
        $product->delete();

        return response()->json();
    }
}
