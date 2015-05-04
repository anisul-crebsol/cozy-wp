<?php

/**
 * Info widget class
 */

class WT_Widget_Contact extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_contact', 'description' => __('Arbitrary text or HTML.', 'cozy'));
        parent::__construct('wt_cozy_contact', __('Footer Contact', 'cozy'), $widget_ops);
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
        <!-- BEGIN CONTACT -->
                    <div class="block col-sm-3">
                        <h3><?php echo $wt_cozy['section_contact_title']?></h3>
                        <ul class="footer-contacts">
                            <li><i class="fa fa-map-marker"></i> <?php echo $wt_cozy['section_contact_address']?></li>
                            <li><i class="fa fa-phone"></i> <?php echo $wt_cozy['section_contact_phone']?></li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $wt_cozy['section_contact_email']?>"><?php echo $wt_cozy['section_contact_email']?></a></li>
                        </ul>
                    </div>
        <!-- END CONTACT -->
        
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