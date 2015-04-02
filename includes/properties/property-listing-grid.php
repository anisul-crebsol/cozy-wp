<?php
$delay = 250;
$display_posts = 6;
$count = 0;
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
	'showposts' => $display_posts
);
query_posts($listing_args);
if (have_posts()) : while (have_posts()) : the_post();

$listing_status = wp_listings_get_status();
$listing_price = get_post_meta( $post->ID, '_listing_price', true);
$listing_address = get_post_meta( $post->ID, '_listing_address', true);
$listing_sqft = get_post_meta( $post->ID, '_listing_sqft', true );
$listing_bedrooms = get_post_meta( $post->ID, '_listing_bedrooms', true );
$listing_bathrooms = get_post_meta( $post->ID, '_listing_bathrooms', true );

$clearFix = @( $count%3 == 0 ?  '<div class="clearfix"></div>' : ''); echo $clearFix;  ?>

<div class="item col-md-4"><!-- Set width to 4 columns for grid view mode only -->
	<div class="image">
		<a href="properties-detail.html">
			<span class="btn btn-default"><i class="fa fa-file-o"></i> Details</span>
		</a>
		<img src="http://placehold.it/760x670" alt="" />
	</div>
	<div class="price">
		<i class="fa fa-home"></i>For Sale
		<span>$950,000</span>
	</div>
	<div class="info">
		<h3>
			<a href="<?php the_permalink(); ?>">
			<?php 
				$listing_title = get_the_title();
				$title_limit = 50;
				$dots = " ...";
				if(strlen($listing_title) <= $title_limit) {
					echo $listing_title ;
				} else {
					echo substr($listing_title, 0, $title_limit) . $dots ;
				}
			?>
			</a>
			<?php if($listing_address) echo "<small>$listing_address</small>"; ?>
		</h3>
		<?php the_excerpt() ?>
	
		<ul class="amenities">
			<?php if($listing_sqft) { ?><li><i class="icon-area"></i> <?php echo "$listing_sqft Sq Ft"; ?></li><?php } ?>
			<?php if($listing_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $listing_bedrooms; ?></li><?php } ?>
			<?php if($listing_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $listing_bathrooms; ?></li><?php } ?>
		</ul>
	</div>
</div>
<?php $count++; endwhile; endif; ?>
<?php wp_reset_query(); ?>