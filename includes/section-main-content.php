					<div class="main col-sm-8">
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Template Features</h1>

						<div class="feature col-sm-4" data-animation-direction="from-bottom" data-animation-delay="250">
							<i class="fa fa-pencil"></i>
							<h3>Simple, Clean & Modern Design</h3>
							<p>Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
							<a href="about.html" class="btn btn-default-color">Read More</a>
						</div>
						<div class="feature col-sm-4" data-animation-direction="from-bottom" data-animation-delay="450">
							<i class="fa fa-tablet"></i>
							<h3>Fully Responsive & Retina Ready</h3>
							<p>Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
							<a href="about.html" class="btn btn-default-color">Read More</a>
						</div>
						<div class="feature col-sm-4" data-animation-direction="from-bottom" data-animation-delay="650">
							<i class="fa fa-copy"></i>
							<h3>+20 different Pages highly Customizable</h3>
							<p>Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
							<a href="about.html" class="btn btn-default-color">Read More</a>
						</div>
						
						
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Property Gallery</h1>
						<p class="center" data-animation-direction="from-bottom" data-animation-delay="150">Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis. Pellentesque elementum libero enim, eget gravida nunc laoreet et.</p>
					
						<div id="property-gallery" class="owl-carousel property-gallery">
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="350">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a>
								<img src="http://placehold.it/246x217" alt="" />
							</div>
			
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="350">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a>
								<img src="http://placehold.it/246x217" alt="" />
							</div>
							
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="350">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a>
								<img src="http://placehold.it/246x217" alt="" />
							</div>
							<div class="item">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a>
								<img src="http://placehold.it/246x217" alt="" />
							</div>
							<div class="item">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a>
								<img src="http://placehold.it/246x217" alt="" />
							</div>
							<div class="item">
								<a href="http://placehold.it/760x670" data-gal="prettyPhoto[gallery]" title="Lorem ipsum"><span class="btn btn-default">+</span></a>
								<img src="http://placehold.it/246x217" alt="" />
							</div>
						</div>
						
						
						<!-- BEGIN LATEST NEWS -->
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Latest News</h1>					
						<div class="latest-news list-style clearfix">
						<?php if ( have_posts() ) : ?>
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>	
							<div class="item col-sm-12" data-animation-direction="from-bottom" data-animation-delay="250">
								<div class="image">
									<a href="<?php echo get_page_link(); ?>">
										<span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
									</a>
									<img src="http://placehold.it/766x515" alt="" />
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
						
					</div>