<?php
// Big Home Search
add_action('wp_enqueue_scripts', 'term_button_enqueue_scripts');

function term_button_enqueue_scripts() {
    wp_register_script('ajaxHandle', get_stylesheet_directory_uri() . '/js/term-button.js', array(), true, true);
    wp_enqueue_script('ajaxHandle');
    wp_localize_script('ajaxHandle', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}

/*
 * Advanced search
 */
function search_filter($query) {

    if (!is_admin() && $query->is_main_query()) {

        if ($query->is_search) {
            if (isset($_GET['advancedSearch']) && ($_GET['advancedSearch'] == 'advancedSearch')) {
                $location = $_GET['location'];
                $search_prop_type = $_GET['search_prop_type'];
                $search_status = $_GET['search_status'];
                $search_bedrooms = $_GET['search_bedrooms'];
                $search_bathrooms = $_GET['search_bathrooms'];
                $search_minprice = intval($_GET['search_minprice']);
                $search_maxprice = intval($_GET['search_maxprice']);
                $search_minarea = intval($_GET['search_minarea']);
                $search_maxarea = intval($_GET['search_maxarea']);

                $query->set('post_type', array('property'));

                if (!empty($location)) {
                    $metaquery [] = array(
                        'relation' => 'OR',
                        array(
                            'key' => '_wt_property_city',
                            'value' => $location,
                            'compare' => 'LIKE'
                        ),
                        array(
                            'key' => '_wt_property_state',
                            'value' => $location,
                            'compare' => 'LIKE'
                        )
                    );
                }

                if (!empty($search_bedrooms)) {
                    $metaquery [] = array(
                        array(
                            'key' => '_wt_property_bedrooms',
                            'value' => $search_bedrooms,
                            'compare' => 'LIKE'
                        ),
                        array(
                            'key' => '_wt_property_bathrooms',
                            'value' => $search_bathrooms,
                            'compare' => 'LIKE'
                        )
                    );
                }

                if (!empty($search_bathrooms)) {
                    $metaquery [] = array(
                        array(
                            'key' => '_wt_property_bathrooms',
                            'value' => $search_bathrooms,
                            'compare' => 'LIKE'
                        )
                    );
                }

                if (!empty($search_minprice)) {
                    $metaquery [] = array(
                        array(
                            'key' => '_wt_property_price',
                            'compare' => '>=',
                            'value' => $search_minprice,
                            'type' => 'numeric',
                        )
                    );
                }

                if (!empty($search_maxprice)) {
                    $metaquery [] = array(
                        array(
                            'key' => '_wt_property_price',
                            'value' => $search_maxprice,
                            'compare' => '<=',
                            'type' => 'numeric',
                        )
                    );
                }

                //  $search_maxarea $search_minarea
                if (!empty($search_maxarea)) {
                    $metaquery [] = array(
                        array(
                            'key' => '_wt_property_area',
                            'value' => $search_maxarea,
                            'compare' => '<=',
                            'type' => 'numeric',
                        )
                    );

                } if (!empty($search_minarea)) {
                    $metaquery [] = array(
                        array(
                            'key' => '_wt_property_area',
                            'value' => $search_minarea,
                            'compare' => '<=',
                            'type' => 'numeric',
                        )
                    );
                }
                $query->set('meta_query', $metaquery);

                if (!empty($_GET['search_status'])) {
                    $taxquery[] = array(
                        array(
                            'taxonomy' => 'property-status',
                            'field' => 'slug',
                            'terms' => array($_GET['search_status']),
                            'operator' => 'IN'
                        )
                    );
                }

                if (!empty($search_prop_type)) {
                    $taxquery [] = array(
                        array(
                            'taxonomy' => 'wt-property-types',
                            'field' => 'slug',
                            'terms' => array($search_prop_type),
                            'operator' => 'IN'
                        )
                    );
                }

                $query->set('tax_query', $taxquery);
            }

            if (isset($_GET['submit_property']) && ($_GET['submit_property'] == 'Search')) {
                $country_city_location = $_GET['location'];
                $query->set('post_type', array('property'));
                $metaquery = array(
                    'relation' => 'OR',
                    array(
                        'key' => '_wt_property_city', '_wt_property_state',
                        'value' => $country_city_location,
                        'compare' => 'LIKE'
                    ),
                    array(
                        'key' => '_wt_property_state',
                        'value' => $country_city_location,
                        'compare' => 'LIKE'
                    )
                );

                $query->set('meta_query', $metaquery);

                $taxquery = array(
                    array(
                        'taxonomy' => 'property-status',
                        'field' => 'slug',
                        'terms' => array($_GET['term_slug']),
                        'operator' => 'IN'
                    )
                );

                $query->set('tax_query', $taxquery);
            }
        }
    }
}

add_action('pre_get_posts', 'search_filter');


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