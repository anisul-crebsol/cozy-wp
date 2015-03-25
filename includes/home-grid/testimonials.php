<?php global $wt_cozy; ?>
<div id="testimonials" class="col-sm-4">
	<h2 class="section-title" data-animation-direction="from-right" data-animation-delay="50">Testimonials</h2>
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
			<blockquote class="text" data-animation-direction="from-right" data-animation-delay="250">
				<p><?php echo $text = get_post_meta( $post->ID, '_wt_test_description', true ); ?></p>
			</blockquote>
			<div class="author" data-animation-direction="from-right" data-animation-delay="450">
				<img src="<?php echo $text = get_post_meta( $post->ID, '_wt_test_image', true ); ?>" alt="" />
				<div>
					<?php echo $text = get_post_meta( $post->ID, '_wt_test_name', true ); ?><br>
					<span><?php echo $text = get_post_meta( $post->ID, '_wt_test_designation', true ); ?></span>
				</div>
			</div>
		</div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
		
	</div>
</div>