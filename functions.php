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
//require_once('inc/wp_bootstrap_navwalker.php');

    class wp_bootstrap_navwalker extends Walker_Nav_Menu
    {
        /* Start of the <ul>
         *
         * Note on $depth: Counterintuitively, $depth here means the "depth right before we start this menu".
         *                 So basically add one to what you'd expect it to be
         */
        function start_lvl(&$output, $depth)
        {
            $tabs = str_repeat("\t", $depth);
            // If we are about to start the first submenu, we need to give it a dropdown-menu class
            if ($depth == 0 || $depth == 1) { //really, level-1 or level-2, because $depth is misleading here (see note above)
                $output .= "\n{$tabs}<ul class=\"dropdown-menu\">\n";
            } else {
                $output .= "\n{$tabs}<ul>\n";
            }
            return;
        }
        /* End of the <ul>
         *
         * Note on $depth: Counterintuitively, $depth here means the "depth right before we start this menu".
         *                 So basically add one to what you'd expect it to be
         */
        function end_lvl(&$output, $depth)
        {
            if ($depth == 0) { // This is actually the end of the level-1 submenu ($depth is misleading here too!)
                // we don't have anything special for Bootstrap, so we'll just leave an HTML comment for now
                $output .= '<!--.dropdown-->';
            }
            $tabs = str_repeat("\t", $depth);
            $output .= "\n{$tabs}</ul>\n";
            return;
        }
        /* Output the <li> and the containing <a>
         * Note: $depth is "correct" at this level
         */
        function start_el(&$output, $item, $depth, $args)
        {
            global $wp_query;
            $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
            $class_names = $value = '';
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            /* If this item has a dropdown menu, add the 'dropdown' class for Bootstrap */
            if ($item->hasChildren) {
                $classes[] = 'dropdown';
                // level-1 menus also need the 'dropdown-submenu' class
                if($depth == 1) {
                    $classes[] = 'dropdown-submenu';
                }
            }
            /* This is the stock Wordpress code that builds the <li> with all of its attributes */
            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
            $class_names = ' class="' . esc_attr( $class_names ) . '"';
            $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )  ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'  . esc_attr( $item->xfn      ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
            $item_output = $args->before;
            /* If this item has a dropdown menu, make clicking on this link toggle it */
            if ($item->hasChildren && $depth == 0) {
                $item_output .= '<a'. $attributes .' class="dropdown-toggle" data-toggle="dropdown">';
            } else {
                $item_output .= '<a'. $attributes .'>';
            }
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            /* Output the actual caret for the user to click on to toggle the menu */
            if ($item->hasChildren && $depth == 0) {
                $item_output .= '<b class="caret"></b></a>';
            } else {
                $item_output .= '</a>';
            }
            $item_output .= $args->after;
            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            return;
        }
        /* Close the <li>
         * Note: the <a> is already closed
         * Note 2: $depth is "correct" at this level
         */
        function end_el (&$output, $item, $depth, $args)
        {
            $output .= '</li>';
            return;
        }
        /* Add a 'hasChildren' property to the item
         * Code from: http://wordpress.org/support/topic/how-do-i-know-if-a-menu-item-has-children-or-is-a-leaf#post-3139633
         */
        function display_element ($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
        {
            // check whether this item has children, and set $item->hasChildren accordingly
            $element->hasChildren = isset($children_elements[$element->ID]) && !empty($children_elements[$element->ID]);
            // continue with normal behavior
            return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
        }
    }



/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function cozy_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Newsletter Widget', 'cozy' ),
        'id'            => 'newsletter-widget',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'cozy_widgets_init' );


/**
 * Adds WtNewsletterWidget widget.
 */
class WtNewsletterWidget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'foo_widget', // Base ID
            __( 'Newsletter Widget', 'text_domain' ), // Name
            array( 'description' => __( 'A Foo Widget', 'text_domain' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }
        echo __( '', 'text_domain' );
        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php 
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        return $instance;
    }

} // class WtNewsletterWidget

// register WtNewsletterWidget widget
function register_foo_widget() {
    register_widget( 'WtNewsletterWidget' );
}
add_action( 'widgets_init', 'register_foo_widget' );



/**
 * Enqueue scripts and styles.
 */
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
    wp_enqueue_script( 'cozy-variables', get_template_directory_uri() . '/js/variables.js', array(), '', true );
    wp_enqueue_script( 'cozy-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '', true );
    //wp_enqueue_script( 'cozy-agencies', get_template_directory_uri() . '/js/agencies.js' );

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
                'name' => __('Feature Icon Text',"wt_cozy"),
                'id' => $prefix . 'exp_text',
                'type' => 'text'
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

    // Agent Meta box
    
        $meta_boxes[] = array(
        'id' => 'agent',
        'title' => __('agent Details (Latest agent will be displayed on top)',"wt_cozy"),
        'pages' => array('agent'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => __('Agent member Image ',"wt_cozy"),
                'id' => $prefix . 'agent_img',
                'type' => 'file'
            ),                        
            array(
                'name' => __('Description',"wt_cozy"),
                'id' => $prefix . 'agent_description',
                'type' => 'wysiwyg',
            ),
            array(
                'name' => __('Facebook Link',"wt_cozy"),
                'id' => $prefix . 'agent_facebook_link',
                'type' => 'text',
            ),
            array(
                'name' => __('Twitter Link',"wt_cozy"),
                'id' => $prefix . 'agent_twitter_link',
                'type' => 'text',
            ),
            array(
                'name' => __('Linkedin Link',"wt_cozy"),
                'id' => $prefix . 'agent_linkedin_link',
                'type' => 'text',
            ),
            array(
                'name' => __('Dribbble Link',"wt_cozy"),
                'id' => $prefix . 'agent_dribbble_link',
                'type' => 'text',
            ),
        )
    );


    // Agency Meta box
    
        $meta_boxes[] = array(
        'id' => 'agency',
        'title' => __('agency Details (Latest agency will be displayed on top)',"wt_cozy"),
        'pages' => array('agency'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(                      
            array(
                'name' => __('Agency Title',"wt_cozy"),
                'id' => $prefix . 'agency_title',
                'type' => 'text',
            ),
            array(
                'name' => __('Agency Latitude',"wt_cozy"),
                'id' => $prefix . 'agency_latitude',
                'type' => 'text',
            ),
            array(
                'name' => __('Agency Longtitude',"wt_cozy"),
                'id' => $prefix . 'agency_longtitude',
                'type' => 'text',
            ),
            array(
                'name' => __('Agency Image ',"wt_cozy"),
                'id' => $prefix . 'agency_img',
                'type' => 'file'
            ), 
            array(
                'name' => __('Description',"wt_cozy"),
                'id' => $prefix . 'agency_description',
                'type' => 'wysiwyg',
            ), 
            array(
                'name' => __('Agency Map Maker Icon ',"wt_cozy"),
                'id' => $prefix . 'agency_map_maker_icon',
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
        'name' => _x('Features', 'Post Type General Name', 'wt_cozy'),
        'singular_name' => _x('Feature', 'Post Type Singular Name', 'wt_cozy'),
        'menu_name' => __('Features', 'wt_cozy'),
        'parent_item_colon' => __('Parent Feature:', 'wt_cozy'),
        'all_items' => __('All Features', 'wt_cozy'),
        'view_item' => __('View Feature', 'wt_cozy'),
        'add_new_item' => __('Add New Feature', 'wt_cozy'),
        'add_new' => __('New Feature', 'wt_cozy'),
        'edit_item' => __('Edit Feature', 'wt_cozy'),
        'update_item' => __('Update Feature', 'wt_cozy'),
        'search_items' => __('Search Features', 'wt_cozy'),
        'not_found' => __('No Feature found', 'wt_cozy'),
        'not_found_in_trash' => __('No features found in Trash', 'wt_cozy'),
    );
    $args1 = array(
        'label' => __('Features', 'wt_cozy'),
        'description' => __('Features', 'wt_cozy'),
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
        'name' => _x('Agents', 'Post Type General Name', 'wt_cozy'),
        'singular_name' => _x('Agent', 'Post Type Singular Name', 'wt_cozy'),
        'menu_name' => __('Agents', 'wt_cozy'),
        'parent_item_colon' => __('Parent Agent:', 'wt_cozy'),
        'all_items' => __('All Agents', 'wt_cozy'),
        'view_item' => __('View Agent', 'wt_cozy'),
        'add_new_item' => __('Add New Agent', 'wt_cozy'),
        'add_new' => __('New Agent Member', 'wt_cozy'),
        'edit_item' => __('Edit Agent', 'wt_cozy'),
        'update_item' => __('Update Agent', 'wt_cozy'),
        'search_items' => __('Search Agents', 'wt_cozy'),
        'not_found' => __('No agent found', 'wt_cozy'),
        'not_found_in_trash' => __('No agent found in Trash', 'wt_cozy'),
    );
    $args1 = array(
        'label' => __('Agent', 'wt_cozy'),
        'description' => __('Agent', 'wt_cozy'),
        'labels' => $labels1,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => get_template_directory_uri() . '/images/menu-icon/agent.png',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('agent', $args1);

    // Agency section
    $labels1 = array(
        'name' => _x('Agencies', 'Post Type General Name', 'wt_cozy'),
        'singular_name' => _x('Agency', 'Post Type Singular Name', 'wt_cozy'),
        'menu_name' => __('Agencies', 'wt_cozy'),
        'parent_item_colon' => __('Parent agency:', 'wt_cozy'),
        'all_items' => __('All Agencies', 'wt_cozy'),
        'view_item' => __('View Agency', 'wt_cozy'),
        'add_new_item' => __('Add New Agency', 'wt_cozy'),
        'add_new' => __('New Agency', 'wt_cozy'),
        'edit_item' => __('Edit Agency', 'wt_cozy'),
        'update_item' => __('Update Agency', 'wt_cozy'),
        'search_items' => __('Search Agency', 'wt_cozy'),
        'not_found' => __('No Agency found', 'wt_cozy'),
        'not_found_in_trash' => __('No Agency found in Trash', 'wt_cozy'),
    );
    $args1 = array(
        'label' => __('Agency', 'wt_cozy'),
        'description' => __('Agency', 'wt_cozy'),
        'labels' => $labels1,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => get_template_directory_uri() . '/images/menu-icon/agency.png',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('agency', $args1);

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