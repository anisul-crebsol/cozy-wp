<?php
if ( file_exists( get_template_directory() . '/libs/cmb2/init.php' ) ) {
	require_once get_template_directory() . '/libs/cmb2/init.php';
} elseif ( file_exists( get_template_directory() . '/libs/CMB2/init.php' ) ) {
	require_once get_template_directory() . '/libs/CMB2/init.php';
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
        'title'        => __( 'Extra Information', 'cozy' ),
        'object_types' => array( 'page' ), // post type
        //'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home-grid.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );
	$wt_cozy->add_field( array(
		'name' => __( 'Google Map', 'cozy' ),
		'desc' => __( 'Field description (optional)', 'cozy' ),
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
        'name' => __('Feature Icon Fontawesome Text','cozy'),
        'id' => $prefix . 'feature_icon_text',
        'type' => 'text_small'
	) );
	$wt_cozy->add_field( array(
        'name' => __('Description','cozy'),
        'id' => $prefix . 'feature_description',
        'type' => 'textarea'
	) );


     // Testimonial Meta Box

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'testimonial',
		'title'         => __( 'Testimonial Details (Latest testimonial will be displayed first)','cozy' ),
		'object_types'  => array( 'testimonial', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Testimonial image ','cozy'),
                'id' => $prefix . 'test_image',
                'type' => 'file'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Name of the Person ','cozy'),
                'id' => $prefix . 'test_name',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Designation','cozy'),
                'id' => $prefix . 'test_designation',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Testimonial ','cozy'),
                'id' => $prefix . 'test_description',
                'type' => 'wysiwyg',
			    'options' => array(
			        'wpautop' => true, // use wpautop?
			        'media_buttons' => false, // show insert/upload button(s)
			        'textarea_rows' => get_option('default_post_edit_rows', 5), // rows="..."
			        'tabindex' => '',
			        'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
			        'editor_class' => '', // add extra class(es) to the editor textarea
			        'teeny' => false, // output the minimal editor config used in Press This
			        'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
			        'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
			        'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
			    ),
	) );


    // Agent Meta Box

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'agent',
		'title'         => __( 'Agent Details (Latest agent will be displayed on top)','cozy' ),
		'object_types'  => array( 'agent', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Image ','cozy'),
                'id' => $prefix . 'agent_img',
                'type' => 'file'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Name','cozy'),
                'id' => $prefix . 'agent_name',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Address','cozy'),
                'id' => $prefix . 'agent_address',
                'type' => 'text'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Address 2','cozy'),
                'id' => $prefix . 'agent_address_two',
                'type' => 'text'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent City','cozy'),
                'id' => $prefix . 'agent_city',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent State','cozy'),
                'id' => $prefix . 'agent_state',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Country','cozy'),
                'id' => $prefix . 'agent_country',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Email','cozy'),
                'id' => $prefix . 'agent_email',
                'type' => 'text_email'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Telephone','cozy'),
                'id' => $prefix . 'agent_telephone',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Description','cozy'),
                'id' => $prefix . 'agent_description',
                'type' => 'wysiwyg',
			    'options' => array(
			        'wpautop' => true, // use wpautop?
			        'media_buttons' => false, // show insert/upload button(s)
			        'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
			        'tabindex' => '',
			        'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
			        'editor_class' => '', // add extra class(es) to the editor textarea
			        'teeny' => false, // output the minimal editor config used in Press This
			        'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
			        'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
			        'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
			    ),
	) );
	$wt_cozy->add_field( array(
                'name' => __('Linkedin Link','cozy'),
                'id' => $prefix . 'agent_linkedin_link',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Facebook Link','cozy'),
                'id' => $prefix . 'agent_facebook_link',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Twitter Link','cozy'),
                'id' => $prefix . 'agent_twitter_link',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('YouTube Link','cozy'),
                'id' => $prefix . 'agent_youtube_link',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agent Contact Form','cozy'),
                'id' => $prefix . 'agent_contact_form',
                'desc' => __('Please insert contact form shotrcode for this agent.','cozy'),
                'type' => 'text',
	) );


    // Agency Meta Box

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'agency',
		'title'         => __( 'Agency Details (Latest agency will be displayed on top)','cozy' ),
		'object_types'  => array( 'agency', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency Street','cozy'),
                'id' => $prefix . 'agency_street',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency City','cozy'),
                'id' => $prefix . 'agency_city',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency State','cozy'),
                'id' => $prefix . 'agency_state',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency Country','cozy'),
                'id' => $prefix . 'agency_country',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency Email','cozy'),
                'id' => $prefix . 'agency_email',
                'type' => 'text_email'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Agency Telephone','cozy'),
                'id' => $prefix . 'agency_telephone',
                'type' => 'text_medium'
	) );
	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'agency-social',
		'title'         => __( 'Social Icons','cozy' ),
		'object_types'  => array( 'agency', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Google Plus','cozy'),
                'id' => $prefix . 'agency_gplus',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Google Facebook','cozy'),
                'id' => $prefix . 'agency_facebook',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Google Twitter','cozy'),
                'id' => $prefix . 'agency_twitter',
                'type' => 'text_url'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Google YouTube','cozy'),
                'id' => $prefix . 'agency_youtube',
                'type' => 'text_url'
	) );
	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'agency-content',
		'title'         => __( 'Main Content','cozy' ),
		'object_types'  => array( 'agency', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Content Over Gallery','cozy'),
                'id' => $prefix . 'agency_description1',
                'type' => 'wysiwyg',
			    'options' => array(
			        'wpautop' => true, // use wpautop?
			        'media_buttons' => false, // show insert/upload button(s)
			        'textarea_rows' => get_option('default_post_edit_rows', 5), // rows="..."
			        'tabindex' => '',
			        'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
			        'editor_class' => '', // add extra class(es) to the editor textarea
			        'teeny' => false, // output the minimal editor config used in Press This
			        'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
			        'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
			        'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
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
                'name' => __('Content Under Gallery','cozy'),
                'id' => $prefix . 'agency_description2',
                'type' => 'wysiwyg',
			    'options' => array(
			        'wpautop' => true, // use wpautop?
			        'media_buttons' => false, // show insert/upload button(s)
			        'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
			        'tabindex' => '',
			        'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
			        'editor_class' => '', // add extra class(es) to the editor textarea
			        'teeny' => false, // output the minimal editor config used in Press This
			        'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
			        'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
			        'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
			    ),
	) );

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'agency-mapbox',
		'title'         => __( 'Agency Map','cozy' ),
		'object_types'  => array( 'agency', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
		'name' => __( 'Google Map', 'cozy' ),
		'desc' => __( 'Field description (optional)', 'cozy' ),
		'id'   => $prefix . 'agency_map',
		'type' => 'pw_map',
		'split_values' => true,
		// 'repeatable' => true,
	) );
	$wt_cozy->add_field( array(
			    'name' => 'Map Icon',
			    'desc' => 'Agency Map Maker Icon',
			    'id'   => $prefix . 'agency_map_maker_icon',
			    'type' => 'file',
			    // 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );


    // Property Meta Box

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'property-details',
		'title'         => __( 'Property Details','cozy' ),
		'object_types'  => array( 'property', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
                'name' => __('Description','cozy'),
                'id' => $prefix . 'property_description',
                'type' => 'wysiwyg',
			    'options' => array(
			        'wpautop' => true, // use wpautop?
			        'media_buttons' => false, // show insert/upload button(s)
			        'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
			        'tabindex' => '',
			        'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
			        'editor_class' => '', // add extra class(es) to the editor textarea
			        'teeny' => false, // output the minimal editor config used in Press This
			        'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
			        'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
			        'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
			    ),

	) );
	$wt_cozy->add_field( array(
                'name' => __('Price','cozy'),
                'id' => $prefix . 'property_price',
                'type' => 'text_medium',
				'attributes' => array(
					'type' => 'number',
					'pattern' => '\d*',
				),
	) );
	$wt_cozy->add_field( array(
                'name' => __('Price Symble','cozy'),
                'id' => $prefix . 'property_price_symble',
                'type' => 'text_medium',
                'default' => '$',
	) );
	$wt_cozy->add_field( array(
                'name' => __('Address','cozy'),
                'id' => $prefix . 'property_address',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('City','cozy'),
                'id' => $prefix . 'property_city',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('State','cozy'),
                'id' => $prefix . 'property_state',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Country','cozy'),
                'id' => $prefix . 'property_country',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('ID#','cozy'),
                'id' => $prefix . 'property_id',
                'type' => 'text_medium'
	) );
	$wt_cozy->add_field( array(
                'name' => __('Property Area','cozy'),
                'id' => $prefix . 'property_area',
                'type' => 'text_medium',
				'attributes' => array(
					'type' => 'number',
					'pattern' => '\d*',
				),
	) );
	$wt_cozy->add_field( array(
                'name' => __('Area Measurement','cozy'),
                'id' => $prefix . 'property_area_measurement',
                'type' => 'text_medium',
                'default' => 'sq ft',
	) );
	$wt_cozy->add_field( array(
                'name' => __('Bedrooms','cozy'),
                'id' => $prefix . 'property_bedrooms',
                'type' => 'text_medium',
				'attributes' => array(
					'type' => 'number',
					'pattern' => '\d*',
				),
	) );
	$wt_cozy->add_field( array(
                'name' => __('Bathrooms','cozy'),
                'id' => $prefix . 'property_bathrooms',
                'type' => 'text_medium',
				'attributes' => array(
					'type' => 'number',
					'pattern' => '\d*',
				), 
	) );


	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'property-slider',
		'title'         => __( 'Property Slider','cozy' ),
		'object_types'  => array( 'property', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
			    'name' => 'Slider images',
			    'desc' => '',
			    'id'   => $prefix . 'property_slider',
			    'type' => 'file_list',
			    // 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
			) );


	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'property-features',
		'title'         => __( 'Property Features','cozy' ),
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
		'title'         => __( 'Property Map','cozy' ),
		'object_types'  => array( 'property', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
		'name' => __( 'Google Map', 'cozy' ),
		'desc' => __( 'Field description (optional)', 'cozy' ),
		'id'   => $prefix . 'property_map',
		'type' => 'pw_map',
		'split_values' => true,
		// 'repeatable' => true,
	) );
	$wt_cozy->add_field( array(
			    'name' => 'Map Icon',
			    'desc' => 'Property Map Maker Icon',
			    'id'   => $prefix . 'property_map_maker_icon',
			    'type' => 'file',
			    // 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );


	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'property-author',
		'title'         => __( 'Property Agent','cozy' ),
		'object_types'  => array( 'property', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
    'name' => __('Agent','cozy'),
    'id' => $prefix . 'property_author',
    'desc'             => 'Select and assign an author to this property',
    'type'             => 'select',
    'show_option_none' => true,
    'default'          => 'custom',
    'options'          => wt_cozy_agent_list( array( 'post_type' => 'agent', 'numberposts' => -1 ) ),
	) );


	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'property-agency',
		'title'         => __( 'Property Agency','cozy' ),
		'object_types'  => array( 'property', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$wt_cozy->add_field( array(
    'name' => __('Agency','cozy'),
    'id' => $prefix . 'property_agency',
    'desc'             => 'Select and assign an agency to this property',
    'type'             => 'select',
    'show_option_none' => true,
    'default'          => 'custom',
    'options'          => wt_cozy_agent_list( array( 'post_type' => 'agency', 'numberposts' => -1 ) ),
	) );



	// Our Partners Meta Box

	$wt_cozy = wt_cozy_metabox( array(
		'id'            => $prefix . 'partners',
		'title'         => __( 'Our Partners','cozy' ),
		'object_types'  => array( 'page',), // Post type
        //'show_on'      => array( 'key' => 'page-template', 'value' => 'page-our-partners.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$group_field_id = $wt_cozy->add_field( array(
	    'id'          => $prefix . 'partners_repeat_group',
	    'type'        => 'group',
	    'description' => __( 'Generates repeatable entries for our partners', 'cozy' ),
	    'options'     => array(
	        'group_title'   => __( 'Partners Image {#}', 'cozy' ), // since version 1.1.4, {#} gets replaced by row number
	        'add_button'    => __( 'Add Another Partner', 'cozy' ),
	        'remove_button' => __( 'Remove This Partner', 'cozy' ),
	        'sortable'      => true, // beta
	    ),
	) );
	$wt_cozy->add_group_field( $group_field_id, array(
        'name' => __('Partners Image','cozy'),
	    'description' => 'Upload Partners Image',
	    'id'   => 'partner_image',
	    'type' => 'file',
	) );
	$wt_cozy->add_group_field( $group_field_id, array(
        'name' => __('Partners Hover Image','cozy'),
	    'description' => 'Upload Partners Image for Mouse-over',
	    'id'   => 'partner_image_hover',
	    'type' => 'file',
	) );
	$wt_cozy->add_group_field( $group_field_id, array(
        'name' => __('Partners Link','cozy'),
	    'description' => 'Partners Link',
	    'id'   => 'partner_link',
	    'type' => 'text_medium',
	) );
	

    // User Meta Box

    $wt_cozy = wt_cozy_metabox(array(
        'id' => $prefix . 'user',
        'title' => __('User Details', 'cozy'),
        'object_types' => array('user',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
    ));
    $wt_cozy->add_field(array(
        'name' => __('Address', 'cozy'),
        'id' => $prefix . 'user_address',
        'type' => 'text'
    ));
    $wt_cozy->add_field(array(
        'name' => __('City', 'cozy'),
        'id' => $prefix . 'user_city',
        'type' => 'text'
    ));
    $wt_cozy->add_field(array(
        'name' => __('Country', 'cozy'),
        'id' => $prefix . 'user_country',
        'type' => 'text'
    ));
    $wt_cozy->add_field(array(
        'name' => __('Phone', 'cozy'),
        'id' => $prefix . 'user_phone',
        'type' => 'text'
    ));
    $wt_cozy->add_field(array(
        'name' => __('Postcode', 'cozy'),
        'id' => $prefix . 'postcode',
        'type' => 'text'
    ));


    // FAQ Meta Box

    $wt_cozy = wt_cozy_metabox(array(
        'id' => $prefix . 'faq',
        'title' => __('FAQ Content', 'cozy'),
        'object_types' => array('faq',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
    ));
    $wt_cozy->add_field(array(
        'name' => __('Content', 'cozy'),
        'id' => $prefix . 'faq_content',
        'type' => 'wysiwyg',
	    'options' => array(
	        'wpautop' => true, // use wpautop?
	        'media_buttons' => false, // show insert/upload button(s)
	        'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
	        'tabindex' => '',
	        'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
	        'editor_class' => '', // add extra class(es) to the editor textarea
	        'teeny' => false, // output the minimal editor config used in Press This
	        'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
	        'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
	        'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
	    ),
    ));


    // Pricing table meta box

    $wt_cozy = wt_cozy_metabox(array(
        'id' => $prefix . 'price_table_features',
        'title' => __('Price Table Features', 'cozy'),
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
        'name' => __('price', 'cozy'),
        'id' => $prefix . 'package_price',
        'type' => 'text'
    ));

    $wt_cozy->add_field(array(
        'name' => __('Package Time Duration', 'cozy'),
        'id' => $prefix . 'package_time',
        'type' => 'text'
    ));
    $wt_cozy->add_field(array(
        'name' => __('Featured Package', 'cozy'),
        'id' => $prefix . 'featured_checkbox',
        'type' => 'checkbox'
    ));
    $wt_cozy->add_field(array(
        'name' => __('Tooltip Description', 'cozy'),
        'id' => $prefix . 'tooltip_description',
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

function wt_cozy_agency_list( $query_args ) {

    $args = wp_parse_args( $query_args, array(
        'post_type'   => 'agency',
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