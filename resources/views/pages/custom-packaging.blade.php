@extends('layouts.app')
@section('title') - Custom Packaging @endsection

@section('content')
<!-- Start Banner -->
<section id="banner">
    <div class="container-fluid" id="custom_packaging_banner">
        <div class="banner_container">
            <h1 class="banner_title">
                Where Protection Meets Presentation
            </h1>
            <p class="banner_text">
                Your items deserve more than standard handling—they deserve to arrive as impeccably as they were selected. Our custom packaging service is tailored for premium products, rare items, and clients who value security, discretion, and elegance in every detail.
            </p>
        </div>
    </div>
</section>
<!-- End Banner -->

<!--  What Sets Our Packaging Apart -->
<section id="packaging_apart">
    <div class="container">
        <h2 class="services_title"> What Sets Our Packaging Apart</h2>
        <div class="row ps-3 pe-3">
            <div class="col-lg-3 col-md-6 services_item">
                <p class="services_item_title">
                    Bespoke Materials
                </p>
                <p class="services_item_text">
                    We use high-grade, climate-sensitive packaging—crafted for jewelry, fragrances, fashion, electronics, and more.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <p class="services_item_title">
                    Discreet Luxury
                </p>
                <p class="services_item_text">
                    Understated on the outside. Sophisticated on the inside. No logos, no exposure—just pure protection with style.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <p class="services_item_title">
                    Tamper-Proof Seals
                </p>
                <p class="services_item_text">
                    Each package is secured with serialized seals to ensure your item remains untouched from dispatch to delivery.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <p class="services_item_title">
                    Sustainability Meets Sophistication
                </p>
                <p class="services_item_text">
                    We prioritize recyclable and reusable materials without compromising quality.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End  What Sets Our Packaging Apart -->

<!-- Start Specialized Packaging Options -->
<section id="packaging_options">
    <div class="container">
        <h2>Specialized Packaging Options</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Ideal For</th>
                        <th scope="col">Features</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hard Case Crates</td>
                        <td>Art, watches, electronics</td>
                        <td>Waterproof, impact-resistant, foam-fitted</td>
                    </tr>
                    <tr>
                        <td>Temperature-Controlled Wraps</td>
                        <td>Perfumes, cosmetics, tech</td>
                        <td>Humidity & temperature safe</td>
                    </tr>
                    <tr>
                        <td>Luxury Gift Wrapping</td>
                        <td>Gifting occasions</td>
                        <td>Custom tissue, ribbons, wax seals, hand-signed cards</td>
                    </tr>
                    <tr>
                        <td>Pet-Ready Travel Kits</td>
                        <td>Pets in transit</td>
                        <td>Breathable, cushioned, travel-certified containers</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- End Specialized Packaging Options -->

<!-- Start Tailored for You -->
<section id="tailored_for_you">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 p-0">
                <img src="{{ asset('img/tailored_for_you.png') }}" alt="tailored_for_you" class="img-fluid me-auto">
            </div>
            <div class="col-md-7">
                <div class="tailored_for_you_container">
                    <h2>
                        Tailored for You
                    </h2>
                    <h3>“Luxury isn’t standard. It’s curated.”</h3>
                    <p>
                        Every item we package is treated as a singular experience—wrapped, sealed, and delivered to reflect your taste and expectations. Whether you're shipping a rare collectible or a private gift, our team ensures the presentation is as exceptional as what lies inside.
                    </p>
                    <p>
                        Your preferences, your materials, your moment—packaged with precision.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Tailored for You -->

<!-- Start Need Custom Packaging -->
<section id="need_custom">
    <div class="container">
        <h2>
            Need Custom Packaging?
        </h2>
        <p>
            Let our concierge team prepare the perfect presentation.
        </p>
        <a href="#">Request Packaging Consultation</a>
    </div>
</section>
<!-- End Need Custom Packaging -->

@endsection