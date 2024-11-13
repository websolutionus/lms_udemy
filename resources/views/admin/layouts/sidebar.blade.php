<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
                <img src="{{ asset(config('settings.site_logo')) }}" width="110" height="32" alt="" class="navbar-brand-image">
            </a>
        </h1>
        <div class="navbar-nav flex-row d-lg-none">
            <div class="nav-item d-none d-lg-flex me-3">
                <div class="btn-list">
                    <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                        </svg>
                        Source code
                    </a>
                    <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                        </svg>
                        Sponsor
                    </a>
                </div>
            </div>
            <div class="d-none d-lg-flex">
                <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                    </svg>
                </a>
                <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path
                            d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                    </svg>
                </a>
                <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                        aria-label="Show notifications">
                        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                        </svg>
                        <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Last updates</h3>
                            </div>
                            <div class="list-group list-group-flush list-group-hoverable">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span
                                                class="status-dot status-dot-animated bg-red d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 1</a>
                                            <div class="d-block text-secondary text-truncate mt-n1">
                                                Change deprecated html tags to text decoration classes (#29604)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                    width="24" height="24" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 2</a>
                                            <div class="d-block text-secondary text-truncate mt-n1">
                                                justify-content:between ⇒ justify-content:space-between (#29734)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions show">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow"
                                                    width="24" height="24" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 3</a>
                                            <div class="d-block text-secondary text-truncate mt-n1">
                                                Update change-version.js (#29736)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                    width="24" height="24" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span
                                                class="status-dot status-dot-animated bg-green d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 4</a>
                                            <div class="d-block text-secondary text-truncate mt-n1">
                                                Regenerate package-lock.json (#29730)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                    width="24" height="24" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>Paweł Kuna</div>
                        <div class="mt-1 small text-secondary">UI Designer</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="{{ route('admin.profile.index') }}" class="dropdown-item">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="./settings.html" class="dropdown-item">Settings</a>
                    <a href="./sign-in.html" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item {{ sidebarItemActive(['admin.dashboard']) }}">
                    <a class="nav-link"  href="{{ route('admin.dashboard') }}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <i class="ti ti-home"></i>
                        </span>
                        <span class="nav-link-title">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item {{ sidebarItemActive(['admin.instructor-requests.index']) }}">
                    <a class="nav-link" href="{{ route('admin.instructor-requests.index') }}">
                        <span
                        class="nav-link-icon d-md-none d-lg-inline-block">
                        <i class="ti ti-help-hexagon"></i>
                        </span>
                        <span class="nav-link-title">
                            Instructor Requests
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown {{ sidebarItemActive(['admin.courses.*', 'admin.course-categories.*', 'admin.course-languages.*', 'admin.course-levels.*', 'admin.reviews.*']) }}">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                            <i class="ti ti-book"></i>
                        </span>
                        <span class="nav-link-title">
                            Course Management
                        </span>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.courses.*']) }}" href="{{ route('admin.courses.index') }}">
                                    Courses
                                </a>

                            </div>
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.course-categories.*']) }}" href="{{ route('admin.course-categories.index') }}">
                                    Course Categories
                                </a>

                            </div>
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.course-languages.*']) }}" href="{{ route('admin.course-languages.index') }}">
                                    Course Languages
                                </a>

                            </div>

                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.course-levels.*']) }}" href="{{ route('admin.course-levels.index') }}">
                                    Course Levels
                                </a>

                            </div>

                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.reviews.*']) }}" href="{{ route('admin.reviews.index') }}">
                                    Course Reviews
                                </a>

                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item {{ sidebarItemActive(['admin.certificate-builder.*']) }}">
                    <a class="nav-link" href="{{ route('admin.certificate-builder.index') }}">

                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <i class="ti ti-certificate"></i>
                        </span>
                        <span class="nav-link-title">
                            Certificate Builder
                        </span>
                    </a>
                </li>

                <li class="nav-item {{ sidebarItemActive(['admin.orders.*']) }}">
                    <a class="nav-link" href="{{ route('admin.orders.index') }}">

                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                           <i class="ti ti-shopping-cart"></i>
                        </span>
                        <span class="nav-link-title">
                            Orders
                        </span>
                    </a>
                </li>
                <li class="nav-item {{ sidebarItemActive(['admin.withdraw-request.*']) }}">
                    <a class="nav-link" href="{{ route('admin.withdraw-request.index') }}">

                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                           <i class="ti ti-coins"></i>
                        </span>
                        <span class="nav-link-title">
                            Payout Requests
                        </span>
                    </a>
                </li>

                <li class="nav-item dropdown {{ sidebarItemActive(['admin.blogs.*', 'admin.blog-categories.*']) }}">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                            <i class="ti ti-brand-blogger"></i>
                        </span>
                        <span class="nav-link-title">
                            Content Management
                        </span>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.blog-categories.*']) }}" href="{{ route('admin.blog-categories.index') }}">
                                   Blog Categoires
                                </a>

                            </div>
                           
                        </div>

                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.blogs.*']) }}" href="{{ route('admin.blogs.index') }}">
                                    Blogs
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item {{ sidebarItemActive(['admin.payout-gateway.*']) }}">
                    <a class="nav-link" href="{{ route('admin.payout-gateway.index') }}">

                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <i class="ti ti-cash"></i>
                        </span>
                        <span class="nav-link-title">
                            Payout Gateways
                        </span>
                    </a>
                </li>

                <li class="nav-item dropdown {{ sidebarItemActive(['admin.hero.*', 'admin.feature.*', 'admin.counter-section.*', 'admin.about-section.*','admin.testimonial-section.*', 'admin.video-section.*','admin.featured-instructor-section.*', 'admin.brand-section.*', 'admin.latest-courses-section.*', 'admin.become-instructor-section.*']) }}">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                            <i class="ti ti-layout-grid"></i>
                        </span>
                        <span class="nav-link-title">
                            Sections
                        </span>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                           
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.hero.*']) }}" href="{{ route('admin.hero.index') }}">
                                    Hero
                                </a>

                            </div>
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.feature.*']) }}" href="{{ route('admin.feature.index') }}">
                                    Features
                                </a>

                            </div>
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.about-section.*']) }}" href="{{ route('admin.about-section.index') }}">
                                    About Us
                                </a>

                            </div>
                             <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.latest-courses-section.*']) }}" href="{{ route('admin.latest-courses-section.index') }}">
                                    Latest Courses
                                </a>
                            </div>
                           
                             <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.become-instructor-section.*']) }}" href="{{ route('admin.become-instructor-section.index') }}">
                                    Become Instructor Banner
                                </a>
                            </div>

                             <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.video-section.*']) }} " href="{{ route('admin.video-section.index') }}">
                                    Video
                                </a>
                            </div>
                             <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.brand-section.*']) }}" href="{{ route('admin.brand-section.index') }}">
                                    Brand
                                </a>
                            </div>

                             <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.featured-instructor-section.*']) }}" href="{{ route('admin.featured-instructor-section.index') }}">
                                   Featured Instructor 
                                </a>
                            </div>

                             <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.testimonial-section.*']) }}" href="{{ route('admin.testimonial-section.index') }}">
                                    Testimonial
                                </a>
                            </div>
                             <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.counter-section.*']) }}" href="{{ route('admin.counter-section.index') }}">
                                   Counter 
                                </a>
                            </div>

                        </div>
                    </div>
                </li>

                

                <li class="nav-item dropdown {{ sidebarItemActive(['admin.contact.*', 'admin.contact-setting.*']) }}">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                            <i class="ti ti-address-book"></i>
                        </span>
                        <span class="nav-link-title">
                            Contact
                        </span>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.contact.*']) }}" href="{{ route('admin.contact.index') }}">
                                   Contact Cards 
                                </a>

                            </div>
                           
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.contact-setting.*']) }}" href="{{ route('admin.contact-setting.index') }}">
                                   Contact Setting 
                                </a>

                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown {{ sidebarItemActive(['admin.top-bar.*', 'admin.footer.*', 'admin.footer-column-one.*', 'admin.footer-column-two.*', 'admin.social-links.*']) }}">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                            <i class="ti ti-layout-navbar"></i>
                        </span>
                        <span class="nav-link-title">
                            Header / Footer
                        </span>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.top-bar.*']) }}" href="{{ route('admin.top-bar.index') }}">
                                   Top Bar
                                </a>
                            </div>
                             <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.footer.*']) }}" href="{{ route('admin.footer.index') }}">
                                  Footer Content 
                                </a>
                            </div>                          
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.footer-column-one.index']) }}" href="{{ route('admin.footer-column-one.index') }}">
                                  Footer Column One
                                </a>
                            </div> 
                            <div class="dropdown-menu-column ">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.footer-column-two.*']) }}" href="{{ route('admin.footer-column-two.index') }}">
                                  Footer Column Two 
                                </a>
                            </div> 
                            <div class="dropdown-menu-column ">
                                <a class="dropdown-item {{ sidebarItemActive(['admin.social-links.*']) }}" href="{{ route('admin.social-links.index') }}">
                                  Social Links
                                </a>
                            </div>  
                            
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ sidebarItemActive(['admin.custom-page.*']) }}" href="{{ route('admin.custom-page.index') }}">

                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <i class="ti ti-app-window"></i>
                        </span>
                        <span class="nav-link-title">
                            Custom Pages
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ sidebarItemActive(['admin.payment-setting.*']) }}" href="{{ route('admin.payment-setting.index') }}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                           <i class="ti ti-adjustments"></i>
                        </span>
                        <span class="nav-link-title ">
                            Payment Settings
                        </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ sidebarItemActive(['admin.settings.*']) }}" href="{{ route('admin.settings.index') }}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <i class="ti ti-settings"></i>
                        </span>
                        <span class="nav-link-title">
                            Settings
                        </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ sidebarItemActive(['admin.database-clear.*']) }}" href="{{ route('admin.database-clear.index') }}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <i class="ti ti-skull"></i>
                        </span>
                        <span class="nav-link-title">
                           Database Clear 
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
