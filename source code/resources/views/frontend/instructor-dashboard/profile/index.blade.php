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
                    <div class="wsus__dashboard_contant">
                        <div class="wsus__dashboard_contant_top d-flex flex-wrap justify-content-between">
                            <div class="wsus__dashboard_heading">
                                <h5>Update Your Information</h5>
                                <p>Manage your courses and its update like live, draft and insight.</p>
                            </div>
                           
                        </div>



                        <form action="{{ route('instructor.profile.update') }}" method="POST" class="wsus__dashboard_profile_update" enctype="multipart/form-data">
                            @csrf

                            <div class="wsus__dashboard_profile wsus__dashboard_profile_avatar">
                                <div class="img">
                                    <img src="{{ asset(auth()->user()->image) }}" alt="profile" class="img-fluid w-100">
                                    <label for="profile_photo">
                                        <img src="{{ asset('frontend/assets/images/dash_camera.png') }}" alt="camera" class="img-fluid w-100">
                                    </label>
                                    <input type="file" id="profile_photo" name="avatar" hidden="">
                                </div>
                                <div class="text">
                                    <h6>Your avatar</h6>
                                    <p>PNG or JPG no bigger than 400px wide and tall.</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>Full Name</label>
                                        <input type="text" placeholder="Enter your name" name="name" value="{{ auth()->user()->name }}">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>Headline</label>
                                        <input type="text" placeholder="Enter your headline" name="heading" value="{{ auth()->user()->headline }}">
                                        <x-input-error :messages="$errors->get('heading')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>Email</label>
                                        <input type="text" placeholder="Enter your email" name="email" value="{{ auth()->user()->email }}">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                
                                <div class="col-xl-6">
                                    <div class="wsus__dashboard_profile_update_info ">
                                        <label>Gender</label>
                                        <select class="form-control" name="gender">
                                            <option value="">Select</option>
                                            <option @selected(auth()->user()->gender == 'male') value="male">Male</option>
                                            <option @selected(auth()->user()->gender == 'female') value="female">Female</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>About Me</label>
                                        <textarea rows="7" placeholder="Your text here" name="about">{{ auth()->user()->bio }}</textarea>
                                        <x-input-error :messages="$errors->get('about')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__dashboard_profile_update_btn">
                                        <button type="submit" class="common_btn">Update Profile</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="wsus__dashboard_contant">
                        <div class="wsus__dashboard_contant_top d-flex flex-wrap justify-content-between">
                            <div class="wsus__dashboard_heading">
                                <h5>Payout Settings</h5>
                                <p>Put your payout information here.</p>
                            </div>
                           
                        </div>

                        <form action="{{ route('instructor.profile.update-gateway-info') }}" method="POST" class="wsus__dashboard_profile_update">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wsus__dashboard_profile_update_info">
                                        @foreach($gateways as $gateway)
                                        <span class="d-none gateway-{{ $gateway->id }}">{!! $gateway->description !!}</span>
                                        @endforeach
                                        <label>Gateway</label>
                                        <select name="gateway" id="" class="gateway">
                                            <option value="">Select</option>
                                            @foreach($gateways as $gateway)
                                            <option @selected(user()?->gatewayInfo?->gateway === $gateway->name) value="{{ $gateway->name }}" data-id="{{ $gateway->id }}">{{ $gateway->name }}</option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>Gateway Information</label>
                                        <textarea name="information" id="" style="height: 300px" class="form-control gateway_description">{!! user()?->gatewayInfo?->information !!}</textarea>
                                        <x-input-error :messages="$errors->get('gateway_info')" class="mt-2" />
                                    </div>
                                </div>
                               
                                
                                
                                
                                <div class="col-xl-12">
                                    <div class="wsus__dashboard_profile_update_btn">
                                        <button type="submit" class="common_btn">Update Info</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="wsus__dashboard_contant">
                        <div class="wsus__dashboard_contant_top d-flex flex-wrap justify-content-between">
                            <div class="wsus__dashboard_heading">
                                <h5>Update Your Email/Password</h5>
                                <p>Add your new email or password here to update.</p>
                            </div>
                           
                        </div>

                     

                        <form action="{{ route('instructor.profile.update-password') }}" method="POST" class="wsus__dashboard_profile_update">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>Current Password</label>
                                        <input type="password" placeholder="Enter your current password" name="current_password" value="">
                                        <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>Password</label>
                                        <input type="password" placeholder="Enter your password" name="password" value="">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>Confirm Password</label>
                                        <input type="password" placeholder="Enter your confirm password" name="password_confirmation" value="">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>
                                
                                
                                
                                <div class="col-xl-12">
                                    <div class="wsus__dashboard_profile_update_btn">
                                        <button type="submit" class="common_btn">Update Password</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="wsus__dashboard_contant">
                        <div class="wsus__dashboard_contant_top d-flex flex-wrap justify-content-between">
                            <div class="wsus__dashboard_heading">
                                <h5>Update Social Information</h5>
                                <p>Put your social links here.</p>
                            </div>
                            
                        </div>

                        <form action="{{ route('instructor.profile.update-social') }}" method="POST" class="wsus__dashboard_profile_update">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>Facebook</label>
                                        <input type="text" placeholder="Enter your facebook url" name="facebook" value="{{ auth()->user()->facebook }}">

                                        <x-input-error :messages="$errors->get('facebook')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>X</label>
                                        <input type="text" placeholder="Enter your x url" name="x" value="{{ auth()->user()->x }}">
                                        <x-input-error :messages="$errors->get('x')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>Linkedin</label>
                                        <input type="text" placeholder="Enter your linkedin url" name="linkedin" value="{{ auth()->user()->linkedin }}">
                                        <x-input-error :messages="$errors->get('linkedin')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>website</label>
                                        <input type="text" placeholder="Enter your website url" name="website" value="{{ auth()->user()->website }}">
                                        <x-input-error :messages="$errors->get('website')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__dashboard_profile_update_btn">
                                        <button type="submit" class="common_btn">Update Socials</button>
                                    </div>
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
@push('scripts')
 <script>
    $(function() {
        $('.gateway').on('change', function() {
            let id = $(this).find(':selected').data('id'); 
            $('.gateway_description').attr('placeholder', $('.gateway-'+id).html())  
        })
    })
 </script>   
@endpush