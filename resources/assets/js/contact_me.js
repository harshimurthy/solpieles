
/**
 * Contact me plugin
 * @type {Object}
 */
$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault();
            // console.log($form);
            // get values from FORM
            var _token = $("input[name='_token']").val();
            var subject = $("select#subject").val();
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            // var phone = '<?php echo 23 ?>';
            var message = $("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }

            function toggleButtons(){
                $("#contact_submit").toggle();
                $("#contact_loading").toggle();

            };

            toggleButtons();
            // return console.log(_token, subject, name, email, phone, message, firstName);
            var ajax = $.ajax({
                url: $("#contactForm").attr('action'),
                type: "POST",
                data: {
                    _token: _token,
                    subject: subject,
                    name: name,
                    phone: phone,
                    email: email,
                    message: message
                },
                cache: false,
                success: function(response) {
                    // console.log('Success', response);
                    //clear all fields
                    $('#contactForm').trigger("reset");
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');
                },
                error: function(response) {
                    // console.log('Errors', response)
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");

                    if (response && response.status == 422) {
                        $.each(response.responseJSON.message, function(index, val) {
                        $('#success > .alert-danger')
                            .append("<br><strong>Sorry " + firstName + ", " + val);

                        });
                    };
                }
            });

            var object = this;

            ajax.done(function(object){
                toggleButtons();
            });



        },
        filter: function() {
            return $(this).is(":visible");
        }
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
