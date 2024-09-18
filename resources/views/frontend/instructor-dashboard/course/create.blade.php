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
                            <h1>Add Courses</h1>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Add Courses</li>
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


    <!--=============================
            DASHBOARD ADD COURSE START
        ==============================-->
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
                                <a href="dashboard.html">
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
                                <a href="dashboard_courses.html" class="active">
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
                                <a href="#">
                                    <div class="img">
                                        <img src="images/dash_icon_16.png" alt="icon" class="img-fluid w-100">
                                    </div>
                                    Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-md-8 wow fadeInRight">
                    <div class="wsus__dashboard_contant">
                        <div class="wsus__dashboard_contant_top">
                            <div class="wsus__dashboard_heading relative">
                                <h5>Add Courses</h5>
                                <p>Manage your courses and its update like live, draft and insight.</p>
                            </div>
                        </div>

                        <div class="dashboard_add_courses">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Basic Infos</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">More Infos</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Course Contents</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact2" type="button" role="tab"
                                        aria-controls="pills-contact2" aria-selected="false">Finish</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="add_course_basic_info">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="add_course_basic_info_imput">
                                                        <label for="#">Title *</label>
                                                        <input type="text" placeholder="Title">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="add_course_basic_info_imput">
                                                        <label for="#">Slug *</label>
                                                        <input type="text" placeholder="Slug">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="add_course_basic_info_imput">
                                                        <label for="#">Seo description</label>
                                                        <input type="text" placeholder="Seo description">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="add_course_basic_info_imput">
                                                        <label for="#">Thumbnail *</label>
                                                        <input type="file">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="add_course_basic_info_imput">
                                                        <label for="#">Demo Video Storage <b>(optional)</b></label>
                                                        <select class="select_js">
                                                            <option value=""> Please Select </option>
                                                            <option value="">Red</option>
                                                            <option value="">Black</option>
                                                            <option value="">Orange</option>
                                                            <option value="">Rose Gold</option>
                                                            <option value="">Pink</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="add_course_basic_info_imput">
                                                        <label for="#">Path</label>
                                                        <input type="file">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="add_course_basic_info_imput">
                                                        <label for="#">Price *</label>
                                                        <input type="text" placeholder="Price">
                                                        <p>Put 0 for free</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="add_course_basic_info_imput">
                                                        <label for="#">Discount Price</label>
                                                        <input type="text" placeholder="Price">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="add_course_basic_info_imput mb-0">
                                                        <label for="#">Description</label>
                                                        <textarea rows="8" placeholder="Description"></textarea>
                                                        <button type="submit" class="common_btn mt_20">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab" tabindex="0">
                                    <div class="add_course_more_info">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="add_course_more_info_input">
                                                        <label for="#">Capacity</label>
                                                        <input type="text" placeholder="Capacity">
                                                        <p>leave blank for unlimited</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="add_course_more_info_input">
                                                        <label for="#">Course Duration (Minutes)*</label>
                                                        <input type="text" placeholder="300">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="add_course_more_info_checkbox">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault">
                                                            <label class="form-check-label"
                                                                for="flexCheckDefault">Q&A</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault2">
                                                            <label class="form-check-label"
                                                                for="flexCheckDefault2">Completion Certificate</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault3">
                                                            <label class="form-check-label" for="flexCheckDefault3">Patner
                                                                instructor</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault4">
                                                            <label class="form-check-label"
                                                                for="flexCheckDefault4">Others</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="add_course_more_info_input">
                                                        <label for="#">Category *</label>
                                                        <select class="select_2">
                                                            <option value=""> Please Select </option>
                                                            <option value="">Red</option>
                                                            <option value="">Black</option>
                                                            <option value="">Orange</option>
                                                            <option value="">Rose Gold</option>
                                                            <option value="">Pink</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="add_course_more_info_radio_box">
                                                        <h3>Level</h3>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Beginner
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Intermediate
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Expert
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault4">
                                                            <label class="form-check-label" for="flexRadioDefault4">
                                                                Expert
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="add_course_more_info_radio_box">
                                                        <h3>Language</h3>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault1" id="flexRadioDefault11" checked>
                                                            <label class="form-check-label" for="flexRadioDefault11">
                                                                English
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault1" id="flexRadioDefault12">
                                                            <label class="form-check-label" for="flexRadioDefault12">
                                                                Hindi
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault1" id="flexRadioDefault13">
                                                            <label class="form-check-label" for="flexRadioDefault13">
                                                                Arabic
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault1" id="flexRadioDefault14">
                                                            <label class="form-check-label" for="flexRadioDefault14">
                                                                Francais
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <button type="submit" class="common_btn">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab" tabindex="0">
                                    <div class="add_course_content">
                                        <div class="add_course_content_btn_area d-flex flex-wrap justify-content-between">
                                            <a class="common_btn" href="#">Add New Chapter</a>
                                            <a class="common_btn" href="#">Short Chapter</a>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <span>Introduction</span>
                                                    </button>
                                                    <div class="add_course_content_action_btn">
                                                        <div class="dropdown">
                                                            <div class="btn btn-secondary dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="far fa-plus"></i>
                                                            </div>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Add Lesson</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Add
                                                                        Document</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Add Quiz</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a class="edit" href="#"><i class="far fa-edit"></i></a>
                                                        <a class="del" href="#"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="item_list">
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#flush-collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="flush-collapseOne">
                                                                        <span>Accordion Item #1</span>
                                                                    </button>
                                                                    <div class="add_course_content_action_btn">
                                                                        <div class="dropdown">
                                                                            <div class="btn btn-secondary dropdown-toggle"
                                                                                type="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i class="far fa-plus"></i>
                                                                            </div>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Add Lesson</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Add Document</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item"
                                                                                        href="#">Add Quiz</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <a class="edit" href="#"><i
                                                                                class="far fa-edit"></i></a>
                                                                        <a class="del" href="#"><i
                                                                                class="fas fa-trash-alt"></i></a>
                                                                    </div>
                                                                </h2>
                                                                <div id="flush-collapseOne"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionFlushExample">
                                                                    <div class="accordion-body">Placeholder content for
                                                                        this accordion, which is intended to demonstrate
                                                                        the <code>.accordion-flush</code> class. This is
                                                                        the first item's accordion body.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        <span>Data Structures and Algorithms in Python</span>
                                                    </button>
                                                    <div class="add_course_content_action_btn">
                                                        <div class="dropdown">
                                                            <div class="btn btn-secondary dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="far fa-plus"></i>
                                                            </div>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Add Lesson</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Add
                                                                        Document</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Add Quiz</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a class="edit" href="#"><i class="far fa-edit"></i></a>
                                                        <a class="del" href="#"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="item_list">
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#flush-collapseTwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="flush-collapseTwo">
                                                                        <span>Accordion Item #2</span>
                                                                    </button>
                                                                </h2>
                                                                <div id="flush-collapseTwo"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionFlushExample">
                                                                    <div class="accordion-body">Placeholder content for
                                                                        this accordion, which is intended to demonstrate
                                                                        the <code>.accordion-flush</code> class. This is
                                                                        the second item's accordion body. Let's imagine
                                                                        this being filled with some actual content.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree2"
                                                        aria-expanded="false" aria-controls="collapseThree2">
                                                        <span>Data Analysis with Pandas</span>
                                                    </button>
                                                    <div class="add_course_content_action_btn">
                                                        <div class="dropdown">
                                                            <div class="btn btn-secondary dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="far fa-plus"></i>
                                                            </div>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Add Lesson</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Add
                                                                        Document</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Add Quiz</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a class="edit" href="#"><i class="far fa-edit"></i></a>
                                                        <a class="del" href="#"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </h2>
                                                <div id="collapseThree2" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="item_list">
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span>Aut autem dolorem debitis mollitia.</span>
                                                                <div class="add_course_content_action_btn">
                                                                    <a class="edit" href="#"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <a class="del" href="#"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                    <a class="arrow" href="#"><i
                                                                            class="fas fa-arrows-alt"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#flush-collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="flush-collapseThree">
                                                                        <span>Accordion Item #3</span>
                                                                    </button>
                                                                </h2>
                                                                <div id="flush-collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#accordionFlushExample">
                                                                    <div class="accordion-body">Placeholder content for
                                                                        this accordion, which is intended to demonstrate
                                                                        the <code>.accordion-flush</code> class. This is
                                                                        the third item's accordion body. Nothing more
                                                                        exciting happening here in terms of content, but
                                                                        just filling up the space to make it look, at
                                                                        least at first glance, a bit more representative
                                                                        of how this would look in a real-world
                                                                        application.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact2" role="tabpanel"
                                    aria-labelledby="pills-contact-tab2" tabindex="0">
                                    <div class="dashboard_add_course_finish">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="add_course_more_info_input">
                                                        <label for="#">Message for Reviewer</label>
                                                        <textarea rows="7" placeholder="Message for Reviewer"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="add_course_more_info_input mb-0">
                                                        <label for="#">Status *</label>
                                                        <select class="select_2">
                                                            <option value=""> Please Select </option>
                                                            <option value="">Red</option>
                                                            <option value="">Black</option>
                                                            <option value="">Orange</option>
                                                            <option value="">Rose Gold</option>
                                                            <option value="">Pink</option>
                                                        </select>
                                                        <button type="submit" class="common_btn mt_25">save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
            DASHBOARD ADD COURSE END
        ==============================-->
@endsection
