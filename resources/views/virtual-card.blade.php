@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Virtual Card</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if($cardDetails)
    <div class="card mb-5 mt-5" style="max-width:400px; margin:auto;">
        <div class="card-body">
            <h5 class="card-title d-flex align-items-center gap-2">
                <img src="https://img.icons8.com/color/512/visa.png" width="30" alt="">
                {{ $cardDetails['brand'] ?? 'Card' }}
            </h5>
            <p class="card-text">
                <strong>Cardholder:</strong> {{ $cardDetails['cardholder_name'] }}<br>
                <strong>Last 4 digits:</strong> **** **** **** {{ $cardDetails['last4'] }}<br>
                <strong>Expiration:</strong> {{ $cardDetails['exp_month'] }}/{{ $cardDetails['exp_year'] }}<br>
                <strong>Card type:</strong> {{ ucfirst($cardDetails['type']) }}<br>
                <strong>  Balance:</strong>
                @if($issuingBalance && isset($issuingBalance['available']) && count($issuingBalance['available']) > 0)
                {{ number_format($issuingBalance['available'][0]['amount'] / 100, 2, '.', ' ') }} {{ strtoupper($issuingBalance['available'][0]['currency']) }}
                @else
                Not available
                @endif
                <br>
            </p>
        </div>
    </div>
    @else
    <div class="alert alert-warning mt-4">You do not have a virtual card.</div>
    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#createCardModal">Create virtual card</button>

    <!-- Modal window -->
    <div class="modal fade" id="createCardModal" tabindex="-1" aria-labelledby="createCardModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createCardModalLabel">Create virtual card</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="createCardForm" method="POST" action="{{ route('issuing_card') }}">
                        @csrf
                        <div class="mb-3">
                            <p><strong>Are you sure you want to create a virtual card?</strong></p>
                            <input type="hidden" class="form-control" name="cardholder" value="{{ $user->cardholder_id }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection