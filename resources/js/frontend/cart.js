/** variables */
const base_url = $(`meta[name="base_url"]`).attr('content');
const csrf_token= $(`meta[name="csrf_token"]`).attr('content');

/** reusable functions */
function addToCart(courseId) {
    $.ajax({
        method: "POST",
        url: base_url + "/add-to-cart/" + courseId,
        data: {
            _token: csrf_token
        },
        beforeSend: function() {

        },
        success: function(data) {

        },
        error: function(xhr, status, error) {

        }

    });
}

/** On Dom Load */
$(function() {
   /** add course into cart */
   $('.add_to_cart').on('click', function (e) {
       e.preventDefault();
        let courseId = $(this).data('course-id');
       addToCart(courseId);
   })
});
