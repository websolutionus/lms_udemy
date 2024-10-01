{{-- @extends('frontend.instructor-dashboard.course.course-app')

@section('course_content')
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    <div class="add_course_basic_info">
        <form action="{{ route('instructor.courses.sore-basic-info') }}" method="post" class="basic_info_form course-form" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="current_step" value="1">
            <input type="hidden" name="next_step" value="2">
            <div class="row">
                <div class="col-xl-12">
                    <div class="add_course_basic_info_imput">
                        <label for="#">Title *</label>
                        <input type="text" placeholder="Title" name="title">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="add_course_basic_info_imput">
                        <label for="#">Seo description</label>
                        <input type="text" placeholder="Seo description" name="seo_description">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="add_course_basic_info_imput">
                        <label for="#">Thumbnail *</label>
                        <input type="file" name="thumbnail">
                    </div>
                </div>
                <div class="col-xl-6">

                    <div class="add_course_basic_info_imput">
                        <label for="#">Demo Video Storage <b>(optional)</b></label>
                        <select class="storage" name="demo_video_storage">
                            <option value=""> Please Select </option>
                            <option value="upload"> Upload </option>
                            <option value="youtube"> Youtube </option>
                            <option value="vimeo"> Vimeo </option>
                            <option value="external_link"> External Link </option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add_course_basic_info_imput upload_source">
                        <label for="#">Path</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                              </a>
                            </span>
                            <input id="thumbnail" class="form-control source_input" type="text" name="file" >
                          </div>
                    </div>
                    <div class="add_course_basic_info_imput external_source d-none">
                        <label for="#">Path</label>
                        <input type="text" name="url" class="source_input">
                    </div>


                </div>
                <div class="col-xl-6">
                    <div class="add_course_basic_info_imput">
                        <label for="#">Price *</label>
                        <input type="text" placeholder="Price" name="price">
                        <p>Put 0 for free</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add_course_basic_info_imput">
                        <label for="#">Discount Price</label>
                        <input type="text" placeholder="Price" name="discount">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="add_course_basic_info_imput mb-0">
                        <label for="#">Description</label>
                        <textarea rows="8" placeholder="Description" name="description"></textarea>
                        <button type="submit" class="common_btn mt_20">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
     $('#lfm').filemanager('file');
</script>
@endpush --}}


@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course Create</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.courses.index') }}" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="dashboard_add_courses">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation ">
                                <a href="" class="nav-link course-tab {{ request('step') == 1 ? 'active' : '' }}" data-step="1">Basic Infos</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="" class="nav-link course-tab {{ request('step') == 2 ? 'active' : '' }}" data-step="2">More Info</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="" class="nav-link course-tab {{ request('step') == 3 ? 'active' : '' }}" data-step="3">Course Contents</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="" class="nav-link course-tab {{ request('step') == 4 ? 'active' : '' }}" data-step="4" >Finish</a>
                            </li>
                        </ul>
                        @yield('tab_content')
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="module">
     $('#lfm').filemanager('file');
</script>
@endpush

@push('header_scripts')
    @vite(['resources/js/admin/course.js'])
@endpush
