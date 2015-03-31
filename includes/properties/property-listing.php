<?php
$delay = 250;
$display_posts = 6;
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

$count++;
$listing_status = wp_listings_get_status();
$listing_price = get_post_meta( $post->ID, '_listing_price', true);
$listing_address = get_post_meta( $post->ID, '_listing_address', true);
$listing_sqft = get_post_meta( $post->ID, '_listing_sqft', true );
$listing_bedrooms = get_post_meta( $post->ID, '_listing_bedrooms', true );
$listing_bathrooms = get_post_meta( $post->ID, '_listing_bathrooms', true );

if ( 1 == $count%3 ) {
        echo '<div class="clearfix"></div>';
    }
?>
<div class="item col-md-4"><!-- Set width to 4 columns for grid view mode only -->
	<div class="image">
		<a href="<?php the_permalink(); ?>">
			<span class="btn btn-default"><i class="fa fa-file-o"></i> Details</span>
		</a>
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
		}
		else {
			echo '<img class="img-responsive" src="http://placehold.it/230x203" />';
		}
		?>
	</div>
	<div class="price">
		<i class="fa fa-home"></i><?php if('' != $listing_status) echo $listing_status; ?>
		<?php if($listing_price) echo "<span>$listing_price</span>"; ?>
	</div>
	<div class="info">
		<h3>
			<a href="<?php the_permalink(); ?>">
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
			</a>
			<?php if($listing_address) echo "<small>$listing_address</small>"; ?>
		</h3>
		<p><?php the_excerpt() ?></p>
	
		<ul class="amenities">
			<?php if($listing_sqft) { ?><li><i class="icon-area"></i> <?php echo "$listing_sqft Sq Ft"; ?></li><?php } ?>
			<?php if($listing_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $listing_bedrooms; ?></li><?php } ?>
			<?php if($listing_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $listing_bathrooms; ?></li><?php } ?>
		</ul>
	</div>
</div>
<?php endwhile; endif; wp_reset_query(); ?>