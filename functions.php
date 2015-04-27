<?php
/**
 * Cozy functions and definitions
 *
 * @package Cozy
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'cozy_setup' ) ) :

function cozy_setup() {


    load_theme_textdomain( 'cozy', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'cozy' ),
        'secondery' => __( 'Footer Menu', 'cozy' ),
    ) );

    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );


    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'cozy_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
endif; // cozy_setup
add_action( 'after_setup_theme', 'cozy_setup' );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function cozy_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar | Home Search', 'cozy' ),
        'id'            => 'sidebar-home-search',
        'description'   => 'Sidebar for Home Search',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar | Home Slider', 'cozy' ),
        'id'            => 'sidebar-home-slider',
        'description'   => 'Sidebar for Home Slider',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar | Home Map ( Top )', 'cozy' ),
        'id'            => 'sidebar-home-map-top',
        'description'   => 'Top Sidebar for Home Map',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar | Home Map ( Bottom )', 'cozy' ),
        'id'            => 'sidebar-home-map-bottom',
        'description'   => 'Bottom Sidebar for Home Map',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar | Blog', 'cozy' ),
        'id'            => 'sidebar-blog',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="section-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar | Property, Agent, Agency..', 'cozy' ),
        'id'            => 'sidebar-custom-post',
        'description'   => 'Sidebar for All custom post ( Property, Agent, Agency etc. )',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer', 'cozy' ),
        'id'            => 'sidebar-footer',
        'description'   => 'Sidebar for footer',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar(array(
       'name' => __('More Information Tab (Hidden)', 'cozy'),
       'id' => 'sidebar-more-information',
       'description' => 'Please add some sidebar widget for tab and use shortcode anywhere in site. Normally this sidebar will be hidden.',
       'before_widget' => '<aside id="%1$s" class="widget %2$s">',
       'after_widget' => '</aside>',
       'before_title' => '<h1 class="widget-title">',
       'after_title' => '</h1>',
   ));
  
}
add_action( 'widgets_init', 'cozy_widgets_init' );


// Excerpt Length

function wt_cozy_excerpt( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wt_cozy_excerpt', 999 );

function wt_cozy_excerpt_more( $more ) {
    return ' ';
}
add_filter('excerpt_more', 'wt_cozy_excerpt_more');


// Widgets
require get_template_directory() . '/includes/widgets/about.php';
require get_template_directory() . '/includes/widgets/agents.php';
require get_template_directory() . '/includes/widgets/agencies.php';
require get_template_directory() . '/includes/widgets/find-agents.php'; 
require get_template_directory() . '/includes/widgets/newsletter.php'; 
require get_template_directory() . '/includes/widgets/testimonials.php';
require get_template_directory() . '/includes/widgets/info.php';
require get_template_directory() . '/includes/widgets/contact.php'; 
require get_template_directory() . '/includes/widgets/links.php'; 
require get_template_directory() . '/includes/widgets/listings.php'; 
require get_template_directory() . '/includes/widgets/more-information.php';
require get_template_directory() . '/includes/widgets/property-search.php';
require get_template_directory() . '/includes/widgets/contact-us.php';
require get_template_directory() . '/includes/widgets/latest-news.php';
require get_template_directory() . '/includes/widgets/categories.php';
require get_template_directory() . '/includes/widgets/archives.php';
require get_template_directory() . '/includes/widgets/tags.php';

// Register WT Cozy widget
function register_cozy_widget() {
    register_widget( 'WT_Widget_About' );
    register_widget( 'WT_Widget_Agents' );    
    register_widget( 'WT_Widget_Agencies' );
    register_widget( 'WT_Widget_Find_Agents' );
    register_widget( 'WT_Widget_Newsletter' );
    register_widget( 'WT_Widget_Testimonials' );
    register_widget( 'WT_Widget_Info' );
    register_widget( 'WT_Widget_Contact' );
    register_widget( 'WT_Widget_Links' );
    register_widget( 'WT_Widget_Listings' );
    register_widget( 'WT_Widget_more_information' );
    register_widget( 'WT_Widget_Property_Search' );
    register_widget( 'WT_Widget_Contact_Us' );
    register_widget( 'WT_Widget_Latest_News' );
    register_widget( 'WT_Widget_Cozy_Categories' );
    register_widget( 'WT_Widget_Cozy_Archives' );
    register_widget( 'WT_Widget_Cozy_Tags' );

}
add_action( 'widgets_init', 'register_cozy_widget' );


if ( !class_exists( 'CozyFramework' ) ) {
    require_once( dirname( __FILE__ ) . '/framework/framework.php' );
}

if ( !isset( $redux_demo ) ) {
    require_once( dirname( __FILE__ ) . '/admin/admin_setting.php' );
}

add_filter('widget_text', 'do_shortcode');

// Implement the Custom Header feature.
//require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates.
require get_template_directory() . '/inc/extras.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.
require get_template_directory() . '/inc/jetpack.php';

// Custom Post Types
require get_template_directory() . '/inc/custom-post-types.php';

// Plugin Activation
require get_template_directory() . '/inc/add-plugins.php';

// Custom Metabox
require get_template_directory() . '/libs/custom-meta-boxes.php';

// Register Custom Navigation Walker
require get_template_directory() . '/libs/google-map/cmb-field-map.php';

// Register Custom Navigation Walker
require get_template_directory() . '/inc/navwalker.php';

// Breadcrumb
require get_template_directory() . '/inc/breadcrumb.php';

// Enqueue Scripts
require get_template_directory() . '/inc/enqueue-script.php';

// Advanced Search
require get_template_directory() . '/inc/advanced-search.php';

// Pagination
require get_template_directory() . '/inc/pagination.php';

// Shortcode Button
require get_template_directory() . '/inc/shortcode-button.php';

// add shortcode
require get_template_directory() . '/libs/wt-cozy-shortcode.php';

// Cozy Accordion
require get_template_directory() . '/libs/cozy-accordion/cozy_accordion.php';

// Pagination
require get_template_directory() . '/inc/registration.php';

// Cozy Tab
//require get_template_directory() . '/libs/cozy-tab/cozy_tabs.php';

// Shortcode Button
//require get_template_directory() . '/js/agencies.php';

