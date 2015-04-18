<?php

/**
 * Info widget class
 */

class WT_Widget_Info extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_info', 'description' => __('Arbitrary text or HTML.'));
        parent::__construct('wt_cozy_info', __('Footer Info Box'), $widget_ops);
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
        <!-- BEGIN INFOBOX -->
            <div class="block col-sm-3">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $wt_cozy['cozy_logo']['url']?>" alt="Cozy Logo" /></a>
                <br><br>
                <p><?php echo $wt_cozy['cozy_description']?></p>
            </div>
        <!-- END INFOBOX -->
        
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