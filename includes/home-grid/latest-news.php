<?php global $wt_cozy; ?>
<div class="gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<h1 class="section-title" data-animation-direction="from-left" data-animation-delay="50"><?php echo $wt_cozy['section_news_title']?></h1>
				
				<p class="center" data-animation-direction="from-left" data-animation-delay="250">
					<?php echo $wt_cozy['section_news_description']?>
					<br><br>
					<a href="<?php echo get_home_url(); ?>/blog/" class="btn btn-default-color" data-animation-direction="from-left" data-animation-delay="450">View All</a>
					<br><br>
				</p>
			</div>
			
			<div class="col-sm-9">
				<div class="grid-style1">
                <?php 
                    $limit = $wt_cozy['section_news_number'];
                	$args = array(
                        'post_status'       => 'publish',
                        'posts_per_page'    => $limit,
                    );
                    $blog_query = new WP_Query( $args );?>
                <?php while($blog_query->have_posts()): $blog_query->the_post(); ?>
					<div class="item col-sm-4" data-animation-direction="from-bottom" data-animation-delay="650">
						<div class="image">
							<a href="<?php the_permalink(); ?>">
								<span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
							</a>
							<?php
							if ( has_post_thumbnail() ) {
								echo get_the_post_thumbnail($post->ID, array( 760, 670 ));
							}
							else {
								echo '<img src="http://placehold.it/760x670" />';
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
									foreach($posttags as $tag) {
										$tabname[] = $tag->name; 
									}
									echo implode(', ', $tabname);
								}?>
								</li>
							</ul>
							<h3>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
						</div>
					</div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
				</div>
			</div>
			
		</div>
	</div>
</div>