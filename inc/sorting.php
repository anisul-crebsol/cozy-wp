<?php
function addURLParameter($url, $paramName, $paramValue) {
     $url_data = parse_url($url);
     if(!isset($url_data["query"]))
         $url_data["query"]="";

     $params = array();
     parse_str($url_data['query'], $params);
     $params[$paramName] = $paramValue;
     $url_data['query'] = http_build_query($params);
     return build_url($url_data);
}

function build_url($url_data) {
 $url="";
 if(isset($url_data['host']))
 {
     $url .= $url_data['scheme'] . '://';
     if (isset($url_data['user'])) {
         $url .= $url_data['user'];
             if (isset($url_data['pass'])) {
                 $url .= ':' . $url_data['pass'];
             }
         $url .= '@';
     }
     $url .= $url_data['host'];
     if (isset($url_data['port'])) {
         $url .= ':' . $url_data['port'];
     }
 }
 $url .= $url_data['path'];
 if (isset($url_data['query'])) {
     $url .= '?' . $url_data['query'];
 }
 if (isset($url_data['fragment'])) {
     $url .= '#' . $url_data['fragment'];
 }
 return $url;
}

function get_agency_states() {

    $selectVal = @$_POST['selectVal'];

    if (empty($selectVal))
        return;

    $agency_args = array(
        'post_type' => 'agency',
        'posts_per_page' => -1
    );

    query_posts($agency_args);
    if (have_posts()) : while (have_posts()) : the_post();
        if($selectVal == 'state'):
            $res[] = get_post_meta( get_the_id(), '_wt_agency_state', true);
        endif;
        if($selectVal == 'city'):
            $res[] = get_post_meta( get_the_id(), '_wt_agency_city', true);
        endif;
    endwhile; endif;
    echo json_encode($res);
    die();
    wp_reset_query();
}
add_action('wp_ajax_get_agency_states', 'get_agency_states');
add_action('wp_ajax_nopriv_get_agency_states', 'get_agency_states');

function get_agency_city_state() {

    $selectVal = @$_GET['sorted_by'];

    if (empty($selectVal)){
        $selectVal = 'state';
    }

    $agency_args = array(
        'post_type' => 'agency',
        'posts_per_page' => -1
    );

    query_posts($agency_args);
    if (have_posts()) : while (have_posts()) : the_post();
        if($selectVal == 'state'):
            $res[] = get_post_meta( get_the_id(), '_wt_agency_state', true);
        endif;
        if($selectVal == 'city'):
            $res[] = get_post_meta( get_the_id(), '_wt_agency_city', true);
        endif;
    endwhile; endif;
    wp_reset_query();
    return $res;
}


function get_agent_states() {

    $selectVal = @$_POST['selectVal'];

    if (empty($selectVal))
        return;

    $agency_args = array(
        'post_type' => 'agent',
        'posts_per_page' => -1
    );

    query_posts($agency_args);
    if (have_posts()) : while (have_posts()) : the_post();
        if($selectVal == 'state'):
            $res[] = get_post_meta( get_the_id(), '_wt_agent_state', true);
        endif;
        if($selectVal == 'city'):
            $res[] = get_post_meta( get_the_id(), '_wt_agent_city', true);
        endif;
    endwhile; endif;
    echo json_encode($res);
    die();
}
add_action('wp_ajax_get_agent_states', 'get_agent_states');
add_action('wp_ajax_nopriv_get_agent_states', 'get_agent_states');


function get_agent_city_state() {

    $selectVal = @$_GET['sorted_by'];

    if (empty($selectVal)){
        $selectVal = 'state';
    }

    $agent_args = array(
        'post_type' => 'agent',
        'posts_per_page' => -1
    );

    query_posts($agent_args);
    if (have_posts()) : while (have_posts()) : the_post();
        if($selectVal == 'state'):
            $res[] = get_post_meta( get_the_id(), '_wt_agent_state', true);
        endif;
        if($selectVal == 'city'):
            $res[] = get_post_meta( get_the_id(), '_wt_agent_city', true);
        endif;
    endwhile; endif;
    wp_reset_query();
    return $res;

}