<?php global $wt_cozy; ?>
<div id="property-gallery2" class="property-gallery2">
	<div class="item">
		<h1 class="section-title" data-animation-direction="from-left" data-animation-delay="50"><?php echo $wt_cozy['section_gallery_title']?></h1>
		<p class="section-text" data-animation-direction="from-left" data-animation-delay="250"><?php echo $wt_cozy['cozy_gallery_description']?></p>
	</div>
	<?php
	$display_posts = 5;
	$listing_args = array(
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
	query_posts($listing_args);
	if (have_posts()) : while (have_posts()) : the_post();
	
	$property_address = get_post_meta( $post->ID, '_wt_property_address', true);
	?>					
	<div class="item" data-animation-direction="from-bottom" data-animation-delay="450">
		<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum">
			<h3><?php the_title() ?></h3>
			<?php if($property_address) echo "<span class='location'>$property_address</span>"; ?>
		</a>
		<?php echo wt_cozy_thumbnail('246x236'); ?>
	</div>
	<?php endwhile; endif; wp_reset_query(); ?>
</div>