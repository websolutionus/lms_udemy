@php
    $footer = \App\Models\Footer::first();
@endphp
<footer class="footer_3" style="background: url({{ asset('frontend/assets/images/footer_3_bg.jpg') }});">
    <div class="footer_3_overlay pt_120 xs_pt_100">
        <div class="wsus__footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeInUp">
                        <div class="wsus__footer_3_logo_area">
                            <a class="logo" href="index.html">
                                <img src="images/footer_logo.png" alt="EduCore" class="img-fluid">
                            </a>
                            <p>{{ $footer->description }}</p>
                            <h2>Follow Us On</h2>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-3 wow fadeInUp">
                        <div class="wsus__footer_link">
                            <h2>Courses</h2>
                            <ul>
                                <li><a href="#">Life Coach</a></li>
                                <li><a href="#">Business Coach</a></li>
                                <li><a href="#">Health Coach</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">SEO Optimize</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-3 wow fadeInUp">
                        <div class="wsus__footer_link">
                            <h2>Programs</h2>
                            <ul>
                                <li><a href="#">The Arts</a></li>
                                <li><a href="#">Human Sciences</a></li>
                                <li><a href="#">Economics</a></li>
                                <li><a href="#">Natural Sciences</a></li>
                                <li><a href="#">Business</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="wsus__footer_3_subscribe">
                            <h3>Connect With Us</h3>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('frontend/assets/images/mail.png') }}" alt="Call" class="img-fluid">
                                    </div>
                                    <div class="text">
                                        <h4>Email us:</h4>
                                        <a href="mailto:{{ $footer->email }}">{{ $footer->email }}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('frontend/assets/images/call_icon_white.png') }}" alt="Call" class="img-fluid">
                                    </div>
                                    <div class="text">
                                        <h4>Call us:</h4>
                                        <a href="callto:{{ $footer->phone }}">{{ $footer->phone }}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('frontend/assets/images/location_icon_white.png') }}" alt="Call" class="img-fluid">
                                    </div>
                                    <div class="text">
                                        <h4>Address:</h4>
                                        <p>{{ $footer->address }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wsus__footer_copyright_area mt_140 xs_mt_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wsus__footer_copyright_text text-center" style="display: block;">
                            <p>{{ $footer->copyright }}</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>