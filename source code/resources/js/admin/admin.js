import { data } from 'autoprefixer';
import $ from 'jquery';

window.$ = window.jQuery = $;
/** Notyf init */
var notyf = new Notyf({
    duration: 8000,
    dismissible: true
});

const csrf_token = $(`meta[name="csrf_token"]`).attr('content');
const base_url = $(`meta[name="base_url"]`).attr('content');

document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect && (new TomSelect(el = document.getElementById('select-users'), {
        copyClassesToDropdown: false,
        dropdownParent: 'body',
        controlInput: '<input>',
        render:{
            item: function(data,escape) {
                if( data.customProperties ){
                    return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                }
                return '<div>' + escape(data.text) + '</div>';
            },
            option: function(data,escape){
                if( data.customProperties ){
                    return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                }
                return '<div>' + escape(data.text) + '</div>';
            },
        },
    }));
});

document.addEventListener("DOMContentLoaded", function () {
    tinymce.init({
        selector: '.editor',
        height: 500,
        menubar: false,
        plugins: [
          'advlist', 'autolink', 'lists', 'link', 'charmap', 
          'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
          'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
      });
});

var delete_url = null;

$(function() {
    $('.select2').select2();
});

/** Delete Item with confirmation */

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
            $('.delete-confirm').text("Deleting...");
        },
        success: function(data) {
            window.location.reload();
        },
        error: function(xhr, status, error) {
            let errorMessage = xhr.responseJSON;
            notyf.error(errorMessage.message);
        },
        complete: function() {

            $('.delete-confirm').text("Delete");
        }
    })
});


/** Database Clear with confirmation */

$('.db-clear').on('click', function(e) {
    e.preventDefault();

    let url = $(this).attr('href');
    delete_url = url;

    $('#modal-database-clear').modal("show");
});

$('.db-clear-submit').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
        method: 'DELETE',
        url: base_url + '/admin/database-clear',
        data: {
            _token: csrf_token
        },
        beforeSend: function() {
            $('.db-clear-btn').text("Wiping...");
        },
        success: function(data) {
            window.location.reload();
        },
        error: function(xhr, status, error) {
            let errorMessage = xhr.responseJSON;
            notyf.error(errorMessage.message);
        },
        complete: function() {

            $('.db-clear-btn').text("Delete");
        }
    })
});


/** Certificate js */

$(function() {
    $('.draggable-element').draggable({
        containment: '.certificate-body',
        stop: function(event, ui) {
            var elementId = $(this).attr('id');
            var xPosition = ui.position.left;
            var yPosition = ui.position.top;

            $.ajax({
                method: 'POST',
                url: `${base_url}/admin/certificate-item`,
                data: {
                    '_token': csrf_token,
                    'element_id': elementId,
                    'x_position': xPosition,
                    'y_position': yPosition
                },
                success: function(data) {},
                error: function(xhr, status, error) {
                }

            })
        }
    });
})


/** Featured Instructor js */
$(function() {
    $('.select_instructor').on('change', function() {
        let id = $(this).val();

        $.ajax({
            method: 'get',
            url: `${base_url}/admin/get-instructor-courses/${id}`,
            beforeSend: function() {
                $('.instructor_courses').empty();
            },
            success: function(data) {
                $.each(data.courses, function(key, value) {
                    
                        let option = `<option value="${value.id}">${value.title}</option>`;
                    $('.instructor_courses').append(option);
                })
            },
            error: function(xhr, status, error) {
                notyf.error(data.error);
            }
        })
    });
});
