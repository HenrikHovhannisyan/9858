@extends('layouts.dashboard.app')
@section('title') - Order Details @endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 ps-0 pe-0">
            @include('layouts.dashboard.sidebar')
        </div>
        <div class="col-lg-10">
            <section class="user_dashboard">
                <h2>Order Details</h2>
                <div class="card" style="max-width: 500px; margin: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Tracking Number: {{ $order->tracking_number }}</h5>
                        <p class="card-text">
                            <strong>Product Name:</strong> {{ $order->product_name }}<br>
                            <strong>Product Price:</strong> {{ $order->product_price }}<br>
                            <strong>Shipping Method:</strong> {{ $order->shipping_method }}<br>
                            <strong>Status:</strong> {{ $order->status }}<br>
                        </p>
                        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to Orders</a>
                        <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection