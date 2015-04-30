<?php

/**
 * Latest News widget class
 */

class WT_Widget_Latest_News extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_latest_news', 'description' => __('Arbitrary text or HTML.'));
        parent::__construct('wt_cozy_latest_news', __('Sidebar Latest News'), $widget_ops);
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

        echo '<div class="col-sm-12">';
        if ( ! empty( $title ) ) {
            echo '<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">' . $title . '</h2>';
        } 
        
        echo '</div>';

        ?>
<!-- BEGIN LATEST NEWS -->
<?php 
    $limit = 3;
    $count = 0;
    $args = array(
        'post_status'       => 'publish',
        'posts_per_page'    => $limit,
    );
    $blog_query = new WP_Query( $args );?>
<?php while($blog_query->have_posts()): $blog_query->the_post(); ?>
<ul class="latest-news">
    <li class="col-md-12">
        <div class="image">
            <a href="<?php the_permalink(); ?>"></a>
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
                }
                else {
                    echo '<img src="http://placehold.it/100x100" />';
                }
                ?>
        </div>
        
        <ul class="top-info">
            <li><i class="fa fa-calendar"></i> <?php echo get_post_time('F j, Y'); ?></li>
        </ul>
            
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </li>
</ul>
<?php $count++; endwhile; ?>
<!-- END LATEST NEWS -->
<?php
		
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
?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

<?php
    }
}
