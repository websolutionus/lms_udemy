@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Category</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.course-categories.index') }}" class="btn btn-primary">
                            <i class="ti ti-arrow-left"></i>
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.course-categories.update', $course_category->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <x-image-preview src="{{ asset($course_category->image) }}" />

                            <div class="col-md-12">
                                <x-input-file-block name="image" />
                            </div>

                            <div class="col-md-12">
                                <x-input-block name="name" :value="$course_category->name" placeholder="Enter category name" />
                            </div>

                            <div class="col-md-3">
                                <x-input-toggle-block name="show_at_treading" label="Show at Trading" :checked="$course_category->show_at_trending == 1" />
                            </div>
                            <div class="col-md-3">
                                <x-input-toggle-block name="status" :checked="$course_category->status == 1" label="Status" />
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
