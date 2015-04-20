<?php global $wt_cozy; ?>
<div class="main col-sm-8">
	<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="<?php echo $delay; ?>"><?php echo $wt_cozy['section_feature_title']?></h1>

	<?php if ($wt_cozy['section_feature_display']) : ?>
    <?php 
        $limit = $wt_cozy['section_feature_number'];
    	$args = array(
            'post_type'         => 'feature',
            'post_status'       => 'publish',
            'posts_per_page'    => $limit,
        );
        $feature_query = new WP_Query( $args );?>
    <?php while($feature_query->have_posts()): $feature_query->the_post(); 

    $feature_icon_text = get_post_meta( $post->ID, '_wt_feature_icon_text', true );
    $feature_description = get_post_meta( $post->ID, '_wt_feature_description', true );
    ?>
	<div class="feature col-sm-4" data-animation-direction="from-bottom" data-animation-delay="250">
		<i class="fa <?php echo $feature_icon_text; ?>"></i>
		<h3><?php the_title() ?></h3>
		<p><?php echo $feature_description; ?></p>
		<a href="<?php the_permalink(); ?>" class="btn btn-default-color">Read More</a>
	</div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
	<?php endif; ?>
	
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
	

	<?php if ($wt_cozy['section_news_display']) : ?>						
	<!-- BEGIN LATEST NEWS -->
	<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_news_title']?></h1>					
	<div class="latest-news list-style clearfix">
        <?php 
            $limit = $wt_cozy['section_news_number'];
        	$args = array(
                'post_status'       => 'publish',
                'posts_per_page'    => $limit,
            );
            $blog_query = new WP_Query( $args );?>
        <?php while($blog_query->have_posts()): $blog_query->the_post(); ?>
		<div class="item col-sm-12" data-animation-direction="from-bottom" data-animation-delay="250">
			<div class="image">
				<a href="<?php the_permalink(); ?>">
					<span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
				</a>
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
				}
				else {
					echo '<img src="http://placehold.it/766x515" />';
				}
				?>
			</div>
			<div class="tag"><i class="fa fa-file-text"></i></div>
			<div class="info-blog">
				<ul class="top-info">
					<li><i class="fa fa-calendar"></i> <?php echo $date = mysql2date('F j, Y', $post->post_date);?></li>
					<li><i class="fa fa-comments-o"></i> <?php comments_number( '0', '1', '% responses' ); ?></li>
					<li><i class="fa fa-tags"></i> 
					<?php $posttags = get_the_tags(); 					
						if ($posttags) {
						$i=0;										
						foreach($posttags as $tag) {
							$tabname = $tag->name; 
							if (count($posttags) - $i < 2){
								echo $tabname;
							} else {
								echo $tabname.','.' ';
							}
							$i++;							
						}						
					}?>
					</li>
				</ul>
				<h3>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h3>
				<?php the_excerpt(); ?>
			</div>
		</div>
		<?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
	</div>
	<!-- END LATEST NEWS -->
	<?php endif; ?>
	
</div>