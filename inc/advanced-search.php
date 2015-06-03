<?php
// Big Home Search
add_action('wp_enqueue_scripts', 'term_button_enqueue_scripts');

function term_button_enqueue_scripts() {
    wp_register_script('ajaxHandle', get_stylesheet_directory_uri() . '/js/term-button.js', array(), true, true);
    wp_enqueue_script('ajaxHandle');
    wp_localize_script('ajaxHandle', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}

// Find An Agent Search
function get_countries($key = '_wt_agent_country', $type = 'agent', $status = 'publish') {

    global $wpdb;

    if (empty($key))
        return;

    $res = $wpdb->get_col($wpdb->prepare("
        SELECT DISTINCT pm.meta_value FROM {$wpdb->postmeta} pm
        LEFT JOIN {$wpdb->posts} p ON p.ID = pm.post_id
        WHERE pm.meta_key = '%s'
        AND p.post_status = '%s'
        AND p.post_type = '%s'
        ", $key, $status, $type));
    return $res;
}

function get_states() {

    global $wpdb;

    $country = @$_POST['country'];   

    if (empty($country))
        return;

    $res = $wpdb->get_col($wpdb->prepare("

        select pm.meta_value FROM {$wpdb->postmeta} pm
        where pm.meta_key = '_wt_agent_state'
        and pm.post_id IN
        ( select pm.post_id
        from {$wpdb->postmeta} pm
        where pm.meta_value='%s'
        and pm.meta_key = '_wt_agent_country')
        ", $country));

    echo json_encode($res);

    die();
}

add_action('wp_ajax_get_states', 'get_states');
add_action('wp_ajax_nopriv_get_states', 'get_states');

function get_cities() {

    global $wpdb;

    $state = @$_POST['state'];

    if (empty($state))
        return;

    $res = $wpdb->get_col($wpdb->prepare("

        select pm.meta_value FROM {$wpdb->postmeta} pm
        where pm.meta_key = '_wt_agent_city'
        and pm.post_id IN
        ( select pm.post_id
        from {$wpdb->postmeta} pm
        where pm.meta_value='%s'
        and pm.meta_key = '_wt_agent_state')
        ", $state));


    echo json_encode($res);

    die();
}

add_action('wp_ajax_get_cities', 'get_cities');

add_action('wp_ajax_nopriv_get_cities', 'get_cities');