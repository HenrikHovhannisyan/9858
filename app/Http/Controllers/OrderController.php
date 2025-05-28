<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->latest()->paginate(1);
        return view('pages.dashboard.orders.index', compact('orders'));
    }

    public function create()
    {
        return view('pages.dashboard.orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric|min:0',
            'shipping_method' => 'required|string|max:255',
        ]);
        $order = Order::create([
            'user_id' => Auth::id(),
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'shipping_method' => $request->shipping_method,
        ]);
        return redirect()->route('orders.index')->with('success', 'Order created successfully!');
    }

    public function show(Order $order)
    {
        $this->authorizeOrder($order);
        return view('pages.dashboard.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $this->authorizeOrder($order);
        return view('pages.dashboard.orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $this->authorizeOrder($order);
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric|min:0',
            'shipping_method' => 'required|string|max:255',
        ]);
        $order->update($request->only(['product_name', 'product_price', 'shipping_method']));
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('invoices', $filename, 'public');
            $order->file = $path;
            $order->save();
        }
        return redirect()->route('orders.index')->with('success', 'Order updated successfully!');
    }

    public function destroy(Order $order)
    {
        $this->authorizeOrder($order);
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully!');
    }

    private function authorizeOrder(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }
    }
}
