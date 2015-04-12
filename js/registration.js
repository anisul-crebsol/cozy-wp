$.noConflict();
jQuery(function ($) {
    $(".register_new_user").click(function () {
        $(".phpmsg").html("");
        $(".jserrmsg").html("");

        var validation_flag = 1;
        var jserrormsg = '';


        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var address = $('#address').val();
        var postcode = $('#postcode').val();
        var city = $('#city').val();
        var country = $('#country').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var confirm_email = $('#confirm_email').val();
        var Password = $('#Password').val();
        var confirm_Password = $('#confirm_Password').val();
        var terms = 'no';
        if ($('#terms').is(":checked"))
        {
            var terms = $('#terms').val();
        }
        // js validation start
        if (!validateEmail(email))
        {
            $(".phpmsg").append('<br/> Invalid Email Address.');
            validation_flag = 0;
        }
        if (email !== confirm_email)
        {
            $(".phpmsg").append('<br/> Email Address Missmatch.');
            validation_flag = 0;
        }
        if (Password !== confirm_email)
        {
            $(".phpmsg").append('<br/>Password Missmatch.');
            validation_flag = 0;
        }

        // js validation end



        if (validation_flag == 1)
        {
            jQuery.ajax({
                type: "post",
                dataType: "json",
                url: ajax_object.ajaxurl,
                data: {
                    action: "new_user_registration",
                    firstname: firstname,
                    lastname: lastname,
                    address: address,
                    postcode: postcode,
                    city: city,
                    country: country,
                    phone: phone,
                    email: email,
                    confirm_email: confirm_email,
                    Password: Password,
                    confirm_Password: confirm_Password,
                    terms: terms,
                },
                success: function (response) {

                    $(".phpmsg").html(response.phpmsg);
                    if (response.success == 1)
                    {
                        window.location = ajaxHomeUrl;
                    }
                }
            })
        }
        else {
//            alert(jserrormsg);

        }


    });
});

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}