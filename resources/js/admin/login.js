import $ from 'jquery';

$('.toggle-password').on('click', function() {
    let field = $('.password');

    if(field.attr('type') == 'password') {
        field.attr('type', 'text');
    }else {
        field.attr('type', 'password');
    }
});

$('.toggle-confirm-password').on('click', function() {
    let field = $('.confirm-password');

    if(field.attr('type') == 'password') {
        field.attr('type', 'text');
    }else {
        field.attr('type', 'password');
    }
});