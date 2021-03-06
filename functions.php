<?php
/**
 * Cozy functions and definitions
 *
 * @package Cozy
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
    $content_width = 640; /* pixels */
}

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

    // Crop featured images to many size
    add_image_size( 'properties-list', 760, 670, true );
    add_image_size( 'property-details', 764, 423, true );
    add_image_size( 'blog-listing', 766, 515, true );
    add_image_size( 'blog-listing-wide', 750, 256, true );
    add_image_size( 'blog-detail', 765, 362, true );
    add_image_size( 'agent', 307, 307, true );
    add_image_size( 'property-slider', 270, 238, true );
    add_image_size( 'property-gallery', 246, 217, true );
    add_image_size( 'sidebar-thumb', 100, 100, true );
    add_image_size( 'footer-thumb', 50, 50, true );
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
        'before_widget' => '<aside id="%1$s" class="clearfix">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="section-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar | Home Slider', 'cozy' ),
        'id'            => 'sidebar-home-slider',
        'description'   => 'Sidebar for Home Slider',
        'before_widget' => '<aside id="%1$s" class="clearfix">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="section-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar | Home Map ( Top )', 'cozy' ),
        'id'            => 'sidebar-home-map-top',
        'description'   => 'Top Sidebar for Home Map',
        'before_widget' => '<aside id="%1$s" class="clearfix">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="section-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar | Home Map ( Bottom )', 'cozy' ),
        'id'            => 'sidebar-home-map-bottom',
        'description'   => 'Bottom Sidebar for Home Map',
        'before_widget' => '<aside id="%1$s" class="clearfix">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="section-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar | Blog', 'cozy' ),
        'id'            => 'sidebar-blog',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="clearfix">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="section-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar | Property, Agent, Agency..', 'cozy' ),
        'id'            => 'sidebar-custom-post',
        'description'   => 'Sidebar for All custom post ( Property, Agent, Agency etc. )',
        'before_widget' => '<aside id="%1$s" class="clearfix">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="section-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer', 'cozy' ),
        'id'            => 'sidebar-footer',
        'description'   => 'Sidebar for footer',
        'before_widget' => '<aside id="%1$s" class="clearfix">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="section-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar(array(
       'name'           => __('More Information Tab (Hidden)', 'cozy'),
       'id'             => 'sidebar-more-information',
       'description'    => 'Please add some sidebar widget for tab and use shortcode anywhere in site. Normally this sidebar will be hidden.',
       'before_widget'  => '<aside id="%1$s" class="clearfix">',
       'after_widget'   => '</aside>',
       'before_title'   => '<h1 class="widget-title">',
       'after_title'    => '</h1>',
   ));
  
}
add_action( 'widgets_init', 'cozy_widgets_init' );

/**
 * Excerpt Length
 */
function wt_cozy_excerpt( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wt_cozy_excerpt', 999 );

function wt_cozy_excerpt_more( $more ) {
    return ' ';
}
add_filter('excerpt_more', 'wt_cozy_excerpt_more');

/**
 * Widgets
 */
require get_template_directory() . '/template-parts/widgets/about.php';
require get_template_directory() . '/template-parts/widgets/agents.php';
require get_template_directory() . '/template-parts/widgets/agencies.php';
require get_template_directory() . '/template-parts/widgets/find-agents.php'; 
require get_template_directory() . '/template-parts/widgets/newsletter.php'; 
require get_template_directory() . '/template-parts/widgets/testimonials.php';
require get_template_directory() . '/template-parts/widgets/info.php';
require get_template_directory() . '/template-parts/widgets/contact.php'; 
require get_template_directory() . '/template-parts/widgets/links.php'; 
require get_template_directory() . '/template-parts/widgets/listings.php'; 
require get_template_directory() . '/template-parts/widgets/more-information.php';
require get_template_directory() . '/template-parts/widgets/property-search.php';
require get_template_directory() . '/template-parts/widgets/contact-us.php';
require get_template_directory() . '/template-parts/widgets/latest-news.php';
require get_template_directory() . '/template-parts/widgets/categories.php';
require get_template_directory() . '/template-parts/widgets/archives.php';
require get_template_directory() . '/template-parts/widgets/tags.php';
require get_template_directory() . '/template-parts/widgets/text.php';
require get_template_directory() . '/template-parts/widgets/partners.php';

/**
 * Register WT Cozy widget
 */
function register_cozy_widget() {
    register_widget( 'WT_Cozy_Widget_About' );
    register_widget( 'WT_Cozy_Widget_Agencies' );
    register_widget( 'WT_Cozy_Widget_Agents' );    
    register_widget( 'WT_Cozy_Widget_Find_Agents' );
    register_widget( 'WT_Cozy_Widget_Newsletter' );
    register_widget( 'WT_Cozy_Widget_Testimonials' );
    register_widget( 'WT_Cozy_Widget_Info' );
    register_widget( 'WT_Cozy_Widget_Contact' );
    register_widget( 'WT_Cozy_Widget_Links' );
    register_widget( 'WT_Cozy_Widget_Listings' );
    register_widget( 'WT_Cozy_Widget_More_Information' );
    register_widget( 'WT_Cozy_Widget_Property_Search' );
    register_widget( 'WT_Cozy_Widget_Contact_Us' );
    unregister_widget('WP_Widget_Recent_Posts');
    register_widget( 'WT_Cozy_Widget_Latest_News' );
    unregister_widget('WP_Widget_Categories');
    register_widget( 'WT_Widget_Cozy_Categories' );
    unregister_widget('WP_Widget_Archives');
    register_widget( 'WT_Widget_Cozy_Archives' );
    unregister_widget('WP_Widget_Tag_Cloud');
    register_widget( 'WT_Widget_Cozy_Tags' );
    unregister_widget('WP_Widget_Text');
    register_widget( 'WT_Widget_Cozy_Text' );
    register_widget( 'WT_Cozy_Widget_Partners' );
}
add_action( 'widgets_init', 'register_cozy_widget' );


if ( !class_exists( 'CozyFramework' ) ) {
    require_once( dirname( __FILE__ ) . '/framework/framework.php' );
}

if ( !isset( $redux_demo ) ) {
    require_once( dirname( __FILE__ ) . '/admin/admin_setting.php' );
}

add_filter('widget_text', 'do_shortcode');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom Post Types
 */
require get_template_directory() . '/admin/custom-post-types.php';

/**
 * Custom Metabox
 */
require get_template_directory() . '/admin/custom-meta-boxes.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Plugin Activation
 */
require get_template_directory() . '/inc/add-plugins.php';

/**
 * Register Custom Navigation Walker
 */
require get_template_directory() . '/inc/navwalker.php';

/**
 * Breadcrumb
 */
require get_template_directory() . '/inc/breadcrumb.php';

/**
 * Enqueue Scripts
 */
require get_template_directory() . '/inc/enqueue-script.php';

/**
 * Advanced Search
 */
require get_template_directory() . '/inc/advanced-search.php';

/**
 * Pagination
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Shortcode Button
 */
require get_template_directory() . '/inc/shortcode-button.php';

/**
 * Pagination
 */
require get_template_directory() . '/inc/registration.php';

/**
 * Walker Comment
 */
require get_template_directory() . '/inc/class-walker-comment.php';

/**
 * Sorting
 */
require get_template_directory() . '/inc/sorting.php';

/**
 * Other Cozy Functions
 */
require get_template_directory() . '/inc/cozy-functions.php';

/**
 * Add Shortcode
 */
require get_template_directory() . '/inc/cozy-shortcodes.php';

/**
 * Install Shortcodes for Visual Composer
 */
require get_template_directory() . '/inc/vc-map.php';

/**
 * Map Field for Custom Meta Box
 */
require get_template_directory() . '/libs/google-map/cmb-field-map.php';