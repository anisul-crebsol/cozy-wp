<?php global $wt_cozy; ?>
<?php
	$property_types = wp_get_post_terms($post->ID, 'wt-property-types', array("fields" => "names"));
	$property_id = get_post_meta( $post->ID, '_wt_property_id', true);
	$property_address = get_post_meta( $post->ID, '_wt_property_address', true);
	$property_city = get_post_meta( $post->ID, '_wt_property_city', true);
	$property_area = get_post_meta( $post->ID, '_wt_property_area', true );
	$property_area_measurement = get_post_meta( $post->ID, '_wt_property_area_measurement', true );
	$property_bedrooms = get_post_meta( $post->ID, '_wt_property_bedrooms', true );
	$property_bathrooms = get_post_meta( $post->ID, '_wt_property_bathrooms', true );
?>					
<h1 class="property-title"><?php the_title(); ?> <small><?php echo $property_address; ?>, <?php echo $property_city; ?></small></h1>

<div class="property-topinfo">
	<ul class="amenities">
		<li><i class="icon-apartment"></i>
		<?php $terms = wp_get_post_terms($post->ID, 'wt-property-types', array("fields" => "names"));
			$i=0;
			foreach($terms as $term):
				if (count($terms) - $i < 2):
					echo $term;
				else :
					echo $term.','.' ';
				endif;
				$i++;
			 endforeach;
		 ?>
		</li>
		<?php if($property_area) { ?><li><i class="icon-area"></i> <?php echo $property_area . ' '. $property_area_measurement ; ?></li><?php } ?>
		<?php if($property_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $property_bedrooms; ?></li><?php } ?>
		<?php if($property_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $property_bathrooms; ?></li><?php } ?>
	</ul>
	
	<div id="property-id"><?php _e( 'ID: #', 'cozy' );?><?php echo $property_id; ?></div>
</div>