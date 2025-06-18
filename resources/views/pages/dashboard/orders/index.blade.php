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
                            <select class="form-select" id="statusFilter">
                                <option value="">Filter</option>
                                <option value="Pending">Pending</option>
                                <option value="In Transit">In Transit</option>
                                <option value="Delivered">Delivered</option>
                            </select>
                            <input type="text" class="form-control" id="productSearch" placeholder="Search by product name">
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tracking Number</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Shipping Method</th>
                                <th>Added</th>
                                <th>Status</th>
                                <th>Total Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>#{{ $order->tracking_number }}</td>
                                <td>{{ $order->product_name }}</td>
                                <td>${{ $order->product_price }}</td>
                                <td>
                                    @if($order->shipping_method === 'express')
                                    <img src="{{ asset('img/icons/express.png') }}" alt="Express" width="24">
                                    @else
                                    <img src="{{ asset('img/icons/standard.png') }}" alt="Standard" width="24">
                                    @endif
                                </td>
                                <td>{{ $order->created_at->format('d.m.Y') }}</td>
                                <td>
                                    <span class="d-inline-flex px-2 py-1 fw-semibold w-100 justify-content-center align-items-center
                                    @if($order->status === 'Pending')
                                        text-warning-emphasis bg-warning-subtle border border-warning-subtle
                                    @elseif($order->status === 'In Transit')
                                        text-primary-emphasis bg-primary-subtle border border-primary-subtle
                                    @else
                                        text-success-emphasis bg-success-subtle border border-success-subtle
                                    @endif
                                    rounded-pill">
                                        {{ $order->status }}
                                    </span>
                                </td>
                                <td>
                                    @if($order->total_price)
                                        ${{ $order->total_price }}
                                    @else
                                        $0
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('orders.edit', $order) }}" class="btn btn-sm">
                                        <img src="{{ asset('img/icons/edit.png') }}" alt="Edit">
                                    </a>
                                    <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm" onclick="return confirm('Are you sure?')">
                                            <img src="{{ asset('img/icons/delete.png') }}" alt="Delete">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center p-5">
                                    <p class="mb-3">(You have no parcels yet)</p>
                                    <img src="{{ asset('img/no_orders.png') }}" alt="No Orders" class="img-fluid m-auto" />
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    {{ $orders->links('pagination::bootstrap-5') }}
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const statusFilter = document.getElementById('statusFilter');
        const productSearch = document.getElementById('productSearch');
        const table = document.querySelector('table');
        const rows = table.querySelectorAll('tbody tr');

        function filterTable() {
            const status = statusFilter.value;
            const search = productSearch.value.toLowerCase();
            rows.forEach(row => {
                const statusText = row.querySelector('td:nth-child(7) span').textContent.trim();
                const productName = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const statusMatch = !status || statusText === status;
                const searchMatch = !search || productName.includes(search);
                row.style.display = (statusMatch && searchMatch) ? '' : 'none';
            });
        }
        statusFilter.addEventListener('change', filterTable);
        productSearch.addEventListener('input', filterTable);
    });
</script>