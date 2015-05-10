<?php

/**
 * About widget class
 */

class WT_Widget_Agents extends WP_Widget {


    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_agents', 'description' => __('Arbitrary text or HTML.', 'cozy'));
        parent::__construct('wt_cozy_agents', __('Sidebar Agents', 'cozy'), $widget_ops);
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
?>
    <!-- BEGIN SIDEBAR AGENTS -->
    <div class="col-sm-12">
       <?php 
            $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
            if ( ! empty( $title ) ) {
            echo '<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">' . $title . '</h2>';
            } 
        ?>
        <ul class="agency-detail-agents">

        <?php 
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 4;
        if ( ! $number )
            $number = 4;
            $args = array(
                'post_type'         => 'agent',
                'post_status'       => 'publish',
                'posts_per_page'    => $number,
            );
            $agent_query = new WP_Query( $args );?>
        <?php while($agent_query->have_posts()): $agent_query->the_post(); ?>

            <li class="col-lg-12" data-animation-direction="from-bottom" data-animation-delay="200">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $text = get_post_meta( get_the_ID(), '_wt_agent_img', true ); ?>" alt="" /></a>
                <div class="info">

                    <?php if ( is_page_template('page-home-search.php')) {
                         the_title( sprintf( '<h3><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' );
                    } 
                    else {
                    the_title( sprintf( '<a href="%s"><h3>', esc_url( get_permalink() ) ), '</h3></a>' );
                    }
                    ?>
                    <span class="location"><?php echo $text = get_post_meta( get_the_ID(), '_wt_agent_address', true ); ?></span>
                    <?php 
                        $agent_description = get_post_meta( get_the_ID(), '_wt_agent_description', true );
                        $description_limit = 100;
                        if(strlen($agent_description) <= $description_limit) {
                            echo $agent_description;
                        } else {
                            echo substr($agent_description, 0, $description_limit);
                        }
                    ?>
                    <div class="clearfix"></div>
                    <a href="<?php the_permalink(); ?>"><?php _e('Learn More &raquo;', 'cozy'); ?></a>
                </div>
            </li>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        </ul>
    </div>
    <!-- END SIDEBAR AGENTS -->
    
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
        $instance['number'] = absint( $new_instance['number'] );
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
        $number = isset( $instance['number'] ) ? absint( $instance['number'] ) : 4;
?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','cozy'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

        <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of agents to show:', 'cozy' ); ?></label>
        <input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
<?php
    }
}
