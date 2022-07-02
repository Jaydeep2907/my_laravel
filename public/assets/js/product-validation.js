$(document).ready(function () {
    $("#product_form").validate({
        errorElement: 'span',
        rules: {
            name: {
                required: true,
                maxlength: 50
            },
            description: {
                required: true,
                maxlength: 100
            },
            price: {
                required: true,
                maxlength: 5
            }
        },
        messages: {
            name: {
                required: "Product name is required.",
                maxlength: "Product name cannot be more than 50 characters."
            },
            description: {
                required: "Description is required.",
                maxlength: "Description cannot be more than 100 characters."
            },
            price: {
                required: "Price is required.",
                maxlength: "Price cannot be more than 5 characters."
            }
        },
        errorPlacement: function (e, t) {
            "g-recaptcha-response" == t.attr("id") ? e.insertAfter(t.parent()) : e.insertAfter(t);
        },
        submitHandler: function (e) {
            $(":button").attr("disabled", "disabled"), grecaptcha.execute();
        },
    });
});