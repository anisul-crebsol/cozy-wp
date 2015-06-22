<?php
// Big Home Search
add_action('wp_enqueue_scripts', 'term_button_enqueue_scripts');

function term_button_enqueue_scripts() {
    wp_register_script('ajaxHandle', get_stylesheet_directory_uri() . '/js/term-button.js', array(), true, true);
    wp_enqueue_script('ajaxHandle');
    wp_localize_script('ajaxHandle', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}

// Advanced Property Search
if(!function_exists('cozy_property_search')){
    function cozy_property_search($property_args){

        /* taxonomy query and meta query arrays */
        $tax_query = array();
        $meta_query = array();

        /* property type taxonomy query */
        if( (!empty($_GET['search_prop_type'])) && ( $_GET['search_prop_type'] != '') ){
            $tax_query[] = array(
                'taxonomy' => 'wt-property-types',
                'field' => 'slug',
                'terms' => $_GET['search_prop_type']
            );
        }

        /* property status taxonomy query */
        if((!empty($_GET['term_slug'])) && ( $_GET['term_slug'] != '' ) ){
            $tax_query[] = array(
                'taxonomy' => 'property-status',
                'field' => 'slug',
                'terms' => $_GET['term_slug']
            );
        }

        /* Property Bedrooms Parameter */
        if((!empty($_GET['search_bedrooms'])) && ( $_GET['search_bedrooms'] != '' ) ){
            $meta_query[] = array(
                'key' => '_wt_property_bedrooms',
                'value' => $_GET['search_bedrooms'],
                'compare' => '>=',
                'type'=> 'DECIMAL'
            );
        }

        /* Property Bathrooms Parameter */
        if((!empty($_GET['search_bathrooms'])) && ( $_GET['search_bathrooms'] != '' ) ){
            $meta_query[] = array(
                'key' => '_wt_property_bathrooms',
                'value' => $_GET['search_bathrooms'],
                'compare' => '>=',
                'type'=> 'DECIMAL'
            );
        }

        /* Logic for Min and Max Price Parameters */
        if( isset($_GET['search_minprice']) && ($_GET['search_minprice'] != '') && isset($_GET['search_maxprice']) && ($_GET['search_maxprice'] != '') ){
            $min_price = doubleval($_GET['search_minprice']);
            $max_price = doubleval($_GET['search_maxprice']);
            if( $min_price >= 0 && $max_price > $min_price ){
                $meta_query[] = array(
                    'key' => '_wt_property_price',
                    'value' => array( $min_price, $max_price ),
                    'type' => 'NUMERIC',
                    'compare' => 'BETWEEN'
                );
            }
        }elseif( isset($_GET['search_minprice']) && ($_GET['search_minprice'] != '') ){
            $min_price = doubleval($_GET['search_minprice']);
            if( $min_price > 0 ){
                $meta_query[] = array(
                    'key' => '_wt_property_price',
                    'value' => $min_price,
                    'type' => 'NUMERIC',
                    'compare' => '>='
                );
            }
        }elseif( isset($_GET['search_maxprice']) && ($_GET['search_maxprice'] != '') ){
            $max_price = doubleval($_GET['search_maxprice']);
            if( $max_price > 0 ){
                $meta_query[] = array(
                    'key' => '_wt_property_price',
                    'value' => $max_price,
                    'type' => 'NUMERIC',
                    'compare' => '<='
                );
            }
        }

        /* Logic for Min and Max Area Parameters */
        if( isset($_GET['search_minarea']) && !empty($_GET['search_minarea']) && isset($_GET['search_maxarea']) && !empty($_GET['search_maxarea']) ){
            $min_area = intval($_GET['search_minarea']);
            $max_area = intval($_GET['search_maxarea']);
            if( $min_area >= 0 && $max_area > $min_area ){
                $meta_query[] = array(
                    'key' => '_wt_property_area',
                    'value' => array( $min_area, $max_area ),
                    'type' => 'NUMERIC',
                    'compare' => 'BETWEEN'
                );
            }
        }elseif( isset($_GET['search_minarea']) && !empty($_GET['search_minarea']) ){
            $min_area = intval($_GET['search_minarea']);
            if( $min_area > 0 ){
                $meta_query[] = array(
                    'key' => '_wt_property_area',
                    'value' => $min_area,
                    'type' => 'NUMERIC',
                    'compare' => '>='
                );
            }
        }elseif( isset($_GET['search_maxarea']) && !empty($_GET['search_maxarea']) ){
            $max_area = intval($_GET['search_maxarea']);
            if( $max_area > 0 ){
                $meta_query[] = array(
                    'key' => '_wt_property_area',
                    'value' => $max_area,
                    'type' => 'NUMERIC',
                    'compare' => '<='
                );
            }
        }

        /* if more than one taxonomies exist then specify the relation */
        $tax_count = count( $tax_query );
        if( $tax_count > 1 ){
            $tax_query['relation'] = 'AND';
        }

        /* if more than one meta query elements exist then specify the relation */
        $meta_count = count( $meta_query );
        if( $meta_count > 1 ){
            $meta_query['relation'] = 'AND';
        }

        if( $tax_count > 0 ){
            $property_args['tax_query'] = $tax_query;
        }

        /* if meta query has some values then add it to base search page query */
        if( $meta_count > 0 ){
            $property_args['meta_query'] = $meta_query;
        }

        return $property_args;
    }
}

add_filter('cozy_property_search_parameters','cozy_property_search');


// Find An Agent Search

if(!function_exists('cozy_agent_search')){
    function cozy_agent_search($agent_search_args){

        /* meta query arrays */
        $meta_query = array();

        /* Agent city taxonomy query */
        if((!empty($_GET['agents_city'])) && ( $_GET['agents_city'] != '' ) ){
            $meta_query[] = array(
                'key' => '_wt_agent_city',
                'value' => $_GET['agents_city'],
                'compare' => '=',
            );
        }

        /* Agent state taxonomy query */
        if((!empty($_GET['agents_state'])) && ( $_GET['agents_state'] != '' ) ){
            $meta_query[] = array(
                'key' => '_wt_agent_state',
                'value' => $_GET['agents_state'],
                'compare' => '=',
            );
        }

        /* Agent country taxonomy query */
        if((!empty($_GET['agents_country'])) && ( $_GET['agents_country'] != '' ) ){
            $meta_query[] = array(
                'key' => '_wt_agent_country',
                'value' => $_GET['agents_country'],
                'compare' => '=',
            );
        }

        /* if more than one meta query elements exist then specify the relation */
        $meta_count = count( $meta_query );
        if( $meta_count > 1 ){
            $meta_query['relation'] = 'AND';
        }

        /* if meta query has some values then add it to base search page query */
        if( $meta_count > 0 ){
            $agent_search_args['meta_query'] = $meta_query;
        }

        return $agent_search_args;
    }
}

add_filter('cozy_agent_search_parameters','cozy_agent_search');


// Our Agent Widget Functions
function get_countries($key = '_wt_agent_country', $type = 'agent', $status = 'publish') {

    global $wpdb;

    if (empty($key))
        return;

    $res = $wpdb->get_col($wpdb->prepare("
        select distinct pm.meta_value FROM {$wpdb->postmeta} pm
        left join {$wpdb->posts} p ON p.ID = pm.post_id
        where pm.meta_key = '%s'
        and p.post_status = '%s'
        and p.post_type = '%s'
        ", $key, $status, $type));

    return $res;
}

function get_states() {

    global $wpdb;

    $country = esc_attr($_POST['country']);   

    if (empty($country))
        return;

    $res = $wpdb->get_col($wpdb->prepare("

        select distinct pm.meta_value FROM {$wpdb->postmeta} pm
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

    $state = esc_attr($_POST['state']);

    if (empty($state))
        return;

    $res = $wpdb->get_col($wpdb->prepare("

        select distinct pm.meta_value FROM {$wpdb->postmeta} pm
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