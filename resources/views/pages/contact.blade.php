@extends('layouts.app')
@section('title') - Contact @endsection

@section('content')
<!-- Start Banner -->
<section id="banner">
    <div class="container-fluid" id="contact_banner">
        <div class="banner_container">
            <h1 class="banner_title">
                Let’s Talk. We’re Listening.
            </h1>
            <p class="banner_text">
                Whether you’re coordinating a rare shipment or requesting a custom service, our global concierge team is ready to assist—with discretion, speed, and care.
            </p>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Start Frequently asked questions -->
<section id="our-concierge">
    <div class="container-fluid">
        <h2>Frequently asked questions</h2>
        <div class="faq-section">
        <div class="faq-item">
            <div class="faq-question">
            <p class="border-top-0">How do I use your U.S. shipping address?</p>
            <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
            <p>After signing up, you'll receive a personal U.S. address. Use it at checkout when shopping from American stores.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
            <p class="border-top-0">Can I request multiple deliveries at once?</p>
            <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
            <p>Yes, you can consolidate items and request multiple shipments from your dashboard.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
            <p class="border-top-0">Do you ship pets internationally?</p>
            <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
            <p>Yes, we do offer international shipping for small pets (such as dogs and cats), but only when they are accompanied by an adult companion.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
            <p class="border-top-0">How long does it take for items to arrive?</p>
            <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
            <p>Delivery time depends on the destination and shipping method, typically 7–14 business days.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
            <p class="border-top-0">Can I talk to a live concierge?</p>
            <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
            <p>Yes! Our support team is available via chat and phone during business hours.</p>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- End Frequently asked questions -->

<!-- Start Need Personalized Assistance? -->
<section id="need_personalized_assistance">
    <div class="container">
        <h2>Need Personalized Assistance?</h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact_form">
                    <p>
                        Fill out the form below, and a dedicated concierge team member will respond within hours.
                    </p>
                    <form id="contact-form">
                        <input type="text" class="form-control mb-3" name="name" placeholder="Full Name" required>
                        <input type="email" class="form-control mb-4" name="email" placeholder="Email Address" required>
                        <input type="text" class="form-control mb-3" name="subject" placeholder="Subject" required>
                        <textarea name="message" class="form-control mb-3" placeholder="Message" required></textarea>
{{--                         <div class="mb-3">
                            <input type="file" class="d-none" name="file" id="fileInput" value="">
                            <div class="attach_file">
                                <p>
                                    No file (pdf, jpg, png)
                                </p>
                                <span id="attachFileBtn" style="cursor:pointer;">
                                    Attach a file
                                </span>
                            </div>
                        </div> --}}
                        <div class="mt-5 text-end">
                            <button type="submit" class="btn btn_dark">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('img/contact.png')}}" class="img-fluid mt-3" alt="Contact Image">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="contact_info">
            <h2 class="text-center">Contact Information</h2>
            
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="https://www.google.com/maps/place/406+Fifth+Avenue,+Brooklyn,+NY+11215/@40.6781788,-73.9442499,17z/data=!3m1!4b1!4m5!3m4!1s0x89c258890336293b:0x845977366747733!8m2!3d40.6781788!4d-73.9420612" target="_blank" class="btn_dark">
                        <i class="fa fa-map-marker"></i>
                    </a>
                    <p class="mt-3">406 Fifth Avenue, Brooklyn, NY 11215.</p>
                </div>
                <div class="col-md-4">
                    <a href="tel:17184990043" class="btn_dark">
                        <i class="fa fa-phone"></i>
                    </a>
                    <p class="mt-3">(1-718) 499-0043</p>
                </div>
                <div class="col-md-4">
                    <a href="mailto:info@untoldfreight.com" class="btn_dark">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <p class="mt-3">info@untoldfreight.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="col"></div>
</section>
<!-- End Need Personalized Assistance? -->

@endsection