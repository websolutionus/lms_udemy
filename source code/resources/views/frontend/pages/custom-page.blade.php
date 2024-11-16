@extends('frontend.layouts.master')
@push('header_scripts')
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: 15px;
        }

        p {
            margin-bottom: 15px;
        }

        .wsus__contact_form_area.mt_30.wow.fadeInUp {
            padding: 60px;
        }
    </style>
@endpush
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
                            <h1>{{ $page->title }}</h1>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>{{ $page->title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="wsus__contact_us mt_95 xs_mt_75 pb_120 xs_pb_100">
        <div class="container">

            <div class="wsus__contact_form_area mt_30 wow fadeInUp">
                {!! $page->description !!}
            </div>
        </div>

    </section>
@endsection
