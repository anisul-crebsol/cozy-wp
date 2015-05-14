<?php global $wt_cozy; ?>
<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_news_title']?></h1>
<div id="latest-news-slider" class="owl-carousel latest-news-slider" data-animation-direction="from-bottom" data-animation-delay="250">
<?php 
    $limit = $wt_cozy['section_news_number'];
	$args = array(
        'post_status'       => 'publish',
        'posts_per_page'    => $limit,
    );
    $blog_query = new WP_Query( $args );?>
<?php while($blog_query->have_posts()): $blog_query->the_post(); ?>
	<div class="item">
		<div class="image">
			<a href="<?php the_permalink(); ?>"><span class="btn btn-default"><i class="fa fa-file-o"></i> <?php _e( 'Read More', 'cozy' );?></span></a>
			<?php echo wt_cozy_thumbnail('760x670'); ?>
			?>
		</div>
		
		<div class="tag"><i class="fa fa-file-text"></i></div>
		
		<div class="info">
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
				
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
		</div>
	</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
</div>