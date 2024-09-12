<div class="col-xl-3 col-md-4 wow fadeInLeft">
    <div class="wsus__dashboard_sidebar">
        <div class="wsus__dashboard_sidebar_top">
            <div class="dashboard_banner">
                <img src="images/single_topic_sidebar_banner.jpg" alt="img" class="img-fluid">
            </div>
            <div class="img">
                <img src="images/dashboard_profile_img.png" alt="profile" class="img-fluid w-100">
            </div>
            <h4>Norman Gordon</h4>
            <p>Instructor</p>
        </div>
        <ul class="wsus__dashboard_sidebar_menu">
            <li>
                <a href="dashboard.html" class="active">
                    <div class="img">
                        <img src="images/dash_icon_8.png" alt="icon" class="img-fluid w-100">
                    </div>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="dashboard_profile.html">
                    <div class="img">
                        <img src="images/dash_icon_1.png" alt="icon" class="img-fluid w-100">
                    </div>
                    Profile
                </a>
            </li>
            <li>
                <a href="dashboard_courses.html">
                    <div class="img">
                        <img src="images/dash_icon_2.png" alt="icon" class="img-fluid w-100">
                    </div>
                    Courses
                </a>
            </li>
            <li>
                <a href="dashboard_review.html">
                    <div class="img">
                        <img src="images/dash_icon_4.png" alt="icon" class="img-fluid w-100">
                    </div>
                    Reviews
                </a>
            </li>
            <li>
                <a href="dashboard_order.html">
                    <div class="img">
                        <img src="images/dash_icon_5.png" alt="icon" class="img-fluid w-100">
                    </div>
                    Orders
                </a>
            </li>
            <li>
                <a href="dashboard_student.html">
                    <div class="img">
                        <img src="images/dash_icon_6.png" alt="icon" class="img-fluid w-100">
                    </div>
                    Students
                </a>
            </li>
            <li>
                <a href="dashboard_payout.html">
                    <div class="img">
                        <img src="images/dash_icon_7.png" alt="icon" class="img-fluid w-100">
                    </div>
                    Payouts
                </a>
            </li>
            <li>
                <a href="dashboard_support.html">
                    <div class="img">
                        <img src="images/dash_icon_8.png" alt="icon" class="img-fluid w-100">
                    </div>
                    Support Tickets
                </a>
            </li>
            <li>
                <a href="dashboard_security.html">
                    <div class="img">
                        <img src="images/dash_icon_10.png" alt="icon" class="img-fluid w-100">
                    </div>
                    Security
                </a>
            </li>
            <li>
                <a href="dashboard_social_account.html">
                    <div class="img">
                        <img src="images/dash_icon_11.png" alt="icon" class="img-fluid w-100">
                    </div>
                    Social Profile
                </a>
            </li>
            <li>
                <a href="dashboard_notification.html">
                    <div class="img">
                        <img src="images/dash_icon_12.png" alt="icon" class="img-fluid w-100">
                    </div>
                    Notifications
                </a>
            </li>
            <li>
                <a href="dashboard_privacy.html">
                    <div class="img">
                        <img src="images/dash_icon_13.png" alt="icon" class="img-fluid w-100">
                    </div>
                    Profile Privacy
                </a>
            </li>
            <li>
                <a href="javascript:;"
                    onclick="event.preventDefault();
                                        $('#logout').submit();">
                    <div class="img">
                        <img src="{{ asset('frontend/assets/images/dash_icon_16.png') }}" alt="icon"
                            class="img-fluid w-100">
                    </div>
                    Sign Out
                </a>
                <form method="POST" id="logout" action="{{ route('logout') }}">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>