@extends('layouts.dashboard.app')
@section('title') - Edit Order @endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 ps-0 pe-0">
            @include('layouts.dashboard.sidebar')
        </div>
        <div class="col-lg-10">
            <section id="edit_parcel" class="user_dashboard">
                <h2>Edit Parcel</h2>
                <form action="{{ route('orders.update', $order) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_card">
                                <h3>Delivery method</h3>
                                <p>The method of delivery selected or re-confirmed here will be considered final.</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-check shipping_method_card">
                                            <input class="form-check-input" type="radio" name="shipping_method" id="express" value="express" {{ old('shipping_method', $order->shipping_method) == 'express' ? 'checked' : '' }} required>
                                            <label class="form-check-label d-flex align-items-center" for="express">
                                                <img src="{{ asset('img/icons/express.png') }}" alt="Express" style="height:64px;vertical-align:middle;margin-right:8px;">
                                                <p>USA express <br> 1kg - $120</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-check shipping_method_card">
                                            <input class="form-check-input" type="radio" name="shipping_method" id="standard" value="standard" {{ old('shipping_method', $order->shipping_method) == 'standard' ? 'checked' : '' }} required>
                                            <label class="form-check-label d-flex align-items-center" for="standard">
                                                <img src="{{ asset('img/icons/standard.png') }}" alt="Standard" style="height:64px;vertical-align:middle;margin-right:8px;">
                                                <p>USA standard <br> 1kg - $50</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard_card mb-0">
                                <h3>Declaration</h3>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <input type="text" class="form-control" name="product_name" required value="{{ old('product_name', $order->product_name) }}" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <input type="number" step="0.01" class="form-control" name="product_price" required value="{{ old('product_price', $order->product_price) }}" placeholder="Price">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="tracking_number" required value="{{ old('tracking_number', $order->tracking_number) }}" placeholder="Tracking number">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="file" class="d-none" name="file" id="fileInput">
                                    <div class="attach_file">
                                        <p>Attach invoice in jpg, png or pdf, (optional)</p>
                                        <span id="attachFileBtn" style="cursor:pointer;">Attach a file</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 position-relative">
                            <div class="total_price">
                                <div class="d-flex gap-3">
                                    <section>
                                        <h3>Declaration fee</h3>
                                        <p>$<span id="declarationFee">50.00</span></p>
                                    </section>
                                    <section>
                                        <h3>Service fee</h3>
                                        <p>$<span id="serviceFee">80.00</span></p>
                                    </section>
                                </div>
                                <hr>
                                <h3>Total</h3>
                                <p>$<span id="totalPrice">130.00</span></p>
                                <div class="d-flex align-items-center gap-3 mt-4">
                                    <a href="{{ route('orders.index') }}" class="btn_dark_border" style="padding: 10px 24px">Cancel</a>
                                    <button type="submit" class="btn_dark border-0">Update Parcel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>

        </div>
    </div>
</div>
@endsection