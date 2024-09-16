import $ from 'jquery';
window.$ = window.jQuery = $;

const csrf_token = $(`meta[name=csrf_token]`).attr('content');
var delete_url = null;



$('.delete-item').on('click', function(e) {
    e.preventDefault();
    let url = $(this).attr('href');

    delete_url = url;

    $('#modal-danger').modal("show");
});

$('.delete-confirm').on('click', function(e) {
    e.preventDefault();

    $.ajax({
        method: 'DELETE',
        url: delete_url,
        data: {
            _token: csrf_token
        },
        beforeSend: function() {
            
        },
        success: function(data) {

        },
        error: function(xhr, status, error) {

        }
    })
});
