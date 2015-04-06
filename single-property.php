<?php
/**
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
		
		
		<!-- BEGIN PAGE TITLE/BREADCRUMB -->
<?php get_template_part ('/includes/blog-listing/breadcrumb'); ?>
		<!-- END PAGE TITLE/BREADCRUMB -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-8">
					<?php while ( have_posts() ) : the_post(); ?>					
						<h1 class="property-title"><?php the_title(); ?> <small><?php echo $text = get_post_meta( $post->ID, '_wt_property_address', true ); ?>, <?php echo $text = get_post_meta( $post->ID, '_wt_property_city', true ); ?></small></h1>
						
						<div class="property-topinfo">
							<ul class="amenities">
								<li><i class="icon-apartment"></i>
								<?php $terms = wp_get_post_terms($post->ID, 'wt-property-types', array("fields" => "names"));
									$i=0;
									foreach($terms as $term):
										if (count($terms) - $i < 2):
											echo $term;
										else :
											echo $term.','.' ';
										endif;
										$i++;
									 endforeach;
								 ?>
								</li>
								<li><i class="icon-area"></i> <?php echo $text = get_post_meta( $post->ID, '_wt_property_square_feet', true ); ?></li>
								<li><i class="icon-bedrooms"></i> <?php echo $text = get_post_meta( $post->ID, '_wt_property_bedrooms', true ); ?></li>
								<li><i class="icon-bathrooms"></i> <?php echo $text = get_post_meta( $post->ID, '_wt_property_bathrooms', true ); ?></li>
							</ul>
							
							<div id="property-id">ID: #<?php echo $text = get_post_meta( $post->ID, '_wt_property_id', true ); ?></div>
						</div>
						<!-- BEGIN PROPERTY DETAIL SLIDERS WRAPPER -->
						<div id="property-detail-wrapper" class="style1">
							
							<div class="price">
								<i class="fa fa-home"></i>
								<?php $terms = wp_get_post_terms($post->ID, 'property-status', array("fields" => "names"));
									$i=0;
									foreach($terms as $term):
										if (count($terms) - $i < 2):
											echo $term;
										else :
											echo $term.','.' ';
										endif;
										$i++;
									 endforeach;
								 ?>
								<span><?php echo $text = get_post_meta( $post->ID, '_wt_property_price', true ); ?></span>
							</div>
									
							<!-- BEGIN PROPERTY DETAIL LARGE IMAGE SLIDER -->

<?php get_template_part ('/includes/property-detail/slider'); ?>

							<!-- END PROPERTY DETAIL LARGE IMAGE SLIDER -->
							
							<!-- BEGIN PROPERTY DETAIL THUMBNAILS SLIDER -->

<?php get_template_part ('/includes/property-detail/thumbnail'); ?>

							<!-- END PROPERTY DETAIL THUMBNAILS SLIDER -->
						
						</div>

						<?php echo $text = get_post_meta( $post->ID, '_wt_property_description', true ); ?>												
						<!-- BEGIN PROPERTY AMENITIES LIST -->

<?php get_template_part ('/includes/property-detail/amenities'); ?>

						<!-- END PROPERTY AMENITIES LIST -->
						


						<h1 class="section-title">Property Features</h1>
						<!-- BEGIN PROPERTY FEATURES LIST -->
<?php get_template_part ('/includes/property-detail/feature-list'); ?>
						<!-- END PROPERTY FEATURES LIST -->
						
						
						<h1 class="section-title">Property Location</h1>
						<!-- PROPERTY MAP HOLDER -->
						<div id="property_location" class="map col-sm-12"></div>
						
						<div class="share-wraper col-sm-12">
							<h5>Share this Property:</h5>
							<ul class="social-networks">
								<li><a target="_blank" href="http://www.facebook.com/sharer.php?s=100&amp;p%5Burl%5D=http%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fcozy%2Fproperties-detail.html%3Ffb%3Dtrue&amp;p%5Bimages%5D%5B0%5D=http%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fcozy%2Fimages%2Fdetail-img1.jpg&amp;p%5Btitle%5D=Cozy%20Property"><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/intent/tweet?url=http://www.wiselythemes.com/html/cozy/properties-detail.html&amp;text=Cozy%20Property"><i class="fa fa-twitter"></i></a></li>
								<li><a target="_blank" href="https://plus.google.com/share?url=http://www.wiselythemes.com/html/cozy/properties-detail.html"><i class="fa fa-google"></i></a></li>
								<li><a target="_blank" href="http://pinterest.com/pin/create/button/?url=http://www.wiselythemes.com/html/cozy/properties-detail.html&amp;description=Cozy%20Property&amp;media=http%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fcozy%2Fimages%2Fdetail-img1.jpg"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="mailto:?subject=Check%20out%20this%20property%20I%20found!&amp;body=http://www.wiselythemes.com/html/cozy/properties-detail.html"><i class="fa fa-envelope"></i></a></li>
							</ul>
							
							<a class="print-button" href="javascript:window.print();">
								<i class="fa fa-print"></i>
							</a>
						</div>
						
						
						<!-- BEING AGENT INFORMATION -->
<?php get_template_part ('/includes/property-detail/agent-info'); ?>
						<!-- END AGENT INFORMATION -->
						
						
						<!-- BEGIN SIMILAR PROPERTIES -->
<?php get_template_part ('/includes/property-detail/similar'); ?>
						<!-- END PROPERTIES ASSIGNED -->
					<?php endwhile; ?>						
					</div>	
					<!-- END MAIN CONTENT -->
					
					
					<!-- BEGIN SIDEBAR -->
					<div class="sidebar gray col-sm-4">
						
						<!-- BEGIN ADVANCED SEARCH -->
<?php get_template_part ('/includes/property-detail/advanced-search'); ?>
						<!-- END ADVANCED SEARCH -->
						
						<!-- BEGIN LATEST NEWS -->
<?php get_template_part ('/includes/property-detail/latest-news'); ?>
						<!-- END LATEST NEWS -->
							
						<!-- BEGIN NEWSLETTER -->
<?php get_template_part ('/includes/property-detail/newsletter'); ?>
						<!-- END NEWSLETTER -->
						
					</div>
					<!-- END SIDEBAR -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
<?php get_footer(); ?>