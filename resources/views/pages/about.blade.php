@extends('layouts.app')
@section('title') - About @endsection

@section('content')
<!-- Start Banner -->
<section id="banner">
    <div class="container-fluid" id="about_banner">
        <div class="banner_container">
            <h1 class="banner_title">
                Your luxury. Your trust. Your way. Delivered.
            </h1>
            <p class="banner_text">
                We bring the world of luxury to your doorstep.
            </p>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Start About info -->
<section id="about_info">
    <div class="container">
        <h2 class="about_title">
            About Us
        </h2>
        <p class="about_desription">
            Our Untold And Unfolded Story
        </p>
        <p class="about_text">
            At [Your Company Name], we redefine luxury by providing an elite export concierge service that delivers the world’s most coveted designer goods—and even small breed pets—from the U.S. to the Caribbean, South America, and Worldwide. Catering to clients who demand excellence, we ensure a seamless, secure, and personalized shopping experience for high-end handbags, premium fragrances, luxury eyewear, exquisite timepieces and jewelry, designer shoes, and now, hand-delivered small breed pets.
        </p>
        <p class="about_text">
            We understand that luxury is not just about the products you buy, but the experience you have while purchasing them. That’s why we’ve introduced our Personal Shopper Service, where our expert team curates the finest selection tailored specifically to your tastes. Whether you're looking for a rare designer handbag or a bespoke piece of jewelry, your personal shopper is dedicated to finding exactly what you desire—no request is too grand. Let us do the shopping while you enjoy a curated collection of the best the world has to offer.
        </p>
    </div>
</section>
<!-- End About info -->

<!-- Start Luxury concierge and exclusive sourcing -->
<section id="promise">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div class="promise_right">
                    <h2 class="promise_title">
                        Luxury concierge and exclusive sourcing
                    </h2>
                    <p class="promise_text">
                        As a fully bonded and trusted luxury concierge service, we prioritize the security and integrity of every transaction. Our commitment to reliability ensures that your valuable purchases—including rare and delicate luxury goods—are handled with discretion and delivered with the utmost care. With a deep understanding of luxury and a global network of exclusive brand connections, we go beyond shipping—we curate, source, and deliver hard-to-find and limited-edition pieces, ensuring our clients always have access to the finest items.
                    </p>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <img src="{{ asset('img/about_women.png') }}" alt="about women" class="img-fluid ms-auto">
            </div>
        </div>
    </div>
</section>
<!-- End Luxury concierge and exclusive sourcing -->

<!-- Start Personal Shopper -->
<section id="personal_shopper">
    <div class="container-fluid">
        <div class="container m-0">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="promise_right">
                        <h2 class="promise_title">
                            Personal Shopper
                        </h2>
                        <p class="promise_text">
                            Whether you're searching for the perfect look for a special event, a full wardrobe refresh, or just the right pair of shoes and a bag to complement your outfit, our expert stylists will curate a personalized selection just for you.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/personal_shopper.png') }}" alt="about women" class="img-fluid ms-auto">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Personal Shopper -->

<!-- Start Freight Forwarding services -->
<section id="freight_forwarding_services">
    <div class="container-fluid" id="deserve_container">
        <h2 class="deserve_title">
            Freight Forwarding ervices
        </h2>
        <p class="deserve_text">
            In addition to our white-glove luxury concierge service, we offer premium freight forwarding to make international shopping effortless. Simply order your merchandise online and have it delivered to our U.S. address, and we will expertly handle the shipment to your destination with care and efficiency. Whether it’s a single luxury item, a bulk shipment, or even a hand-delivered pet, we ensure timely and secure delivery.
        </p>
    </div>
</section>
<!-- End Freight Forwarding services -->

<!-- Start What We Deliver with Care -->
<section id="our_signature_services">
    <div class="container-fluid">
        <h2 class="services_title">What We Deliver with Care</h2>
        <div class="row ps-3 pe-3">
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Exclusive Sourcing
                </p>
                <p class="services_item_text">
                    We connect you with the most sought-after luxury items, including rare and limited editions.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    White-Glove Service
                </p>
                <p class="services_item_text">
                    From personalized shopping to secure handling, we provide a first-class experience.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Personal Shopper
                </p>
                <p class="services_item_text">
                    Our expert team curates a selection of luxury goods tailored specifically to your tastes, ensuring a bespoke shopping experience.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Seamless Logistics
                </p>
                <p class="services_item_text">
                    We manage the entire process, ensuring your items (or pets) arrive safely and swiftly.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Hand-Delivered Pets
                </p>
                <p class="services_item_text">
                    Experience peace of mind with our dedicated pet delivery service, ensuring personalized care.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Freight Forwarding
                </p>
                <p class="services_item_text">
                    Shop online from any U.S. retailer and have your items shipped internationally with ease.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Discreet and Secure Delivery
                </p>
                <p class="services_item_text">
                    Every shipment is handled with the utmost care, ensuring your privacy and security.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Trusted and Bonded
                </p>
                <p class="services_item_text">
                    Our status as a bonded concierge service guarantees that your transactions are protected, giving you peace of mind with every purchase.
                </p>
            </div>
        </div>
        <p class="about_why_choose_text">
            At [Your Company Name], we bring the world of luxury to your doorstep. Whether through curated personal shopping, hand-delivered pets, or freight forwarding, we make global luxury more accessible.
        </p>
    </div>
</section>
<!-- End What We Deliver with Care -->

@endsection