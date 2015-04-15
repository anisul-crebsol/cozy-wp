<?php
$delay = 250;
$display_posts = 3;
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

$count++;
$property_status = get_the_terms($post->ID, 'property-status', true);
$property_description = get_post_meta( $post->ID, '_wt_property_description', true );
$property_price = get_post_meta( $post->ID, '_wt_property_price', true);
$property_address = get_post_meta( $post->ID, '_wt_property_address', true);
$property_sqft = get_post_meta( $post->ID, '_wt_property_square_feet', true );
$property_bedrooms = get_post_meta( $post->ID, '_wt_property_bedrooms', true );
$property_bathrooms = get_post_meta( $post->ID, '_wt_property_bathrooms', true );

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
		<h3>
			<a href="<?php the_permalink(); ?>">
			<?php 
				$property_title = get_the_title();
				$title_limit = 50;
				$dots = " ...";
				if(strlen($property_title) <= $title_limit) {
					echo $property_title ;
				} else {
					echo substr($property_title, 0, $title_limit) . $dots ;
				}
			?>
			</a>
			<?php if($property_address) echo "<small>$property_address</small>"; ?>
		</h3>
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
		<ul class="amenities">
			<?php if($property_sqft) { ?><li><i class="icon-area"></i> <?php echo "$property_sqft"; ?></li><?php } ?>
			<?php if($property_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $property_bedrooms; ?></li><?php } ?>
			<?php if($property_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $property_bathrooms; ?></li><?php } ?>
		</ul>
	</div>
</div>
<?php endwhile; endif; ?>