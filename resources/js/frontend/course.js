
const base_url = $(`meta[name="base_url"]`).attr('content')
const basic_info_url = base_url + '/instructor/courses/create';
const update_url = base_url + '/instructor/courses/update';

/** Notyf init */
var notyf = new Notyf({
    duration: 5000,
    dismissible: true
});


//course tab navigation
$('.course-tab').on('click', function(e) {
    e.preventDefault();
   let step = $(this).data('step');
   $('.course-form').find('input[name=next_step]').val(step);
   $('.course-form').trigger('submit');
});



$('.basic_info_form').on('submit', function(e) {
    e.preventDefault();
    
    let formData = new FormData(this);
    $.ajax({
        method: "POST",
        url: basic_info_url,
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function() {

        },
        success: function(data) {
            if(data.status == 'success') {
               
                window.location.href = data.redirect
            }
        },
        error: function(xhr, status, error) {
            console.log(xhr);
            let errors = xhr.responseJSON.errors;
            $.each(errors, function(key, value) {
                notyf.error(value[0]);
            })

        },
        complete: function() {}
    })

});

$('.basic_info_update_form').on('submit', function(e) {
    e.preventDefault();
    
    let formData = new FormData(this);
    $.ajax({
        method: "POST",
        url: update_url,
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function() {

        },
        success: function(data) {
            if(data.status == 'success') {
                window.location.href = data.redirect
            }
        },
        error: function(xhr, status, error) {
            let errors = xhr.responseJSON.errors;
            $.each(errors, function(key, value) {
                notyf.error(value[0]);
            })
        },
        complete: function() {}
    })

});

$('.more_info_form').on('submit', function(e) {
    e.preventDefault();
    
    let formData = new FormData(this);
    $.ajax({
        method: "POST",
        url: update_url,
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function() {

        },
        success: function(data) {
            if(data.status == 'success') {
               
                window.location.href = data.redirect
            }
        },
        error: function(xhr, status, error) {
            let errors = xhr.responseJSON.errors;
            $.each(errors, function(key, value) {
                notyf.error(value[0]);
            })
        },
        complete: function() {}
    })

});


$(document).ready(function() {
    // show hide path input depending on source
    $('.storage').on('change', function() {
        let value = $(this).val();
        $('.source_input').val('');

        if(value == 'upload') {
            $('.upload_source').removeClass('d-none');
            $('.external_source').addClass('d-none');
        }else {
            $('.upload_source').addClass('d-none');
            $('.external_source').removeClass('d-none');
        }
    });
})

/** Course Contents */

$('.dynamic-modal-btn').on('click', function(e) {
    e.preventDefault();
    $('#dynamic-modal').modal("show");
});