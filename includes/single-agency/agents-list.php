<?php global $wt_cozy; ?>
<h1 class="section-title">Our Agents</h1>
<ul class="agency-detail-agents clearfix">
    <?php 
        $limit = $wt_cozy['section_feature_number_grid'];
    	$args = array(
            'post_type'         => 'agent',
            'post_status'       => 'publish',
            'posts_per_page'    => $limit,
        );
        $agent_query = new WP_Query( $args );?>
    <?php while($agent_query->have_posts()): $agent_query->the_post(); 

	    $agent_image = get_post_meta( $post->ID, '_wt_agent_img', true );
		$agent_address = get_post_meta( $post->ID, '_wt_agent_address', true );
		$agent_description = get_post_meta( $post->ID, '_wt_agent_description', true );
    ?>
	<li class="col-lg-6">
		<a href="<?php echo get_page_link(); ?>">							
		<img src="<?php echo $agent_image; ?>" alt=""></a>
		<div class="info">
			<a href="<?php echo get_page_link(); ?>"><h3><?php the_title() ?></h3></a>
			<span class="location"><?php echo $agent_address; ?></span>
			<p><?php echo $agent_description; ?></p>
			<a href="<?php echo get_page_link(); ?>">Learn More &raquo;</a>
		</div>
	</li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</ul>