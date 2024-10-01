/** const variables */


/** reusable functions */

function updateApproveStatus(id, status) {

}

/** on dom load */
$(function () {
    /** change course approval status */
    $('.update-approval-status').on('change', function() {
        console.log('working');
        let id = $(this).data('id');
        let status = $(this).val();

        updateApproveStatus(id, status);
    })
});
