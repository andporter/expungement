$(function () {
    $('#initial-form').submit(function (e)
    {
        e.preventDefault();
        if ($(this).parsley().isValid())
        {
            console.log("Validation Passed!");
            $('#contactModal').modal('show');
        }
    });
});

$(document).ready(function () {
    $('#contactForm').parsley().subscribe('parsley:form:validate', function (formInstance) {

        // if one of these blocks is not failing do not prevent submission
        // we use here group validation with option force (validate even non required fields)
        if (formInstance.isValid('email', true) || formInstance.isValid('phone', true)) {
            $('.invalid-form-error-message').html('');
            return;
        }
        // else stop form submission
        formInstance.submitEvent.preventDefault();

        // and display a gentle message
        $('.invalid-form-error-message')
                .html("&#09;&#149;You must provide either your email address or phone number.")
                .addClass("filled");
        return;
    });
});