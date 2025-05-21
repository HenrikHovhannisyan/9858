@extends('layouts.dashboard.app')
@section('title') - My Virtual Card @endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 ps-0 pe-0">
            @include('layouts.dashboard.sidebar')
        </div>
        <div class="col-lg-10">
            <section id="virtual-card" class="user_dashboard">
                <h2>My Virtual Card</h2>
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if($cardDetails)
                <div class="card mb-5 mt-5" style="max-width:345px;">
                    <div class="card-body">
                        <!--                         <h5 class="card-title d-flex align-items-center gap-2">
                            <img src="https://img.icons8.com/color/512/visa.png" width="30" alt="">
                            {{ $cardDetails['brand'] ?? 'Card' }} ({{ ucfirst($cardDetails['type']) }})
                        </h5> -->
                        <div class="w-100 d-flex justify-content-between align-items-center">
                            <p class="card_name">
                                {{ $cardDetails['cardholder_name'] }}
                            </p>
                            <button class="btn btn_dark_border d-flex align-items-center gap-2" id="show-info-btn">
                                <img src="{{ asset('img/icons/eye.png') }}" class="img-fluid" alt="Eye">
                                Show info
                            </button>
                        </div>
                        <p class="card_balance">
                            @if($issuingBalance && isset($issuingBalance['available']) && count($issuingBalance['available']) > 0)
                            {{ number_format($issuingBalance['available'][0]['amount'] / 100, 2, '.', ' ') }} {{ strtoupper($issuingBalance['available'][0]['currency']) }}
                            @else
                            Not available
                            @endif
                        </p>
                        <div class="w-100 mt-4 d-flex justify-content-between">
                            <p class="card_number">
                                CARD NUMBER <br>
                                <strong>**** {{ $cardDetails['last4'] }}</strong>
                            </p>
                            <div class="d-flex gap-3">
                                <p class="card_expiration">
                                    EXP. <br>
                                    <strong id="card-expiration-value">*/***</strong>
                                </p>
                                <p class="card_cvv">
                                    CVV <br>
                                    <strong>***</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <p>You do not have a virtual card.</p>
                <button class="btn_dark btn mt-3" data-bs-toggle="modal" data-bs-target="#createCardModal">Create virtual card</button>
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
                                    <button type="submit" class="btn btn_dark">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </section>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const showInfoBtn = document.getElementById('show-info-btn');
        const expirationValue = document.getElementById('card-expiration-value');
        let shown = false;
        if (showInfoBtn && expirationValue) {
            showInfoBtn.addEventListener('click', function() {
                if (!shown) {
                    expirationValue.textContent = "{{ $cardDetails['exp_month'] ?? '**' }}/{{ $cardDetails['exp_year'] ?? '**' }}";
                    shown = true;
                } else {
                    expirationValue.textContent = '*/***';
                    shown = false;
                }
            });
        }
    });
</script>