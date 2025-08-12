@extends('layouts.app')
@section('title') - Orders @endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            @include('pages.warehouse.sidebar')
        </div>
        <div class="col-md-9 border p-3 mb-3 admin_dashboard">
            <h1 class="mb-4">Warehouse Orders</h1>

            <!-- Поле для поиска -->
            <div class="mb-3">
                <input
                    type="text"
                    id="searchInput"
                    class="form-control"
                    placeholder="Search by Tracking Number..."
                    autocomplete="off"
                >
            </div>

            <table class="table table-bordered table-hover" id="ordersTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Shipping Method</th>
                        <th>Tracking Number</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Payment</th>
                        <th>Send</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $order->user->first_name ?? '-' }}</td>
                        <td>{{ $order->shipping_method }}</td>
                        <td class="tracking-number">{{ $order->tracking_number }}</td>
                        <td class="text-capitalize">{{ $order->status }}</td>
                        <td>{{ $order->created_at->format('d.m.Y') }}</td>
                        <td>
                            @if($order->payment === 'no')
                                <span class="text-danger">No</span>
                            @else
                                <span class="text-success">Yes</span>
                            @endif
                        </td>
                        <td>
                            @if($order->status === 'Entered' || $order->status === 'In Warehouse')
                                <form action="{{ route('w-order.transit', $order->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-success" {{ $order->payment === 'yes' ? '' : 'disabled' }}>
                                        Send
                                    </button>
                                </form>
                            @elseif($order->status === 'On the Way')
                            <p class="text-success">Sent</p>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('w-order.show', $order->id) }}" class="btn btn-sm btn-primary">Show</a>
                            @if($order->status !== 'On the Way' && $order->payment === 'no')
                                <a href="{{ route('w-order.edit', $order->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-end">
                {{ $orders->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById('searchInput');
        const table = document.getElementById('ordersTable');
        const rows = table.tBodies[0].rows;

        searchInput.addEventListener('input', function() {
            const filter = this.value.toLowerCase();

            for (let row of rows) {
                const trackingNumberCell = row.querySelector('.tracking-number');
                const trackingNumberText = trackingNumberCell ? trackingNumberCell.textContent.toLowerCase() : '';

                if (trackingNumberText.includes(filter)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    });
</script>
@endsection
