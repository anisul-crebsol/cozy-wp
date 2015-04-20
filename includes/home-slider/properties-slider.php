<?php global $wt_cozy; ?>
<div class="parallax pattern-bg" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Featured Properties</h1>
				
				<div id="featured-properties-slider" class="owl-carousel fullwidthsingle" data-animation-direction="from-bottom" data-animation-delay="250">
					<?php
					$delay = 250;
					$display_posts = 3;
					$property_args = array(
						'post_type' => 'property',
						'tax_query'	=> array(
							array(
								'taxonomy'	=> 'property-status',
								'field'		=> 'slug',
								'terms'		=> array( 'featured' ),
								'operator'	=> 'NOT IN',
							),
						),
						'showposts' => $display_posts
					);
					query_posts($property_args);
					if (have_posts()) : while (have_posts()) : the_post();
					
					$property_status = get_the_terms($post->ID, 'property-status', true);
					$property_price = get_post_meta( $post->ID, '_wt_property_price', true);
					$property_description = get_post_meta( $post->ID, '_wt_property_description', true );
					?>
					<div class="item">
						<div class="image">
							<a href="<?php the_permalink(); ?>"></a>
							<img src="http://placehold.it/760x670" alt="" />
						</div>
						<div class="price">
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
							<?php if($property_price) echo "<span>$property_price</span>"; ?>
						</div>
						<div class="info">
							<?php the_title( sprintf( '<h3><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
							<p>
							<?php 
								$description_limit = 190;
								if(strlen($property_description) <= $description_limit) {
									echo $property_description;
								} else {
									echo substr($property_description, 0, $description_limit);
								}
							?>
							</p>
							<a href="<?php the_permalink(); ?>" class="btn btn-default">Read More</a>
						</div>
					</div>
					
					<?php $delay+=50; endwhile; endif; wp_reset_query(); ?>

				</div>
				
			</div>
		</div>
	</div>
</div>