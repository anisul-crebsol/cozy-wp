<?php global $wt_cozy; ?>
<div class="sidebar col-sm-4">
	
	<!-- BEGIN SIDEBAR ABOUT -->
	<div class="col-sm-12">
		<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">About Us</h2>
		<p class="center" data-animation-direction="from-bottom" data-animation-delay="200">
			Aliquam faucibus elit sed tempus molestie, aenean sodales venenatis. 
			<strong>Vestibulum pulvinar</strong> arcu suscipit, volutpat velit nec, euismod nibh vestibulum ut 
			sodales lacus, eget mattis arcu. Curabitur quis augue magna.
			<a href="about.html">Learn More</a>
		</p>
	</div>
	<!-- END SIDEBAR ABOUT -->
	
	<!-- BEGIN SIDEBAR AGENTS -->
	<div class="col-sm-12">
		<h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Our Agents</h2>
		<ul class="agency-detail-agents">

        <?php 
            $limit = $wt_cozy['section_feature_number_slider'];
        	$args = array(
                'post_type'         => 'agent',
                'post_status'       => 'publish',
                'posts_per_page'    => $limit,
            );
            $agent_query = new WP_Query( $args );?>
        <?php while($agent_query->have_posts()): $agent_query->the_post(); ?>

			<li class="col-lg-12" data-animation-direction="from-bottom" data-animation-delay="200">
				<a href="<?php echo get_page_link(); ?>"><img src="<?php echo $text = get_post_meta( $post->ID, '_wt_agent_img', true ); ?>" alt="" /></a>
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
	</div>
	<!-- END SIDEBAR AGENTS -->
	
	<!-- BEGIN AGENCIES -->
	<div id="agencies" class="col-sm-12" data-animation-direction="fade" data-animation-delay="250">
		<h2 class="section-title">Our Agencies</h2>
		
		<div class="mapborder">
			<div id="map_agency" class="gmap"></div>
		</div>
		<select id="agency" name="agency" data-placeholder="Choose an agency">
			<option value=""> </option>
			<!-- The list of agencies will be automatically created. 
				Set the list of agencies in the file js/agencies.js -->
		</select>
	</div>
	<!-- END AGENCIES -->
	
</div>