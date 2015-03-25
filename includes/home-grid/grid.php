<?php global $wt_cozy; ?>
<div id="home-grid">
	<div id="freewall" class="free-wall">

	<?php if ($wt_cozy['section_feature_display']) : ?>
    <?php 
        $limit = $wt_cozy['section_grid_number'];
    	$args = array(
            'post_type'         => 'listing',
            'post_status'       => 'publish',
            'posts_per_page'    => 15,
        );
        $listing_query = new WP_Query( $args );?>
    <?php while($listing_query->have_posts()): $listing_query->the_post(); ?>

		<div class="item">
			<a class="info" href="properties-detail.html">
				<span class="price">
					<i class="fa fa-home"></i><?php echo wp_listings_get_status();?><span><?php echo get_post_meta( $post->ID, '_listing_price', true);?></span>
				</span>
				<h3><?php the_title() ?></h3>
				<span class="location"><?php echo get_post_meta( $post->ID, '_listing_address', true);?></span>
			</a>
			<?php
			if ( has_post_thumbnail() ) {
				echo get_the_post_thumbnail($post->ID, array( 760, 670 ));
			}
			else {
				echo '<img src="http://placehold.it/760x670" />';
			}
			?>
		</div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
	<?php endif; ?>

	</div>
</div>