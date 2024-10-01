/** const variables */
const csrf_token = $(`meta[name=csrf_token]`).attr('content');
const base_url = $(`meta[name="base_url"]`).attr(   'content');

/** reusable functions */

function updateApproveStatus(id, status) {
    console.log("working");

    $.ajax({
        method: 'PUT',
        url: base_url + `/admin/courses/${id}/update-approval`,
        data: {
            _token: csrf_token,
            status: status
        },
        success: function(data) {
            window.location.reload();
        },
        error: function(xhr, status, error) {

        }

    })}

/** on dom load */
$(function () {
    /** change course approval status */
    $('.update-approval-status').on('change', function() {
        let id = $(this).data('id');
        let status = $(this).val();

        updateApproveStatus(id, status);
    })
});
