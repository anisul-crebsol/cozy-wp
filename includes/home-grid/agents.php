<?php global $wt_cozy; ?>
<div id="agents" class="col-sm-8">
	<h1 class="section-title" data-animation-direction="from-left" data-animation-delay="50">Our Agents</h1>
	
	<ul class="agency-detail-agents clearfix">
    <?php 
        $limit = $wt_cozy['section_feature_number_grid'];
    	$args = array(
            'post_type'         => 'agent',
            'post_status'       => 'publish',
            'posts_per_page'    => $limit,
        );
        $agent_query = new WP_Query( $args );?>
    <?php while($agent_query->have_posts()): $agent_query->the_post(); ?>

		<li class="col-lg-6" data-animation-direction="from-left" data-animation-delay="250">
			<a href="<?php echo get_page_link(); ?>">							
			<img src="<?php echo $text = get_post_meta( $post->ID, '_wt_agent_img', true ); ?>" alt=""></a>
			<div class="info">
				<a href="<?php echo get_page_link(); ?>"><h3><?php the_title() ?></h3></a>
				<span class="location"><?php echo $text = get_post_meta( $post->ID, '_wt_agent_address', true ); ?></span>
				<p><?php echo $text = get_post_meta( $post->ID, '_wt_agent_description', true ); ?></p>
				<a href="<?php echo get_page_link(); ?>">Learn More &raquo;</a>
			</div>
		</li>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

	</ul>
	
	<div class="col-lg-12 center">
		<a href="agent-listing.html" class="btn btn-default-color">See all Agents</a>
	</div>
	<br>
</div>