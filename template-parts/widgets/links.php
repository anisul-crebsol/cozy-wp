<?php

/**
 * Info widget class
 */

class WT_Cozy_Widget_Links extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_links', 'description' => __('Arbitrary text or HTML.', 'cozy'));
        parent::__construct('wt_cozy_links', __('Cozy Footer Helpful Links', 'cozy'), $widget_ops);
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
        <!-- BEGIN HELPFUL LINKS -->
            <div class="block col-sm-3">
                <h3>Helpful Links</h3>
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'secondery',
                        'theme_location'    => 'secondery',
                        'depth'             => 0,
                        'menu_class'        => 'footer-links',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker()
                        )
                    );
                ?>
            </div>
        <!-- END HELPFUL LINKS -->
        
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