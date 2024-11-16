<div class="col-xl-3 col-md-4 wow fadeInLeft">
    <div class="wsus__dashboard_sidebar">
        <div class="wsus__dashboard_sidebar_top">
            <div class="dashboard_banner">
                <img src="{{ asset('frontend/assets/images/single_topic_sidebar_banner.jpg') }}" alt="img" class="img-fluid">
            </div>
            <div class="img">
                <img src="{{ asset(auth()->user()->image) }}" alt="profile" class="img-fluid w-100">
            </div>
            <h4>{{ auth()->user()->name }}</h4>
            <p>{{ auth()->user()->role }}</p>
        </div>
        <ul class="wsus__dashboard_sidebar_menu">
            <li>
                <a href="{{ route('student.dashboard') }}" class="{{ sidebarItemActive(['student.dashboard']) }}">
                    <div class="img">
                        <img src="{{ asset('frontend/assets/images/dash_icon_8.png') }}" alt="icon" class="img-fluid w-100">
                    </div>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('student.profile.index') }}" class="{{ sidebarItemActive(['student.profile.index']) }}">
                    <div class="img">
                        <img src="{{ asset('frontend/assets/images/dash_icon_8.png') }}" alt="icon" class="img-fluid w-100">
                    </div>
                    Profile
                </a>
            </li>

            <li>
                <a href="{{ route('student.enrolled-courses.index') }}" class="{{ sidebarItemActive(['student.enrolled-courses.index']) }}">
                    <div class="img">
                        <img src="{{ asset('frontend/assets/images/dash_icon_8.png') }}" alt="icon" class="img-fluid w-100">
                    </div>
                   Enrolled Courses 
                </a>
            </li>
            <li>
                <a href="{{ route('student.orders.index') }}" class="{{ sidebarItemActive(['student.review.index']) }}">
                    <div class="img">
                        <img src="{{ asset('frontend/assets/images/dash_icon_8.png') }}" alt="icon" class="img-fluid w-100">
                    </div>
                  Orders 
                </a>
            </li>
            <li>
                <a href="{{ route('student.review.index') }}" class="{{ sidebarItemActive(['student.review.index']) }}">
                    <div class="img">
                        <img src="{{ asset('frontend/assets/images/dash_icon_8.png') }}" alt="icon" class="img-fluid w-100">
                    </div>
                   Reviews
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