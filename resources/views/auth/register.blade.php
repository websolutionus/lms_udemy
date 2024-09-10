{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('frontend.layouts.master')

@section('content')
    <!--===========================
        SIGN UP START
    ============================-->
    <section class="wsus__sign_in sign_up">
        <div class="row align-items-center">
            <div class="col-xxl-5 col-xl-6 col-lg-6 wow fadeInLeft">
                <div class="wsus__sign_img">
                    <img src="{{ asset('frontend/assets/images/login_img_2.jpg') }}" alt="login" class="img-fluid">
                    <a href="index.html">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="EduCore" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-9 m-auto wow fadeInRight">
                <div class="wsus__sign_form_area">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Student</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Instructor</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <h2>Sign Up<span>!</span></h2>
                                <p class="new_user">Already have an account? <a href="sign_in.html">Sign In</a></p>
                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label>Name</label>
                                            <input type="text" placeholder="First name" name="name" value="{{ old('name') }}" required>

                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                    </div>
                                   
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label>Your email</label>
                                            <input type="email" placeholder="Your email" name="email" value="{{ old('email') }}" required>

                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label>Password</label>
                                            <input type="password" placeholder="Your password" name="password" required>

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label>Confirm Password</label>
                                            <input type="password" placeholder="Your password" name="password_confirmation" required>

                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            
                                            <button type="submit" class="common_btn">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <form action="#">
                                <h2>Sign Up<span>!</span></h2>
                                <p class="new_user">Already have an account? <a href="sign_in.html">Sign In</a></p>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label>First name</label>
                                            <input type="text" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label>Last name</label>
                                            <input type="text" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label>Your email</label>
                                            <input type="email" placeholder="Your email">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label>Password</label>
                                            <input type="password" placeholder="Your password">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault1">
                                                <label class="form-check-label" for="flexCheckDefault1"> By clicking
                                                    Create
                                                    account, I agree that I have read and accepted the <a href="#">Terms
                                                        of
                                                        Use</a> and <a href="#">Privacy Policy.</a>
                                                </label>
                                            </div>
                                            <button type="submit" class="common_btn">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="back_btn" href="index.html">Back to Home</a>
    </section>
    <!--===========================
        SIGN UP END
    ============================-->
@endsection