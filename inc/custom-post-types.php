<?php
function wt_cozy_fields()
{

    $labels1 = array(
        'name' => _x('Features', 'Post Type General Name', 'cozy'),
        'singular_name' => _x('Feature', 'Post Type Singular Name', 'cozy'),
        'menu_name' => __('Features', 'cozy'),
        'parent_item_colon' => __('Parent Feature:', 'cozy'),
        'all_items' => __('All Features', 'cozy'),
        'view_item' => __('View Feature', 'cozy'),
        'add_new_item' => __('Add New Feature', 'cozy'),
        'add_new' => __('Add New Feature', 'cozy'),
        'edit_item' => __('Edit Feature', 'cozy'),
        'update_item' => __('Update Feature', 'cozy'),
        'search_items' => __('Search Features', 'cozy'),
        'not_found' => __('No Feature found', 'cozy'),
        'not_found_in_trash' => __('No features found in Trash', 'cozy'),
    );
    $args1 = array(
        'label' => __('Features', 'cozy'),
        'description' => __('Features', 'cozy'),
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
    'name' => _x('Testimonials', 'Post Type General Name', 'cozy'),
    'singular_name' => _x('Testimonial', 'Post Type Singular Name', 'cozy'),
    'menu_name' => __('Testimonials', 'cozy'),
    'parent_item_colon' => __('Parent Testimonial:', 'cozy'),
    'all_items' => __('All Testimonials', 'cozy'),
    'view_item' => __('View Testimonial', 'cozy'),
    'add_new_item' => __('Add New Testimonial', 'cozy'),
    'add_new' => __('Add New Testimonial', 'cozy'),
    'edit_item' => __('Edit Testimonial', 'cozy'),
    'update_item' => __('Update Testimonial', 'cozy'),
    'search_items' => __('Search Testimonials', 'cozy'),
    'not_found' => __('No testimonial found', 'cozy'),
    'not_found_in_trash' => __('No testimonials found in Trash', 'cozy'),
    );
    $args4 = array(
        'label' => __('Testimonial', 'cozy'),
        'description' => __('Testimonial', 'cozy'),
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
        'name' => _x('Agents', 'Post Type General Name', 'cozy'),
        'singular_name' => _x('Agent', 'Post Type Singular Name', 'cozy'),
        'menu_name' => __('Agents', 'cozy'),
        'parent_item_colon' => __('Parent Agent:', 'cozy'),
        'all_items' => __('All Agents', 'cozy'),
        'view_item' => __('View Agent', 'cozy'),
        'add_new_item' => __('Add New Agent', 'cozy'),
        'add_new' => __('Add New Agent', 'cozy'),
        'edit_item' => __('Edit Agent', 'cozy'),
        'update_item' => __('Update Agent', 'cozy'),
        'search_items' => __('Search Agents', 'cozy'),
        'not_found' => __('No agent found', 'cozy'),
        'not_found_in_trash' => __('No agent found in Trash', 'cozy'),
    );
    $args1 = array(
        'label' => __('Agent', 'cozy'),
        'description' => __('Agent', 'cozy'),
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
        'name' => _x('Agencies', 'Post Type General Name', 'cozy'),
        'singular_name' => _x('Agency', 'Post Type Singular Name', 'cozy'),
        'menu_name' => __('Agencies', 'cozy'),
        'parent_item_colon' => __('Parent agency:', 'cozy'),
        'all_items' => __('All Agencies', 'cozy'),
        'view_item' => __('View Agency', 'cozy'),
        'add_new_item' => __('Add New Agency', 'cozy'),
        'add_new' => __('Add New Agency', 'cozy'),
        'edit_item' => __('Edit Agency', 'cozy'),
        'update_item' => __('Update Agency', 'cozy'),
        'search_items' => __('Search Agency', 'cozy'),
        'not_found' => __('No Agency found', 'cozy'),
        'not_found_in_trash' => __('No Agency found in Trash', 'cozy'),
    );
    $args1 = array(
        'label' => __('Agency', 'cozy'),
        'description' => __('Agency', 'cozy'),
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
        'name' => _x('Properties', 'Post Type General Name', 'cozy'),
        'singular_name' => _x('Property', 'Post Type Singular Name', 'cozy'),
        'menu_name' => __('Properties', 'cozy'),
        'parent_item_colon' => __('Parent Property:', 'cozy'),
        'all_items' => __('All Properties', 'cozy'),
        'view_item' => __('View Property', 'cozy'),
        'add_new_item' => __('Add New Property', 'cozy'),
        'add_new' => __('Add New Property', 'cozy'),
        'edit_item' => __('Edit Property', 'cozy'),
        'update_item' => __('Update Property', 'cozy'),
        'search_items' => __('Search Property', 'cozy'),
        'not_found' => __('No Property found', 'cozy'),
        'not_found_in_trash' => __('No Property found in Trash', 'cozy'),
    );
    $args1 = array(
        'label' => __('Property', 'cozy'),
        'description' => __('Property', 'cozy'),
        'labels' => $labels1,
        'supports' => array('title','thumbnail'),
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

    // Register FAQ post type
    $labels1 = array(
        'name' => _x('FAQ', 'Post Type General Name', 'cozy'),
        'singular_name' => _x('FAQ', 'Post Type Singular Name', 'cozy'),
        'menu_name' => __('FAQ', 'cozy'),
        'parent_item_colon' => __('Parent FAQ:', 'cozy'),
        'all_items' => __('All FAQs', 'cozy'),
        'view_item' => __('View FAQ', 'cozy'),
        'add_new_item' => __('Add New FAQ', 'cozy'),
        'add_new' => __('Add New FAQ', 'cozy'),
        'edit_item' => __('Edit FAQ', 'cozy'),
        'update_item' => __('Update FAQ', 'cozy'),
        'search_items' => __('Search FAQs', 'cozy'),
        'not_found' => __('No FAQ found', 'cozy'),
        'not_found_in_trash' => __('No faqs found in Trash', 'cozy'),
    );
    $args1 = array(
        'label' => __('FAQs', 'cozy'),
        'description' => __('FAQs', 'cozy'),
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
    register_post_type('faq', $args1);

    // Register Price table post type

    $labels1 = array(
        'name' => _x('Price Table', 'Post Type General Name', 'cozy'),
        'singular_name' => _x('priceTable', 'Post Type Singular Name', 'cozy'),
        'menu_name' => __('Price Table', 'cozy'),
        'parent_item_colon' => __('Parent Price Table:', 'cozy'),
        'all_items' => __('All Price Table', 'cozy'),
        'view_item' => __('View Price Table', 'cozy'),
        'add_new_item' => __('Add New Price Table', 'cozy'),
        'add_new' => __('Add New Price Table', 'cozy'),
        'edit_item' => __('Edit Price Table', 'cozy'),
        'update_item' => __('Update Price Table', 'cozy'),
        'search_items' => __('Search Price Tables', 'cozy'),
        'not_found' => __('No Price Table found', 'cozy'),
        'not_found_in_trash' => __('No Price Tables found in Trash', 'cozy'),
    );

    $args1 = array(
        'label' => __('Price Table', 'cozy'),
        'description' => __('Price Table', 'cozy'),
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

    register_post_type('price-table', $args1);
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
        'search_items'      => __( 'Search Status', 'cozy' ),
        'all_items'         => __( 'All Status', 'cozy' ),
        'parent_item'       => __( 'Parent Status', 'cozy' ),
        'parent_item_colon' => __( 'Parent Status:', 'cozy' ),
        'edit_item'         => __( 'Edit Status', 'cozy' ),
        'update_item'       => __( 'Update Status', 'cozy' ),
        'add_new_item'      => __( 'Add New Status', 'cozy' ),
        'new_item_name'     => __( 'New Status Name', 'cozy' ),
        'menu_name'         => __( 'Status', 'cozy' ),
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
        'search_items'      => __( 'Search Locations', 'cozy'),
        'all_items'         => __( 'All Locations', 'cozy' ),
        'parent_item'       => __( 'Parent Locations', 'cozy' ),
        'parent_item_colon' => __( 'Parent Locations:', 'cozy' ),
        'edit_item'         => __( 'Edit Location', 'cozy' ),
        'update_item'       => __( 'Update Location', 'cozy' ),
        'add_new_item'      => __( 'Add New Location', 'cozy' ),
        'new_item_name'     => __( 'New Location Name', 'cozy' ),
        'menu_name'         => __( 'Locations', 'cozy' ),
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
        'search_items'      => __( 'Search Property Types', 'cozy' ),
        'all_items'         => __( 'All Property Types', 'cozy' ),
        'parent_item'       => __( 'Parent Property Types', 'cozy' ),
        'parent_item_colon' => __( 'Parent Property Types:', 'cozy' ),
        'edit_item'         => __( 'Edit Property Type', 'cozy' ),
        'update_item'       => __( 'Update Property Type', 'cozy' ),
        'add_new_item'      => __( 'Add New Property Type', 'cozy' ),
        'new_item_name'     => __( 'New Property Type Name', 'cozy' ),
        'menu_name'         => __( 'Property Types', 'cozy' ),
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
        'search_items'               => __( 'Search Features', 'cozy' ),
        'popular_items'              => __( 'Popular Features', 'cozy' ),
        'all_items'                  => __( 'All Features', 'cozy' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Writer', 'cozy' ),
        'update_item'                => __( 'Update Writer', 'cozy' ),
        'add_new_item'               => __( 'Add New Writer', 'cozy' ),
        'new_item_name'              => __( 'New Writer Name', 'cozy' ),
        'separate_items_with_commas' => __( 'Separate Features with commas', 'cozy' ),
        'add_or_remove_items'        => __( 'Add or remove Features', 'cozy' ),
        'choose_from_most_used'      => __( 'Choose from the most used Features', 'cozy' ),
        'not_found'                  => __( 'No Features found.', 'cozy' ),
        'menu_name'                  => __( 'Features', 'cozy' ),
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
        'search_items'               => __( 'Search Amenities', 'cozy' ),
        'popular_items'              => __( 'Popular Amenities', 'cozy' ),
        'all_items'                  => __( 'All Amenities', 'cozy' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Writer', 'cozy' ),
        'update_item'                => __( 'Update Writer', 'cozy' ),
        'add_new_item'               => __( 'Add New Writer', 'cozy' ),
        'new_item_name'              => __( 'New Writer Name', 'cozy' ),
        'separate_items_with_commas' => __( 'Separate Amenities with commas', 'cozy' ),
        'add_or_remove_items'        => __( 'Add or remove Amenities', 'cozy' ),
        'choose_from_most_used'      => __( 'Choose from the most used Amenities', 'cozy' ),
        'not_found'                  => __( 'No Amenities found.', 'cozy' ),
        'menu_name'                  => __( 'Amenities', 'cozy' ),
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

// Custom Taxonomy for FAQ

function add_faq_category_taxonomies() {

    register_taxonomy('faq_category', 'faq', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x('FAQ Category', 'taxonomy general name'),
            'singular_name' => _x('FAQ-Category', 'taxonomy singular name'),
            'search_items' => __('Search FAQ-Categories', 'cozy'),
            'all_items' => __('All FAQ-Categories', 'cozy'),
            'parent_item' => __('Parent FAQ-Category', 'cozy'),
            'parent_item_colon' => __('Parent FAQ-Category:', 'cozy'),
            'edit_item' => __('Edit FAQ-Category', 'cozy'),
            'update_item' => __('Update FAQ-Category', 'cozy'),
            'add_new_item' => __('Add New FAQ-Category', 'cozy'),
            'new_item_name' => __('New FAQ-Category Name', 'cozy'),
            'menu_name' => __('FAQ Categories', 'cozy'),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'faq_category', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}

add_action('init', 'add_faq_category_taxonomies', 0);