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
                    <div class="col-12 my-2">
                        <div class="d-block d-md-flex align-items-center gap-3">
                                <p class="px-2 py-1 fw-semibold text-info-emphasis bg-warning-subtle border rounded border-warning-subtle">
                                    <i class="fa-solid fa-clipboard-list"></i>
                                    Entered
                                </p>
                                <p class="d-none d-md-block">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </p>
                                <p class="d-block d-md-none text-center my-2">
                                    <i class="fa-solid fa-arrow-down"></i>
                                </p>
                                <p class="px-2 py-1 fw-semibold text-info-emphasis bg-primary-subtle border rounded border-primary-subtle">
                                    <i class="fa-solid fa-warehouse"></i>
                                    In Warehouse
                                </p>
                                <p class="d-none d-md-block">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </p>
                                <p class="d-block d-md-none text-center my-2">
                                    <i class="fa-solid fa-arrow-down"></i>
                                </p>
                                <p class="px-2 py-1 fw-semibold text-info-emphasis bg-info-subtle border rounded border-info-subtle">
                                    <i class="fa-solid fa-plane"></i>
                                    On the Way
                                </p>
                                <p class="d-none d-md-block">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </p>
                                <p class="d-block d-md-none text-center my-2">
                                    <i class="fa-solid fa-arrow-down"></i>
                                </p>
                                <p class="px-2 py-1 fw-semibold text-info-emphasis bg-success-subtle border rounded border-success-subtle">
                                    <i class="fa-solid fa-hand"></i>
                                    Received
                                </p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <p>All items</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="filter_section">
                            <a href="{{ route('orders.create') }}" class="btn_dark">+ Add Parcel</a>
                            <select class="form-select" id="statusFilter">
                                <option value="">Filter</option>
                                <option value="Entered">Entered</option>
                                <option value="In Warehouse">In Warehouse</option>
                                <option value="On the Way">On the Way</option>
                                <option value="Received">Received</option>
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
                                <th>Payment</th>
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
                                    <p class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('img/icons/express.png') }}" alt="Express" width="24">
                                        USA express
                                    </p>
                                    @else
                                    <p class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('img/icons/standard.png') }}" alt="Standard" width="24">
                                        USA standard
                                    </p>
                                    @endif
                                </td>
                                <td>{{ $order->created_at->format('d.m.Y') }}</td>
                                <td>
                                    <span class="d-inline-flex px-2 py-1 fw-semibold w-100 justify-content-center align-items-center
                                    @if($order->status === 'Entered')
                                        text-warning-emphasis bg-warning-subtle border border-warning-subtle
                                    @elseif($order->status === 'In Warehouse')
                                        text-primary-emphasis bg-primary-subtle border border-primary-subtle
                                    @elseif($order->status === 'On the Way')
                                        text-info-emphasis bg-info-subtle border border-info-subtle
                                    @else
                                        text-success-emphasis bg-success-subtle border border-success-subtle
                                    @endif
                                    rounded-pill">
                                        {{ $order->status }}
                                    </span>
                                </td>
                                <td>
                                    @if($order->total_price > 0 && $order->payment === 'no')
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#paymentModal-{{ $order->id }}">
                                            Pay - {{ $order->total_price }}$
                                        </button>
                                    @elseif($order->status === 'On the Way')
                                        <span class="text-success">Paid</span>
                                    @else
                                        <span class="text-danger">Paid</span>
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
                            <!-- Modal -->
                            <div class="modal fade" id="paymentModal-{{ $order->id }}" tabindex="-1" aria-labelledby="paymentModalLabel-{{ $order->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <form action="{{ route('w-order.payment', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="paymentModalLabel-{{ $order->id }}">
                                            Confirm Payment - {{ $order->total_price }}$
                                        </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <p class="mb-3">Are you sure you want to pay for this order?</p>
                                    <p><strong>Tracking Number:</strong> #{{ $order->tracking_number }}</p>
                                    <p><strong>Whole:</strong> {{ $order->whole }}kg.</p>
                                    <p><strong>Price for the whole:</strong> {{ $order->total_price - 130 }}$</p>
                                    <p><strong>Price for services</strong> 130$</p>
                                    <p><strong>Transportation amount:</strong> <span class="text-danger">{{ $order->total_price }}$</span></p>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Mark as Paid</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>
                            @empty
                            <tr>
                                <td colspan="9" class="text-center p-5">
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