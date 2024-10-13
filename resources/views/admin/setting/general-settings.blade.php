@extends('admin.setting.layout')

@section('setting-content')
    <div class="col-12 col-md-9 d-flex flex-column">
        <div class="card-body">

            <h3 class="card-title mt-4">Business Profile</h3>
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="form-label">Site Name</div>
                    <input type="text" class="form-control" value="">
                </div>
                <div class="col-md-6">
                    <div class="form-label">Phone</div>
                    <input type="text" class="form-control" value="">
                </div>
                <div class="col-md-6">
                    <div class="form-label">Location</div>
                    <input type="text" class="form-control" value="">
                </div>
                <div class="col-md-6">
                    <div class="form-label">Site Default Currency</div>
                    <select name="" id="" class="form-control select2">
                        <option value="">Select</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="form-label">Currency Icon</div>
                    <input type="text" class="form-control" value="">
                </div>
            </div>
        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">
                <a href="#" class="btn">
                    Cancel
                </a>
                <a href="#" class="btn btn-primary">
                    Submit
                </a>
            </div>
        </div>
    </div>
@endsection
