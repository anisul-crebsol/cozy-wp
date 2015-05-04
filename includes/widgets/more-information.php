<?php

class WT_Widget_more_information extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
                'cozy_widget_more_information', // Base ID
                __('More Information', 'cozy'), // Name
                array('description' => __('', 'cozy'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        $tabname = !empty($instance['tabname']) ? $instance['tabname'] : __('Menu Name', 'cozy');

        $title = !empty($instance['title']) ? $instance['title'] : __('New title', 'cozy');
        $img_url = !empty($instance['img_url']) ? $instance['img_url'] : __('Image Url', 'cozy');
        $more_info_description = !empty($instance['more_info_desc']) ? $instance['more_info_desc'] : __('Description', 'cozy');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('tabname'); ?>"><?php _e('Menu Name:','cozy'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('tabname'); ?>" name="<?php echo $this->get_field_name('tabname'); ?>" type="text" value="<?php echo esc_attr($tabname); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','cozy'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('img_url'); ?>"><?php _e('Image Url:','cozy'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('img_url'); ?>" name="<?php echo $this->get_field_name('img_url'); ?>" type="url" value="<?php echo esc_attr($img_url); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('more_info_desc'); ?>"><?php _e('Description:','cozy'); ?></label> 
            <textarea id="<?php echo $this->get_field_id('more_info_desc'); ?>" name="<?php echo $this->get_field_name('more_info_desc'); ?>"><?php echo esc_attr($more_info_description); ?></textarea>
        </p>
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
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['tabname'] = (!empty($new_instance['tabname']) ) ? strip_tags($new_instance['tabname']) : '';
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        $instance['img_url'] = (!empty($new_instance['img_url']) ) ? strip_tags($new_instance['img_url']) : '';
        $instance['more_info_desc'] = (!empty($new_instance['more_info_desc']) ) ? strip_tags($new_instance['more_info_desc']) : '';

        return $instance;
    }

}
