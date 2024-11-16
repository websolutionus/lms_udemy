@extends('frontend.layouts.master')

@section('content')
    <section class="wsus__breadcrumb" style="background: url({{ asset(config('settings.site_breadcrumb')) }});">
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
                @include('frontend.instructor-dashboard.sidebar')
                <div class="col-xl-9 col-md-8 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="wsus__dashboard_contant">
                        <table class="table">
                            <thead>
                                <th>Course Name</th>
                                <th>Purchase By</th>
                                <th>Price</th>
                                <th>Commission</th>
                                <th>Earning</th>

                            </thead>
                            <tbody>
                                @forelse($orderItems as $orderItem)
                                    <tr>
                                        <td>{{ $orderItem->course->title }}</td>
                                        <td>{{ $orderItem->order->customer->name }}</td>
                                        <td>{{ $orderItem->price }}</td>
                                        <td>{{ $orderItem->commission_rate ?? 0 }}%</td>
                                        <td>{{ calculateCommission($orderItem->price, $orderItem->commission_rate) }}
                                            {{ $orderItem->order->currency }}</td>

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
    </section>
@endsection
