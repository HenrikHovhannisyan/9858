@extends('layouts.app')
@section('title') - Admin Panels @endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            @include('pages.admin.sidebar')
        </div>
        <div class="col-md-9 border p-3 mb-3 admin_dashboard">
            <h1 class="mb-4">Admin Panel</h1>
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="fa fa-users me-2"></i>
                                Total Users - {{ $totalUsers }}
                            </h5>
                            <p class="card-text"></p>
                            <a href="{{ route('users.index') }}" class="btn btn-dark btn-block mt-3">View Users</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="fa fa-box-open me-2"></i>
                                Total Orders - {{ $totalOrders }}
                            </h5>
                            <a href="{{ route('order.index') }}" class="btn btn-dark btn-block mt-3">View Orders</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection