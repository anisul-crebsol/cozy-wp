<?php

/**
 * Agencies widget class
 */

class WT_Widget_Agencies extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_agencies', 'description' => __('Arbitrary text or HTML.'));
        parent::__construct('wt_cozy_agencies', __('Sidebar Agencies'), $widget_ops);
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

        global $wt_cozy; ?>
		<!-- BEGIN AGENCIES -->
		<div id="agencies" class="col-sm-12" data-animation-direction="fade" data-animation-delay="250">
			<h2 class="section-title">Our Agencies</h2>
			
			<div class="mapborder">
				<div id="map_agency" class="gmap"></div>
			</div>
			<select id="agency" name="agency" data-placeholder="Choose an agency">
				<option value=""> </option>
				<!-- The list of agencies will be automatically created. 
					Set the list of agencies in the file js/agencies.js -->
			</select>
		</div>
		<!-- END AGENCIES -->
        
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

    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */

    public function form( $instance ) {

    }
}