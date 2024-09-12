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
                            <h1>Student Dashboard</h1>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Student Dashboard</li>
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
                <div class="col-xl-9 col-md-8">

                    @if (auth()->user()->approve_status === 'pending')
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </symbol>
                            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </symbol>
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </symbol>
                        </svg>

                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                aria-label="Info:">
                                <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                                Hi, {{ auth()->user()->name }} your instructor request is currently pending. We will send a
                                mail on your email when it will be approved.
                            </div>
                        </div>
                    @endif
                    <div class="text-end">
                        <a href="{{ route('student.become-instructor') }}" class="btn btn-primary">Become a Instructor</a>
                    </div>
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

                 
                </div>
            </div>
        </div>
    </section>
    <!--===========================
                DASHBOARD OVERVIEW END
            ============================-->
@endsection
