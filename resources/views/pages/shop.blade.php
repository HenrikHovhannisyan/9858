@extends('layouts.app')
@section('title') - Shop @endsection

@section('content')

<!-- Start Serach -->
<section id="search">
    <div class="container">
        <div class="search_content">
            <h2 class="search_title">
                Discover. Select. We Handle the Rest.
            </h2>
            <p class="search_text">
                Looking for a rare handbag, exclusive timepiece, or limited-edition fragrance? Use our curated search to find your favorite luxury brands. We’ll guide you to their official boutiques—then take care of everything from purchase to secure global delivery.
            </p>

            <div class="border mb-3">
                <p class="p-3 pb-0">Search (US)</p>
                <script async src="https://cse.google.com/cse.js?cx=91374774a11a041a3">
                </script>
                <div class="gcse-search"></div>
            </div>
            <form action="#">
                <input type="text" placeholder="Brand name">
                <button type="submit">Search brand</button>
            </form>
        </div>
    </div>
</section>
<!-- End Serach -->

<!-- Start search result -->
<section id="search_result">
    <div class="container">
        <p class="search_result_title">
            We found one exclusive match for ‘Nike’
        </p>
        <div class="row">
            @for($i = 0; $i < 9; $i++)
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <a href="#" class="search_result_items">
                    <img src="{{ asset('img/nike.png') }}" class="m-auto" alt="search_result">
                </a>
        </div>
        @endfor
    </div>

</section>
<!-- End search result -->

<!-- Start How It Works -->
<section id="our_signature_services">
    <div class="container">
        <h2 class="services_title">How It Works</h2>
        <div class="row ps-3 pe-3">
            <div class="col-lg-3 col-md-6 services_item">
                <p class="services_item_title">
                    Search by Brand
                </p>
                <p class="services_item_text">
                    Enter the label you love (e.g., Chanel, Cartier, Balenciaga).
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <p class="services_item_title">
                    Browse & Buy
                </p>
                <p class="services_item_text">
                    Click through to their official store and complete your purchase.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <p class="services_item_title">
                    Ship to Us
                </p>
                <p class="services_item_text">
                    Use our U.S. address at checkout for secure concierge handling.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <p class="services_item_title">
                    We Deliver
                </p>
                <p class="services_item_text">
                    We manage customs, security, and delivery to your destination—flawlessly.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End How It Works -->

<!-- Start Your Trusted Luxury Gateway -->
<section id="luxury_gateway">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div class="promise_right">
                    <h2 class="promise_title">
                        Your Trusted Luxury Gateway
                    </h2>
                    <p class="promise_text">
                        Every purchase is discreetly managed by our bonded concierge team. Whether you’re ordering a signature piece or exploring rare finds, you can shop with complete peace of mind.
                    </p>
                    <ul>
                        <li>
                            <img src="{{ asset('img/icons/luxury_gateway/1.png') }}" alt="shop info">
                            <p>Exclusive partnerships with luxury retailers</p>
                        </li>
                        <li>
                            <img src="{{ asset('img/icons/luxury_gateway/2.png') }}" alt="shop info">
                            <p>Personalized shipping care and security</p>
                        </li>
                        <li>
                            <img src="{{ asset('img/icons/luxury_gateway/3.png') }}" alt="shop info">
                            <p>Real-time delivery tracking & updates</p>
                        </li>
                        <li>
                            <img src="{{ asset('img/icons/luxury_gateway/4.png') }}" alt="shop info">
                            <p>Optional personal shopper assistance</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <img src="{{ asset('img/shop_info.png') }}" alt="shop info" class="img-fluid ms-auto">
            </div>
        </div>
    </div>
</section>
<!-- End Your Trusted Luxury Gateway -->

@endsection