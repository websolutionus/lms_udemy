@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Category</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.course-categories.index') }}" class="btn btn-primary">
                            <i class="ti ti-arrow-left"></i>
                            Back 
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.course-categories.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <x-input-block name="name" placeholder="Enter category name" />
                            </div>
                            <div class="col-md-12">
                                <x-input-block name="name" placeholder="Enter category name" />
                            </div>
                            <div class="col-md-12">
                                <x-input-block name="name" placeholder="Enter category name" />
                            </div>
                            <div class="col-md-12">
                                <x-input-block name="name" placeholder="Enter category name" />
                            </div>
                            <div class="col-md-12">
                                <x-input-block name="name" placeholder="Enter category name" />
                            </div>
                            <div class="col-md-12">
                                <x-input-block name="name" placeholder="Enter category name" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">
                                <i class="ti ti-device-floppy"></i>  
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection