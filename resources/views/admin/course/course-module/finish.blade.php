@extends('admin.course.course-module.course-app')

@section('tab_content')
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <div class="dashboard_add_course_finish">
            <form action="#" class="more_info_form">
                @csrf
                <input type="hidden" name="id" value="{{ @$course?->id }}">
                <input type="hidden" name="current_step" value="4">

                <div class="row">
                    <div class="col-xl-12 mt-4">
                        <div class="add_course_more_info_input">
                            <label for="#">Message for Reviewer</label>
                            <textarea rows="7" placeholder="Message for Reviewer" name="message">{!! @$course?->message_for_reviewer !!}</textarea>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="add_course_more_info_input mb-0">
                            <label for="#">Status *</label>
                            <select class="select_2" required name="status">
                                <option value=""> Please Select </option>
                                <option @selected(@$course?->status == 'active') value="active">Active</option>
                                <option @selected(@$course?->status == 'inactive') value="inactive">InActive</option>
                                <option @selected(@$course?->status == 'draft') value="draft">Draft</option>
                            </select>
                            <button type="submit" class="common_btn mt_25 btn btn-primary mt-3">save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
