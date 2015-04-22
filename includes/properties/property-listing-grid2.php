<div id="property-listing" class="grid-style1 clearfix">
	<div class="row">
<?php
$delay = 250;
$display_posts = 6;
$count = 0;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$property_args = array(
	'post_type' => 'property',
	'paged' => $paged,
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
$property_description = get_post_meta( $post->ID, '_wt_property_description', true );
$property_price = get_post_meta( $post->ID, '_wt_property_price', true);
$property_address = get_post_meta( $post->ID, '_wt_property_address', true);
$property_area = get_post_meta( $post->ID, '_wt_property_area', true );
$property_bedrooms = get_post_meta( $post->ID, '_wt_property_bedrooms', true );
$property_bathrooms = get_post_meta( $post->ID, '_wt_property_bathrooms', true );

$clearFix = @( $count%3 == 0 ?  '<div class="clearfix"></div>' : ''); echo $clearFix;  ?>
<div class="item col-sm-4"><!-- Set width to 4 columns for grid view mode only -->
	<div class="image">
		<a href="<?php the_permalink(); ?>">
			<h3>
			<?php the_title(); ?>
			</h3>
			<?php if($property_address) echo "<span class='location'>$property_address</span>"; ?>
		</a>
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
	<ul class="amenities">
		<?php if($property_area) { ?><li><i class="icon-area"></i> <?php echo "$property_area"; ?></li><?php } ?>
		<?php if($property_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $property_bedrooms; ?></li><?php } ?>
		<?php if($property_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $property_bathrooms; ?></li><?php } ?>
	</ul>
</div>
<?php $count++; endwhile; endif; ?>
	</div>
</div>

