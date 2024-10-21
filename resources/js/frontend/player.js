
/** Variables */
const csrf_token = $(`meta[name="csrf_token"]`).attr('content');
const base_url = $(`meta[name="base_url"]`).attr('content');

/** Notyf init */
var notyf = new Notyf({
    duration: 5000,
    dismissible: true
});


/** Reusable Functions */

function playerHtml(source_type, source) {
    if(source_type == 'youtube') {
        let player = `<video id="vid1" class="video-js vjs-default-skin" controls autoplay width="640" height="264"
                data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "${source}"}] }'>
            </video>`;
        
       return player;
    }else if(source_type == 'vimeo') {
        let player = `<video id="vid1" class="video-js" width="640" height="264"
                data-setup='{ "techOrder": ["vimeo"], "sources": [{ "type": "video/vimeo", "src": "${source}"}], "vimeo": { "color": "#fbc51b"} }'>
              </video> `;

        return player;
    }else if(source_type == 'upload' || source_type == 'external_link') {
        let player = `<iframe src="${source}" width="640" height="264" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>`;

    return player;
    }

}


function updateWatchHistory(courseId, chapterId, lessonId) {
    $.ajax({
        method: 'POST',
        url: `${base_url}/student/update-watch-history`,
        data: {
            '_token' : csrf_token,
            'chapter_id': chapterId,
            'lesson_id': lessonId,
            'course_id': courseId
        },
        beforeSend: function() {},
        success: function(data) {
           
        },
        error: function(xhr, status, error) {}
    })
}


/** On DOM Load */

$('.lesson').on('click', function() {

    $('.lesson').removeClass('active');
    $(this).addClass('active');

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
        success: function(data) {
            
            $('.video_holder').html(playerHtml(data.storage, data.file_path));

            // resetting any existing player
            if(videojs.getPlayers()["vid1"]) {
                videojs.getPlayers()["vid1"].dispose();
            }

            // initializing the player

            if($('#vid1').length > 0) {
                videojs("vid1").ready(function() {
                    this.play();
                });
            }

            // update watch history

            updateWatchHistory(courseId, chapterId, lessonId)
        },
        error: function(xhr, status, error) {}
    })

});



$('.make_completed').on('click', function() {

    let chapterId = $(this).data('chapter-id');
    let lessonId = $(this).data('lesson-id');
    let courseId = $(this).data('course-id');

    $.ajax({
        method: 'POST',
        url: `${base_url}/student/update-lesson-completion`,
        data: {
            '_token' : csrf_token,
            'chapter_id': chapterId,
            'lesson_id': lessonId,
            'course_id': courseId
        },
        beforeSend: function() {},
        success: function(data) {
            notyf.success(data.message);
        },
        error: function(xhr, status, error) {}
    })

});