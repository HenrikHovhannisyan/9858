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
        <p>How do I use your U.S. shipping address?</p>
        <p>Can I request multiple deliveries at once?</p>
        <p>Do you ship pets internationally?</p>
        <p>How long does it take for items to arrive?</p>
        <p>Can I talk to a live concierge?</p>
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
                    <form action="" method="POST">
                        <input type="text" class="form-control mb-3" name="name" placeholder="Full Name" required>
                        <input type="email" class="form-control mb-4" name="email" placeholder="Email Address" required>
                        <input type="text" class="form-control mb-3" name="subject" placeholder="Subject" required>
                        <textarea name="message" class="form-control mb-3" placeholder="Message" required></textarea>
                        <div class="mb-3">
                            <input type="file" class="d-none" name="file" id="fileInput" value="">
                            <div class="attach_file">
                                <p>
                                    No file (pdf, jpg, png)
                                </p>
                                <span id="attachFileBtn" style="cursor:pointer;">
                                    Attach a file
                                </span>
                            </div>
                        </div>
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
</section>
<!-- End Need Personalized Assistance? -->

@endsection