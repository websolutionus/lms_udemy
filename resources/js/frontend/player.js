
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
        
        $('.video_holder').html(player);
    }

                    // Resetting any existing player instance
                    if (videojs.getPlayers()["vid1"]) {
                        videojs.getPlayers()["vid1"].dispose();
                    }
    
                    $(".video-payer").html(playerHtml);
    
                    // Initializing the player
                    if (document.getElementById("vid1")) {
                        videojs("vid1").ready(function () {
                            this.play();
                        });
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
            playerHtml(data.storage, data.file_path);
        },
        error: function(xhr, status, error) {}
    })

});