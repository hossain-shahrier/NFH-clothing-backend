<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class OrderController extends Controller
{
    public function index(): JsonResponse
    {
        $orders = Order::all();

        return response()->json($orders);
    }

    public function show(Order $order): JsonResponse
    {
        return response()->json($order);
    }

    public function store(Request $request): JsonResponse
    {
        $order = new Order();
        $order->customer_id = $request->input('customer_id');
        $order->product_id = $request->input('product_id');
        $order->quantity = $request->input('quantity');
        $order->status = $request->input('status');
        $order->total_amount = $request->input('total_amount');
        $order->save();

        return response()->json($order);
    }

    public function update(Request $request, Order $order): JsonResponse
    {
        $order->customer_id = $request->input('customer_id');
        $order->product_id = $request->input('product_id');
        $order->quantity = $request->input('quantity');
        $order->status = $request->input('status');
        $order->total_amount = $request->input('total_amount');
        $order->save();

        return response()->json($order);
    }

    public function destroy(Order $order): JsonResponse
    {
        $order->delete();

        return response()->json();
    }
}
