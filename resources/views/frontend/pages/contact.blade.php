@extends('frontend.layouts.master')

@section('content')
    <!--===========================
        BREADCRUMB START
    ============================-->
    <section class="wsus__breadcrumb" style="background: url(images/breadcrumb_bg.jpg);">
        <div class="wsus__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp">
                        <div class="wsus__breadcrumb_text">
                            <h1>Contact Us</h1>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========================
        BREADCRUMB END
    ============================-->


    <!--===========================
        CONTACT US START
    ============================-->
    <section class="wsus__contact_us mt_95 xs_mt_75 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                @foreach($contactCards as $contactCard)
                <div class="col-xl-3 col-md-6 col-lg-4 wow fadeInUp">
                    <div class="wsus__contact_info">
                        <div class="icon">
                            <img src="{{ $contactCard->icon }}" alt="contact" class="img-fluid">
                        </div>
                        <h4>{{ $contactCard->title }}</h4>
                        <p>{{ $contactCard->line_one }}</p>
                        <p>{{ $contactCard->line_two }}</p>
                    </div>
                </div>
                @endforeach 
            </div>
            <div class="wsus__contact_form_area mt_30 wow fadeInUp">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-5 d-md-none d-lg-block">
                        <div class="wsus__contact_form_img">
                            <img src="images/instructor_2.jpg" alt="contact" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <form class="wsus__contact_form">
                            <h4>Send Us Message</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>

                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <input type="email" placeholder="Email*">
                                </div>
                                <div class="col-xl-12">
                                    <textarea rows="5" placeholder="Comment*"></textarea>
                                    <button type="submit" class="common_btn">Submit Now</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="wsus__contact_map mt_120 xs_mt_100 wow fadeInUp">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58955.86762247907!2d88.3391639282542!3d22.551345723020553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277a2e8448a01%3A0xfc7031bafe756ae4!2sMillennium%20Park%2C%20Kolkata!5e0!3m2!1sen!2sbd!4v1710672733871!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!--===========================
        CONTACT US END
    ============================-->
@endsection