@extends('layouts.app')
@section('title') - Users @endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            @include('pages.admin.sidebar')
        </div>
        <div class="col-md-9">
            <h1 class="mb-4">Users</h1>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Date of registration</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-capitalize">{{ $user->role }}</td>
                        <td>{{ $user->created_at->format('d.m.Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection