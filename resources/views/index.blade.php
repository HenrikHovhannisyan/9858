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
                        At Untoldfreightconcierge, we redefine luxury logistics by offering elite concierge export services.  We curate and deliver the most sought-after designer pieces—from handbags and fragrances to timepieces and jewelry—along with personal shopping and even pet delivery.
                        <br>
                        Our clients trust us for our discretion, white-glove service, and global reach.
                    </p>
                    <a href="#" class="btn_dark">
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
                        <p>
                            “Lorem ipsum dolor sit amet consectetur. Faucibus quisque egestas ut ullamcorper facilisi sollicitudin lectus elit diam. Malesuada purus dui facilisi pretium fusce et. Sapien fermentum vitae molestie eget a id amet amet. Feugiat mi euismod arcu nunc ultricies.”
                        </p>
                        <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                        <div class="item_name">
                            Client Name
                        </div>
                        <span class="position">
                            position
                        </span>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow-effect">
                        <p>
                            “Lorem ipsum dolor sit amet consectetur. Faucibus quisque egestas ut ullamcorper facilisi sollicitudin lectus elit diam. Malesuada purus dui facilisi pretium fusce et. Sapien fermentum vitae molestie eget a id amet amet. Feugiat mi euismod arcu nunc ultricies.”
                        </p>
                        <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                        <div class="item_name">
                            Client Name
                        </div>
                        <span class="position">
                            position
                        </span>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow-effect">
                        <p>
                            “Lorem ipsum dolor sit amet consectetur. Faucibus quisque egestas ut ullamcorper facilisi sollicitudin lectus elit diam. Malesuada purus dui facilisi pretium fusce et. Sapien fermentum vitae molestie eget a id amet amet. Feugiat mi euismod arcu nunc ultricies.”
                        </p>
                        <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                        <div class="item_name">
                            Client Name
                        </div>
                        <span class="position">
                            position
                        </span>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow-effect">
                        <p>
                            “Lorem ipsum dolor sit amet consectetur. Faucibus quisque egestas ut ullamcorper facilisi sollicitudin lectus elit diam. Malesuada purus dui facilisi pretium fusce et. Sapien fermentum vitae molestie eget a id amet amet. Feugiat mi euismod arcu nunc ultricies.”
                        </p>
                        <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                        <div class="item_name">
                            Client Name
                        </div>
                        <span class="position">
                            position
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