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
                            <h1>Become a Instructor</h1>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Become a Instructor</li>
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
                    DASHBOARD OVERVIEW START
                ============================-->
    <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                @include('frontend.student-dashboard.sidebar')
                <div class="col-xl-9 col-md-8">

                    <div class="text-end">
                        <a href="{{ route('student.dashboard') }}" class="common_btn">
                            Back
                        </a>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-header">
                            Become a Instructor
                        </div>
                        <div class="card-body">
                            <form action="{{ route('student.become-instructor.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Document</label>
                                    <input type="file" name="document">
                                    <x-input-error :messages="$errors->get('document')" class="mt-2" />
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="common_btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--===========================
                    DASHBOARD OVERVIEW END
                ============================-->
@endsection
