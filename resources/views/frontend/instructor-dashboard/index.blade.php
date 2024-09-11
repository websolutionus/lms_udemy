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
                            <h1>Instructor Dashboard</h1>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Instructor Dashboard</li>
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
            DASHBOARD OVERVIEW START
        ============================-->
    <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
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
                                <a href="javascript:;" onclick="event.preventDefault();
                                                        $('#logout').submit();">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_16.png') }}" alt="icon" class="img-fluid w-100">
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
                <div class="col-xl-9 col-md-8">
                    <div class="row">
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="wsus__dash_earning">
                                <h6>REVENUE</h6>
                                <h3>$2456.34</h3>
                                <p>Earning this month</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="wsus__dash_earning">
                                <h6>STUDENTS ENROLLMENTS</h6>
                                <h3>16,450</h3>
                                <p>Progress this month</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="wsus__dash_earning">
                                <h6>COURSES RATING</h6>
                                <h3>4.70</h3>
                                <p>Rating this month</p>
                            </div>
                        </div>
                    </div>

                    <div class="wsus__dashboard_chat_graps">
                        <div class="row">
                            <div class="col-xl-8 wow fadeInRight">
                                <div class="wsus__dashboard_graph">
                                    <h5>Earnings</h5>
                                    <div class="example-two"></div>
                                </div>
                            </div>
                            <div class="col-xl-4 wow fadeInRight">
                                <div class="wsus__dashboard_barfiller">
                                    <h5>Complated Course</h5>
                                    <div class="single_bar">
                                        <p>Java Code</p>
                                        <div id="bar1" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill orrange" data-percentage="75"></span>
                                        </div>
                                    </div>
                                    <div class="single_bar">
                                        <p>Design Basic</p>
                                        <div id="bar2" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="65"></span>
                                        </div>
                                    </div>
                                    <div class="single_bar">
                                        <p>Team Building</p>
                                        <div id="bar3" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill megenda" data-percentage="55"></span>
                                        </div>
                                    </div>
                                    <div class="single_bar">
                                        <p>Business Marketing</p>
                                        <div id="bar4" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill merun" data-percentage="45"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wsus__dashboard_contant">
                        <div class="wsus__dashboard_contant_top">
                            <div class="wsus__dashboard_heading wow fadeInUp">
                                <h5>Best Selling Courses</h5>
                            </div>
                        </div>

                        <div class="wsus__dash_course_table wow fadeInUp">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th class="image">
                                                        COURSES
                                                    </th>
                                                    <th class="details">

                                                    </th>
                                                    <th class="sale">
                                                        SALES
                                                    </th>
                                                    <th class="amount">
                                                        AMOUNT
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td class="image">
                                                        <div class="image_category">
                                                            <img src="images/courses_3_img_1.jpg" alt="img"
                                                                class="img-fluid w-100">
                                                        </div>
                                                    </td>
                                                    <td class="details">
                                                        <p class="rating">
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                            <i class="far fa-star" aria-hidden="true"></i>
                                                            <span>(5.0)</span>
                                                        </p>
                                                        <a class="title" href="#">Complete Blender Creator Learn
                                                            3D Modelling.</a>

                                                    </td>
                                                    <td class="sale">
                                                        <p>34</p>
                                                    </td>
                                                    <td class="amount">
                                                        <p>$3,145.23</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="image">
                                                        <div class="image_category">
                                                            <img src="images/courses_3_img_2.jpg" alt="img"
                                                                class="img-fluid w-100">
                                                        </div>
                                                    </td>
                                                    <td class="details">
                                                        <p class="rating">
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                            <i class="far fa-star" aria-hidden="true"></i>
                                                            <span>(5.0)</span>
                                                        </p>
                                                        <a class="title" href="#">Complete Blender Creator Learn
                                                            3D Modelling.</a>

                                                    </td>
                                                    <td class="sale">
                                                        <p>34</p>
                                                    </td>
                                                    <td class="amount">
                                                        <p>$3,145.23</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="image">
                                                        <div class="image_category">
                                                            <img src="images/courses_3_img_3.jpg" alt="img"
                                                                class="img-fluid w-100">
                                                        </div>
                                                    </td>
                                                    <td class="details">
                                                        <p class="rating">
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                            <i class="far fa-star" aria-hidden="true"></i>
                                                            <span>(5.0)</span>
                                                        </p>
                                                        <a class="title" href="#">Complete Blender Creator Learn
                                                            3D Modelling.</a>

                                                    </td>
                                                    <td class="sale">
                                                        <p>34</p>
                                                    </td>
                                                    <td class="amount">
                                                        <p>$3,145.23</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========================
            DASHBOARD OVERVIEW END
        ============================-->
@endsection
