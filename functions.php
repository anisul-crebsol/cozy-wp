<?php
/**
 * cozy functions and definitions
 *
 * @package cozy
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

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'cozy' ),
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
		'name'          => __( 'Sidebar', 'cozy' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'cozy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cozy_scripts() {
	
    wp_enqueue_style( 'cozy-style', get_stylesheet_uri() );

    wp_enqueue_style('megafolio-settings', get_template_directory_uri() . "/css/settings.min.css");
	wp_enqueue_script( 'cozy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );
    wp_enqueue_script( 'cozy-modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array(), '', true );
    wp_enqueue_script( 'cozy-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'cozy-smooth', get_template_directory_uri() . '/js/smooth-scroll.js', array(), '', true );
    wp_enqueue_script( 'cozy-isotope', get_template_directory_uri() . '/js/isotope.min.js', array(), '', true );
    wp_enqueue_script( 'cozy-hoverdir', get_template_directory_uri() . '/js/jquery.hoverdir.js', array(), '', true );
    wp_enqueue_script( 'cozy-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '', true );
    wp_enqueue_script( 'cozy-nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', array(), '', true );
    wp_enqueue_script( 'cozy-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '', true );
    wp_enqueue_script( 'cozy-owl', get_template_directory_uri() . '/js/owl.carousel.js', array(), '', true );
    wp_enqueue_script( 'cozy-main', get_template_directory_uri() . '/js/main.js', array(), '', true );

	wp_enqueue_script( 'cozy-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cozy_scripts' );

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


if ( !class_exists( 'ReduxFramework' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxCore/framework.php' );
}

if ( !isset( $redux_demo ) ) {
    require_once( dirname( __FILE__ ) . '/admin/admin_setting.php' );
}

function wt_cozy_cmb()
{
    $prefix = "_wt_";
    $meta_boxes[] = array(
        'id' => 'feature',
        'title' => __('feature Details (Latest feature will be displayed on top)',"wt_cozy"),
        'pages' => array('feature'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
           
            array(
                'name' => __('Feature Icon ',"wt_cozy"),
                'id' => $prefix . 'exp_url',
                'type' => 'file'
            ),
           
           
            array(
                'name' => __('Description',"wt_cozy"),
                'id' => $prefix . 'exp_description',
                'type' => 'textarea'
            ),
        )
    );


    // Testimonial Meta Box

    $meta_boxes[] = array(
        'id' => 'testimonial',
        'title' => __('Testimonial Details (Latest testimonial will be displayed first)',"wt_cozy"),
        'pages' => array('testimonial'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => __('Testimonial image ',"wt_cozy"),
                'id' => $prefix . 'test_image',
                'type' => 'file'
            ),
            array(
                'name' => __('Name of the Person ',"wt_cozy"),
                'id' => $prefix . 'test_name',
                'type' => 'text_medium'
            ),
            array(
                'name' => __('Designation',"wt_cozy"),
                'id' => $prefix . 'test_designation',
                'type' => 'text_medium'
            ),
            array(
                'name' => __('Testimonial ',"wt_cozy"),
                'id' => $prefix . 'test_description',
                'type' => 'wysiwyg'
            ),
        )
    );

    // Team Meta box
    
        $meta_boxes[] = array(
        'id' => 'team',
        'title' => __('team Details (Latest team will be displayed on top)',"wt_cozy"),
        'pages' => array('team'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => __('Team member Image ',"wt_cozy"),
                'id' => $prefix . 'team_img',
                'type' => 'file'
            ),
            
            
            
            array(
                'name' => __('Description',"wt_cozy"),
                'id' => $prefix . 'team_description',
                'type' => 'wysiwyg',

            ),
            array(
                'name' => __('Facebook Link',"wt_cozy"),
                'id' => $prefix . 'team_facebook_link',
                'type' => 'text',

            ),
            array(
                'name' => __('Twitter Link',"wt_cozy"),
                'id' => $prefix . 'team_twitter_link',
                'type' => 'text',

            ),
            array(
                'name' => __('Linkedin Link',"wt_cozy"),
                'id' => $prefix . 'team_linkedin_link',
                'type' => 'text',

            ),
            array(
                'name' => __('Dribbble Link',"wt_cozy"),
                'id' => $prefix . 'team_dribbble_link',
                'type' => 'text',

            ),
        )
    );


    // Portfolio Meta Box

    $meta_boxes[] = array(
        'id' => 'postfolio',
        'title' => __('Portfolio Details (Latest Portfolio will be displayed on top)',"wt_cozy"),
        'pages' => array('portfolio'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => __('Live Preview Link',"wt_cozy"),
                'id' => $prefix . 'portfolio_link',
                'type' => 'text_medium'
            ),

            array(
                'name' => __('Portfolio Item Image',"wt_cozy"),
                'id' => $prefix . 'portfolio_img',
                'type' => 'file'
            ),

            array(
                'name' => __('Large Portfolio Image',"wt_cozy"),
                'id' => $prefix . 'large_portfolio_img',
                'type' => 'file'
            ),
        )
    );
    return $meta_boxes;
}

add_filter('cmb_meta_boxes', 'wt_cozy_cmb');



// Initialize the metabox class
add_action('init', 'wt_initialize_cmb_meta_boxes', 9999);
function wt_initialize_cmb_meta_boxes()
{
    if (!class_exists('cmb_Meta_Box')) {
        require_once('libs/cmb/init.php');
    }
}

function wt_cozy_fields()
{

    $labels1 = array(
        'name' => _x('features', 'Post Type General Name', 'wt_cozy'),
        'singular_name' => _x('feature', 'Post Type Singular Name', 'wt_cozy'),
        'menu_name' => __('Features', 'wt_cozy'),
        'parent_item_colon' => __('Parent feature:', 'wt_cozy'),
        'all_items' => __('All features', 'wt_cozy'),
        'view_item' => __('View feature', 'wt_cozy'),
        'add_new_item' => __('Add New feature', 'wt_cozy'),
        'add_new' => __('New feature', 'wt_cozy'),
        'edit_item' => __('Edit feature', 'wt_cozy'),
        'update_item' => __('Update feature', 'wt_cozy'),
        'search_items' => __('Search feature', 'wt_cozy'),
        'not_found' => __('No feature found', 'wt_cozy'),
        'not_found_in_trash' => __('No features found in Trash', 'wt_cozy'),
    );
    $args1 = array(
        'label' => __('feature', 'wt_cozy'),
        'description' => __('feature', 'wt_cozy'),
        'labels' => $labels1,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => get_template_directory_uri() . '/images/menu-icon/feature.png',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('feature', $args1);

    // Testimonial Section

    $labels4 = array(
    'name' => _x('Testimonials', 'Post Type General Name', 'wt_cozy'),
    'singular_name' => _x('Testimonial', 'Post Type Singular Name', 'wt_cozy'),
    'menu_name' => __('Testimonials', 'wt_cozy'),
    'parent_item_colon' => __('Parent Testimonial:', 'wt_cozy'),
    'all_items' => __('All Testimonials', 'wt_cozy'),
    'view_item' => __('View Testimonial', 'wt_cozy'),
    'add_new_item' => __('Add New Testimonial', 'wt_cozy'),
    'add_new' => __('New Testimonial', 'wt_cozy'),
    'edit_item' => __('Edit Testimonial', 'wt_cozy'),
    'update_item' => __('Update Testimonial', 'wt_cozy'),
    'search_items' => __('Search Testimonials', 'wt_cozy'),
    'not_found' => __('No testimonial found', 'wt_cozy'),
    'not_found_in_trash' => __('No testimonials found in Trash', 'wt_cozy'),
    );
    $args4 = array(
        'label' => __('Testimonial', 'wt_cozy'),
        'description' => __('Testimonial', 'wt_cozy'),
        'labels' => $labels4,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => get_template_directory_uri() . '/images/menu-icon/testimonial.png',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('testimonial', $args4);

    // Team section
    $labels1 = array(
        'name' => _x('team', 'Post Type General Name', 'wt_cozy'),
        'singular_name' => _x('team', 'Post Type Singular Name', 'wt_cozy'),
        'menu_name' => __('Team', 'wt_cozy'),
        'parent_item_colon' => __('Parent team:', 'wt_cozy'),
        'all_items' => __('All team', 'wt_cozy'),
        'view_item' => __('View team', 'wt_cozy'),
        'add_new_item' => __('Add New team', 'wt_cozy'),
        'add_new' => __('New team member', 'wt_cozy'),
        'edit_item' => __('Edit team', 'wt_cozy'),
        'update_item' => __('Update team', 'wt_cozy'),
        'search_items' => __('Search team', 'wt_cozy'),
        'not_found' => __('No team found', 'wt_cozy'),
        'not_found_in_trash' => __('No team found in Trash', 'wt_cozy'),
    );
    $args1 = array(
        'label' => __('team', 'wt_cozy'),
        'description' => __('team', 'wt_cozy'),
        'labels' => $labels1,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => get_template_directory_uri() . '/images/menu-icon/team.png',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('team', $args1);


    // Portfolio Custom Field

    $labels2 = array(
        'name' => _x('Porftolio', 'Post Type General Name', 'wt_cozy'),
        'singular_name' => _x('Portfolio', 'Post Type Singular Name', 'wt_cozy'),
        'menu_name' => __('Porftolio', 'wt_cozy'),
        'parent_item_colon' => __('Parent Portfolio:', 'wt_cozy'),
        'all_items' => __('All Porftolio', 'wt_cozy'),
        'view_item' => __('View Portfolio', 'wt_cozy'),
        'add_new_item' => __('Add New Portfolio', 'wt_cozy'),
        'add_new' => __('New Portfolio', 'wt_cozy'),
        'edit_item' => __('Edit Portfolio', 'wt_cozy'),
        'update_item' => __('Update Portfolio', 'wt_cozy'),
        'search_items' => __('Search Porftolio', 'wt_cozy'),
        'not_found' => __('No Portfolio found', 'wt_cozy'),
        'not_found_in_trash' => __('No Porftolio found in Trash', 'wt_cozy'),
    );
    $args2 = array(
        'label' => __('Portfolio', 'wt_cozy'),
        'description' => __('Portfolio', 'wt_cozy'),
        'labels' => $labels2,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => get_template_directory_uri() . '/images/menu-icon/portfolio.png',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('Portfolio', $args2);

}

add_action('init', 'wt_cozy_fields', 0);


add_action( 'init', 'register_taxonomy_filters' );

 function register_taxonomy_filters() {
  $labels = array(
   'name' => __( 'Filters', 'webdgallery' ),
   'singular_name' => __( 'Filter', 'webdgallery' ),
   'search_items' => __( 'Search Filters', 'webdgallery' ),
   'popular_items' => __( 'Popular Filters', 'webdgallery' ),
   'all_items' => __( 'All Filters', 'webdgallery' ),
   'parent_item' => __( 'Parent Filter', 'webdgallery' ),
   'parent_item_colon' => __( 'Parent Filter:', 'webdgallery' ),
   'edit_item' => __( 'Edit Filter', 'webdgallery' ),
   'update_item' => __( 'Update Filter', 'webdgallery' ),
   'add_new_item' => __( 'Add New Filter', 'webdgallery' ),
   'new_item_name' => __( 'New Filter', 'webdgallery' ),
   'separate_items_with_commas' => __( 'Separate Filters with commas', 'webdgallery' ),
   'add_or_remove_items' => __( 'Add or remove Filters', 'webdgallery' ),
   'choose_from_most_used' => __( 'Choose from the most used Filters', 'webdgallery' ),
   'menu_name' => __( 'Filters', 'webdgallery' ),
  );

  $args = array(
   'labels' => $labels,
   'public' => true,
   'show_in_nav_menus' => false,
   'show_ui' => true,
   'show_tagcloud' => false,
   'hierarchical' => true,

   'rewrite' => true,
   'query_var' => true
  );

  register_taxonomy( 'filters', array('portfolio'), $args );
}


add_filter( 'post_class', 'theme_t_wp_taxonomy_post_class', 10, 3 );
function theme_t_wp_taxonomy_post_class( $classes, $class, $ID ) {
    $taxonomy = 'filters';
    $terms = get_the_terms( (int) $ID, $taxonomy );
    if( !empty( $terms ) ) {
        foreach( (array) $terms as $order => $term ) {
            if( !in_array( $term->slug, $classes ) ) {
                $classes[] = $term->slug;
            }
        }
    }
    return $classes;
}

require_once get_template_directory() . '/example.php';