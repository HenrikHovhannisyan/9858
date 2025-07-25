@extends('layouts.app')
@section('title') - Concierge Service @endsection

@section('content')
<!-- Start Banner -->
<section id="banner" class="bg-white">
    <div class="container-fluid" id="concierge_service_banner">
        <div class="banner_container">
            <h1>
                Luxury is Personal.
            </h1>
            <h2>So Are We.</h2>
            <p>
                At Untoldfreightconcierge, our Concierge Service is more than support—it’s a bespoke experience built around your needs. Whether you're sourcing rare luxury goods, hand-delivering a pet, or coordinating a multi-brand shipment, our team is here to manage every detail with care, discretion, and world-class service.
            </p>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Start What We Offer -->
<section id="what_we_offer">
    <div class="container">
        <h2 class="services_title">What We Offer</h2>
        <div class="row ps-3 pe-3">
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Personal Shopping Assistance
                </p>
                <p class="services_item_text">
                    Looking for a hard-to-find piece or limited release? Our experts locate, verify, and purchase on your behalf—so you can focus on enjoying it, not chasing it.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Multi-Item Coordination
                </p>
                <p class="services_item_text">
                    Consolidating purchases from different brands? We organize, inspect, repackage, and deliver as one seamless shipment.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Pet Travel Management
                </p>
                <p class="services_item_text">
                    We handle logistics, documents, and hand-delivery for small breed pets with the same attention to care and comfort you'd expect from a five-star service.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Luxury Gift Handling
                </p>
                <p class="services_item_text">
                    From handwritten notes to branded wrapping, our concierge adds elegance to every occasion—corporate, personal, or private.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End What We Offer -->

<!-- Start Global Discreet -->
<section id="global_discreet">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 global_discreet_left">
                <div class="">
                    <h2>Global Discreet</h2>
                    <p>
                        Always Available.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 global_discreet_right">
                <div class="promis_box">
                    <p>24/7 availability via secure channels</p>
                </div>
                <div class="promis_box">
                    <p>Multilingual support</p>
                </div>
                <div class="promis_box">
                    <p>Bonded & insured service guarantees</p>
                </div>
                <div class="promis_box">
                    <p>VPN-friendly and globally accessible dashboard</p>
                </div>
            </div>
        </div>
</section>
<!-- End Global Discreet -->

<!-- Start Why Use Our Concierge -->
<section id="our-concierge">
    <div class="container-fluid">
        <h2>Why Use Our Concierge?</h2>
        <p>Hands-Off Logistics</p>
        <p>Exclusive Sourcing</p>
        <p>Trusted Advisors</p>
        <p>Total Discretion </p>
    </div>
</section>
<!-- End Why Use Our Concierge -->

<!-- Start Need Personal Assistance -->
<section id="need_personal_assistance">
    <div class="container-fluid">
        <div class="need_personal_assistance_containr">
            <h2>Need Personal Assistance?</h2>
            <p>
                Your concierge is one message away.
            </p>
            <a href="#" class="btn_white">Request Concierge Service</a>
        </div>
    </div>
</section>
<!-- End Need Personal Assistance -->

@endsection