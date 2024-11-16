@extends('admin.course.course-module.course-app')

@section('tab_content')`
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <div class="add_course_basic_info">
            <form action="{{ route('admin.courses.sore-basic-info') }}" method="post" class="basic_info_form course-form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="current_step" value="1">
                <input type="hidden" name="next_step" value="2">
                <div class="row">
                    <div class="col-xl-12">

                        <div class="add_course_basic_info_imput">
                            <label for="#">Instructor *</label>
                            <select class="select2" name="instructor">
                                <option value=""> Please Select </option>
                                @foreach($instructors as $instructor)
                                <option value="{{ $instructor->id }}"> {{ $instructor->name }} - {{ $instructor->email }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
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
                            <textarea rows="8" placeholder="Description" name="description" class="editor"></textarea>
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
