<?php
/**
 * The header for Cozy theme.
 *
 * Displays all of the <head> section and everything up till <body>
 *
 * @package Cozy
 */
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

    <title><?php wp_title(); ?></title>

     <!-- IE6-8 support of HTML5 elements -->   
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->

    <link rel="shortcut icon" type="image/x-icon" href="<?php
    if ($wt_cozy['cozy_favicon']) :
        echo $wt_cozy['cozy_favicon']['url'];
    else : echo get_stylesheet_directory_uri() . '/images/fav_touch_icons/favicon.ico';
    endif;
    ?>"/>

    <link rel="apple-touch-icon" href="<?php
    if ($wt_cozy['cozy_apple_tc_icon']) :
        echo $wt_cozy['cozy_apple_tc_icon']['url'];
    else : echo get_stylesheet_directory_uri() . '/images/fav_touch_icons/apple-touch-icon.png';
    endif;
    ?>"/>

    <link rel="apple-touch-icon" sizes="72x72" href="<?php
    if ($wt_cozy['cozy_apple_tc_icon_md']) :
        echo $wt_cozy['cozy_apple_tc_icon_md']['url'];
    else : echo get_stylesheet_directory_uri() . '/images/fav_touch_icons/apple-touch-icon-72x72.png';
    endif;
    ?>"/>

    <link rel="apple-touch-icon" sizes="114x114" href="<?php
    if ($wt_cozy['cozy_apple_tc_icon_lg']) :
        echo $wt_cozy['cozy_apple_tc_icon_lg']['url'];
    else : echo get_stylesheet_directory_uri() . '/images/fav_touch_icons/apple-touch-icon-114x114.png';
    endif;
    ?>"/>

    <script type="text/javascript">
        var templeteUrl = '<?php echo get_stylesheet_directory_uri(); ?>';
        var homeUrl = '<?php echo home_url(); ?>';
        var adminUrl = '<?php echo admin_url(); ?>';
        var $url = '<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>';
    </script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">