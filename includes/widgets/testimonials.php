<?php

/**
 * Testimonials widget class
 */

class WT_Widget_Testimonials extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    public function __construct() {
        $widget_ops = array('classname' => 'widget_testimonials', 'description' => __('Arbitrary text or HTML.'));
        parent::__construct('wt_cozy_Testimonials', __('Sidebar Testimonials'), $widget_ops);
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

<!-- BEGIN TESTIMONIALS -->
<div id="testimonials" class="col-sm-12" data-animation-direction="from-bottom" data-animation-delay="200">
	<h2 class="section-title"><?php echo $wt_cozy['section_testimonial_title']?></h2>
	
	<div id="testimonials-slider" class="owl-carousel testimonials">

        <?php 
            $limit = $wt_cozy['section_testimonial_number'];
        	$args = array(
                'post_type'         => 'testimonial',
                'post_status'       => 'publish',
                'posts_per_page'    => $limit,
            );
            $testimonial_query = new WP_Query( $args );?>

        <?php while($testimonial_query->have_posts()): $testimonial_query->the_post();  ?>

		<div class="item">
			<blockquote class="text">
				<p><?php echo $text = get_post_meta( get_the_ID(), '_wt_test_description', true ); ?></p>
			</blockquote>
			<div class="author">
				<img src="<?php echo $text = get_post_meta( get_the_ID(), '_wt_test_image', true ); ?>" alt="" />
				<div>
					<?php echo $text = get_post_meta( get_the_ID(), '_wt_test_name', true ); ?><br>
					<span><?php echo $text = get_post_meta( get_the_ID(), '_wt_test_designation', true ); ?></span>
				</div>
			</div>
		</div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

	</div>
</div>
<!-- END TESTIMONIALS -->

        
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

