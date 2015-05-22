<?php
function wt_cozy_custom_post_type()
{
    // Properties
    $labels1 = array(
        'name'                  => _x('Properties', 'Post Type General Name', 'cozy'),
        'singular_name'         => _x('Property', 'Post Type Singular Name', 'cozy'),
        'menu_name'             => __('Properties', 'cozy'),
        'parent_item_colon'     => __('Parent Property:', 'cozy'),
        'all_items'             => __('All Properties', 'cozy'),
        'view_item'             => __('View Property', 'cozy'),
        'add_new_item'          => __('Add New Property', 'cozy'),
        'add_new'               => __('Add New Property', 'cozy'),
        'edit_item'             => __('Edit Property', 'cozy'),
        'update_item'           => __('Update Property', 'cozy'),
        'search_items'          => __('Search Property', 'cozy'),
        'not_found'             => __('No Property found', 'cozy'),
        'not_found_in_trash'    => __('No Property found in Trash', 'cozy'),
    );
    $args1 = array(
        'label'                 => __('Property', 'cozy'),
        'description'           => __('Property', 'cozy'),
        'labels'                => $labels1,
        'supports'              => array('title','thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 21,
        'menu_icon'             => 'dashicons-format-image',
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('property', $args1);

    // Agents
    $labels2 = array(
        'name'                  => _x('Agents', 'Post Type General Name', 'cozy'),
        'singular_name'         => _x('Agent', 'Post Type Singular Name', 'cozy'),
        'menu_name'             => __('Agents', 'cozy'),
        'parent_item_colon'     => __('Parent Agent:', 'cozy'),
        'all_items'             => __('All Agents', 'cozy'),
        'view_item'             => __('View Agent', 'cozy'),
        'add_new_item'          => __('Add New Agent', 'cozy'),
        'add_new'               => __('Add New Agent', 'cozy'),
        'edit_item'             => __('Edit Agent', 'cozy'),
        'update_item'           => __('Update Agent', 'cozy'),
        'search_items'          => __('Search Agents', 'cozy'),
        'not_found'             => __('No agent found', 'cozy'),
        'not_found_in_trash'    => __('No agent found in Trash', 'cozy'),
    );
    $args2 = array(
        'label'                 => __('Agent', 'cozy'),
        'description'           => __('Agent', 'cozy'),
        'labels'                => $labels2,
        'supports'              => array('title','thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 21,
        'menu_icon'             => 'dashicons-businessman',
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('agent', $args2);

    // Agencies
    $labels3 = array(
        'name'                  => _x('Agencies', 'Post Type General Name', 'cozy'),
        'singular_name'         => _x('Agency', 'Post Type Singular Name', 'cozy'),
        'menu_name'             => __('Agencies', 'cozy'),
        'parent_item_colon'     => __('Parent agency:', 'cozy'),
        'all_items'             => __('All Agencies', 'cozy'),
        'view_item'             => __('View Agency', 'cozy'),
        'add_new_item'          => __('Add New Agency', 'cozy'),
        'add_new'               => __('Add New Agency', 'cozy'),
        'edit_item'             => __('Edit Agency', 'cozy'),
        'update_item'           => __('Update Agency', 'cozy'),
        'search_items'          => __('Search Agency', 'cozy'),
        'not_found'             => __('No Agency found', 'cozy'),
        'not_found_in_trash'    => __('No Agency found in Trash', 'cozy'),
    );
    $args3 = array(
        'label'                 => __('Agency', 'cozy'),
        'description'           => __('Agency', 'cozy'),
        'labels'                => $labels3,
        'supports'              => array('title','thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 21,
        'menu_icon'             => 'dashicons-randomize',
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('agency', $args3);


    // Features
    $labels4 = array(
        'name'                  => _x('Features', 'Post Type General Name', 'cozy'),
        'singular_name'         => _x('Feature', 'Post Type Singular Name', 'cozy'),
        'menu_name'             => __('Features', 'cozy'),
        'parent_item_colon'     => __('Parent Feature:', 'cozy'),
        'all_items'             => __('All Features', 'cozy'),
        'view_item'             => __('View Feature', 'cozy'),
        'add_new_item'          => __('Add New Feature', 'cozy'),
        'add_new'               => __('Add New Feature', 'cozy'),
        'edit_item'             => __('Edit Feature', 'cozy'),
        'update_item'           => __('Update Feature', 'cozy'),
        'search_items'          => __('Search Features', 'cozy'),
        'not_found'             => __('No Feature found', 'cozy'),
        'not_found_in_trash'    => __('No features found in Trash', 'cozy'),
    );
    $args4 = array(
        'label'                 => __('Features', 'cozy'),
        'description'           => __('Features', 'cozy'),
        'labels'                => $labels4,
        'supports'              => array('title','thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 21,
        'menu_icon'             => 'dashicons-art',
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('feature', $args4);

    // Testimonials
    $labels5 = array(
    'name'                      => _x('Testimonials', 'Post Type General Name', 'cozy'),
    'singular_name'             => _x('Testimonial', 'Post Type Singular Name', 'cozy'),
    'menu_name'                 => __('Testimonials', 'cozy'),
    'parent_item_colon'         => __('Parent Testimonial:', 'cozy'),
    'all_items'                 => __('All Testimonials', 'cozy'),
    'view_item'                 => __('View Testimonial', 'cozy'),
    'add_new_item'              => __('Add New Testimonial', 'cozy'),
    'add_new'                   => __('Add New Testimonial', 'cozy'),
    'edit_item'                 => __('Edit Testimonial', 'cozy'),
    'update_item'               => __('Update Testimonial', 'cozy'),
    'search_items'              => __('Search Testimonials', 'cozy'),
    'not_found'                 => __('No testimonial found', 'cozy'),
    'not_found_in_trash'        => __('No testimonials found in Trash', 'cozy'),
    );
    $args5 = array(
        'label'                 => __('Testimonial', 'cozy'),
        'description'           => __('Testimonial', 'cozy'),
        'labels'                => $labels5,
        'supports'              => array('title','thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 31,
        'menu_icon'             => 'dashicons-awards',
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('testimonial', $args5);


    // FAQs
    $labels6 = array(
        'name'                  => _x('FAQ', 'Post Type General Name', 'cozy'),
        'singular_name'         => _x('FAQ', 'Post Type Singular Name', 'cozy'),
        'menu_name'             => __('FAQs', 'cozy'),
        'parent_item_colon'     => __('Parent FAQ:', 'cozy'),
        'all_items'             => __('All FAQs', 'cozy'),
        'view_item'             => __('View FAQ', 'cozy'),
        'add_new_item'          => __('Add New FAQ', 'cozy'),
        'add_new'               => __('Add New FAQ', 'cozy'),
        'edit_item'             => __('Edit FAQ', 'cozy'),
        'update_item'           => __('Update FAQ', 'cozy'),
        'search_items'          => __('Search FAQs', 'cozy'),
        'not_found'             => __('No FAQ found', 'cozy'),
        'not_found_in_trash'    => __('No faqs found in Trash', 'cozy'),
    );
    $args6 = array(
        'label'                 => __('FAQs', 'cozy'),
        'description'           => __('FAQs', 'cozy'),
        'labels'                => $labels6,
        'supports'              => array('title'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 31,
        'menu_icon'             => 'dashicons-info',
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('faq', $args6);

    // Price Tables
    $labels7 = array(
        'name'                  => _x('Price Table', 'Post Type General Name', 'cozy'),
        'singular_name'         => _x('priceTable', 'Post Type Singular Name', 'cozy'),
        'menu_name'             => __('Price Table', 'cozy'),
        'parent_item_colon'     => __('Parent Price Table:', 'cozy'),
        'all_items'             => __('All Price Table', 'cozy'),
        'view_item'             => __('View Price Table', 'cozy'),
        'add_new_item'          => __('Add New Price Table', 'cozy'),
        'add_new'               => __('Add New Price Table', 'cozy'),
        'edit_item'             => __('Edit Price Table', 'cozy'),
        'update_item'           => __('Update Price Table', 'cozy'),
        'search_items'          => __('Search Price Tables', 'cozy'),
        'not_found'             => __('No Price Table found', 'cozy'),
        'not_found_in_trash'    => __('No Price Tables found in Trash', 'cozy'),
    );
    $args7 = array(
        'label'                 => __('Price Table', 'cozy'),
        'description'           => __('Price Table', 'cozy'),
        'labels'                => $labels7,
        'supports'              => array('title'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 31,
        'menu_icon'             => 'dashicons-cart',
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );

    register_post_type('price-table', $args7);

    // Services
    $labels8 = array(
        'name'                  => _x('Services', 'Post Type General Name', 'cozy'),
        'singular_name'         => _x('Service', 'Post Type Singular Name', 'cozy'),
        'menu_name'             => __('Services', 'cozy'),
        'parent_item_colon'     => __('Parent Service:', 'cozy'),
        'all_items'             => __('All Services', 'cozy'),
        'view_item'             => __('View Service', 'cozy'),
        'add_new_item'          => __('Add New Service', 'cozy'),
        'add_new'               => __('Add New Service', 'cozy'),
        'edit_item'             => __('Edit Service', 'cozy'),
        'update_item'           => __('Update Service', 'cozy'),
        'search_items'          => __('Search Services', 'cozy'),
        'not_found'             => __('No Service found', 'cozy'),
        'not_found_in_trash'    => __('No Services found in Trash', 'cozy'),
    );
    $args8 = array(
        'label'                 => __('Services', 'cozy'),
        'description'           => __('Services', 'cozy'),
        'labels'                => $labels8,
        'supports'              => array('title','thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 31,
        'menu_icon'             => 'dashicons-clipboard',
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('service', $args8);
}

add_action('init', 'wt_cozy_custom_post_type', 0);


// Custom Taxonomies

// hook into the init action and call create_cozy_taxonomies when it fires
add_action( 'init', 'create_cozy_taxonomies', 0 );

// create some taxonomies for the post type "Property"
function create_cozy_taxonomies() {
    // Status - Custom Taxonomy for Properties
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


    // Property Types - Custom Taxonomy for Properties
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


    // Amenities - Custom Taxonomy for Properties
    $labels = array(
        'name'                       => _x( 'Amenities', 'taxonomy general name' ),
        'singular_name'              => _x( 'Amenity', 'taxonomy singular name' ),
        'search_items'               => __( 'Search Amenities', 'cozy' ),
        'popular_items'              => __( 'Popular Amenities', 'cozy' ),
        'all_items'                  => __( 'All Amenities', 'cozy' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Amenity', 'cozy' ),
        'update_item'                => __( 'Update Amenity', 'cozy' ),
        'add_new_item'               => __( 'Add New Amenity', 'cozy' ),
        'new_item_name'              => __( 'New Amenity Name', 'cozy' ),
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


    // Custom taxonomy for custom post type FAQ
    register_taxonomy('faq_category', 'faq', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name'              => _x('FAQ Category', 'taxonomy general name'),
            'singular_name'     => _x('FAQ-Category', 'taxonomy singular name'),
            'search_items'      => __('Search FAQ-Categories', 'cozy'),
            'all_items'         => __('All FAQ-Categories', 'cozy'),
            'parent_item'       => __('Parent FAQ-Category', 'cozy'),
            'parent_item_colon' => __('Parent FAQ-Category:', 'cozy'),
            'edit_item'         => __('Edit FAQ-Category', 'cozy'),
            'update_item'       => __('Update FAQ-Category', 'cozy'),
            'add_new_item'      => __('Add New FAQ-Category', 'cozy'),
            'new_item_name'     => __('New FAQ-Category Name', 'cozy'),
            'menu_name'         => __('FAQ Categories', 'cozy'),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug'          => 'faq-category', // This controls the base slug that will display before each term
            'with_front'    => false, // Don't display the category base before "/locations/"
            'hierarchical'  => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}

//add extra fields to property types edit form hook
add_action('wt-property-types_edit_form_fields','extra_category_fields');
add_action('wt-property-types_add_form_fields','extra_category_fields');
//add extra fields to category edit form callback function
function extra_category_fields( $tag ) {    //check for existing Serviced ID
    $t_id = $tag->term_id;
    $cat_meta = get_option( "category_$t_id");
?>
<tr class="form-field">
<th scope="row" valign="top"><label for="cat_icon_url"><?php _e('Property Icon','cozy'); ?></label></th>
<td>
<input type="text" name="Cat_meta[img]" id="Cat_meta[img]" size="3" style="width:60%;" value="<?php echo $cat_meta['img'] ? $cat_meta['img'] : ''; ?>"><br />
            <span class="description"><?php _e('Please add any font awesome class ie : fa-home','cozy'); ?></span>
        </td>
</tr>
<?php
}
// save extra category extra fields hook
add_action ( 'edited_wt-property-types', 'save_extra_category_fileds');
   // save extra category extra fields callback function
function save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
        $t_id = $term_id;
        $cat_meta = get_option( "category_$t_id");
        $cat_keys = array_keys($_POST['Cat_meta']);
            foreach ($cat_keys as $key){
            if (isset($_POST['Cat_meta'][$key])){
                $cat_meta[$key] = $_POST['Cat_meta'][$key];
            }
        }
        //save the option array
        update_option( "category_$t_id", $cat_meta );
    }
}