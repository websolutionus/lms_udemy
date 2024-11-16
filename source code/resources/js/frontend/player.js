
/** Variables */
const csrf_token = $(`meta[name="csrf_token"]`).attr('content');
const base_url = $(`meta[name="base_url"]`).attr('content');

/** Notyf init */
var notyf = new Notyf({
    duration: 5000,
    dismissible: true
});


/** Reusable Functions */

function playerHtml(id, source_type, source, file_type) {
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

        if(file_type == 'doc') {
            renderDocPreview(source);
            return;
        } else if(file_type == 'file') {
            let player = `    <div class="file_type">
            <div class="file_type_inner">
                    <div><img src="${base_url}/default-files/folder.png" alt=""></div>
                    <h6 class="mt-2">Type: File</h6>
                    ${source_type == 'external_link' ? `<a href="${source}" target="_blank" class="common_btn mt-3">Download</a>` : `<a href="${base_url}/student/file-download/${id}" class="common_btn mt-3">Download</a>`}
                    
            </div>
        </div>`;
            return player;
        }

        let player = `<iframe src="${source}" width="640" height="264" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>`;

        return player;
    }

}

async function renderDocPreview(url) {
    const response = await fetch(url);

    if(!response.ok) {
        throw new Error(`Error: ${response.status}`);
    }

    const blob = await response.blob();

    docx.renderAsync(blob, document.getElementsByClassName("video_holder")[0])
        .then(x => console.log("docx: finished"));
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
        beforeSend: function() {
            $('.about_lecture').text('Loading...');
        },
        success: function(data) {
            
            $('.video_holder').html(playerHtml(data.id, data.storage, data.file_path, data.file_type));

            // load about lecture description
            $('.about_lecture').text(data.description);

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