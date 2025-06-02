@extends('layouts.app')
@section('title') - Admin Panels @endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            @include('pages.admin.sidebar')
        </div>
        <div class="col-md-9 border mb-3">
            <h1 class="mb-4">Admin Panel</h1>
        </div>
    </div>
</div>
@endsection