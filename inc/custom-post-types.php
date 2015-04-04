<?php
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
        'add_new' => __('Add New Feature', 'wt_cozy'),
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
    'add_new' => __('Add New Testimonial', 'wt_cozy'),
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

    // Agent section
    $labels1 = array(
        'name' => _x('Agents', 'Post Type General Name', 'wt_cozy'),
        'singular_name' => _x('Agent', 'Post Type Singular Name', 'wt_cozy'),
        'menu_name' => __('Agents', 'wt_cozy'),
        'parent_item_colon' => __('Parent Agent:', 'wt_cozy'),
        'all_items' => __('All Agents', 'wt_cozy'),
        'view_item' => __('View Agent', 'wt_cozy'),
        'add_new_item' => __('Add New Agent', 'wt_cozy'),
        'add_new' => __('Add New Agent', 'wt_cozy'),
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
        'add_new' => __('Add New Agency', 'wt_cozy'),
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


    // Properties section
    $labels1 = array(
        'name' => _x('Properties', 'Post Type General Name', 'wt_cozy'),
        'singular_name' => _x('Property', 'Post Type Singular Name', 'wt_cozy'),
        'menu_name' => __('Properties', 'wt_cozy'),
        'parent_item_colon' => __('Parent Property:', 'wt_cozy'),
        'all_items' => __('All Properties', 'wt_cozy'),
        'view_item' => __('View Property', 'wt_cozy'),
        'add_new_item' => __('Add New Property', 'wt_cozy'),
        'add_new' => __('Add New Property', 'wt_cozy'),
        'edit_item' => __('Edit Property', 'wt_cozy'),
        'update_item' => __('Update Property', 'wt_cozy'),
        'search_items' => __('Search Property', 'wt_cozy'),
        'not_found' => __('No Property found', 'wt_cozy'),
        'not_found_in_trash' => __('No Property found in Trash', 'wt_cozy'),
    );
    $args1 = array(
        'label' => __('Property', 'wt_cozy'),
        'description' => __('Property', 'wt_cozy'),
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
    register_post_type('property', $args1);
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


// Custom taxonomies

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_book_taxonomies', 0 );

// create two taxonomies, Status and writers for the post type "property"
function create_book_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Status', 'taxonomy general name' ),
        'singular_name'     => _x( 'Status', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Status' ),
        'all_items'         => __( 'All Status' ),
        'parent_item'       => __( 'Parent Status' ),
        'parent_item_colon' => __( 'Parent Status:' ),
        'edit_item'         => __( 'Edit Status' ),
        'update_item'       => __( 'Update Status' ),
        'add_new_item'      => __( 'Add New Status' ),
        'new_item_name'     => __( 'New Status Name' ),
        'menu_name'         => __( 'Status' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'property-status' ),
    );

    register_taxonomy( 'property-status', array( 'property' ), $args );

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Locations', 'taxonomy general name' ),
        'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Locations' ),
        'all_items'         => __( 'All Locations' ),
        'parent_item'       => __( 'Parent Locations' ),
        'parent_item_colon' => __( 'Parent Locations:' ),
        'edit_item'         => __( 'Edit Location' ),
        'update_item'       => __( 'Update Location' ),
        'add_new_item'      => __( 'Add New Location' ),
        'new_item_name'     => __( 'New Location Name' ),
        'menu_name'         => __( 'Locations' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'property-locations' ),
    );

    register_taxonomy( 'property-locations', array( 'property' ), $args );

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Property Types', 'taxonomy general name' ),
        'singular_name'     => _x( 'Property Type', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Property Types' ),
        'all_items'         => __( 'All Property Types' ),
        'parent_item'       => __( 'Parent Property Types' ),
        'parent_item_colon' => __( 'Parent Property Types:' ),
        'edit_item'         => __( 'Edit Property Type' ),
        'update_item'       => __( 'Update Property Type' ),
        'add_new_item'      => __( 'Add New Property Type' ),
        'new_item_name'     => __( 'New Property Type Name' ),
        'menu_name'         => __( 'Property Types' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'wt-property-types' ),
    );

    register_taxonomy( 'wt-property-types', array( 'property' ), $args );

    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name'                       => _x( 'Features', 'taxonomy general name' ),
        'singular_name'              => _x( 'Feature', 'taxonomy singular name' ),
        'search_items'               => __( 'Search Features' ),
        'popular_items'              => __( 'Popular Features' ),
        'all_items'                  => __( 'All Features' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Writer' ),
        'update_item'                => __( 'Update Writer' ),
        'add_new_item'               => __( 'Add New Writer' ),
        'new_item_name'              => __( 'New Writer Name' ),
        'separate_items_with_commas' => __( 'Separate Features with commas' ),
        'add_or_remove_items'        => __( 'Add or remove Features' ),
        'choose_from_most_used'      => __( 'Choose from the most used Features' ),
        'not_found'                  => __( 'No Features found.' ),
        'menu_name'                  => __( 'Features' ),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'property-features' ),
    );

    register_taxonomy( 'property-features', 'property', $args );

    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name'                       => _x( 'Amenities', 'taxonomy general name' ),
        'singular_name'              => _x( 'Amenity', 'taxonomy singular name' ),
        'search_items'               => __( 'Search Amenities' ),
        'popular_items'              => __( 'Popular Amenities' ),
        'all_items'                  => __( 'All Amenities' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Writer' ),
        'update_item'                => __( 'Update Writer' ),
        'add_new_item'               => __( 'Add New Writer' ),
        'new_item_name'              => __( 'New Writer Name' ),
        'separate_items_with_commas' => __( 'Separate Amenities with commas' ),
        'add_or_remove_items'        => __( 'Add or remove Amenities' ),
        'choose_from_most_used'      => __( 'Choose from the most used Amenities' ),
        'not_found'                  => __( 'No Amenities found.' ),
        'menu_name'                  => __( 'Amenities' ),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'property-amenities' ),
    );

    register_taxonomy( 'property-amenities', 'property', $args );
}