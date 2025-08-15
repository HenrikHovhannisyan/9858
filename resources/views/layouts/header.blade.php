<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Untold Freight Concierge
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav m-auto">
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
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link btn_dark bg-transparent" href="{{ route('login') }}">{{ __('Log in') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link btn_white" href="{{ route('register') }}">{{ __('Sign up') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center justify-content-center gap-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ asset('img/icons/avatar.png') }}" class="img-fluid" alt="avatar">
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->role === 'warehouse')
                                <a class="dropdown-item text-dark" href="{{ route('warehouse.dashboard') }}">
                                    {{ __('Warehouse') }}
                                </a>
                            @endif
                            <a class="dropdown-item text-dark" href="{{ route('orders.index') }}">
                                {{ __('Dashboard') }}
                            </a>
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- /Header -->