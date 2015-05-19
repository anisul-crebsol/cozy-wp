<?php global $wt_cozy; ?>
<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_properties_title']?></h1>
<div id="latest-properties-slider" class="owl-carousel fullwidthsingle2" data-animation-direction="from-bottom" data-animation-delay="250">
	<?php
	$display_posts = 3;
	$property_args = array(
		'post_type' => 'property',
		'showposts' => $display_posts
	);
	query_posts($property_args);
	if (have_posts()) : while (have_posts()) : the_post();
	
	$property_status = get_the_terms($post->ID, 'property-status', true);
	$property_description = do_shortcode(wpautop(get_post_meta( $post->ID, '_wt_property_description', true)));
	$property_price = get_post_meta( $post->ID, '_wt_property_price', true);
	if ($property_price) : $property_price = $property_price; else : $property_price = 0; endif;
	$property_price_eng = number_format($property_price);
	$property_price_symble = get_post_meta( $post->ID, '_wt_property_price_symble', true);
	$property_address = get_post_meta( $post->ID, '_wt_property_address', true);
	$property_area = get_post_meta( $post->ID, '_wt_property_area', true );
	$property_area_measurement = get_post_meta( $post->ID, '_wt_property_area_measurement', true );
	$property_bedrooms = get_post_meta( $post->ID, '_wt_property_bedrooms', true );
	$property_bathrooms = get_post_meta( $post->ID, '_wt_property_bathrooms', true );
	?>
	<div class="item">
		<div class="image">
			<a href="<?php the_permalink(); ?>">
				<?php echo wt_cozy_thumbnail('760x670'); ?>
			</a>
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
			<?php if($property_price) echo "<span>$property_price_symble $property_price_eng</span>"; ?>
		</div>
		<div class="info">
			<div class="item-title col-md-8">
				<h3><a href="<?php the_permalink(); ?>">
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
				</a></h3>
				<?php if($property_address) echo "<span class='location'>$property_address</span>"; ?>
			</div>
			<ul class="amenities col-md-4">
				<?php if($property_area) { ?><li><i class="icon-area"></i> <?php echo $property_area . ' '. $property_area_measurement ; ?></li><?php } ?>
				<?php if($property_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $property_bedrooms; ?></li><?php } ?>
				<?php if($property_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $property_bathrooms; ?></li><?php } ?>
			</ul>
			<div class="description">
				<p class="col-md-9">
				<?php 
					$description_limit = 120;
					$dots = " ...";
					if(strlen($property_description) <= $description_limit) {
						echo $property_description;
					} else {
						echo substr($property_description, 0, $description_limit) . $dots;
					}
				?>
				</p>
				<p class="col-md-3 right">
					<a href="<?php the_permalink(); ?>" class="btn btn-default-color"><?php _e( 'Read More', 'cozy' );?></a>
				</p>
			</div>
		</div>
	</div>
	<?php endwhile; endif; wp_reset_query(); ?>
</div>