@extends('frontend.layouts.master')

@section('content')
<section class="wsus__breadcrumb" style="background: url({{ asset(config('settings.site_breadcrumb')) }});">
    <div class="wsus__breadcrumb_overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="wsus__breadcrumb_text">
                        <h1>Order Failed</h1>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Order Order Failed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="payment pt_95 xs_pt_75 pb_120 xs_pb_100">
    <div class="container">
        <h1>Order Failed</h1>
    </div>
</section>
@endsection
