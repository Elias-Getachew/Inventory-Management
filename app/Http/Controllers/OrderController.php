<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {   
        $order = Auth::user()->orders()->with('products')->get();
        return view('orders.index', compact('order'));
    }

    public function show($id)
    {
        $order = Order::with('products')->findOrFail($id);
        return view('orders.show', compact('order'));
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $request->total_price,
        ]);

        foreach ($request->products as $product_id => $details) {
            $product = Product::find($product_id);
            $order->products()->attach($product, [
                'quantity' => $details['quantity'],
                'price' => $product->sale_price,
            ]);
        }

        return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
    }

    public function checkout(Request $request)
    {
        if (!session('cart')) {
            return response()->json(['error' => 'Your cart is empty.']);
        }

        $order = new Order();
        $order->user_id = Auth::id();
        $order->total_price = array_sum(array_column(session('cart'), 'price')); // Sum up the total price of items in the cart
        $order->save();

        foreach (session('cart') as $id => $details) {
            $order->products()->attach($id, [
                'quantity' => $details['quantity'],
                'price' => $details['price'],
                'total' => $details['price'] * $details['quantity']
            ]);
        }

        $request->session()->forget('cart');

        return response()->json(['success' => 'Order placed successfully!']);
    }
}

