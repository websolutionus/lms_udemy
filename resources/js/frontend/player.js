
/** Variables */
const csrf_token = $(`meta[name="csrf_token"]`).attr('content');
const base_url = $(`meta[name="base_url"]`).attr('content');


/** Reusable Functions */


/** On DOM Load */

$('.lesson').on('click', function() {

    let chapterId = $(this).data('chapter-id');
    let lessonId = $(this).data('lesson-id');
    let courseId = $(this).data('course-id');

    $.ajax({
        method: 'GET',
        url: `${base_url}/student/get-lesson-content`,
        data: {
            'chapter_id': chapterId,
            'lesson_id': lessonId,
            'course_id': courseId
        },
        beforeSend: function() {},
        success: function(data) {},
        error: function(xhr, status, error) {}
    })

});