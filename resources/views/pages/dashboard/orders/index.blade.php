@extends('layouts.dashboard.app')
@section('title') - My Orders @endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 ps-0 pe-0">
            @include('layouts.dashboard.sidebar')
        </div>
        <div class="col-lg-10">
            <section id="orders" class="user_dashboard">
                <h2>My Orders</h2>
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="row mb-3">
                    <div class="col-lg-6 d-flex align-items-center">
                        <p>All items</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="filter_section">
                            <a href="{{ route('orders.create') }}" class="btn_dark">+ Add Parcel</a>
                            <select class="form-select">
                                <option>Filter</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Search by id or product name">
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tracking Number</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Shipping Method</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $order->tracking_number }}</td>
                                <td>{{ $order->product_name }}</td>
                                <td>{{ $order->product_price }}</td>
                                <td>{{ $order->shipping_method }}</td>
                                <td>{{ $order->status }}</td>
                                <td>
                                    <a href="{{ route('orders.show', $order) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center p-5">
                                    <p class="mb-3">(You have no parcels yet)</p>
                                    <img src="{{ asset('img/no_orders.png') }}" alt="No Orders" class="img-fluid m-auto" />
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection