<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    // Display list of purchases for the logged-in user
    // Display list of purchased courses for the logged-in user
    public function myCourses()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }
        $orders = Order::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('courses', ['orders' => $orders]);
    }


    // Store a new purchase (optional placeholder)
    public function store(Request $request)
    {
        // Validate basic fields (customize as needed)
        $validated = $request->validate([
            'order_id' => 'required|string|unique:orders,order_id',
            'items' => 'required|array',
            'total_amount' => 'required|numeric',
            'currency' => 'required|string',
            'status' => 'required|string',
            // Add more fields as necessary
        ]);
        // Attach authenticated user ID
        $validated['user_id'] = Auth::id();
        $order = Order::create($validated);
        return response()->json($order, 201);
    }

    public function show($id)
    {
        $order = Order::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('purchase_detail', ['order' => $order]);
    }

    public function update(Request $request, $id)
    {
        $order = Order::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $order->update($request->all());
        return response()->json($order);
    }

    public function destroy($id)
    {
        $order = Order::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $order->delete();
        return response(null, 204);
    }
}
