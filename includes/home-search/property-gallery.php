<?php global $wt_cozy; ?>
<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_gallery_title']?></h1>
<p class="center" data-animation-direction="from-bottom" data-animation-delay="150"><?php echo $wt_cozy['cozy_gallery_description']?></p>

<div id="property-gallery" class="owl-carousel property-gallery">
    <?php 
        $limit = $wt_cozy['property_gallery_number'];
    	$args = array(
            'post_type'         => 'property',
            'post_status'       => 'publish',
            'posts_per_page'    => $limit,
        );
        $property_query = new WP_Query( $args );?>
    <?php while($property_query->have_posts()): $property_query->the_post(); 
    ?>
	<div class="item" data-animation-direction="from-bottom" data-animation-delay="350">
		<a href="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_large' ); echo $url = $thumb['0']; ?>" data-gal="prettyPhoto[gallery]" title="<?php echo $title = get_post(get_post_thumbnail_id())->post_title;?>"><span class="btn btn-default">+</span></a>
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
		}
		else {
			echo '<img src="http://placehold.it/246x216" />';
		}
		?>
	</div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>