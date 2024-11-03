@extends('frontend.layouts.master')

@section('content')
   
    <section class="wsus__breadcrumb" style="background: url(images/breadcrumb_bg.jpg);">
        <div class="wsus__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp">
                        <div class="wsus__breadcrumb_text">
                            <h1>Instructor Dashboard</h1>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Instructor Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                @include('frontend.student-dashboard.sidebar')
                <div class="col-xl-9 col-md-8 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="wsus__dashboard_contant">
                        <div class="wsus__dashboard_contant_top">
                            <div class="wsus__dashboard_heading relative">
                                <h5>Reviews</h5>
                                <p>Manage your reviews from here.</p>
                            </div>
                        </div>
                        <div class="wsus__dash_course_table">
                       <table class="table">
                        <thead>
                            <th>Course Name</th>
                            <th>Rating</th>
                            <th>Review</th>
                            <th>Status</th>
                            <th>Action</th>

                        </thead>
                        <tbody>
                            @forelse($reviews as $review)
                            <tr>
                                <td>{{ $review->course->title }}</td>
                                <td>{{ $review->rating }}</td>
                                <td>{{ $review->review }}</td>
                                <td>
                                    @if($review->status == 1)
                                    <span class="badge bg-success">Active</span>
                                    @else
                                    <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="del" href="{{ route('student.review.destroy', $review->id) }}"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @empty

                            <tr>
                                <td>No Data Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                        </table> 
                    </div>

                    </div>
                   
                </div>
                
            </div>
        </div>
    </section>
   
@endsection
