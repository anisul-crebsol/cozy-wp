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
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-grid.php' ),
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
                'name' => __('Agency Title',"wt_cozy"),
                'id' => $prefix . 'agency_title',
                'type' => 'text'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency Latitude',"wt_cozy"),
                'id' => $prefix . 'agency_latitude',
                'type' => 'text'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency Longtitude',"wt_cozy"),
                'id' => $prefix . 'agency_longtitude',
                'type' => 'text'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency Image ',"wt_cozy"),
                'id' => $prefix . 'agency_img',
                'type' => 'file'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Description',"wt_cozy"),
                'id' => $prefix . 'agency_description',
                'type' => 'wysiwyg'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency Map Maker Icon ',"wt_cozy"),
                'id' => $prefix . 'agency_map_maker_icon',
                'type' => 'file'
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
                'name' => __('MLS#',"wt_cozy"),
                'id' => $prefix . 'property_mls',
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
                'show_on_cb' => 'wt_cozy_agent_list'
	) );	
}

function wt_cozy_agent_list( $field ) {

	$type = 'agent';
	$args=array(
	  'post_type' => $type,
	  'post_status' => 'publish',
	  'posts_per_page' => -1,
	  'caller_get_posts'=> 1
	  );
	$agent_query = null;
	$agent_query = new WP_Query($args);
	if( $agent_query->have_posts() ) { 	?>
	<select name="agentList">
	 <?php while ($agent_query->have_posts()) : $agent_query->the_post(); ?>
		<option value="<?php the_id(); ?>"><?php the_title(); ?></option>>	    
	    <?php
	  endwhile; ?>
	  </select>
	<?php }	wp_reset_query();  // Restore global post data stomped by the_post().
}
