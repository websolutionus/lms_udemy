@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Blog</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary">
                            <i class="ti ti-arrow-left"></i>
                            Back 
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <x-input-block name="name" placeholder="Enter name" />
                            </div>  

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" >Category</label>
                                    <select name="category" id="" class="form-control mt-2">
                                        <option value="">Select</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>  

                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <label for="" class="mb-2" >Description</label>
                                    <textarea name="description" class="editor"  ></textarea>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <x-input-toggle-block name="status" label="Status" />
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
