<section class="wsus__offer" style="background: url({{ asset('frontend/assets/images/offer_bg.jpg') }});">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-4 col-md-6 wow fadeInLeft">
                <div class="wsus__offer_img">
                    <img src="{{ asset('frontend/assets/images/offer_img_1.png') }}" alt="Offer" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-xl-6 col-md-6 wow fadeInRight">
                <div class="wsus__offer_text">
                    <h2>Eager to Receive Special Offers & Updates on Courses?</h2>
                    <form action="#" class="newsletter" method="POST">
                        @csrf
                        <input type="text" placeholder="Your email address..." name="email">
                        <button type="submit" class="common_btn newsletter-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>