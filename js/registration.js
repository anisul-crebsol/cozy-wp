$.noConflict();
jQuery(function ($) {

    $(".register_new_user").click(function () {
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
        $(".phpmsg").html();
        jQuery.ajax({
            type: "post",
            dataType: "json",
            url: cozy.ajaxurl,
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

                console.log(response.phpmsg);
                $(".phpmsg").html(response.phpmsg);
                if (response.success == 1)
                {
                    window.location = ajaxHomeUrl;
                }
            }
        })

    });
});