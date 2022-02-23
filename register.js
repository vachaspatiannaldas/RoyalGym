$(function() {
    var $registrationform = $('#registration');
    $.validator.addMethod("nospace", function(value, element) {
        return value == "" || value.trim().length != 0
    }, "space not allowed");
    if ($registrationform.length) {
        $registrationform.validate({
            rules: {
                username: {
                    required: true,
                    nospace: true
                },
                email: {
                    required: true,
                    email: true
                },
                number: {
                    required: true,
                    number: true
                },
                password: {
                    required: true
                },
                confirm: {
                    required: true,
                    equalTo: "#password"
                },
                fname: {
                    required: true
                },
                lname: {
                    required: true
                },
                gender: {
                    required: true
                },
                sport: {

                    required: true
                },
                state: {
                    required: true
                },
                comment: {
                    required: true
                }

            },
            messages: {
                username: {
                    required: "username is required"
                },
                email: {
                    required: "email is required",
                    email: "plz enter the valid email address"
                },
                number: {
                    required: "number is required",
                    email: "plz enter 10 digit number"
                },
                password: {
                    required: "password required"
                },
                confirm: {
                    required: "password does not matched",
                    equalTo: "plz enter the same password"
                },
                fname: {
                    required: "fname is required"
                },
                lname: {
                    required: "lname is required"
                },
                sport: {
                    required: "plz select some option"
                },
                state: {
                    required: "plz choose state"
                },
                comment: {
                    required: "Address is required"
                },
            },
            errorPlacement: function(error, element) {
                if (element.is(":radio")) {
                    error.appendTo(element.parents(".gender"))
                } else if (element.is(":checkbox")) {
                    error.appendTo(element.parents(".hobbies"))
                } else {
                    error.insertAfter(element);
                }
            }
        });
    }
});