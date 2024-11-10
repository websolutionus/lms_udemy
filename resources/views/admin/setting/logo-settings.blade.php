@extends('admin.setting.layout')

@section('setting-content')
    <div class="col-12 col-md-9 d-flex flex-column">
        <form action="{{ route('admin.logo-settings.update') }}" method="POST" enctype="multipart/form-data">
            <div class="card-body">

                <h3 class="card-title mt-4">Logo & Favicon Settings</h3>
                @csrf
                <div class="row g-3">
                    <div class="col-md-12">
                        <x-image-preview src="{{ asset(config('settings.site_logo')) }}" style="width: 300px" />
                        <x-input-file-block name="site_logo" />
                    </div>
                    <div class="col-md-12">
                        <x-image-preview src="{{ asset(config('settings.site_footer_logo')) }}" style="width: 300px" />
                        <x-input-file-block name="site_footer_logo" />
                    </div>
                    <div class="col-md-12">
                        <x-image-preview src="{{ asset(config('settings.site_favicon')) }}" />
                        <x-input-file-block name="site_favicon" />
                    </div>
                    <div class="col-md-12">
                        <x-image-preview src="{{ config('settings.site_breadcrumb') }}" style="width: 300px" />
                        <x-input-file-block name="site_breadcrumb" />
                    </div>
                    
                </div>
            </div>
            <div class="card-footer bg-transparent mt-auto">
                <div class="btn-list justify-content-end">

                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
