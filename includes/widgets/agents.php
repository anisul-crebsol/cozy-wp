<?php

/**
 * About widget class
 */

class WT_Widget_Agents extends WP_Widget {


    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_agents', 'description' => __('Arbitrary text or HTML.'));
        parent::__construct('wt_cozy_about', __('Sidebar Agents'), $widget_ops);
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

    <!-- BEGIN SIDEBAR AGENTS -->
    <div class="col-sm-12">
        <h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Our Agents</h2>
        <ul class="agency-detail-agents">

        <?php 
            $limit = $wt_cozy['section_feature_number_slider'];
            $args = array(
                'post_type'         => 'agent',
                'post_status'       => 'publish',
                'posts_per_page'    => $limit,
            );
            $agent_query = new WP_Query( $args );?>
        <?php while($agent_query->have_posts()): $agent_query->the_post(); ?>

            <li class="col-lg-12" data-animation-direction="from-bottom" data-animation-delay="200">
                <a href="<?php echo get_page_link(); ?>"><img src="<?php echo $text = get_post_meta( $post->ID, '_wt_agent_img', true ); ?>" alt="" /></a>
                <div class="info">
                    <a href="<?php echo get_page_link(); ?>"><h3><?php the_title() ?></h3></a>
                    <span class="location"><?php echo $text = get_post_meta( $post->ID, '_wt_agent_address', true ); ?></span>
                    <p><?php echo $text = get_post_meta( $post->ID, '_wt_agent_description', true ); ?></p>
                    <a href="<?php echo get_page_link(); ?>">Learn More &raquo;</a>
                </div>
            </li>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        </ul>
    </div>
    <!-- END SIDEBAR AGENTS -->
    

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
        if ( current_user_can('unfiltered_html') )
            $instance['text'] =  $new_instance['text'];
        else
            $instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) ); // wp_filter_post_kses() expects slashed
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

        <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

        <p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label></p>
<?php
    }
}
