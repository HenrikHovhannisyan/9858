@extends('layouts.app')
@section('title') - Orders @endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            @include('pages.admin.sidebar')
        </div>
        <div class="col-md-9 border p-3 mb-3 admin_dashboard">
            <h1 class="mb-4">Orders</h1>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Tracking Number</th>
                        <th>Status</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $order->user->first_name ?? '-' }}</td>
                        <td>{{ $order->tracking_number }}</td>
                        <td class="text-capitalize">{{ $order->status }}</td>
                        <td>{{ $order->created_at->format('d.m.Y') }}</td>
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
@endsection