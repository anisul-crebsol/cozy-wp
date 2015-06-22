<?php
/**
 * The template used for displaying page content in search.php
 *
 * @package Cozy
 */
?>

<?php
if(isset($_GET['property_type']) || isset($_GET['location']) || isset($_GET['advancedSearch']) == 'advancedSearch' || isset($_GET['post_type']) == 'property') {
    get_template_part('/template-parts/loop-search-property');
}
elseif(isset($_GET['agent_search']) || isset($_GET['post_type']) == 'agent') {
    get_template_part('/template-parts/loop-search-agent');
 }
else {
    get_template_part('/template-parts/loop-search');
}
?>