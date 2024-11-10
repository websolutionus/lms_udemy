@extends('frontend.layouts.master')
@push('meta')
    <meta property="og:title" content="{{ $blog->seo_title }}">
    <meta property="og:description" content="{{ $blog->seo_description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset($blog->image) }}">
    <meta property="og:type" content="Blog">
@endpush
@section('content')
    <!--===========================
        BREADCRUMB START
    ============================-->
    <section class="wsus__breadcrumb" style="background: url({{ asset('frontend/assets/images/breadcrumb_bg.jpg') }});">
        <div class="wsus__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp">
                        <div class="wsus__breadcrumb_text">
                            <h1>Blog details</h1>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Blog details</li>
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
        BLOG DETAILS START
    ============================-->
    <section class="wsus__blog_details mt_120 xs_mt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft">
                    <div class="wsus__blog_details_area">
                        <div class="wsus__blog_details_thumb">
                            <img src="{{ asset($blog->image) }}" alt="Blog" class="img-fluid w-100">
                        </div>
                        <div class="wsus__blog_details_header">
                            <ul class="d-flex flex-wrap">
                                <li>
                                    <span class="author">
                                        <img src="{{ $blog->author->image ? asset($blog->author->image) : asset('default-files/avatar.png') }}" alt="user" class="img-fluid">
                                    </span>
                                    By {{ $blog->author->name }}
                                </li>
                                <li>
                                    <span>
                                        <img src="images/calendar_gray.png" alt="calendar" class="img-fluid">
                                    </span>
                                    {{ date('M d, Y', strtotime($blog->created_at)) }}
                                </li>
                                <li>
                                    <span>
                                        <img src="{{ asset('frontend/assets/images/bookmark_icon.png') }}" alt="bookmark" class="img-fluid">
                                    </span>
                                    {{ $blog->category->name }}
                                </li>
                                <li>
                                    <span>
                                        <img src="{{ asset('frontend/assets/images/comment_icon_gray.png') }}" alt="bookmark" class="img-fluid">
                                    </span>
                                    3 Comments
                                </li>
                            </ul>
                            <h2>{{ $blog->title }}</h2>
                        </div>
                        <div class="wsus__blog_details_text">
                           {!! $blog->description !!}
                        </div>
                        <div class="wsus__blog_det_tags_share d-flex flex-wrap mt_50">
                           
                            <ul class="share d-flex flex-wrap align-items-center">
                                <li><span>share:</span></li>
                                <li class="ez-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="ez-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="ez-x"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="ez-reddit"><a href="#"><i class="fab fa-reddit"></i></a></li>
                            </ul>
                        </div>
                        <div class="wsus__blog_det_author">
                            <div class="img">
                                <img src="{{ $blog->author->image ? asset($blog->author->image) : asset('default-files/avatar.png') }}" alt="Author" class="img-fluid">
                            </div>
                            <div class="text">
                                <h3>{{ $blog->author->name }}</h3>
                                <h5>Digital Marketing</h5>
                                <p>Sed mi leo, accumsan vel ante at, viverra placerat nulla. Donec pharetra rutrum sed
                                    allium lectus fermentum enim Nam maximus.</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="wsus__blog_comment_area mt_75">
                            <h2>Comments</h2>
                            <div class="wsus__blog_single_comment">
                                <div class="img">
                                    <img src="images/testimonial_user_1.png" alt="Comments" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h4>Ravi O'Leigh</h4>
                                    <h6>March 23, 2024 at 12:30 pm <a href="#"><i class="fas fa-reply"></i></a></h6>
                                    <p>Nulla a ipsum nibh. Fusce purus elit, tristique vitae enim sed, auctor placerat
                                        est. Maecenas consequat nibh consequat malesuada fringilla, mauris lorem dapibus
                                        metus, non imperdiet nunc erat ultricies est. Praesent ames nec lorem sit amet
                                        leo consequat rutrum non nibh sem eget metus.</p>
                                </div>
                            </div>
                            <div class="wsus__blog_single_comment single_comment_reply">
                                <div class="img">
                                    <img src="images/testimonial_user_2.png" alt="Comments" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h4>Doug Lyphe</h4>
                                    <h6>June 25, 2024 at 08:45 pm <a href="#"><i class="fas fa-reply"></i></a></h6>
                                    <p>Nulla a ipsum nibh. Fusce purus elit, tristique vitae enim sed, auctor placerat
                                        est. Maecenas consequat nibh consequat malesuada fringilla, mauris lorem dapibus
                                        metus, non imperdiet nunc erat ultricies est. Praesent ames nec lorem sit amet
                                        leo consequat rutrum non nibh sem eget metus.</p>
                                </div>
                            </div>
                            <div class="wsus__blog_single_comment">
                                <div class="img">
                                    <img src="images/testimonial_user_3.png" alt="Comments" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h4>Doug Lyphe</h4>
                                    <h6>June 25, 2024 at 08:45 pm <a href="#"><i class="fas fa-reply"></i></a></h6>
                                    <p>Nulla a ipsum nibh. Fusce purus elit, tristique vitae enim sed, auctor placerat
                                        est. Maecenas consequat nibh consequat malesuada fringilla, mauris lorem dapibus
                                        metus, non imperdiet nunc erat ultricies est. Praesent ames nec lorem sit amet
                                        leo consequat rutrum non nibh sem eget metus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="wsus__blog_comment_input_area mt_75">
                            <h2>Post a Comment</h2>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea rows="5" placeholder="Leave a reply"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Save my name, email, and website in this browser for the next time I
                                                comment.
                                            </label>
                                        </div>
                                        <button type="submit" class="common_btn">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight">
                    <div class="wsus__blog_sidebar wsus__sidebar">
                        <form action="{{ route('blog.index') }}" class="wsus__sidebar_search" method="get">
                            <input type="text" placeholder="Search Here..." name="search">
                            <button type="submit">
                                <img src="{{ asset('frontend/assets/images/search_icon.png') }}" alt="Search" class="img-fluid">
                            </button>
                        </form>
                        <div class="wsus__sidebar_recent_post">
                            <h3>Recent Posts</h3>
                            <ul class="d-flex flex-wrap">
                                @foreach($recentBlogs as $blog)
                                <li class="w-100">
                                    <a href="{{ route('blog.show', $blog->slug) }}" class="img">
                                        <img src="{{ asset($blog->image) }}" alt="Blog" class="img-fluid">
                                    </a>
                                    <div class="text">
                                        <p>
                                            <span>
                                                <img src="{{ asset('frontend/assets/images/calendar_blue.png') }}" alt="Clander" class="img-fluid">
                                            </span>
                                            {{ date('M d, Y', strtotime($blog->created_at)) }}
                                        </p>
                                        <a href="{{ route('blog.show', $blog->slug) }}" class="title">{{ $blog->title }}</a>
                                    </div>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <div class="wsus__sidebar_blog_category">
                            <h3>Categories</h3>
                            <ul>
                                @foreach($blogCategories as $category)
                                <li>
                                    <a href="{{ route('blog.index', ['category' => $category->slug]) }}">{{ $category->name }} <span>({{ $category->blogs_count }})</span></a>
                                </li>
                                @endforeach
                               
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========================
        BLOG DETAILS END
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