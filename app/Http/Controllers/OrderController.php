<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->latest()->paginate(10);
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
            'tracking_number' => 'required|string|max:255|unique:orders,tracking_number',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $data = $request->only(['product_name', 'product_price', 'shipping_method', 'tracking_number']);
        $data['user_id'] = Auth::id();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('invoices', $filename, 'public');
            $data['file'] = $path;
        }

        Order::create($data);

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
            'tracking_number' => 'required|string|max:255|unique:orders,tracking_number,' . $order->id,
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $order->update($request->only(['product_name', 'product_price', 'shipping_method', 'tracking_number']));

        if ($request->hasFile('file')) {
            if ($order->file && Storage::disk('public')->exists($order->file)) {
                Storage::disk('public')->delete($order->file);
            }

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

        if ($order->file && Storage::disk('public')->exists($order->file)) {
            Storage::disk('public')->delete($order->file);
        }

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
