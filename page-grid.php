<?php
/**
 * Template Name: Home Grid
 * @package cozy
 */
global $wt_cozy; ?>

<?php get_header(); ?>
</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<!-- BEGIN HEADER -->
<?php get_template_part ('/includes/section-header'); ?>
		<!-- END HEADER -->
		
		
		<!-- BEGIN HOME GRID -->
		<div id="home-grid">
			<div id="freewall" class="free-wall">

			<?php if ($wt_cozy['section_feature_display']) : ?>
		    <?php 
		        $limit = $wt_cozy['section_grid_number'];
		    	$args = array(
		            'post_type'         => 'listing',
		            'post_status'       => 'publish',
		            'posts_per_page'    => 15,
		        );
		        $listing_query = new WP_Query( $args );?>
		    <?php while($listing_query->have_posts()): $listing_query->the_post(); ?>

				<div class="item">
					<a class="info" href="properties-detail.html">
						<span class="price">
							<i class="fa fa-home"></i><?php echo wp_listings_get_status();?><span><?php echo get_post_meta( $post->ID, '_listing_price', true);?></span>
						</span>
						<h3><?php the_title() ?></h3>
						<span class="location"><?php echo get_post_meta( $post->ID, '_listing_address', true);?></span>
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

		    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
			<?php endif; ?>

			</div>
		</div>
		<!-- END HOME GRID -->
		
		<!-- BEGIN HOME ADVANCED SEARCH (class="gray" for a gray background) -->
		<div id="home-advanced-search" class="gray open">
			<div id="opensearch"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<form>
							<div class="form-group">
								<div class="form-control-large">
									<input type="text" class="form-control" name="location" placeholder="City, State, Country, etc...">
								</div>
								
								<div class="form-control-large">
									<select id="search_prop_type" name="search_prop_type" data-placeholder="Type of Property">
										<option value=""> </option>
										<option value="residential">Residential</option>
										<option value="commercial">Commercial</option>
										<option value="land">Land</option>
									</select>
								</div>
								
								<div class="form-control-small">
									<select id="search_status" name="search_status" data-placeholder="Status">
										<option value=""> </option>
										<option value="sale">For Sale</option>
										<option value="rent">For Rent</option>
									</select>
								</div>
								
								<div class="form-control-small">
									<select id="search_bedrooms" name="search_bedrooms" data-placeholder="Bedrooms">
										<option value=""> </option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="5plus">5+</option>
									</select>
								</div>
								
								<div class="form-control-small">
									<select id="search_bathrooms" name="search_bathrooms" data-placeholder="Bathrooms">
										<option value=""> </option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="4plus">4+</option>
									</select>
								</div>
								
								<div class="form-control-small">
									<select id="search_minprice" name="search_minprice" data-placeholder="Min. Price">
										<option value=""> </option>
										<option value="0">$0</option>
										<option value="25000">$25000</option>
										<option value="50000">$50000</option>
										<option value="75000">$75000</option>
										<option value="100000">$100000</option>
										<option value="150000">$150000</option>
										<option value="200000">$200000</option>
										<option value="300000">$300000</option>
										<option value="500000">$500000</option>
										<option value="750000">$750000</option>
										<option value="1000000">$1000000</option>
									</select>
								</div>
								
								<div class="form-control-small">
									<select id="search_maxprice" name="search_maxprice" data-placeholder="Max. Price">
										<option value=""> </option>
										<option value="25000">$25000</option>
										<option value="50000">$50000</option>
										<option value="75000">$75000</option>
										<option value="100000">$100000</option>
										<option value="150000">$150000</option>
										<option value="200000">$200000</option>
										<option value="300000">$300000</option>
										<option value="500000">$500000</option>
										<option value="750000">$750000</option>
										<option value="1000000">$1000000</option>
										<option value="1000000plus">>$1000000</option>
									</select>
								</div>
								
								<button type="submit" class="btn btn-fullcolor">Search</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<!-- END HOME ADVANCED SEARCH -->
		
		<div class="home3-hero">
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<h2 data-animation-direction="from-left" data-animation-delay="100">We will help you find the perfect property that fits all your needs.</h2>
						<p data-animation-direction="from-left" data-animation-delay="300">Mauris hendrerit risus a arcu dapibus varius. Quisque dictum, erat molestie vehicula pellentesque, enim elit sodales leo, id pharetra mi tortor at tellus. Etiam ornare, enim at tincidunt congue, nibh dui suscipit augue, pellentesque hendrerit ligula lorem vehicula sapien. Nunc aliquet pulvinar porta. Sed et ligula at lacus posuere convallis.</p>
						<a href="agent-listing.html" class="btn btn-default-color" data-animation-direction="from-left" data-animation-delay="500">Find an Agent</a>
					</div>
					
					<div class="col-sm-5" data-animation-direction="from-right" data-animation-delay="150">
						<div class="mapborder">
							<div id="map_agency" class="gmap"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- BEGIN PROPERTIES SLIDER WRAPPER-->
		<div class="parallax colored-bg" id="home-grid-latest-properties" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_properties_title']?></h1>
						
						<div id="new-properties-slider" class="owl-carousel carousel-style1">
							<?php
							$delay = 250;
							$display_posts = $wt_cozy['section_properties_number'];
							$listing_args = array(
								'post_type' => 'listing',
								'tax_query'	=> array(
									array(
										'taxonomy'	=> 'status',
										'field'		=> 'slug',
										'terms'		=> array( 'featured' ),
										'operator'	=> 'NOT IN',
									),
								),
								'showposts' => $display_posts
							);
							query_posts($listing_args);
							if (have_posts()) : while (have_posts()) : the_post();
							
							$listing_status = wp_listings_get_status();
							$listing_price = get_post_meta( $post->ID, '_listing_price', true);
							$listing_address = get_post_meta( $post->ID, '_listing_address', true);
							$listing_sqft = get_post_meta( $post->ID, '_listing_sqft', true );
							$listing_bedrooms = get_post_meta( $post->ID, '_listing_bedrooms', true );
							$listing_bathrooms = get_post_meta( $post->ID, '_listing_bathrooms', true );
							?>
							<div class="item" data-animation-direction="from-bottom" data-animation-delay="<?php echo $delay; ?>">
								<div class="image">
									<a href="<?php the_permalink(); ?>" class="info">
										<?php 
											$listing_title = get_the_title();
											$title_limit = 35;
											$dots = " ...";
											if(strlen($listing_title) <= $title_limit) {
												echo "<h3>" . $listing_title . "</h3>";
											} else {
												echo "<h3>" . substr($listing_title, 0, $title_limit) . $dots . "</h3>";
											}
										?>
										<?php if($listing_address) echo "<span class='location'>$listing_address</span>"; ?>
									</a>
									<?php
									if ( has_post_thumbnail() ) {
										echo get_the_post_thumbnail($post->ID, array( 270, 238 ));
									}
									else {
										echo '<img src="http://placehold.it/270x238" />';
									}
									?>
								</div>
								<div class="price">
									<i class="fa fa-home"></i><?php if('' != $listing_status) echo $listing_status; ?>
									<?php if($listing_price) echo "<span>$listing_price</span>"; ?>
								</div>
								<ul class="amenities">
									<?php if($listing_sqft) { ?><li><i class="icon-area"></i> <?php echo "$listing_sqft Sq Ft"; ?></li><?php } ?>
									<?php if($listing_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $listing_bedrooms; ?></li><?php } ?>
									<?php if($listing_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $listing_bathrooms; ?></li><?php } ?>
								</ul>
							</div>
							<?php $delay+=200; endwhile; endif; wp_reset_query(); ?>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- END PROPERTIES SLIDER WRAPPER -->
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<div class="main">
						<div class="col-sm-12">
							<h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50"><?php echo $wt_cozy['section_feature_title']?></h1>
							<?php if ($wt_cozy['section_feature_display']) : ?>
		                    <?php 
		                        $limit = $wt_cozy['section_feature_number_grid'];
		                    	$args = array(
		                            'post_type'         => 'feature',
		                            'post_status'       => 'publish',
		                            'posts_per_page'    => $limit,
		                        );
		                        $feature_query = new WP_Query( $args );?>
		                    <?php while($feature_query->have_posts()): $feature_query->the_post(); ?>
							<div class="feature col-sm-3" data-animation-direction="from-bottom" data-animation-delay="250">
								<i class="fa <?php echo $text = get_post_meta( $post->ID, '_wt_exp_text', true ); ?>"></i>
								<h3><?php the_title() ?></h3>
								<p><?php echo $text = get_post_meta( $post->ID, '_wt_exp_description', true ); ?></p>
								<a href="<?php echo get_page_link(); ?>" class="btn btn-default-color">Read More</a>
							</div>
			                <?php endwhile; ?>
			                <?php wp_reset_postdata(); ?>
							<?php endif; ?>
						</div>
					
						<div class="content-divider col-sm-12"></div>
					
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
					
						<!-- BEGIN TESTIMONIALS -->
						<div id="testimonials" class="col-sm-4">
						<?php get_sidebar('grid'); ?>	
							<h2 class="section-title" data-animation-direction="from-right" data-animation-delay="50">Testimonials</h2>
							<div id="testimonials-slider" class="owl-carousel testimonials">
								<div class="item">
									<blockquote class="text" data-animation-direction="from-right" data-animation-delay="250">
										<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
									</blockquote>
									<div class="author" data-animation-direction="from-right" data-animation-delay="450">
										<img src="http://placehold.it/61x61" alt="" />
										<div>
											Mark Maecenas<br>
											<span>CEO at Lorem Ipsum Agency</span>
										</div>
									</div>
								</div>
								
								<div class="item">
									<blockquote class="text">
										<p>Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
									</blockquote>
									<div class="author">
										<img src="http://placehold.it/61x61" alt="" />
										<div>
											John Doe<br>
											<span>CTO at Dolor Sit Amet Agency</span>
										</div>
									</div>
								</div>
									
								<div class="item">
									<blockquote class="text">
										<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
									</blockquote>
									<div class="author">
										<img src="http://placehold.it/61x61" alt="" />
										<div>
											Mary Smith<br>
											<span>UFO at Some Agency</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END TESTIMONIALS -->
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		<!-- BEGIN LATEST NEWS WRAPPER WITH GRAY BACKGROUND-->
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
										<a href="blog-detail.html"><?php the_title(); ?></a>
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
		<!-- END LATEST NEWS WRAPPER WITH GRAY BACKGROUND-->

<?php get_template_part ('/includes/section-newsletter'); ?>
<?php get_footer(); ?>