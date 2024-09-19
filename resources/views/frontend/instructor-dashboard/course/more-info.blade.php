@extends('frontend.instructor-dashboard.course.course-app')

@section('course_content')
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    <div class="add_course_basic_info">
        <form action="#">
            <div class="row">
                <div class="col-xl-6">
                    <div class="add_course_more_info_input">
                        <label for="#">Capacity</label>
                        <input type="text" placeholder="Capacity">
                        <p>leave blank for unlimited</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add_course_more_info_input">
                        <label for="#">Course Duration (Minutes)*</label>
                        <input type="text" placeholder="300">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add_course_more_info_checkbox">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Q&A</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">Completion Certificate</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                            <label class="form-check-label" for="flexCheckDefault3">Patner
                                instructor</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                            <label class="form-check-label" for="flexCheckDefault4">Others</label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="add_course_more_info_input">
                        <label for="#">Category *</label>
                        <select class="select_2">
                            <option value=""> Please Select </option>
                            @foreach($categories as $category)
                                @if($category->subCategories->isNotEmpty())
                                <optgroup label="{{ $category->name }}">
                                   @foreach($category->subCategories as $subCategory) 
                                        <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                   @endforeach
                                </optgroup>
                                @endif
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="add_course_more_info_radio_box">
                        <h3>Level</h3>
                        @foreach($levels as $level)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="id-{{ $level->id }}">
                            <label class="form-check-label" for="id-{{ $level->id }}">
                                {{ $level->name }}
                            </label>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="add_course_more_info_radio_box">
                        <h3>Language</h3>
                        @foreach($languages as $language)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="id-{{ $language->id }}">
                            <label class="form-check-label" for="id-{{ $language->id }}">
                                {{ $language->name }}
                            </label>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-xl-12">
                    <button type="submit" class="common_btn">Save</button>
                </div>
            </div>
        </form> 
    </div>
</div>
@endsection