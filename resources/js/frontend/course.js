
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

        },
        complete: function() {}
    })

});