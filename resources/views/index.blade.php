@extends('layouts.app')

@section('content')
<!-- Start Banner -->
<section id="banner">
    <div class="container-fluid" id="index_banner">
        <div class="banner_container">
            <h1 class="banner_title">
                Global Luxury, Personally Delivered
            </h1>
            <p class="banner_text">
                From iconic fashion to rare finds and small breed pets—trust us to deliver elegance to your doorstep.
            </p>
            <a href="#" class="btn_white">
                Start Your Concierge Experience
            </a>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Start Who We Are -->
<section id="who_we_are">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-0">
                <div class="who_we_are_left">
                    <img src="{{ asset('img/who_we_are.png') }}" alt="who_we_are" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="who_we_are_right">
                    <h2 class="who_we_are_title">
                        Who We Are
                    </h2>
                    <p class="who_we_are_text">
                        At Untold Freight Concierge LLC, we redefine luxury logistics by offering elite concierge export services.  We curate and deliver the most sought-after designer pieces—from handbags and fragrances to timepieces and jewelry—along with personal shopping and even pet delivery.
                        <br>
                        Our clients trust us for our discretion, white-glove service, and global reach.
                    </p>
                    <a href="{{ route('contact') }}" class="btn_dark">

                        Start Your Concierge Experience
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Who We Are -->

<!-- Start Our Signature Services -->
<section id="our_signature_services">
    <div class="container">
        <h2 class="services_title">Our Signature Services</h2>
        <div class="row ps-3 pe-3">
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Luxury Personal Shopping
                </p>
                <p class="services_item_text">
                    Your dedicated personal shopper curates rare and exclusive goods tailored to your style.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Premium Freight Forwarding
                </p>
                <p class="services_item_text">
                    Order from any U.S. retailer—receive it securely, anywhere in the Caribbean or South America.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Exclusive Sourcing
                </p>
                <p class="services_item_text">
                    We locate and deliver rare, limited-edition designer goods—if it exists, we’ll find it.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item">
                <img src="{{ asset('img/icons/glass.png') }}" class="img-fluid" alt="glass">
                <p class="services_item_title">
                    Hand-Delivered Pets
                </p>
                <p class="services_item_text">
                    High-end, stress-free transport for small breed pets—delivered with care and comfort.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Our Signature Services -->

<!-- Start Why Clients Trust Us -->
<section id="why_clients_trust_us">
    <div class="container">
        <h2 class="services_title">Why Clients Trust Us</h2>
        <div class="row ps-3 pe-3 gap-2 justify-content-center">
            <div class="col-lg-3 col-md-6 services_item_shadow">
                <p class="services_item_shadow_title">
                    Trusted and Bonded
                </p>
                <p class="services_item_shadow_text">
                    Every transaction is secure and protected.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item_shadow">
                <p class="services_item_shadow_title">
                    White-Glove Experience
                </p>
                <p class="services_item_shadow_text">
                    We handle every item—and every client—with meticulous care.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item_shadow">
                <p class="services_item_shadow_title">
                    Discreet and Reliable
                </p>
                <p class="services_item_shadow_text">
                    We value your privacy and deliver with precision.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 services_item_shadow">
                <p class="services_item_shadow_title">
                    Seamless Global Delivery
                </p>
                <p class="services_item_shadow_text">
                    From shopping to shipping, we handle it all.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Why Clients Trust Us -->

<!-- Start  Testimonials or Quote Block -->
<section class="testimonials">
    <div class="container-fluid">
        <h2 class="services_title">Testimonials or Quote Block</h2>
        <div class="row">
            <div id="customers-testimonials" class="owl-carousel">
                <div class="item">
                    <div class="shadow-effect">
                        <p class="testimonial_text">        
                            "Untold Freight Concierge elevates logistics to an art form. From sourcing elusive designer handbags to delivering them with flawless precision, their white-glove service and attention to detail have made every purchase feel like a bespoke experience. Discreet, reliable, and impossible to match."
                        </p>
                        <img class="img-circle" src="{{ asset('img/testimonial/1.png') }}" alt="">

                        <div class="item_name">
                            Emily Roberts
                        </div>
                        <span class="position">
                            Luxury Retail Collector
                        </span>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow-effect">
                        <p>
                            "I rely on Untold Freight Concierge to handle unique and delicate items—especially when fast, secure, and elegant delivery is a must. Their bonded, concierge-style approach ensures every shipment arrives in pristine condition, with zero stress on my end. Truly first-class service."
                        </p>
                        <img class="img-circle" src="{{ asset('img/testimonial/2.png') }}" alt="">
                        <div class="item_name">
                            James Carter
                        </div>
                        <span class="position">
                            Gift Curator & Philanthropist
                        </span>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow-effect">
                        <p>
                            "From rare jewelry to custom-scented fragrances, Untold Freight Concierge handled it all with unmatched sophistication. Their personal shopper went above and beyond to source limited-edition pieces, and the delivery? Seamless, discreet, and on time. It’s the perfect blend of luxury and assurance."
                        </p>
                        <img class="img-circle" src="{{ asset('img/testimonial/3.png') }}" alt="">
                        <div class="item_name">
                            Olivia Bennett
                        </div>
                        <span class="position">
                            Art Enthusiast & Private Collector
                        </span>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow-effect">
                        <p>
                            "I never imagined pet shipping could feel this upscale. The team at Untold Freight Concierge delivered my tiny French bulldog with such care and comfort—I felt like they were delivering a VIP passenger, not just a pet. Their trustworthiness and impeccable handling made all the difference."
                        </p>
                        <img class="img-circle" src="{{ asset('img/testimonial/4.png') }}" alt="">
                        <div class="item_name">
                            Michael Greene
                        </div>
                        <span class="position">
                            High-End Pet Owner
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials or Quote Block -->

<!-- Start Dress -->
<section id="dress">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-0">
                <div class="text-center">
                    <img src="{{ asset('img/dress.png') }}" alt="dress" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="dress_right">
                    <h2 class="dress_title">
                        Luxury isn’t just what you buy—it’s how it’s delivered.
                    </h2>
                    <p class="dress_text">
                        Let us handle the sourcing, the shipping, and the surprise of luxury done right.
                    </p>
                    <div class="d-block d-md-flex align-items-center gap-3 links">
                        <p>Request a Personal Shopper</p>
                        <p>Get Started with Concierge Freight</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Dress -->

@endsection