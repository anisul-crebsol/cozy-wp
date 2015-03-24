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
        'id'           => $prefix . 'extra-information',
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
        'type' => 'text'
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
}