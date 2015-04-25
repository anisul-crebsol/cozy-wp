<?php

/**
 * Property Search widget class
 */

class WT_Widget_Property_Search extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_property_search', 'description' => __('Arbitrary text or HTML.'));
        parent::__construct('wt_cozy_property_search', __('Sidebar Property Search'), $widget_ops);
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
        
        /** BEGIN SIDEBAR ABOUT WIDGET */

        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

        /**
         * Filter the content of the Text widget.
         *
         * @since 2.3.0
         *
         * @param string    $widget_text The widget content.
         * @param WP_Widget $instance    WP_Widget instance.
         */
        $text = apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );

		
    }
	
    /** END SIDEBAR ABOUT WIDGET */


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
        $text = esc_textarea($instance['text']);
?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
<?php
    }
}
