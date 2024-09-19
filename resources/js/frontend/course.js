
const base_url = $(`meta[name="base_url"]`).attr('content')
const basic_info_url = base_url + '/instructor/courses/create';

$('.basic_info_form').on('submit', function(e) {
    e.preventDefault();
    
    let formData = $(this).serialize();
    $.ajax({
        method: "POST",
        url: basic_info_url,
        data: formData,
        beforeSend: function() {

        },
        success: function(data) {

        },
        error: function(xhr, status, error) {

        },
        complete: function() {}
    })

});