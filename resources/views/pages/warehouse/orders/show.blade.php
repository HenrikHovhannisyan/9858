@extends('layouts.app')
@section('title') - Order Details @endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            @include('pages.warehouse.sidebar')
        </div>
        <div class="col-md-9 border p-4 mb-5">
            <h2>Order #{{ $order->id }}</h2>
            <p><strong>User:</strong> {{ $order->user->first_name ?? '-' }}</p>
            <p><strong>Tracking Number:</strong> {{ $order->tracking_number }}</p>
            <p><strong>Status:</strong> {{ $order->status }}</p>
            <p><strong>Product:</strong> {{ $order->product_name }} - ${{ $order->product_price }}</p>
            <p><strong>Shipping Method:</strong> {{ $order->shipping_method }}</p>
            <p><strong>Created:</strong> {{ $order->created_at->format('d.m.Y H:i') }}</p>

            @if($order->file)
                <p><strong>Invoice:</strong> 
                    <a href="{{ asset('storage/' . $order->file) }}" target="_blank">Download</a>
                </p>
            @endif

            <a href="{{ route('w-order.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
