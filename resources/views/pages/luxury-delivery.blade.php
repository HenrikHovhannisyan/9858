@extends('layouts.app')
@section('title') - Luxury Delivery @endsection

@section('content')
<!-- Start Banner -->
<section id="banner">
    <div class="container-fluid" id="luxury_delivery_banner">
        <div class="banner_container">
            <h1 class="banner_title">
                Luxury Isn’t Just What You Buy—It’s How It’s Delivered.
            </h1>
            <p class="banner_text">
                Experience bespoke, secure delivery tailored for the world’s most coveted goods.
            </p>
            <div class="d-block d-md-flex align-items-center justify-content-center gap-2">
                <a href="#" class="btn_white">
                    Request Concierge Delivery
                </a>
                <a href="#" class="btn_dark btn_white_border">
                    Explore Our Process
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Start The Standard You Deserve -->
<section id="deserve">
    <div class="container-fluid" id="deserve_container">
        <h2 class="deserve_title">
            The Standard You Deserve
        </h2>
        <p class="deserve_text">
            At [Your Company Name], delivery isn’t the final step—it’s a core part of the luxury experience.
        </p>
        <p class="deserve_text">
            We specialize in the secure, discreet, and personalized transport of high-value goods—from designer handbags and fine jewelry to premium fragrances and hand-delivered pets.
        </p>
        <p class="deserve_text">
            Each shipment is handled with white-glove precision, ensuring peace of mind from our hands to yours.
        </p>
    </div>
</section>
<!-- End The Standard You Deserve -->

<!-- Start What We Deliver with Care -->
<section id="our_signature_services">
    <div class="container-fluid">
        <h2 class="services_title">What We Deliver with Care</h2>
        <div class="row ps-3 pe-3">
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Designer Handbags & Accessories
                </p>
                <p class="services_item_text">
                    From rare Hermès to limited-edition Dior, your fashion investments are in expert hands.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Jewelry & Timepieces
                </p>
                <p class="services_item_text">
                    High-value items receive elevated handling protocols and personalized protection.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Designer Footwear & Apparel
                </p>
                <p class="services_item_text">
                    Delivered crease-free, pristine, and presented with premium unboxing care.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Small Breed Pets
                </p>
                <p class="services_item_text">
                    Our white-glove pet delivery ensures comfort and wellbeing every step of the journey.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End What We Deliver with Care -->

<!-- Start Our Delivery Promise -->
<section id="promise">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="promise_right">
                    <h2 class="promise_title">
                        Our Delivery Promise
                    </h2>
                    <p class="promise_text">
                        Every item we deliver reflects our brand—and yours.
                    </p>
                    <div class="promis_box">
                        <p class="promis_box_title">
                            Discreet and Secure Logistics
                        </p>
                        <p class="promise_text">
                            Private packaging, bonded service, and verified delivery channels ensure confidentiality.
                        </p>
                    </div>
                    <div class="promis_box">
                        <p class="promis_box_title">
                            Bonded and Insured
                        </p>
                        <p class="promise_text">
                            Our luxury concierge status includes comprehensive insurance coverage and bonded operations for added peace of mind.
                        </p>
                    </div>
                    <div class="promis_box">
                        <p class="promis_box_title">
                            White-Glove Handling
                        </p>
                        <p class="promise_text">
                            From customs to doorstep, your item is never just “shipped”—it is stewarded.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="text-end">
                    <img src="{{ asset('img/promise.png') }}" alt="promise" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Delivery Promise -->

<!-- Start Who We Are -->
<section id="who_we_are">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div class="who_we_are_right">
                    <h2 class="experience_title">
                        Experience the <br> Difference
                    </h2>
                    <p class="experience_text">
                        Standard delivery can’t match our standard of service.
                    </p>
                    <p class="experience_text">
                        Our logistics are:
                    </p>
                    <ul>
                        <li>
                            Curated to match each item’s value and fragility
                        </li>
                        <li>
                            Personally monitored by our concierge team
                        </li>
                        <li>
                            Seamless across borders—from the U.S. to the Caribbean, South America, and Worldwide.
                        </li>
                    </ul>
                    <p class="experience_description">
                        No matter the item, it arrives not just on time—but in style.
                    </p>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="who_we_are_left">
                    <img src="{{ asset('img/watch.png') }}" alt="watch" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Who We Are -->

<!-- Start Why Clients Trust Us -->
<section id="why_clients_trust_us">
    <div class="container">
        <h2 class="services_title">How It Works</h2>
        <div class="row ps-3 pe-3 gap-2 justify-content-between">
            <div class="col-lg-4 col-md-6 works_item_shadow">
                <div class="">
                    <p class="services_item_shadow_title">
                        Shop or Source Your Items
                    </p>
                    <p class="services_item_shadow_text">
                        Buy from any U.S. retailer or have us source on your behalf.
                    </p>
                </div>
                <img src="{{ asset('img/works/1.png') }}" alt="">
            </div>
            <div class="col-lg-4 col-md-6 works_item_shadow">
                <div class="">
                    <p class="services_item_shadow_title">
                        Select Luxury Delivery
                    </p>
                    <p class="services_item_shadow_text">
                        Choose our premium concierge service during checkout or request it directly.
                    </p>
                </div>
                <img src="{{ asset('img/works/2.png') }}" alt="">
            </div>
            <div class="col-lg-4 col-md-6 works_item_shadow">
                <div class="">
                    <p class="services_item_shadow_title">
                        Enjoy Peace of Mind
                    </p>
                    <p class="services_item_shadow_text">
                        We handle the rest—tracking, communication, customs, and pristine delivery.
                    </p>
                </div>
                <img src="{{ asset('img/works/3.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Why Clients Trust Us -->

<!-- Start Banner -->
<section id="bottom_banner">
    <div class="container-fluid" id="bottom_banner_bg">
        <div class="banner_container">
            <h1 class="banner_title text-dark">
                Ready for a delivery experience that matches the value of what you buy?
            </h1>
            <p class="banner_text text-dark">
                Trust [Your Company Name] to deliver luxury—your way.
            </p>
            <div class="d-block d-md-flex align-items-center justify-content-center gap-2">
                <a href="#" class="btn_dark">
                    Request Luxury Delivery
                </a>
                <a href="#" class="btn_dark btn_dark_border">
                    Contact Our Concierge Team
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->

@endsection