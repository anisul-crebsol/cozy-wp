<?php

// NEW usr registration ajax function


add_action("wp_ajax_new_user_registration", "new_user_registration_callback");
add_action("wp_ajax_nopriv_new_user_registration", "new_user_registration_callback");

function new_user_registration_callback() {
    global $wpdb; // this is how you get access to the database

    $success = 0;

    if ($_POST) {
        if ($_POST['terms'] == 'on') {
            if (!empty($_POST['Password']) && ($_POST['Password'] == $_POST['confirm_Password'])) {
				
				if ((!empty($_POST['username']))) {
                if ((!empty($_POST['email']))) {					
					if (!(username_exists($_POST['username']))) {
                    if (!(email_exists($_POST['email']))) {
                        if (is_email($_POST['email'])) {
                            $userdata = array(
                                'user_login' => sanitize_user($_POST['username']),
                                'user_email' => sanitize_email($_POST['email']),
                                'user_pass' => esc_attr($_POST['Password']),
                                'first_name' => sanitize_text_field($_POST['firstname']),
                                'last_name' => sanitize_text_field($_POST['lastname']),
                            );
                            $user_id = wp_insert_user($userdata);
                            add_user_meta($user_id, '_wt_user_address', sanitize_text_field($_POST['address']), true);
                            add_user_meta($user_id, '_wt_user_city', sanitize_text_field($_POST['city']), true);
                            add_user_meta($user_id, '_wt_user_country', sanitize_text_field($_POST['country']), true);
                            add_user_meta($user_id, '_wt_user_phone', sanitize_text_field($_POST['phone']), true);
                            add_user_meta($user_id, '_wt_postcode', sanitize_text_field($_POST['postcode']), true);
                            $registration_error = 'Thank you For registration. You will redirect soon...';
                            $success = 1;
                            $login = wp_login(sanitize_user($_POST['email']), esc_attr($_POST['Password']), 'Login Success');
                            wp_set_auth_cookie($user_id, false, is_ssl());
                        } else {
                            $registration_error = 'Invalid Email Address.';
                        }
                    } else {
                        $registration_error = 'email exist!';
                    }
					} else {
						$registration_error = 'email exist!';
					}
                } else {
                    $registration_error = 'email field required.';
                }
				} else {
					$registration_error = 'Username field required.';
				}
            } else {
                $registration_error = 'Password field required.';
            }
        } else {
            $registration_error = 'Accept the  Terms of Use.';
        }
    }

    $register_json_array = new StdClass();
    $register_json_array->phpmsg = $registration_error;
    $register_json_array->success = $success;

    //   $register_json_array = array("phpmsg" => $registration_error, "success" => $success);
// response output
    echo json_encode($register_json_array);

    wp_die(); // this is required to terminate immediately and return a proper response
}