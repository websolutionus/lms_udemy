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
                            <h1>Shopping Cart</h1>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Shopping Cart</li>
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
        CART VIEW START
    ============================-->
    <section class="wsus__cart_view mt_120 xs_mt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="cart_list">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="pro_img">Product</th>

                                        <th class="pro_name"></th>

                                        <th class="pro_tk">Price</th>

                                        <th class="pro_select">Quantity</th>

                                        <th class="pro_tk">Subtotal</th>

                                        <th class="pro_icon">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro_img">
                                            <img src="images/course_product_img_1.jpg" alt="product"
                                                class="img-fluid w-100">
                                        </td>

                                        <td class="pro_name">
                                            <a href="#">Life Child No Plan B</a>
                                        </td>
                                        <td class="pro_tk">
                                            <h6>$99.00</h6>
                                        </td>

                                        <td class="pro_select">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger"><i class="fal fa-minus"
                                                        aria-hidden="true"></i></button>
                                                <input type="text" placeholder="1">
                                                <button class="btn btn-success"><i class="fal fa-plus"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$99.00</h6>
                                        </td>

                                        <td class="pro_icon">
                                            <a href="#"><i class="fal fa-times" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pro_img">
                                            <img src="images/course_product_img_2.jpg" alt="product"
                                                class="img-fluid w-100">
                                        </td>

                                        <td class="pro_name">
                                            <a href="#">Mitch Rapp Novel Kyle</a>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$59.00</h6>
                                        </td>

                                        <td class="pro_select">
                                            <div class="quentity_btn">
                                                <button><i class="fal fa-minus" aria-hidden="true"></i></button>
                                                <input type="text" placeholder="2">
                                                <button><i class="fal fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$118.00</h6>
                                        </td>

                                        <td class="pro_icon">
                                            <a href="#"><i class="fal fa-times" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pro_img">
                                            <img src="images/course_product_img_3.jpg" alt="product"
                                                class="img-fluid w-100">
                                        </td>

                                        <td class="pro_name">
                                            <a href="#">Run For Life Stephen</a>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$45.00</h6>
                                        </td>

                                        <td class="pro_select">
                                            <div class="quentity_btn">
                                                <button><i class="fal fa-minus" aria-hidden="true"></i></button>
                                                <input type="text" placeholder="3">
                                                <button><i class="fal fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$135.00</h6>
                                        </td>

                                        <td class="pro_icon">
                                            <a href="#"><i class="fal fa-times" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pro_img">
                                            <img src="images/course_product_img_4.jpg" alt="product"
                                                class="img-fluid w-100">
                                        </td>

                                        <td class="pro_name">
                                            <a href="#">The Hidden Curriculum</a>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$49.00</h6>
                                        </td>

                                        <td class="pro_select">
                                            <div class="quentity_btn">
                                                <button><i class="fal fa-minus" aria-hidden="true"></i></button>
                                                <input type="text" placeholder="2">
                                                <button><i class="fal fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$98.00</h6>
                                        </td>

                                        <td class="pro_icon">
                                            <a href="#"><i class="fal fa-times" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xxl-7 col-md-5 col-lg-6 wow fadeInUp"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="continue_shopping">
                        <a href="#" class="common_btn">continue shopping</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-7 col-lg-6 wow fadeInUp"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="total_price">
                        <h4>total<span>$999.00</span></h4>
                        <div class="subtotal_area">
                            <h5>Subtotal<span>$999.00</span></h5>
                            <h6>Shipping Address</h6>
                            <p>2801 Lafayette Blvd, Norfolk, Vermont
                                23509, united state</p>
                            <h5>Subtotal<span>$999.00</span></h5>
                            <a href="checkout.html" class="common_btn">proceed checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========================
        CART VIEW END
    ============================-->
@endsection
