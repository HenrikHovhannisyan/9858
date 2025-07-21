@extends('layouts.app')
@section('title') - Edit Order @endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            @include('pages.warehouse.sidebar')
        </div>
        <div class="col-md-9 border p-4">
            <h2>Edit Order #{{ $order->id }}</h2>
            <h3>Product Price - {{ $order->product_price }}$</h3>

            <form action="{{ route('w-order.update', $order->id) }}" method="POST" id="orderForm">
                @csrf
                @method('PUT')

                <!-- Показываем статус как текст -->
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <input type="text" class="form-control" value="{{ ucfirst($order->status) }}" readonly>
                </div>

                <!-- Показываем shipping_method как текст -->
                <div class="mb-3">
                    <label class="form-label">Shipping Method</label>
                    <input type="text" class="form-control" value="{{ ucfirst($order->shipping_method) }}" readonly>
                </div>

                <!-- Редактируем только вес -->
                <div class="mb-3">
                    <label for="whole" class="form-label">Weight (kg)</label>
                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        name="whole"
                        id="whole"
                        class="form-control"
                        value="{{ old('whole', $order->whole) }}"
                        required
                    >
                </div>

                <!-- Отображаем total_price -->
                <div class="mb-3">
                    <label class="form-label">Total Price ($)</label>
                    <input
                        type="text"
                        id="total_price_display"
                        class="form-control"
                        value="{{ number_format($order->total_price, 2) }}"
                        readonly
                    >
                    <input
                        type="hidden"
                        name="total_price"
                        id="total_price"
                        value="{{ $order->total_price }}"
                    >
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('w-order.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const weightInput = document.getElementById("whole");
        const totalPriceInput = document.getElementById("total_price");
        const totalPriceDisplay = document.getElementById("total_price_display");

        // shipping_method из blade
        const shippingMethod = "{{ $order->shipping_method }}";
        const pricePerKg = shippingMethod === "express" ? 100 : 50;

        function calculatePrice() {
            const weight = parseFloat(weightInput.value) || 0;
            const total = weight * pricePerKg;
            totalPriceInput.value = total.toFixed(2);
            totalPriceDisplay.value = total.toFixed(2);
        }

        weightInput.addEventListener("input", calculatePrice);

        // Инициализируем цену при загрузке страницы
        calculatePrice();
    });
</script>
@endsection
