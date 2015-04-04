<?php global $wt_cozy; ?>
<div class="col-sm-12">
	<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_feature_title']?></h1>
	<?php if ($wt_cozy['section_feature_display']) : ?>
    <?php 
        $limit = $wt_cozy['section_feature_number_grid'];
    	$args = array(
            'post_type'         => 'feature',
            'post_status'       => 'publish',
            'posts_per_page'    => $limit,
        );
        $feature_query = new WP_Query( $args );?>
    <?php while($feature_query->have_posts()): $feature_query->the_post(); ?>
	<div class="feature col-sm-3" data-animation-direction="from-bottom" data-animation-delay="250">
		<i class="fa <?php echo $text = get_post_meta( $post->ID, '_wt_feature_icon_text', true ); ?>"></i>
		<h3><?php the_title() ?></h3>
		<p><?php echo $text = get_post_meta( $post->ID, '_wt_feature_description', true ); ?></p>
		<a href="<?php echo get_page_link(); ?>" class="btn btn-default-color">Read More</a>
	</div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
	<?php endif; ?>
</div>