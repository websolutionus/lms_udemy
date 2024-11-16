@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Category</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.social-links.index') }}" class="btn btn-primary">
                            <i class="ti ti-arrow-left"></i>
                            Back 
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.social-links.update', $social_link->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <x-image-preview src="{{ asset($social_link->icon) }}" />   
                                <x-input-file-block name="icon" />
                                <input type="hidden" name="old_icon" value="{{ $social_link->icon }}">
                            </div>

                            <div class="col-md-12">
                                <x-input-block name="url" placeholder="Enter url" value="{{ $social_link->url }}" />
                            </div>  

                            <div class="col-md-3">
                                <x-input-toggle-block name="status" label="Status" :checked="$social_link->status == 1"  />
                            </div>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">
                                <i class="ti ti-device-floppy"></i>  
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
