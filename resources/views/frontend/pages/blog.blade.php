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
                            <h1>Blogs</h1>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Blogs</li>
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
            BLOG PAGE START
        ============================-->
    <section class="wsus__blog_page mt_95 xs_mt_75 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
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
                                    <span><img src="{{ asset('frontend/assets/images/user_icon_black.png') }}" alt="User" class="img-fluid"></span>
                                    By {{ $blog->author->name }}
                                </li>
                                <li>
                                    <span><img src="{{ asset('frontend/assets/images/comment_icon_black.png') }}" alt="Comment" class="img-fluid"></span>
                                    {{ $blog->comments()->count() }} Comments
                                </li>
                            </ul>
                            <a href="{{ route('blog.show', $blog->slug) }}" class="title">{{ $blog->title }}</a>
                            <p>{{ Str::limit(strip_tags($blog->description), 120) }}</p>
                            <a href="{{ route('blog.show', $blog->slug) }}" class="common_btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @empty
                <div>No Blog Found</div>
                @endforelse
            </div>
            <div class="wsus__pagination mt_50 wow fadeInUp">
                {{-- <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <i class="far fa-arrow-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav> --}}
                {{ $blogs->links() }}
            </div>
        </div>
    </section>
    <!--===========================
            BLOG PAGE END
        ============================-->
@endsection
