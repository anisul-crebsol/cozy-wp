<?php global $wt_cozy; ?>
					<div class="main col-sm-8">
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_feature_title']?></h1>

						<?php if ($wt_cozy['section_feature_display']) : ?>
	                    <?php 
	                        $limit = $wt_cozy['section_feature_number'];
	                    	$args = array(
	                            'post_type'         => 'feature',
	                            'post_status'       => 'publish',
	                            'posts_per_page'    => $limit,
	                        );
	                        $portfolio_query = new WP_Query( $args );?>
	                    <?php while($portfolio_query->have_posts()): $portfolio_query->the_post(); ?>
						<div class="feature col-sm-4" data-animation-direction="from-bottom" data-animation-delay="250">
							<i class="fa <?php echo $text = get_post_meta( $post->ID, '_wt_exp_text', true ); ?>"></i>
							<h3><?php the_title() ?></h3>
							<p><?php echo $text = get_post_meta( $post->ID, '_wt_exp_description', true ); ?></p>
							<a href="<?php echo get_page_link(); ?>" class="btn btn-default-color">Read More</a>
						</div>
		                <?php endwhile; ?>
		                <?php wp_reset_postdata(); ?>
						<?php endif; ?>

						
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_gallery_title']?></h1>
						<p class="center" data-animation-direction="from-bottom" data-animation-delay="150"><?php echo $wt_cozy['cozy_gallery_description']?></p>
					
						<div id="property-gallery" class="owl-carousel property-gallery">
							<?php 
							$incr = 0;
							for($inc=0; $inc<count($wt_cozy['cozy_gallery1']); $inc++){ 
							?>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="350">
								<a href="<?php echo $wt_cozy['cozy_gallery1'][$incr]['image']?>" data-gal="prettyPhoto[gallery]" title="<?php echo $wt_cozy['cozy_gallery1'][$incr]['title']?>"><span class="btn btn-default">+</span></a>
								<img src="<?php echo $wt_cozy['cozy_gallery1'][$incr]['thumb']?>" alt="" />
							</div>
							<?php $incr++; } ?>
						</div>
						
						<?php if ($wt_cozy['section_news_display']) : ?>						
						<!-- BEGIN LATEST NEWS -->
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_news_title']?></h1>					
						<div class="latest-news list-style clearfix">
						<?php if ( have_posts() ) : ?>
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>	
							<div class="item col-sm-12" data-animation-direction="from-bottom" data-animation-delay="250">
								<div class="image">
									<a href="<?php echo get_page_link(); ?>">
										<span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
									</a>
									<?php the_post_thumbnail(); ?>
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
												echo $tag->name . ' ,'; 
											}
										}?>
										</li>
									</ul>
									<h3>
										<a href="<?php echo get_page_link(); ?>"><?php the_title(); ?></a>
									</h3>
									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
							<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
						</div>
						<!-- END LATEST NEWS -->
						<?php endif; ?>
						
					</div>