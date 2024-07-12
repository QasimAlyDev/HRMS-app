$(document).ready(function () {
    // Clear validation errors on input focus
    $('.form-control').on('input', function () {
        var input = $(this);
        if (input.val()) {
            input.removeClass('is-invalid');
            input.siblings('.invalid-feedback').remove();
        }
    });
});