
/** Variables */
const csrf_token = $(`meta[name="csrf_token"]`).attr('content');
const base_url = $(`meta[name="base_url"]`).attr('content');

/** htmls */

var youtubeHtml = `

`

/** Reusable Functions */

function playerHtml(source_type, source) {
    if(source_type == 'youtube') {
        let player = `<video id="vid1" class="video-js vjs-default-skin" controls autoplay width="640" height="264"
                data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "${source}"}] }'>
            </video>`;
        
       return player;
    }

}


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
        },
        error: function(xhr, status, error) {}
    })

});