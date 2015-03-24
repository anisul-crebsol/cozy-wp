<?php
/**
 * cozy functions and definitions
 *
 * @package cozy
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'cozy_setup' ) ) :

function cozy_setup() {


    load_theme_textdomain( 'cozy', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'cozy' ),
        'secondery' => __( 'Footer Menu', 'cozy' ),
    ) );

    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );


    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'cozy_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
endif; // cozy_setup
add_action( 'after_setup_theme', 'cozy_setup' );


// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function cozy_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Home', 'cozy' ),
        'id'            => 'sidebar-home',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar Home Grid', 'cozy' ),
        'id'            => 'sidebar-home-grid',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer', 'cozy' ),
        'id'            => 'sidebar-footer',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'cozy_widgets_init' );

// Newsletter Widget
require 'includes/widgets/agencies.php';
require 'includes/widgets/find-agents.php'; 
require 'includes/widgets/newsletter.php'; 
require 'includes/widgets/testimonials.php';
require 'includes/widgets/info.php';
require 'includes/widgets/contact.php'; 
require 'includes/widgets/links.php'; 
require 'includes/widgets/listings.php';   


// register WT Cozy widget
function register_cozy_widget() {
    register_widget( 'WT_Widget_Agencies' );
    register_widget( 'WT_Widget_Agents' );
    register_widget( 'WT_Widget_Newsletter' );
    register_widget( 'WT_Widget_Testimonials' );
    register_widget( 'WT_Widget_Info' );
    register_widget( 'WT_Widget_Contact' );
    register_widget( 'WT_Widget_Links' );
    register_widget( 'WT_Widget_Listings' );
}
add_action( 'widgets_init', 'register_cozy_widget' );

if ( !class_exists( 'CozyFramework' ) ) {
    require_once( dirname( __FILE__ ) . '/framework/framework.php' );
}

if ( !isset( $redux_demo ) ) {
    require_once( dirname( __FILE__ ) . '/admin/admin_setting.php' );
}


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/extras.php';

require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/custom-post-types.php';

require_once get_template_directory() . '/inc/add-plugins.php';

require_once get_template_directory() . '/libs/cmb2.php';

require_once get_template_directory() . '/libs/google-map/cmb-field-map.php';


// Enqueue scripts and styles.

function cozy_scripts() {
    
    wp_enqueue_style( 'cozy-style', get_stylesheet_uri() );
    wp_enqueue_style( 'cozy-bootsrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'cozy-main-style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'cozy-google-font', 'http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic' );

    wp_enqueue_script( 'cozy-modernizr', get_template_directory_uri() . '/js/modernizr-2.8.1.min.js', array(), '', true );
    wp_enqueue_script( 'cozy-common', get_template_directory_uri() . '/js/common.js', array(), '', true );
    wp_enqueue_script( 'cozy-prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '', true );
    wp_enqueue_script( 'cozy-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );
    wp_enqueue_script( 'cozy-chosen-jquery', get_template_directory_uri() . '/js/chosen.jquery.min.js', array(), '', true );
    wp_enqueue_script( 'cozy-wow', 'http://maps.google.com/maps/api/js?sensor=false', array(), '', true );
    wp_enqueue_script( 'cozy-infobox', get_template_directory_uri() . '/js/infobox.min.js', array(), '', true );
    wp_enqueue_script( 'cozy-freewall', get_template_directory_uri() . '/js/freewall.js', array(), '', true );
    wp_enqueue_script( 'cozy-variables', get_template_directory_uri() . '/js/variables.js', array(), '', true );
    wp_enqueue_script( 'cozy-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '', true );
    wp_enqueue_script( 'cozy-google-map', get_template_directory_uri() . '/libs/google-map/admin-google.js', array(), '', true );
    //wp_enqueue_script( 'cozy-agencies', get_template_directory_uri() . '/js/agencies.js' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'cozy_scripts' );