
const base_url = $(`meta[name="base_url"]`).attr('content')
const basic_info_url = base_url + '/instructor/courses/create';
const update_url = base_url + '/instructor/courses/update';


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