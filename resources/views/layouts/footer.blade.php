<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img class="img-fluid mb-3" src="{{ asset('img/logo.png') }}" alt="Logo">
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-center">
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('luxury_delivery') }}">Luxury Delivery</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('custom_packaging') }}">Custom Packaging</a>
                    </li>
                    <li class="mb-2">
                        <a href="#">Concierge Service</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end">
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->