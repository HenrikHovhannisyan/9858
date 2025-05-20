@extends('layouts.app')
@section('title') - Edit Order @endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 ps-0 pe-0">
            @include('layouts.sidebar')
        </div>
        <div class="col-lg-10">
            <h2>Edit Order</h2>
            <form action="{{ route('orders.update', $order) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" required value="{{ old('product_name', $order->product_name) }}">
                </div>
                <div class="mb-3">
                    <label for="product_price" class="form-label">Product Price</label>
                    <input type="number" step="0.01" class="form-control" id="product_price" name="product_price" required value="{{ old('product_price', $order->product_price) }}">
                </div>
                <div class="mb-3">
                    <label for="shipping_method" class="form-label">Shipping Method</label>
                    <input type="text" class="form-control" id="shipping_method" name="shipping_method" required value="{{ old('shipping_method', $order->shipping_method) }}">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="In Transit" {{ $order->status == 'In Transit' ? 'selected' : '' }}>In Transit</option>
                        <option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection