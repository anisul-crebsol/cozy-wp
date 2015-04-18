<?php
if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

add_action( 'cmb2_init', 'wt_cozy_register_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function wt_cozy_register_metabox() {

	// Start with an underscore to hide fields from custom fields list

	$prefix = '_wt_';


    // Grid Page Meta Box

    $wt_cozy = wt_cozy_metabox( array(
        'id'           => $prefix . 'extra_information',
        'title'        => __( 'Extra Information', 'cmb2' ),
        'object_types' => array( 'page' ), // post type
        //'show_on'      => array( 'key' => 'page-template', 'value' => 'page-grid.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );
	$wt_cozy->add_field( array(
		'name' => __( 'Google Map', 'cmb2' ),
		'desc' => __( 'Field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'gridmap',
		'type' => 'pw_map',
		'split_values' => true,
		// 'repeatable' => true,
	) );


    // Feature Meta Box

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'feature',
		'title'         => __( 'Feature Details (Latest feature will be displayed on top)','wt_cozy' ),
		'object_types'  => array( 'feature', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
        'name' => __('Feature Icon Fontawesome Text',"wt_cozy"),
        'id' => $prefix . 'feature_icon_text',
        'type' => 'text_small'
	) );
	$wt_cozy->add_field( array(
        'name' => __('Description',"wt_cozy"),
        'id' => $prefix . 'feature_description',
        'type' => 'textarea'
	) );


     // Testimonial Meta Box

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'testimonial',
		'title'         => __( 'Testimonial Details (Latest testimonial will be displayed first)',"wt_cozy" ),
		'object_types'  => array( 'testimonial', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Testimonial image ',"wt_cozy"),
                'id' => $prefix . 'test_image',
                'type' => 'file'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Name of the Person ',"wt_cozy"),
                'id' => $prefix . 'test_name',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Designation',"wt_cozy"),
                'id' => $prefix . 'test_designation',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Testimonial ',"wt_cozy"),
                'id' => $prefix . 'test_description',
                'type' => 'wysiwyg',
				'options' => array( 'textarea_rows' => 5, )
	) );


    // Agent Meta Box

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'agent',
		'title'         => __( 'Agent Details (Latest agent will be displayed on top)',"wt_cozy" ),
		'object_types'  => array( 'agent', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Image ',"wt_cozy"),
                'id' => $prefix . 'agent_img',
                'type' => 'file'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Name',"wt_cozy"),
                'id' => $prefix . 'agent_name',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Address',"wt_cozy"),
                'id' => $prefix . 'agent_address',
                'type' => 'text'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Address 2',"wt_cozy"),
                'id' => $prefix . 'agent_address_two',
                'type' => 'text'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent City',"wt_cozy"),
                'id' => $prefix . 'agent_city',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent State',"wt_cozy"),
                'id' => $prefix . 'agent_state',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Country',"wt_cozy"),
                'id' => $prefix . 'agent_country',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Email',"wt_cozy"),
                'id' => $prefix . 'agent_email',
                'type' => 'text_email'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Telephone',"wt_cozy"),
                'id' => $prefix . 'agent_telephone',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Description',"wt_cozy"),
                'id' => $prefix . 'agent_description',
                'type' => 'wysiwyg'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Linkedin Link',"wt_cozy"),
                'id' => $prefix . 'agent_linkedin_link',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Facebook Link',"wt_cozy"),
                'id' => $prefix . 'agent_facebook_link',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Twitter Link',"wt_cozy"),
                'id' => $prefix . 'agent_twitter_link',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('YouTube Link',"wt_cozy"),
                'id' => $prefix . 'agent_youtube_link',
                'type' => 'text_url'
	) );


    // Agency Meta Box

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'agency',
		'title'         => __( 'Agency Details (Latest agency will be displayed on top)',"wt_cozy" ),
		'object_types'  => array( 'agency', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency Street',"wt_cozy"),
                'id' => $prefix . 'agency_street',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency City',"wt_cozy"),
                'id' => $prefix . 'agency_city',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency State',"wt_cozy"),
                'id' => $prefix . 'agency_state',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency Country',"wt_cozy"),
                'id' => $prefix . 'agency_country',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency Email',"wt_cozy"),
                'id' => $prefix . 'agency_email',
                'type' => 'text_email'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency Telephone',"wt_cozy"),
                'id' => $prefix . 'agency_telephone',
                'type' => 'text_medium'
	) );
	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'agency-social',
		'title'         => __( 'Social Icons',"wt_cozy" ),
		'object_types'  => array( 'agency', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Google Plus',"wt_cozy"),
                'id' => $prefix . 'agency_gplus',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Google Facebook',"wt_cozy"),
                'id' => $prefix . 'agency_facebook',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Google Twitter',"wt_cozy"),
                'id' => $prefix . 'agency_twitter',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Google YouTube',"wt_cozy"),
                'id' => $prefix . 'agency_youtube',
                'type' => 'text_url'
	) );
	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'agency-content',
		'title'         => __( 'Main Content',"wt_cozy" ),
		'object_types'  => array( 'agency', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Content Over Gallery',"wt_cozy"),
                'id' => $prefix . 'agency_description1',
                'type' => 'wysiwyg',
                'options' => array(
			        'textarea_rows' => get_option('default_post_edit_rows', 5),
			    ),
	) );
	$wt_cozy->add_field( array(
			    'name' => 'Agency Image gallery',
			    'desc' => '',
			    'id'   => $prefix . 'agency_gallery',
			    'type' => 'file_list',
			    // 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
			) );
	$wt_cozy->add_field( array(
                'name' => __('Content Under Gallery',"wt_cozy"),
                'id' => $prefix . 'agency_description2',
                'type' => 'wysiwyg',
                'options' => array(
			        'textarea_rows' => get_option('default_post_edit_rows', 10),
			    ),
	) );

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'agency-mapbox',
		'title'         => __( 'Agency Map',"wt_cozy" ),
		'object_types'  => array( 'agency', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
		'name' => __( 'Google Map', 'cmb2' ),
		'desc' => __( 'Field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'agency_map',
		'type' => 'pw_map',
		'split_values' => true,
		// 'repeatable' => true,
	) );


    // Property Meta Box

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'property-details',
		'title'         => __( 'Property Details',"wt_cozy" ),
		'object_types'  => array( 'property', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Description',"wt_cozy"),
                'id' => $prefix . 'property_description',
                'type' => 'wysiwyg'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Price',"wt_cozy"),
                'id' => $prefix . 'property_price',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Address',"wt_cozy"),
                'id' => $prefix . 'property_address',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('City',"wt_cozy"),
                'id' => $prefix . 'property_city',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('State',"wt_cozy"),
                'id' => $prefix . 'property_state',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('ID#',"wt_cozy"),
                'id' => $prefix . 'property_id',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Square Feet',"wt_cozy"),
                'id' => $prefix . 'property_square_feet',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Bedrooms',"wt_cozy"),
                'id' => $prefix . 'property_bedrooms',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Bathrooms',"wt_cozy"),
                'id' => $prefix . 'property_bathrooms',
                'type' => 'text_medium'
	) );
	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'property-slider',
		'title'         => __( 'Property Slider',"wt_cozy" ),
		'object_types'  => array( 'property', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
			    'name' => 'Property Slider',
			    'desc' => '',
			    'id'   => $prefix . 'property_slider',
			    'type' => 'file_list',
			    // 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
			) );

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'property-features',
		'title'         => __( 'Property Features',"wt_cozy" ),
		'object_types'  => array( 'property', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$group_field_id = $wt_cozy->add_field( array(
	    'id'          => $prefix . 'repeat_group',
	    'type'        => 'group',
	    'description' => __( 'Generates reusable form entries for Property Feature', 'cozy' ),
	    'options'     => array(
	        'group_title'   => __( 'Property Feaure {#}', 'cozy' ), // since version 1.1.4, {#} gets replaced by row number
	        'add_button'    => __( 'Add Another Property Feature', 'cozy' ),
	        'remove_button' => __( 'Remove Property Feature', 'cozy' ),
	        'sortable'      => true, // beta
	    ),
	) );
		// Id's for group's fields only need to be unique for the group. Prefix is not needed.
		$wt_cozy->add_group_field( $group_field_id, array(
		    'name' => 'Feature Icon Text',
		    'id'   => 'feature_icon',
		    'type' => 'text_small',
		    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
		) );
		$wt_cozy->add_group_field( $group_field_id, array(
		    'name' => 'Feature Text',
		    'description' => 'Write Property Feature',
		    'id'   => 'feature_text',
		    'type' => 'text_medium',
		) );

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'property-map',
		'title'         => __( 'Property Map',"wt_cozy" ),
		'object_types'  => array( 'property', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
		'name' => __( 'Google Map', 'cmb2' ),
		'desc' => __( 'Field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'gridmap',
		'type' => 'pw_map',
		'split_values' => true,
		// 'repeatable' => true,
	) );
	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'property-author',
		'title'         => __( 'Property Agent',"wt_cozy" ),
		'object_types'  => array( 'property', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
    'name' => __('Property Author',"wt_cozy"),
    'id' => $prefix . 'property_author',
    'desc'             => 'Select an option',    
    'type'             => 'select',
    'show_option_none' => true,
    'default'          => 'custom',
    'options'          => wt_cozy_agent_list( array( 'post_type' => 'agent', 'numberposts' => -1 ) ),
	) );
		
	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'property-social',
		'title'         => __( 'Social Icons',"wt_cozy" ),
		'object_types'  => array( 'property', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Google Plus',"wt_cozy"),
                'id' => $prefix . 'property_gplus',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Facebook',"wt_cozy"),
                'id' => $prefix . 'property_facebook',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Twitter',"wt_cozy"),
                'id' => $prefix . 'property_twitter',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('YouTube',"wt_cozy"),
                'id' => $prefix . 'property_youtube',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Pinterest',"wt_cozy"),
                'id' => $prefix . 'property_pinterest',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Mail',"wt_cozy"),
                'id' => $prefix . 'property_mail',
                'type' => 'text_url'
	) );


	// Our Partners Meta Box
	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'partners',
		'title'         => __( 'Our Partners',"wt_cozy" ),
		'object_types'  => array( 'page',), // Post type
        //'show_on'      => array( 'key' => 'page-template', 'value' => 'page-our-partners.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$wt_cozy->add_field( array(
                'name' => __('Testimonial image ',"wt_cozy"),
                'id' => $prefix . 'test_image',
                'type' => 'file'
	) );
	


    // User Meta Box

    $wt_cozy = wt_cozy_metabox(array(
        'id' => $prefix . 'user',
        'title' => __('User Details', "wt_cozy"),
        'object_types' => array('user',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
    ));
    $wt_cozy->add_field(array(
        'name' => __('Address', "wt_cozy"),
        'id' => $prefix . 'user_address',
        'type' => 'text'
    ));
    $wt_cozy->add_field(array(
        'name' => __('City', "wt_cozy"),
        'id' => $prefix . 'user_city',
        'type' => 'text'
    ));
    $wt_cozy->add_field(array(
        'name' => __('Country', "wt_cozy"),
        'id' => $prefix . 'user_country',
        'type' => 'text'
    ));
    $wt_cozy->add_field(array(
        'name' => __('Phone', "wt_cozy"),
        'id' => $prefix . 'user_phone',
        'type' => 'text'
    ));
    $wt_cozy->add_field(array(
        'name' => __('Postcode', "wt_cozy"),
        'id' => $prefix . 'postcode',
        'type' => 'text'
    ));

    // FAQ Meta Box

    $wt_cozy = wt_cozy_metabox(array(
        'id' => $prefix . 'faq',
        'title' => __('FAQ Content', "wt_cozy"),
        'object_types' => array('faq',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
    ));
    $wt_cozy->add_field(array(
        'name' => __('Content', "wt_cozy"),
        'id' => $prefix . 'faq_content',
        'type' => 'wysiwyg'
    ));


    // Pricing table meta box

    $wt_cozy = wt_cozy_metabox(array(
        'id' => $prefix . 'price_table_features',
        'title' => __('Price Table Features', "wt_cozy"),
        'object_types' => array('price-table',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
    ));
    $wt_cozy->add_field(array(
        'name' => 'Background Image',
        'desc' => 'Upload an image or enter an URL.',
        'id' => $prefix . 'price_image',
        'type' => 'file',
        // Optionally hide the text input for the url:
        'options' => array(
            'url' => true,
        ),
    ));
    $wt_cozy->add_field(array(
        'name' => __('price', "wt_cozy"),
        'id' => $prefix . 'package_price',
        'type' => 'text'
    ));

    $wt_cozy->add_field(array(
        'name' => __('Package Time Duration', "wt_cozy"),
        'id' => $prefix . 'package_time',
        'type' => 'text'
    ));
    $wt_cozy->add_field(array(
        'name' => __('Featured Package', "wt_cozy"),
        'id' => $prefix . 'featured_checkbox',
        'type' => 'checkbox'
    ));
    $wt_cozy->add_field(array(
        'name' => __('Tooltrip Description', "wt_cozy"),
        'id' => $prefix . 'tooltrip_description',
        'type' => 'text'
    ));


    $group_field_id = $wt_cozy->add_field(array(
        'id' => $prefix . 'repeat_group',
        'type' => 'group',
        'description' => __('Generates reusable form entries for Price Table Feature', 'cozy'),
        'options' => array(
            'group_title' => __('Price Table Features {#}', 'cozy'), // since version 1.1.4, {#} gets replaced by row number
            'add_button' => __('Add Another Price Table Features', 'cozy'),
            'remove_button' => __('Remove Price Table Features', 'cozy'),
            'sortable' => true, // beta
        ),
    ));
    $wt_cozy->add_group_field($group_field_id, array(
        'name' => 'Feature Text',
        'description' => 'Write Price Feature',
        'id' => 'price_feature_text',
        'type' => 'text_medium',
    ));
    $wt_cozy->add_group_field($group_field_id, array(
        'name' => 'Disable',
        'description' => 'Disable This Feature ?',
        'id' => 'price_feature_disable',
        'type' => 'checkbox',
    ));    	
}



function wt_cozy_agent_list( $query_args ) {

    $args = wp_parse_args( $query_args, array(
        'post_type'   => 'agent',
        'numberposts' => -1,
    ) );

    $posts = get_posts( $args );

    $post_options = array();
    if ( $posts ) {
        foreach ( $posts as $post ) {
          $post_options[ $post->ID ] = $post->post_title;
        }
    }

    return $post_options;
}
