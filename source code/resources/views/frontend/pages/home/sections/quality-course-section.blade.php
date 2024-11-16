<section class="wsus__quality_courses mt_120 xs_mt_100">
    <div class="row quality_course_slider">
        <div class="quality_course_slider_item" style="background: url({{ asset('frontend/assets/images/quality_courses_bg.jpg') }});">
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-4 col-md-6 col-lg-7 wow fadeInLeft">
                        <div class="wsus__quality_courses_text">
                            <div class="wsus__section_heading heading_left mb_30">
                                <h5>100% QUALITY COURSES</h5>
                                <h2>{{ $featuredInstructor?->title }}</h2>
                            </div>
                            <p>{{ $featuredInstructor?->subtitle }}</p>
                            <a class="common_btn" href="{{ $featuredInstructor?->button_url }}">{{ $featuredInstructor?->button_text }} <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-md-6 col-lg-6 d-none d-xl-block wow fadeInUp">
                        <div class="wsus__quality_courses_img">
                            <img src="{{ asset($featuredInstructor?->instructor_image) }}" alt="Quality Courses" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-lg-5 wow fadeInUp">
                        <div class="row quality_course_card_slider">
                            @foreach($featuredInstructorCourses as $course)

                            <div class="col-xl-3 col-md-6 col-lg-4">
                                <div class="wsus__single_courses_3">
                                    <div class="wsus__single_courses_3_img">
                                        <img src="{{ asset($course?->thumbnail) }}" alt="Courses" class="img-fluid">
                                        
                                        <span class="time"><i class="far fa-clock"></i> {{ convertMinutesToHours($course->duration) }}</span>
                                    </div>
                                    <div class="wsus__single_courses_text_3">
                                        <div class="rating_area">
                                            <!-- <a href="#" class="category">Design</a> -->
                                            <p class="rating">
                                                @for($i = 1; $i <= 5; $i++)
                                                @if($i <= $course->reviews()->avg('rating'))
                                                <i class="fas fa-star"></i>
                                                @else
                                                <i class="far fa-star"></i>
                                                @endif  
                                                   
                                                @endfor
                                                
                                                <span>({{ number_format($course?->reviews()->avg('rating'), 2) ?? 0 }} Rating)</span>
                                            </p>
                                        </div>
        
                                        <a class="title" href="{{ route('courses.show', $course?->slug) }}">{{ $course?->title }}</a>
                                        <ul>
                                            <li>{{ $course->lessons()->count() }} Lessons</li>
                                            <li>{{ $course->enrollments()->count() }} Student</li>
                                        </ul>
                                        <a class="author" href="#">
                                            <div class="img">
                                                <img src="{{ asset($course?->instructor->image) }}" alt="Author" class="img-fluid">
                                            </div>
                                            <h4>{{ $course?->instructor->name }}</h4>
                                        </a>
                                    </div>
                                    <div class="wsus__single_courses_3_footer">
                                        <a class="common_btn add_to_cart" href="#" data-course-id="{{ $course->id }}">Add to Cart<i class="far fa-arrow-right"></i></a>
                                        <p>
                                            @if($course->discount > 0)
                                            <del>${{ $course->price }}</del> ${{ $course->discount }}
                                            @else
                                            ${{ $course->price }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>

                            
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>