import './cart.js';

const csrf_token = $(`meta[name="csrf_token"]`).attr('content');
const base_url = $(`meta[name="base_url"]`).attr('content');

/** Notyf init */

var notyf = new Notyf({
    duration: 5000,
    dismissible: true
});

/** Ez share init */
document.addEventListener("DOMContentLoaded", function() {
    ezShare.execute();
});



$(function () {
    // dynamic delete popup
    $(".delete-item").on('click', function (e) {
        e.preventDefault();
        console.log(csrf_token);
        let url = $(this).attr('href');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    method: 'DELETE',
                    url: url,
                    data: {
                        _token: csrf_token
                    },
                    success: function (data) {
                        window.location.reload();
                    },
                    error: function (xhr, status, error) {
                        notyf.error(error);
                    }
                })
            }
        });

    });


    // subscribe to newsletter
    $(".newsletter").on('submit', function (e) {
        e.preventDefault();

        let fromData = $(this).serialize();
        $.ajax({
            method: "POST",
            url: `${base_url}/newsletter-subscribe`,
            data: fromData,
            beforeSend: function () {
                $('.newsletter-btn').text('Subscribing...');   
                // disable button
                $('.newsletter-btn').prop('disabled', true);

            },
            success: function (data) {
                notyf.success(data.message);
                $('.newsletter').trigger('reset');
                $('.newsletter-btn').text('Subscribe'); 
                $('.newsletter-btn').prop('disabled', false);
            },
            error: function (xhr, status, error) {
                notyf.error(xhr.responseJSON.message);
                $('.newsletter').trigger('reset');
                $('.newsletter-btn').text('Subscribe'); 
                $('.newsletter-btn').prop('disabled', false);
            }
        })
    })
});
