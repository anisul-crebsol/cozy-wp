<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Cozy
 */
// Get Redux option
global $wt_cozy;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <!-- Mobile Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

     <!-- IE6-8 support of HTML5 elements -->   
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/fav_touch_icons/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/fav_touch_icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/fav_touch_icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/fav_touch_icons/apple-touch-icon-114x114.png" />
    
    <?php wp_head(); ?>

<script type="text/javascript">
var templeteUrl = '<?php echo get_stylesheet_directory_uri(); ?>';
var homeUrl = '<?php echo home_url(); ?>';
var adminUrl = '<?php echo admin_url(); ?>';
var $url = '<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>';

</script>
<script type="text/javascript">
    jQuery(document).ready(function(){

    jQuery.ajaxSetup({cache:false});
    jQuery(".sort .sortBy").click(function(){
        var thisEl = jQuery(this);
        var sortById = thisEl.attr("data-sort");

        jQuery.ajax({
                type: "post",                
                url: ajax_object.ajaxurl,
                data: {
                    action: "sortByAscNDesc",
                    sortById: sortById                    
                },
                success: function (response) {
                    jQuery("#ajax-content").html("loading...");
                    jQuery("#ajax-content").html(response);

                    jQuery('.sortBy').removeClass("active");
                    thisEl.addClass('active');
                }
            })

        //jQuery("#ajax-content").html("loading...");
        //jQuery("#ajax-content").load("<?php '/ajaxpageloader' ?>/",{sortById:sortById});
        return false;
    });


        jQuery( "#sort_by" ).change(function() {
        var sortBy = jQuery(this).val();
            jQuery.ajax({
                type: "post",                
                url: ajax_object.ajaxurl,
                data: {
                    action: "sortByAscNDesc",
                    sortBy: sortBy                    
                },
                success: function (response) {
                    jQuery("#ajax-content").html("loading...");
                    jQuery("#ajax-content").html(response);
                }
            });        
        return false;
        });
});
</script>
    </head>