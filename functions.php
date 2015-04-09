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


// Register Breadcrumb

function wt_cozy_breadcrumb() {
 
  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '&#47;'; // delimiter between crumbs
  $home = 'Home'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = ''; // tag before the current crumb
  $after = ''; // tag after the current crumb
 
  global $post;
  $homeLink = get_bloginfo('url');
 
  if (is_home() || is_front_page()) {
 
    if ($showOnHome == 1) echo '<p id="breadcrumb"><a href="' . $homeLink . '">' . $home . '</a></div>';
 
  } else {
 
    echo '<p id="breadcrumb"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
 
    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        echo $cats;
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
 
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</p>';
 
  }
} // end wt_cozy_breadcrumb


// Excerpt Length

function wt_cozy_excerpt( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wt_cozy_excerpt', 999 );

function wt_cozy_excerpt_more( $more ) {
    return ' ';
}
add_filter('excerpt_more', 'wt_cozy_excerpt_more');


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

    wp_enqueue_style( 'cozy-revolution-style', get_template_directory_uri() . '/rs-plugin/css/settings.css' );

    wp_enqueue_style( 'cozy-main-style', get_template_directory_uri() . '/css/style.css' );

    wp_enqueue_style( 'cozy-google-font', 'http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic' );

    wp_enqueue_script( 'cozy-modernizr', get_template_directory_uri() . '/js/modernizr-2.8.1.min.js', array(), '', true );

    wp_enqueue_script( 'cozy-common', get_template_directory_uri() . '/js/common.js', array(), '', true );


    if ( is_page_template('page-search.php') || is_page_template('page-map.php')) {
    wp_enqueue_script( 'cozy-prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '', true );
    }

    wp_enqueue_script( 'cozy-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );

    wp_enqueue_script( 'cozy-chosen-jquery', get_template_directory_uri() . '/js/chosen.jquery.min.js', array(), '', true );

    wp_enqueue_script( 'cozy-wow', 'http://maps.google.com/maps/api/js?sensor=false', array(), '', true );


    if ( is_page_template('page-grid.php') || is_page_template('page-slider.php') || is_page_template('page-search.php')) {
    wp_enqueue_script( 'cozy-infobox', get_template_directory_uri() . '/js/infobox.min.js', array(), '', true );
    }

    wp_enqueue_script( 'cozy-variables', get_template_directory_uri() . '/js/variables.js', array(), '', true );

    wp_enqueue_script( 'cozy-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '', true );

    wp_enqueue_script( 'cozy-properties', get_template_directory_uri() . '/js/properties.js', array(), '', true );

    if ( is_page_template('page-search.php') || is_page_template('page-slider.php') || is_page_template('page-search.php')) {
    wp_enqueue_script( 'cozy-agencies', get_template_directory_uri() . '/js/agencies.js', array(), '', true );
    }

    //wp_enqueue_script( 'cozy-google-map', get_template_directory_uri() . '/libs/google-map/admin-google.js', array(), '', true );
    //wp_enqueue_script( 'cozy-term-button', get_template_directory_uri() . '/js/term-button.js', array(), '', true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }


    if ( is_page_template('page-grid.php')) {
    wp_enqueue_script( 'cozy-freewall', get_template_directory_uri() . '/js/freewall.js', array(), '', true );
    }


    if ( is_page_template('page-slider.php')) {
    wp_enqueue_script( 'cozy-themepunch-tools', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.tools.min.js', array(), '', true);
    wp_enqueue_script( 'cozy-revolution', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '', true);
    }


    if ( is_page_template('page-map.php')) {
    wp_enqueue_script( 'cozy-markerclusterer', get_template_directory_uri() . '/js/markerclusterer.min.js', array(), '', true );

    wp_enqueue_script( 'cozy-countup', get_template_directory_uri() . '/js/countUp.min.js', array(), '', true );

    wp_enqueue_script( 'cozy-tweet', get_template_directory_uri() . '/twitter/jquery.tweet.min.js', array(), '', true );
    }
    
    if ('property' == get_post_type()) {
    wp_enqueue_script( 'cozy-markerclusterer', get_template_directory_uri() . '/js/markerclusterer.min.js', array(), '', true );
    }

    if (is_page_template('register.php')) {
        wp_enqueue_script('cozy-registration', get_template_directory_uri() . '/js/registration.js', array(), '', true);
        wp_enqueue_script('cozy-bootstrap-checkbox', get_template_directory_uri() . '/js/bootstrap-checkbox.js', array(), '', true);
        wp_enqueue_script('cozy-agencies', get_template_directory_uri() . '/js/agencies.js', array(), '', true);
    }

}
add_action( 'wp_enqueue_scripts', 'cozy_scripts' );

function cozy_localize_scripts() {
   wp_enqueue_script('function', plugins_url('function.js', __FILE__), array('jquery', 'json2'));
   wp_localize_script('function', 'cozy', array('ajaxurl' => admin_url('admin-ajax.php')));
}

add_action('wp_ajax_nopriv_pfxconversion', 'pfxconversion');
add_action('wp_enqueue_scripts', 'cozy_localize_scripts');

add_action('admin_enqueue_scripts', 'wt_cozy_add_admin_scripts_page');
    if(!function_exists('wt_cozy_add_admin_scripts_page'))
    {
        function wt_cozy_add_admin_scripts_page()
        {
            wp_enqueue_script( 'metabox-sc', get_template_directory_uri().'/js/change-metabox.js' , array( 'jquery' ) );
        }
    }


// Big Home Search

add_action('wp_enqueue_scripts', 'term_button_enqueue_scripts');
function term_button_enqueue_scripts()
{
    wp_register_script('ajaxHandle', get_stylesheet_directory_uri() . '/js/term-button.js', array(), true, true);
    wp_enqueue_script('ajaxHandle');
    wp_localize_script('ajaxHandle', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}

function custom_search_query($query)
{

    if (isset($_GET['post_type'])) {
        $type = $_GET['post_type'];

        if ($type == 'listing') {

            $custom_fields = array(
                "_listing_state",
                "_listing_city",
                "_listing_zip",
                "_listing_address"
            );

            $searchterm = $query->query_vars['s'];

            $query->query_vars['s'] = "";
            if ($searchterm != "") {

                $listingArgs = array(
                    'post_type' => $_GET['post_type'],
                    'posts_per_page' => -1,
                    'orderby' => 'post_date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'status',
                            'terms' => $_GET['term_slug'],
                            'field' => 'slug',
                        )
                    ),
                    'meta_query' => array(
                        'relation' => 'OR',
                    ),
                );

                foreach ($custom_fields as $cf) {
                    array_push($listingArgs['meta_query'], array(
                        'key' => $cf,
                        'value' => $searchterm,
                        'compare' => 'LIKE'
                    ));
                }
                query_posts($listingArgs);

            } else {
                if (isset($_POST['s']) && empty($_POST['s'])) {
                    $query_vars['s'] = " ";
                }
            }
        }
    }
}

// Working............................................................................
if(isset($_REQUEST['post_type']) && $_REQUEST['post_type']=='listing'&& $_REQUEST['submit_listings']=='Search')
add_action('init','custom_search_query');
//...................................................................................

//add_filter("pre_get_posts", "custom_search_query");


// Find An Agent Search

function get_countries($key = '_wt_agent_country', $type = 'agent', $status = 'publish')
{
    global $wpdb;

    if (empty($key))
        return;

    $res = $wpdb->get_col($wpdb->prepare("
        SELECT DISTINCT pm.meta_value FROM {$wpdb->postmeta} pm
        LEFT JOIN {$wpdb->posts} p ON p.ID = pm.post_id
        WHERE pm.meta_key = '%s'
        AND p.post_status = '%s'
        AND p.post_type = '%s'
        ", $key, $status, $type));

    return $res;
}

function get_states()
{
    global $wpdb;

    $country = @$_POST['country'];

    if (empty($country))
        return;

    $res = $wpdb->get_col($wpdb->prepare("
        select pm.meta_value FROM wp_postmeta pm
        where pm.meta_key = '_wt_agent_state'
        and pm.post_id IN
        ( select pm.post_id
        from wp_postmeta pm
        where pm.meta_value='%s'
        and pm.meta_key = '_wt_agent_country')
        ", $country));

    echo json_encode($res);

    die();
}

add_action('wp_ajax_get_states', 'get_states');
add_action('wp_ajax_nopriv_get_states', 'get_states');


function get_cities()
{
    global $wpdb;

    $state = @$_POST['state'];

    if (empty($state))
        return;

    $res = $wpdb->get_col($wpdb->prepare("
        select pm.meta_value FROM wp_postmeta pm
        where pm.meta_key = '_wt_agent_city'
        and pm.post_id IN
        ( select pm.post_id
        from wp_postmeta pm
        where pm.meta_value='%s'
        and pm.meta_key = '_wt_agent_state')
        ", $state));

    echo json_encode($res);

    die();
}

add_action('wp_ajax_get_cities', 'get_cities');
add_action('wp_ajax_nopriv_get_cities', 'get_cities');


// NEW usr registration ajax function


add_action("wp_ajax_new_user_registration", "new_user_registration_callback");
add_action("wp_ajax_nopriv_new_user_registration", "new_user_registration_callback");

function new_user_registration_callback() {
    global $wpdb; // this is how you get access to the database
//    var_dump($_POST);
    $success = 0;

    if ($_POST) {
        if ($_POST['terms'] == 'on') {
            if (!empty($_POST['Password']) && ($_POST['Password'] == $_POST['confirm_Password'])) {
                if ((!empty($_POST['email']))) {

                    if (!(email_exists($_POST['email']))) {
                        $userdata = array(
                            'user_login' => sanitize_user($_POST['email']),
                            'user_email' => sanitize_email($_POST['email']),
                            'user_pass' => esc_attr($_POST['Password']),
                            'first_name' => sanitize_text_field($_POST['firstname']),
                            'last_name' => sanitize_text_field($_POST['lastname']),
                        );
                        $user_id = wp_insert_user($userdata);
                        add_user_meta($user_id, '_wt_user_address', sanitize_text_field($_POST['address']), true);
                        add_user_meta($user_id, '_wt_user_city', sanitize_text_field($_POST['city']), true);
                        add_user_meta($user_id, '_wt_user_country', sanitize_text_field($_POST['country']), true);
                        add_user_meta($user_id, '_wt_user_phone', sanitize_text_field($_POST['phone']), true);
                        add_user_meta($user_id, '_wt_postcode', sanitize_text_field($_POST['postcode']), true);
                        $registration_error = 'Thank you For registration. You will redirect soon...';
                        $success = 1;
                        $login = wp_login(sanitize_user($_POST['email']), esc_attr($_POST['Password']), 'Login Success');
                        wp_set_auth_cookie($user_id, false, is_ssl());
                    } else {
                        $registration_error = 'email exist';
                    }
                } else {
                    $registration_error = 'email field required.';
                }
            } else {
                $registration_error = 'Password field required.';
            }
        } else {
            $registration_error = 'Accept the  Terms of Use.';
        }
    }

    $register_json_array = new StdClass();
    $register_json_array->phpmsg = $registration_error;
    $register_json_array->success = $success;

    //   $register_json_array = array("phpmsg" => $registration_error, "success" => $success);
// response output
    echo json_encode($register_json_array);

    wp_die(); // this is required to terminate immediately and return a proper response
}
