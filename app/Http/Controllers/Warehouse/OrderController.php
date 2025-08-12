<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('user')->paginate(10);
        return view('pages.warehouse.orders.index', compact('orders'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::with('user')->findOrFail($id);
        return view('pages.warehouse.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::with('user')->findOrFail($id);
        return view('pages.warehouse.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'whole' => 'required|numeric|min:0',
            'total_price' => 'required|numeric|min:0',
        ]);

        $totalPrice = $request->total_price + 130;

        $order->update([
            'status' => 'In Warehouse',
            'whole' => $request->whole,
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('w-order.index')->with('success', 'Order updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updatePayment($id)
    {
        $order = Order::findOrFail($id);
        $order->payment = 'yes';
        $order->save();

        return redirect()->back()->with('success', 'Payment status updated.');
    }

    public function markInTransit($id)
    {
        $order = Order::findOrFail($id);

        if ($order->total_price > 0) {
            $order->status = 'On the Way';
            $order->save();

            return redirect()->back()->with('success', 'Order status updated to On the Way.');
        }

        return redirect()->back()->with('error', 'Cannot mark as On the Way without total price.');
    }
}
