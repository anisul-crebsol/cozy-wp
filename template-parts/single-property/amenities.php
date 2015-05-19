<?php global $wt_cozy; ?>
<ul class="property-amenities-list">
	<?php 

    	$args = array(
            'post_type'         => 'property',
            'post_status'       => 'publish',
            'posts_per_page'    => -1,            
        );

        $property_query = new WP_Query( $args );
        $thisPostID = $post->ID;

       	while($property_query->have_posts()): $property_query->the_post(); 
       	$postID = $post->ID;

       	if($postID == $thisPostID): $className = 'enabled'; else : $className = 'disabled'; endif;

     	  $amenities = wp_get_post_terms($postID, 'property-amenities', array("fields" => "names"));

		    foreach($amenities as $amenity):
			
				echo '<li class="'.$className.'">'.$amenity.'</li>';
			
      ?>
      
	<?php endforeach;?>
	<?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
</ul>
