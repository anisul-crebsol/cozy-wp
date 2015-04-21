<?php

// Big Home Search

add_action('wp_enqueue_scripts', 'term_button_enqueue_scripts');
function term_button_enqueue_scripts()
{
    wp_register_script('ajaxHandle', get_stylesheet_directory_uri() . '/js/term-button.js', array(), true, true);
    wp_enqueue_script('ajaxHandle');
    wp_localize_script('ajaxHandle', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}

function custom_search_query($query)
{

    if (isset($_GET['post_type'])) {
        $type = $_GET['post_type'];

        if ($type == 'property') {

            $custom_fields = array(
                "_property_state",
                "_property_city",
                "_property_zip",
                "_property_address"
            );

            $searchterm = $query->query_vars['s'];

            $query->query_vars['s'] = "";
            if ($searchterm != "") {

                $propertyArgs = array(
                    'post_type' => $_GET['post_type'],
                    'posts_per_page' => -1,
                    'orderby' => 'post_date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'status',
                            'terms' => $_GET['term_slug'],
                            'field' => 'slug',
                        )
                    ),
                    'meta_query' => array(
                        'relation' => 'OR',
                    ),
                );

                foreach ($custom_fields as $cf) {
                    array_push($propertyArgs['meta_query'], array(
                        'key' => $cf,
                        'value' => $searchterm,
                        'compare' => 'LIKE'
                    ));
                }
                query_posts($propertyArgs);

            } else {
                if (isset($_POST['s']) && empty($_POST['s'])) {
                    $query_vars['s'] = " ";
                }
            }
        }
    }
}

// Working............................................................................
//if(isset($_REQUEST['post_type']) && $_REQUEST['post_type']=='property'&& $_REQUEST['submit_properties']=='Search')
//add_action('init','custom_search_query');
//...................................................................................

//add_filter("pre_get_posts", "custom_search_query");


// Find An Agent Search

function get_countries($key = '_wt_agent_country', $type = 'agent', $status = 'publish')
{
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

function get_states()
{
    global $wpdb;

    $country = @$_POST['country'];

    if (empty($country))
        return;

    $res = $wpdb->get_col($wpdb->prepare("
        select pm.meta_value FROM wp_postmeta pm
        where pm.meta_key = '_wt_agent_state'
        and pm.post_id IN
        ( select pm.post_id
        from wp_postmeta pm
        where pm.meta_value='%s'
        and pm.meta_key = '_wt_agent_country')
        ", $country));

    echo json_encode($res);

    die();
}

add_action('wp_ajax_get_states', 'get_states');
add_action('wp_ajax_nopriv_get_states', 'get_states');


function get_cities()
{
    global $wpdb;

    $state = @$_POST['state'];

    if (empty($state))
        return;

    $res = $wpdb->get_col($wpdb->prepare("
        select pm.meta_value FROM wp_postmeta pm
        where pm.meta_key = '_wt_agent_city'
        and pm.post_id IN
        ( select pm.post_id
        from wp_postmeta pm
        where pm.meta_value='%s'
        and pm.meta_key = '_wt_agent_state')
        ", $state));

    echo json_encode($res);

    die();
}

add_action('wp_ajax_get_cities', 'get_cities');
add_action('wp_ajax_nopriv_get_cities', 'get_cities');