@php
    $categoryOne = \App\Models\CourseCategory::where('id', $latestCourses->category_one)->first();
    $categoryTwo = \App\Models\CourseCategory::where('id', $latestCourses->category_two)->first();
    $categoryThree = \App\Models\CourseCategory::where('id', $latestCourses->category_three)->first();
    $categoryFour = \App\Models\CourseCategory::where('id', $latestCourses->category_four)->first();
    $categoryFive = \App\Models\CourseCategory::where('id', $latestCourses->category_five)->first();

@endphp
<section class="wsus__courses_3 pt_120 xs_pt_100 mt_120 xs_mt_90 pb_120 xs_pb_100">

    <div class="container">

        <div class="row">
            <div class="col-xl-6 m-auto wow fadeInUp">
                <div class="wsus__section_heading mb_45">
                    <h5>Featured Courses</h5>
                    <h2>Latest Bundle Courses.</h2>
                </div>
            </div>
        </div>

        <div class="row wow fadeInUp">
            <div class="col-xxl-6 col-xl-8 m-auto">
                <div class="wsus__filter_area mb_15">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        @if ($categoryOne)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-{{ $categoryOne->id }}-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-{{ $categoryOne->id }}" type="button"
                                    role="tab" aria-controls="pills-home"
                                    aria-selected="true">{{ $categoryOne->name }}</button>
                            </li>
                        @endif

                        @if ($categoryTwo)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-{{ $categoryTwo->id }}-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-{{ $categoryTwo->id }}" type="button"
                                role="tab" aria-controls="pills-home"
                                aria-selected="true">{{ $categoryTwo->name }}</button>
                        </li>
                    @endif

                    @if ($categoryTwo)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-{{ $categoryThree->id }}-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-{{ $categoryThree->id }}" type="button"
                                role="tab" aria-controls="pills-home"
                                aria-selected="true">{{ $categoryThree->name }}</button>
                        </li>
                    @endif

                    @if ($categoryTwo)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-{{ $categoryFour->id }}-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-{{ $categoryFour->id }}" type="button"
                                role="tab" aria-controls="pills-home"
                                aria-selected="true">{{ $categoryFour->name }}</button>
                        </li>
                    @endif

                    @if ($categoryTwo)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-{{ $categoryFive->id }}-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-{{ $categoryFive->id }}" type="button"
                                role="tab" aria-controls="pills-home"
                                aria-selected="true">{{ $categoryFive->name }}</button>
                        </li>
                    @endif


                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            @if($categoryOne)
            <div class="tab-pane fade show active" id="pills-{{ $categoryOne->id }}" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="row">
                    @foreach($categoryOne->courses as $course)
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="images/courses_3_img_1.jpg" alt="Courses" class="img-fluid">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/love_icon_black.png" alt="Love" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/compare_icon_black.png" alt="Compare" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/cart_icon_black_2.png" alt="Cart" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                                <span class="time"><i class="far fa-clock"></i> 15 Hours</span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="images/author_img_2.jpg" alt="Author" class="img-fluid">
                                    </div>
                                    <h4>Hermann P. Schnitzel</h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn" href="#">Enroll <i class="far fa-arrow-right"></i></a>
                                <p><del>$254</del> $156.00</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row mt_60 wow fadeInUp">
                    <div class="col-12 text-center">
                        <a class="common_btn" href="#">Browse More Courses <i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
