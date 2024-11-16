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
    <!--===========================
                    BREADCRUMB END
                ============================-->


    <!--===========================
                    DASHBOARD OVERVIEW START
                ============================-->
    <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                @include('frontend.instructor-dashboard.sidebar')
                <div class="col-xl-9 col-md-8 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="row">
                        <div class="col-xl-4 col-sm-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="wsus__dash_earning">
                                <h6>Current Ballance</h6>
                                <h3>{{ config('settings.currency_icon') }} {{ $currentBallance }}</h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="wsus__dash_earning">
                                <h6>Peding Payout</h6>
                                <h3>{{ config('settings.currency_icon') }} {{ $pendingBallance }}</h3>
                                
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="wsus__dash_earning">
                                <h6>Total Payout</h6>
                                <h3>{{ config('settings.currency_icon') }} {{ $totalPayout }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="wsus__dashboard_contant">
                        
                        <div class="wsus__dashboard_contant_top d-flex flex-wrap justify-content-between">
                            <div class="wsus__dashboard_heading">
                                <h5>Request Payout</h5>
                            </div>
                           
                        </div>

                        <form action="{{ route('instructor.withdraw.request-payout.create') }}" method="POST" class="wsus__dashboard_profile_update" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-xl-12">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td><b>Gateway</b></td>
                                            <td>{{ user()?->gatewayInfo->gateway }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Information</b></td>
                                            <td>{!! user()?->gatewayInfo->information !!}</td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>Payout Amount</label>
                                        <input type="text" placeholder="Enter your amount" name="amount" value="">
                                        <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="common_btn">Request Payout</button>
                                </div>
                               
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--===========================
                    DASHBOARD OVERVIEW END
                ============================-->
@endsection
