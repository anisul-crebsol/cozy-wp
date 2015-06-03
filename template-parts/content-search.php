<?php
/**
 * The template used for displaying page content in search.php
 *
 * @package Cozy
 */
?>

<?php
if(isset($_GET['search_prop_type']) || $_GET['location'] || $_GET['post_type'] == 'property') {
    get_template_part('/template-parts/loop-search-property');
}
elseif(isset($_GET['agent_search']) || $_GET['post_type'] == 'agent') {
    get_template_part('/template-parts/loop-search-agent');
 }
else {
    get_template_part('/template-parts/loop-search');
}
?>