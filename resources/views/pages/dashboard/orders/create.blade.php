@extends('layouts.dashboard.app')
@section('title') - Create Order @endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 ps-0 pe-0">
            @include('layouts.dashboard.sidebar')
        </div>
        <div class="col-lg-10">
            <h2>Create Order</h2>
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" required value="{{ old('product_name') }}">
                </div>
                <div class="mb-3">
                    <label for="product_price" class="form-label">Product Price</label>
                    <input type="number" step="0.01" class="form-control" id="product_price" name="product_price" required value="{{ old('product_price') }}">
                </div>
                <div class="mb-3">
                    <label for="shipping_method" class="form-label">Shipping Method</label>
                    <input type="text" class="form-control" id="shipping_method" name="shipping_method" required value="{{ old('shipping_method') }}">
                </div>
                <button type="submit" class="btn btn-success">Create</button>
                <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection