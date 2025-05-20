<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                Logo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('luxury_delivery') }}">Luxury Delivery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('custom_packaging') }}">Custom Packaging</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('concierge_service') }}">Concierge Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center justify-content-center gap-2" href="#">
                            <img src="{{ asset('img/icons/avatar.png') }}" class="img-fluid" alt="avatar">
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- /Header -->