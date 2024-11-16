@extends('admin.course.course-module.course-app')

@section('tab_content')
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    <div class="add_course_basic_info">
        <form action="" class="more_info_form course-form" >
            @csrf
            <input type="hidden" name="id" value="{{ request()?->id }}">
            <input type="hidden" name="current_step" value="2">
            <input type="hidden" name="next_step" value="3">

            <div class="row">
                <div class="col-xl-6">
                    <div class="add_course_more_info_input">
                        <label for="#">Capacity</label>
                        <input type="text" placeholder="Capacity" name="capacity" value="{{ $course?->capacity }}">
                        <p>leave blank for unlimited</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add_course_more_info_input">
                        <label for="#">Course Duration (Minutes)*</label>
                        <input type="text" placeholder="300" name="duration" value="{{ $course->duration }}">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add_course_more_info_checkbox">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="qna" @checked($course?->qna === 1) value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Q&A</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" @checked($course?->certificate === 1) name="certificate" value="1" id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">Completion Certificate</label>
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="add_course_more_info_input">
                        <label for="#">Category *</label>
                        <select class="select2" name="category">
                            <option value=""> Please Select </option>
                            @foreach($categories as $category)
                                @if($category->subCategories->isNotEmpty())
                                <optgroup label="{{ $category->name }}">
                                   @foreach($category->subCategories as $subCategory)
                                        <option @selected($course?->category_id == $subCategory->id) value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                   @endforeach
                                </optgroup>
                                @endif
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="add_course_more_info_radio_box card p-4">
                        <h3>Level</h3>
                        <div class="borderd"></div>
                        @foreach($levels as $level)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" @checked($level->id == $course->course_level_id) value="{{ $level->id }}" name="level" id="id-{{ $level->id }}">
                            <label class="form-check-label" for="id-{{ $level->id }}">
                                {{ $level->name }}
                            </label>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="add_course_more_info_radio_box card p-4">
                        <h3>Language</h3>
                        @foreach($languages as $language)
                        <div class="form-check">
                            <input class="form-check-input" @checked($language->id == $course->course_language_id) type="radio" name="language"
                                value="{{ $language->id }}"
                                id="id-{{ $language->id }}">
                            <label class="form-check-label" for="id-{{ $language->id }}">
                                {{ $language->name }}
                            </label>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-xl-12">
                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
