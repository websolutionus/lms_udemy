@extends('frontend.layouts.master')

@section('content')
    <!--===========================
            BREADCRUMB START
        ============================-->
    <section class="wsus__breadcrumb" style="background: url({{ asset(config('settings.site_breadcrumb')) }});">
        <div class="wsus__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp">
                        <div class="wsus__breadcrumb_text">
                            <h1>ABOUT Us</h1>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>About Us</li>
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
            ABOUT 3 START
        ============================-->
        <section class="wsus__about_3 mt_120 xs_mt_100 ">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 wow fadeInLeft">
                        <div class="wsus__about_3_img">
        
                            <img src="{{ asset($about?->image) }}" alt="About us" class="about_3_large img-fluid w-100">
        
                            <div class="text">
                                <h4> <span>{{ $about?->lerner_count }}</span> {{ $about?->lerner_count_text }}</h4>
                                <img src="{{ asset($about?->lerner_image) }}" alt="Photo" class="img-fluid">
                            </div>
        
                            <div class="circle_box">
                                <svg viewBox="0 0 100 100">
                                    <defs>
                                        <path id="circle" d="
                                M 50, 50
                                m -37, 0
                                a 37,37 0 1,1 74,0
                                a 37,37 0 1,1 -74,0"></path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#circle">
                                            {{ $about?->rounded_text }}
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight">
                        <div class="wsus__about_3_text">
                            <div class="wsus__section_heading heading_left mb_15">
                                <h5>Learn More About Us</h5>
                                <h2>{{ $about?->title }}</h2>
                            </div>
                            {!! $about?->description !!}
                            @if($about?->button_text)
                            <br>
                            <a class="common_btn" href="{{ $about?->button_url }}">{{ $about?->button_text }}</a>
                            @endif
        
                            @if($about?->video_url)
                            <div class="about_video">
                                <img src="{{ asset($about?->video_image) }}" alt="Video" class="img-fluid w-100">
                                <span>live</span>
                                <a class="play_btn venobox" data-autoplay="true" data-vbtype="video"
                                    href="{{ $about?->video_url }}">
                                    <img src="{{ asset('frontend/assets/images/play_icon_white.png') }}" alt="Play" class="img-fluid">
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--===========================
            ABOUT 3 END
        ============================-->


    <!--===========================
            COUNTER START
        ============================-->
    <section class="wsus__about_counter wsus__counter mt_120 xs_mt_100">
        <div class="container">
            <div class="wsus__counter_bg" style="background: url({{ asset('frontend/assets/images/counter_bg.jpg') }});">
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="wsus__single_counter">
                            <h2><span class="counter">{{ $counter?->counter_one }}</span></h2>
                            <p>{{ $counter?->title_one }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="wsus__single_counter">
                            <h2><span class="counter">{{ $counter?->counter_two }}</span></h2>
                            <p>{{ $counter?->title_two }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="wsus__single_counter">
                            <h2><span class="counter">{{ $counter?->counter_three }}</span></h2>
                            <p>{{ $counter?->title_three }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="wsus__single_counter">
                            <h2><span class="counter">{{ $counter?->counter_four }}</span></h2>
                            <p>{{ $counter?->title_four}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========================
            COUNTER END
        ============================-->


    <!--===========================
            TESTIMONIAL START
        ============================-->
   <section class="wsus__testimonial pt_120 xs_pt_80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 m-auto wow fadeInUp">
                <div class="wsus__section_heading mb_40">
                    <h5>Testimonial</h5>
                    <h2>See what your students say</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row testimonial_slider">
        @foreach($testimonials as $testimonial)
        <div class="col-xl-4 wow fadeInUp">
            <div class="wsus__single_testimonial">
                <p class="rating">
                    @for($i = 1; $i <= $testimonial->rating; $i++)
                    <i class="fas fa-star"></i>
                    @endfor
                    
                </p>
                <p class="description">{{ $testimonial->review }}</p>
                
                <div class="wsus__testimonial_footer">
                    <div class="img">
                        <img src="{{ asset($testimonial->user_image) }}" alt="user" class="img-fluid">
                    </div>
                    <h3>
                        {{ $testimonial->user_name }}
                        <span>{{ $testimonial->user_title }}</span>
                    </h3>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</section>
    <!--===========================
            TESTIMONIAL END
        ============================-->


    <!--===========================
            BLOG 4 START
        ============================-->
    <section class="blog_4 mt_110 xs_mt_90 pt_120 xs_pt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInLeft">
                    <div class="wsus__section_heading heading_left mb_50">
                        <h5>Latest blogs</h5>
                        <h2>Our Latest News Feed.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row blog_4_slider">
            @forelse($blogs as $blog)
            <div class="col-xl-6 wow fadeInUp">
                <div class="wsus__single_blog_4">
                    <a href="{{ route('blog.show', $blog->slug) }}" class="wsus__single_blog_4_img">
                        <img src="{{ asset($blog->image) }}" alt="Blog" class="img-fluid">
                        <span class="date">{{ date('M d, Y', strtotime($blog->created_at)) }}</span>
                    </a>
                    <div class="wsus__single_blog_4_text">
                        <ul>
                            <li>
                                <span><img src="{{ asset('frontend/assets/images/user_icon_black.png') }}"
                                        alt="User" class="img-fluid"></span>
                                By {{ $blog->author->name }}
                            </li>
                            <li>
                                <span><img src="{{ asset('frontend/assets/images/comment_icon_black.png') }}"
                                        alt="Comment" class="img-fluid"></span>
                                {{ $blog->comments()->count() }} Comments
                            </li>
                        </ul>
                        <a href="{{ route('blog.show', $blog->slug) }}" class="title">{{ $blog->title }}</a>
                        <p>{{ Str::limit(strip_tags($blog->description), 120) }}</p>
                        <a href="{{ route('blog.show', $blog->slug) }}" class="common_btn">Read More <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        @empty
            <div>No Blog Found</div>
        @endforelse 
        </div>
    </section>
    <!--===========================
            BLOG 4 END
        ============================-->
@endsection
