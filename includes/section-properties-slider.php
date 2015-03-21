<?php global $wt_cozy; ?>
	<?php if ($wt_cozy['section_properties_display']) : ?>
		<div class="parallax pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">New Properties Available</h1>
						
						<div id="new-properties-slider" class="owl-carousel carousel-style1">

							<?php
							$delay = 250;
							//$display_posts = get_option();
							$listing_args = array(
								'post_type' => 'listing',
								'tax_query'	=> array(
									array(
										'taxonomy'	=> 'status',
										'field'		=> 'slug',
										'terms'		=> array( 'featured' ),
										'operator'	=> 'NOT IN',
									),
								),
								'showposts' => 9 //$display_posts
							);
							query_posts($listing_args);
							if (have_posts()) : while (have_posts()) : the_post();
							
							$listing_status = wp_listings_get_status();
							$listing_price = get_post_meta( $post->ID, '_listing_price', true);
							$listing_address = get_post_meta( $post->ID, '_listing_address', true);
							$listing_sqft = get_post_meta( $post->ID, '_listing_sqft', true );
							$listing_bedrooms = get_post_meta( $post->ID, '_listing_bedrooms', true );
							$listing_bathrooms = get_post_meta( $post->ID, '_listing_bathrooms', true );
							?>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="<?php echo $delay; ?>">
								<div class="image">
									<a href="<?php the_permalink(); ?>" class="info">
										<?php 
											$listing_title = get_the_title();
											$title_limit = 35;
											$dots = " ...";
											if(strlen($listing_title) <= $title_limit) {
												echo "<h3>" . $listing_title . "</h3>";
											} else {
												echo "<h3>" . substr($listing_title, 0, $title_limit) . $dots . "</h3>";
											}
										?>
										<?php if($listing_address) echo "<span class='location'>$listing_address</span>"; ?>
									</a>
									<?php
									if ( has_post_thumbnail() ) {
										echo get_the_post_thumbnail($post->ID, array( 270, 238 ));
									}
									else {
										echo '<img src="http://placehold.it/270x238" />';
									}
									?>
								</div>
								<div class="price">
									<i class="fa fa-home"></i><?php if('' != $listing_status) echo $listing_status; ?>
									<?php if($listing_price) echo "<span>$listing_price</span>"; ?>
								</div>
								<ul class="amenities">
									<?php if($listing_sqft) { ?><li><i class="icon-area"></i> <?php echo "$listing_sqft Sq Ft"; ?></li><?php } ?>
									<?php if($listing_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $listing_bedrooms; ?></li><?php } ?>
									<?php if($listing_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $listing_bathrooms; ?></li><?php } ?>
								</ul>
							</div>
							<?php $delay+=200; endwhile; endif; wp_reset_query(); ?>

						</div>
						
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>