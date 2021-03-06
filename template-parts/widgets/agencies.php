<?php

/**
 * Agencies widget class
 */

class WT_Cozy_Widget_Agencies extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_agencies', 'description' => __('Arbitrary text or HTML.', 'cozy'));
        parent::__construct('wt_cozy_agencies', __('Cozy Sidebar Agencies', 'cozy'), $widget_ops);
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

        global $wt_cozy;

        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
        ?>
        <!-- BEGIN AGENCIES -->
        <div id="agencies" class="col-sm-12" data-animation-direction="fade" data-animation-delay="250">
        <?php
            if ( ! empty( $title ) ) {
            echo '<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">' . $title . '</h2>';
        }
        ?>

            <div class="mapborder">
                <div id="map_agency" class="gmap"></div>
            </div>
            <select id="agency" name="agency" data-placeholder="Choose an agency">
                <option value="">Select one</option>
                <!-- The list of agencies will be automatically created. -->
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
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['filter'] = isset($new_instance['filter']);
        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */

    public function form( $instance ) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '' ) );
        $title = strip_tags($instance['title']);

?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','cozy'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

<?php
    }
}