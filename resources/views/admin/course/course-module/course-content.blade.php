@extends('frontend.instructor-dashboard.course.course-app')

@section('course_content')
    <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
        <form action="" class="course-form more_info_form">
            @csrf
            <input type="hidden" name="id" value="{{ request()?->id }}">
            <input type="hidden" name="current_step" value="3">
            <input type="hidden" name="next_step" value="4">
        </form>
        <div class="add_course_content">
            <div class="add_course_content_btn_area d-flex flex-wrap justify-content-between">
                <a class="common_btn dynamic-modal-btn" href="#" data-id="{{ $courseId }}"> Add New Chapter</a>
                <a class="common_btn sort_chapter_btn" data-id="{{ $courseId }}" href="javascript:;">Short Chapter</a>
            </div>
            <div class="accordion" id="accordionExample">
                @foreach ($chapters as $chapter)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-{{ $chapter->id }}" aria-expanded="true"
                                aria-controls="collapse-{{ $chapter->id }}">
                                <span>{{ $chapter->title }}</span>
                            </button>
                            <div class="add_course_content_action_btn">
                                <div class="dropdown">
                                    <div class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="far fa-plus"></i>
                                    </div>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="add_lesson" data-chapter-id="{{ $chapter->id }}"
                                            data-course-id="{{ $chapter->course_id }}"><a class="dropdown-item"
                                                href="javascript:;">
                                                Add Lesson</a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="edit edit_chapter" data-course-id="{{ $chapter->course_id }}" data-chapter-id="{{ $chapter->id }}" href="#"><i class="far fa-edit"></i></a>
                                <a class="del delete-item" href="{{ route('instructor.course-content.destory-chapter', $chapter->id) }}"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </h2>
                        <div id="collapse-{{ $chapter->id }}" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="item_list sortable_list">
                                    @foreach($chapter->lessons ?? [] as $lesson)
                                    <li class="" data-lesson-id="{{ $lesson->id }}" data-chapter-id="{{ $chapter->id }}">
                                        <span>{{ $lesson->title }}</span>
                                        <div class="add_course_content_action_btn">
                                            <a class="edit_lesson" data-lesson-id="{{ $lesson->id }}" data-chapter-id="{{ $chapter->id }}"
                                                data-course-id="{{ $chapter->course_id }}" class="edit" href="javascript:;"><i class="far fa-edit"></i></a>
                                            <a class="del delete-item" href="{{ route('instructor.course-content.destroy-lesson', $lesson->id) }}"><i class="fas fa-trash-alt"></i></a>
                                            <a class="arrow dragger" href="javascript:;"><i class="fas fa-arrows-alt"></i></a>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
