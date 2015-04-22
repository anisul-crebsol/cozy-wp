<?php global $wt_cozy; ?>
<div id="home-grid">
	<div id="freewall" class="free-wall">

	<?php if ($wt_cozy['section_feature_display']) : ?>
    <?php 
        $limit = $wt_cozy['section_grid_number'];
    	$args = array(
            'post_type'         => 'property',
            'post_status'       => 'publish',
            'posts_per_page'    => 15,
        );
        $listing_query = new WP_Query( $args );?>
    <?php while($listing_query->have_posts()): $listing_query->the_post(); 

		$property_status = get_the_terms($post->ID, 'property-status', true);
		$property_price = get_post_meta( $post->ID, '_wt_property_price', true);
		$property_address = get_post_meta( $post->ID, '_wt_property_address', true);
		$property_area = get_post_meta( $post->ID, '_wt_property_area', true );
    ?>
		<div class="item">
			<a class="info" href="<?php the_permalink(); ?>">
				<span class="price">
					<i class="fa fa-home"></i> 
						<?php 
						if ( $property_status && ! is_wp_error( $property_status ) ) : 
						$draught_links = array();
						foreach ( $property_status as $status ) {
							$draught_links[] = $status->name;
						}														
						echo $on_draught = join( ", ", $draught_links );
						endif;
						?>
					<span><?php echo $property_price; ?></span>
				</span>
				<h3><?php the_title() ?></h3>
				<span class="location"><?php echo $property_address; ?></span>
			</a>
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
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