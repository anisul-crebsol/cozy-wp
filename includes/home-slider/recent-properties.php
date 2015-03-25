<?php global $wt_cozy; ?>
<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Recent Properties</h1>

<div class="grid-style1 clearfix">

<?php 
    $limit = $wt_cozy['section_grid_number'];
	$args = array(
        'post_type'         => 'listing',
        'post_status'       => 'publish',
        'posts_per_page'    => 6,
    );
    $listing_query = new WP_Query( $args );?>
<?php while($listing_query->have_posts()): $listing_query->the_post(); 

	$listing_status = wp_listings_get_status();
	$listing_price = get_post_meta( $post->ID, '_listing_price', true);
	$listing_address = get_post_meta( $post->ID, '_listing_address', true);
	$listing_sqft = get_post_meta( $post->ID, '_listing_sqft', true );
	$listing_bedrooms = get_post_meta( $post->ID, '_listing_bedrooms', true );
	$listing_bathrooms = get_post_meta( $post->ID, '_listing_bathrooms', true );

?>	
	<div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="200">
		<div class="image">
			<a href="<?php the_permalink(); ?>">
				<?php 
					$listing_title = get_the_title();
					$title_limit = 22;
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
				echo get_the_post_thumbnail($post->ID, array( 220, 194 ));
			}
			else {
				echo '<img src="http://placehold.it/220x194" />';
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

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

	
</div>