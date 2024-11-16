@extends('frontend.layouts.master')
@push('meta')
    <meta property="og:title" content="{{ $course->title }}">
    <meta property="og:description" content="{{ $course->seo_description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset($course->thumbnail) }}">
    <meta property="og:type" content="Course">
@endpush
@section('content')
    <!--===========================
                BREADCRUMB START
            ============================-->
    <section class="wsus__breadcrumb course_details_breadcrumb"
        style="background: url({{ asset(config('settings.site_breadcrumb')) }});">
        <div class="wsus__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp">
                        <div class="wsus__breadcrumb_text">
                            <p class="rating">
                                @for($i = 1; $i <= 5; $i++) 
                                @if($i <= $course->reviews()->avg('rating'))
                                <i class="fas fa-star"></i>
                                @else
                                <i class="far fa-star"></i>
                                @endif
                                @endfor
                                <span>({{ number_format($course->reviews()->avg('rating'), 2) ?? 0 }} Reviews)</span>

                            </p>
                            <h1>{{ $course->title }}</h1>
                            <ul class="list">
                                <li>
                                    <span><img src="{{ asset($course->instructor->image) }}" alt="user"
                                            class="img-fluid"></span>
                                    By {{ $course->instructor->name }}
                                </li>
                                <li>
                                    <span><img src="{{ asset('frontend/assets/images/globe_icon_blue.png') }}"
                                            alt="Globe" class="img-fluid"></span>
                                    {{ $course->category->name }}
                                </li>
                                <li>
                                    <span><img src="{{ asset('frontend/assets/images/calendar_blue.png') }}" alt="Calendar"
                                            class="img-fluid"></span>
                                    Last updated {{ date('d/M/Y', strtotime($course->updated_at)) }}
                                </li>
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
                COURSES DETAILS START
            ============================-->
    <section class="wsus__courses_details pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft">
                    <div class="wsus__courses_details_area mt_40">

                        <ul class="nav nav-pills mb_40" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Curriculum</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Instructor</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-disabled-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-disabled2" type="button" role="tab"
                                    aria-controls="pills-disabled2" aria-selected="false">Review</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="wsus__courses_overview box_area">
                                    <h3>Course Description</h3>
                                    <p>{!! $course->description !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="wsus__courses_curriculum box_area">
                                    <h3>Course Curriculum</h3>
                                    <div class="accordion" id="accordionExample">
                                        @foreach($course->chapters as $chapter)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-{{ $chapter->id }}" aria-expanded="true"
                                                    aria-controls="collapse-{{ $chapter->id }}">
                                                    {{ $chapter->title }}
                                                </button>
                                            </h2>
                                            <div id="collapse-{{ $chapter->id }}" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                        @foreach($chapter->lessons as $lesson)
                                                        <li class="{{ $lesson->is_preview == 1 ? 'active' : '' }}">
                                                            <p>{{ $lesson->title }}</p>
                                                            @if($lesson->is_preview == 1)
                                                            <a href="{{ $lesson->file_path }}" data-autoplay="true" data-vbtype="video" class="right_text venobox vbox-item">Preview</a>
                                                            @else
                                                            <span class="right_text">{{ convertMinutesToHours($lesson->duration) }}</span>
                                                            @endif
                                                        </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="wsus__courses_instructor box_area">
                                    <h3>Instructor Details</h3>
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="wsus__courses_instructor_img">
                                                <img src="{{ asset($course->instructor->image) }}" alt="Instructor"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-6">
                                            <div class="wsus__courses_instructor_text">
                                                <h4>{{ $course->instructor->name }}</h4>
                                                <p class="designation">{{ $course->instructor->headline }}</p>
                                                <ul class="list">
                                                    @php
                                                        $coursesId = $course->instructor->courses()->pluck('id')->toArray();
                                                        $reviewsCount = \App\Models\Review::whereIn('course_id', $coursesId)->count();
                                                    @endphp
                                                    <li><i class="fas fa-star"></i> <b> {{ $reviewsCount }} Reviews</b></li>
                                                    <li><strong>4.7 Rating</strong></li>
                                                    <li>
                                                        <span><img src="{{ asset('frontend/assets/images/book_icon.png') }}" alt="book"
                                                                class="img-fluid"></span>
                                                        {{ $course->instructor->courses()->count() }} Courses
                                                    </li>
                                                    <li>
                                                        <span><img src="{{ asset('frontend/assets/images/user_icon_gray.png') }}" alt="user"
                                                                class="img-fluid"></span>
                                                        {{ $course->instructor->students()->count() }} Students
                                                    </li>
                                                </ul>
                                               
                                                <p class="description">
                                                    {{ $course->instructor->bio }}
                                                </p>
                                                <ul class="link d-flex flex-wrap">
                                                    @if($course->instructor->facebook)
                                                    <li><a href="{{ $course->instructor->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                                    @endif
                                                    @if($course->instructor->x)
                                                    <li><a href="{{ $course->instructor->x }}"><i class="fab fa-twitter"></i></a></li>
                                                    @endif
                                                    @if($course->instructor->linkedin)
                                                    <li><a href="{{ $course->instructor->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                                    @endif
                                                    @if($course->instructor->website)
                                                    <li><a href="{{ $course->instructor->website }}"><i class="fas fa-link"></i></a></li>
                                                    @endif
                                                    @if($course->instructor->github)
                                                    <li><a href="{{ $course->instructor->github }}"><i class="fab fa-github"></i></a></li>
                                                    @endif


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pills-disabled2" role="tabpanel"
                                aria-labelledby="pills-disabled-tab2" tabindex="0">
                                <div class="wsus__courses_review box_area">
                                    <h3>Customer Reviews</h3>
                                    <div class="row align-items-center mb_50">
                                        <div class="col-xl-4 col-md-6">
                                            <div class="total_review">
                                                <h2>{{ number_format($course->reviews()->avg('rating'), 2) ?? 0 }}</h2>
                                                <p>
                                                   @for($i = 1; $i <= number_format($course->reviews()->avg('rating'), 2) ?? 0; $i++)
                                                    <i class="fas fa-star"></i>
                                                   @endfor
                                                   
                                                </p>
                                                <h4>{{ $course->reviews()->count() }} Ratings</h4>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-md-6">
                                            <div class="review_bar">
                                                <div class="review_bar_single">
                                                    <p>5 <i class="fas fa-star"></i></p>
                                                    <div id="bar1" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="85"></span>
                                                    </div>
                                                    <span class="qnty">{{ $course->reviews()->where('rating', 5)->count() }}</span>
                                                </div>
                                                <div class="review_bar_single">
                                                    <p>4 <i class="fas fa-star"></i></p>
                                                    <div id="bar2" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="70"></span>
                                                    </div>
                                                    <span class="qnty">{{ $course->reviews()->where('rating', 4)->count() }}</span>
                                                </div>
                                                <div class="review_bar_single">
                                                    <p>3 <i class="fas fa-star"></i></p>
                                                    <div id="bar3" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="50"></span>
                                                    </div>
                                                    <span class="qnty">{{ $course->reviews()->where('rating', 3)->count() }}</span>
                                                </div>
                                                <div class="review_bar_single">
                                                    <p>2 <i class="fas fa-star"></i></p>
                                                    <div id="bar4" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="30"></span>
                                                    </div>
                                                    <span class="qnty">{{ $course->reviews()->where('rating', 2)->count() }}</span>
                                                </div>
                                                <div class="review_bar_single">
                                                    <p>1 <i class="fas fa-star"></i></p>
                                                    <div id="bar5" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="10"></span>
                                                    </div>
                                                    <span class="qnty">{{ $course->reviews()->where('rating', 1)->count() }}</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <h3>Reviews</h3>

                                    @foreach($reviews as $review)
                                    <div class="wsus__course_single_reviews">
                                        <div class="wsus__single_review_img">
                                            <img src="{{ asset($review->user->image) }}" alt="user" class="img-fluid">
                                        </div>
                                        <div class="wsus__single_review_text">
                                            <h4>{{ $review->user->name }}</h4>
                                            <h6> {{ date('d M Y', strtotime($review->created_at)) }}
                                                <span>
                                                    @for($i = 1; $i <= $review->rating; $i++)
                                                    <i class="fas fa-star"></i>
                                                    @endfor
                                                    
                                                </span>
                                            </h6>
                                            <p>{{ $review->review }}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div>
                                        {{ $reviews->links() }}
                                    </div>
                                
                                </div>
                                @auth
                                <div class="wsus__courses_review_input box_area mt_40">
                                    <h3>Write a Review</h3>
                                    <p class="short_text">Your email address will not be published. Required fields are
                                        marked *</p>
                                    <div class="select_rating d-flex flex-wrap">Your Rating:
                                        <ul id="starRating" data-stars="5"></ul>
                                    </div>
                                    <form action="{{ route('review.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <input type="hidden" name="rating" value="" id="rating">
                                            <input type="hidden" name="course" value="{{ $course->id }}">
                                            <div class="col-xl-12">
                                                <textarea rows="7" placeholder="Review" name="review"></textarea>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <button type="submit" class="common_btn">Submit Now</button>    
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                @else
                                <div class="alert alert-info mt-3 text-center" role="alert">Please <a href="{{ route('login') }}">Login</a> First To Write A Review</div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 wow fadeInRight">
                    <div class="wsus__courses_sidebar">
                        <div class="wsus__courses_sidebar_video">
                            <img src="{{ asset($course->thumbnail) }}" alt="Video" class="img-fluid">
                            @if ($course->demo_video_source != null)
                                <a class="play_btn venobox vbox-item" data-autoplay="true" data-vbtype="video"
                                    href="{{ $course->demo_video_source }}">
                                    <img src="{{ asset('frontend/assets/images/play_icon_white.png') }}" alt="Play"
                                        class="img-fluid">
                                </a>
                            @endif
                        </div>
                        <h3 class="wsus__courses_sidebar_price">
                            @if($course->discount > 0)
                            Price: <del>{{ config('settings.currency_icon') }}{{ $course->price }}</del>${{ $course->discount }}
                            @elseif($course->price <= 0)
                                FREE
                            @else
                               Price: {{ config('settings.currency_icon') }}{{ $course->price }}
                            @endif
                        </h3>
                      
                        <div class="wsus__courses_sidebar_list_info">
                            <ul>
                                <li>
                                    <p>
                                        <span><img src="{{ asset('frontend/assets/images/clock_icon_black.png') }}"
                                                alt="clock" class="img-fluid"></span>
                                        Course Duration
                                    </p>
                                    {{ convertMinutesToHours($course->duration) }}
                                </li>
                                <li>
                                    <p>
                                        <span><img src="{{ asset('frontend/assets/images/network_icon_black.png') }}"
                                                alt="network" class="img-fluid"></span>
                                        Skill Level
                                    </p>
                                    {{ $course->level->name }}
                                </li>
                                <li>
                                    <p>
                                        <span><img src="{{ asset('frontend/assets/images/user_icon_black_2.png') }}"
                                                alt="User" class="img-fluid"></span>
                                        Student Enrolled
                                    </p>
                                    {{ $course->enrollments()->count() }}
                                </li>
                                <li>
                                    <p>
                                        <span><img src="{{ asset('frontend/assets/images/language_icon_black.png') }}"
                                                alt="Language" class="img-fluid"></span>
                                        Language
                                    </p>
                                    {{ $course->language->name }}
                                </li>
                            </ul>
                            <a class="common_btn add_to_cart" data-course-id="{{ $course->id }}" href="" >Add to Cart <i class="far fa-arrow-right"></i></a>
                        </div>
                        
                        <div class="wsus__courses_sidebar_share_area">
                            <span>Share:</span>
                            <ul>
                                <li class="ez-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="ez-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="ez-x"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="ez-reddit"><a href="#"><i class="fab fa-reddit"></i></a></li>
                            </ul>
                        </div>
                        <div class="wsus__courses_sidebar_info">
                            <h3>This Course Includes</h3>
                            <ul>
                                <li>
                                    <span><img src="{{ asset('frontend/assets/images/video_icon_black.png') }}"
                                            alt="video" class="img-fluid"></span>
                                    {{ convertMinutesToHours($course->duration) }} Video Lectures
                                </li>
                                @if ($course->certificate)
                                    <li>
                                        <span><img src="{{ asset('frontend/assets/images/certificate_icon_black.png') }}"
                                                alt="Certificate" class="img-fluid"></span>
                                        Certificate of Completion
                                    </li>
                                @endif
                                <li>
                                    <span><img src="{{ asset('frontend/assets/images/life_time_icon.png') }}"
                                            alt="Certificate" class="img-fluid"></span>
                                    Course Lifetime Access
                                </li>
                            </ul>

                        </div>
                        <div class="wsus__courses_sidebar_instructor">
                            <div class="image_area d-flex flex-wrap align-items-center">
                                <div class="img">
                                    <img src="{{ asset($course->instructor->image) }}" alt="Instructor" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h3>{{ $course->instructor->name }}</h3>
                                    <p><span>Instructor</span></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========================
                COURSES DETAILS END
            ============================-->
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/gh/shakilahmed0369/ez-share/dist/ez-share.min.js"></script>

<script>
    $(function() {
      $('#starRating li').on('click', function() {
        var $starRating = $('#starRating').find('.active').length;

        $('#rating').val($starRating);
      })
    })
</script>
@endpush
