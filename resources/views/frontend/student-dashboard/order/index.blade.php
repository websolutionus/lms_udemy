@extends('frontend.layouts.master')

@section('content')
    <section class="wsus__breadcrumb" style="background: url({{ asset(config('settings.site_breadcrumb')) }});">
        <div class="wsus__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp">
                        <div class="wsus__breadcrumb_text">
                            <h1>Student Dashboard</h1>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>Student Dashboard</li>
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
                                <h5>Orders</h5>
                                <p>Manage your Orders from here.</p>
                            </div>
                        </div>
                        <div class="wsus__dash_course_table">

                            <table class="table">
                                <thead>

                                    <th>No.</th>
                                    <th>Invoice</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </thead>
                                <tbody>
                                    @forelse($orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->invoice_id }}</td>
                                            <td>{{ $order->total_amount }} {{ $order->currency }}</td>
                                            <td><span class="badge bg-success text-green-fg">{{ $order->status }}</span>
                                            </td>
                                            <td><a href="{{ route('student.orders.show', $order->id) }}">view</a></td>
                                        </tr>
                                    @empty

                                        <tr>
                                            <td>No Data Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="wsus__pagination mt_50 wow fadeInUp">
                                {{ $orders->withQueryString()->links() }}
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
