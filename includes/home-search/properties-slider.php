<?php global $wt_cozy; ?>
	<?php if ($wt_cozy['section_properties_display']) : ?>
		<div class="parallax pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_properties_title']?></h1>
						
						<div id="new-properties-slider" class="owl-carousel carousel-style1">

							<?php
							$delay = 250;
							$display_posts = $wt_cozy['section_properties_number'];
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
							$property_address = get_post_meta( $post->ID, '_wt_property_address', true);
							$property_sqft = get_post_meta( $post->ID, '_wt_property_area', true );
							$property_bedrooms = get_post_meta( $post->ID, '_wt_property_bedrooms', true );
							$property_bathrooms = get_post_meta( $post->ID, '_wt_property_bathrooms', true );
							?>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="<?php echo $delay; ?>">
								<div class="image">
									<a href="<?php the_permalink(); ?>" class="info">
										<?php 
											$property_title = get_the_title();
											$title_limit = 35;
											$dots = " ...";
											if(strlen($property_title) <= $title_limit) {
												echo "<h3>" . $property_title . "</h3>";
											} else {
												echo "<h3>" . substr($property_title, 0, $title_limit) . $dots . "</h3>";
											}
										?>
										<?php if($property_address) echo "<span class='location'>$property_address</span>"; ?>
									</a>
									<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
									}
									else {
										echo '<img src="http://placehold.it/270x238" />';
									}
									?>
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
								<ul class="amenities">
									<?php if($property_sqft) { ?><li><i class="icon-area"></i> <?php echo "$property_sqft"; ?></li><?php } ?>
									<?php if($property_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $property_bedrooms; ?></li><?php } ?>
									<?php if($property_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $property_bathrooms; ?></li><?php } ?>
								</ul>
							</div>
							<?php $delay+=200; endwhile; endif; wp_reset_query(); ?>

						</div>
						
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>