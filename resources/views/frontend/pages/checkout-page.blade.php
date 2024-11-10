@extends('frontend.layouts.master')

@section('content')
<section class="wsus__breadcrumb" style="background: url({{ asset(config('settings.site_breadcrumb')) }});">
    <div class="wsus__breadcrumb_overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="wsus__breadcrumb_text">
                        <h1>Checkout</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="payment pt_95 xs_pt_75 pb_120 xs_pb_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="payment_area">
                    <div class="row">
                        <div class="col-xl-3 col-6 col-md-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="{{ route('paypal.payment') }}" class="payment_mathod">
                                <img style="max-width: 100% !important;" src="{{ asset('default-files/paypal-logo.png') }}" alt="payment" class="img-fluid w-100">
                            </a>
                        </div>
                        <div class="col-xl-3 col-6 col-md-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="{{ route('stripe.payment') }}" class="payment_mathod">
                                <img src="{{ asset('default-files/stripe-logo.png') }}" alt="payment" class="img-fluid w-100">
                            </a>
                        </div>
                        <div class="col-xl-3 col-6 col-md-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="{{ route('razorpay.redirect') }}" class="payment_mathod">
                                <img src="{{ asset('default-files/razorpay-logo.png') }}" alt="payment" class="img-fluid w-100">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="total_payment_price">
                    <h4>Total Cart <span>(0{{ cartCount() }})</span></h4>
                    <ul>
                        <li>Subtotal :<span>${{ cartTotal() }}</span></li>
                    </ul>
                    <a href="#" class="common_btn">now payment</a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In sint laboriosam doloribus soluta
                        labore veniam enim deleniti necessitatibus modi. Velit odit sed assumenda eligendi
                        laboriosam.</p>

                    <ul class="modal_iteam">
                        <li>One popular belief, Lorem Ipsum is not simply random.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>To popular belief, Lorem Ipsum is not simply random.</li>
                    </ul>

                    <form class="modal_form">
                        <div class="single_form">
                            <label>Enter Something</label>
                            <input type="text" placeholder="Enter Something">
                        </div>
                        <div class="single_form">
                            <label>Enter Something</label>
                            <textarea rows="4" placeholder="Enter Something"></textarea>
                        </div>
                        <div class="single_form">
                            <label>select Something</label>
                            <select class="select_js" style="display: none;">
                                <option value="">Select Something</option>
                                <option value="">Something 1</option>
                                <option value="">Something 2</option>
                                <option value="">Something 3</option>
                            </select><div class="nice-select select_js" tabindex="0"><span class="current">Select Something</span><ul class="list"><li data-value="" class="option selected">Select Something</li><li data-value="" class="option">Something 1</li><li data-value="" class="option">Something 2</li><li data-value="" class="option">Something 3</li></ul></div>
                        </div>
                    </form>

                    <div class="modal-footer">
                        <button type="button" class="modal_closs_btn common_btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="common_btn">submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
