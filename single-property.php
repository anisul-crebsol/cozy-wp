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

<?php get_template_part ('/includes/single-property/slider'); ?>

							<!-- END PROPERTY DETAIL LARGE IMAGE SLIDER -->
							

							<!-- BEGIN PROPERTY DETAIL THUMBNAILS SLIDER -->

<?php get_template_part ('/includes/single-property/thumbnail'); ?>

							<!-- END PROPERTY DETAIL THUMBNAILS SLIDER -->
						
						</div>

						<?php echo $text = get_post_meta( $post->ID, '_wt_property_description', true ); ?>												
						<!-- BEGIN PROPERTY AMENITIES LIST -->

<?php get_template_part ('/includes/single-property/amenities'); ?>

						<!-- END PROPERTY AMENITIES LIST -->
						


						<!-- BEGIN PROPERTY FEATURES LIST -->
<?php get_template_part ('/includes/single-property/feature-list'); ?>
						<!-- END PROPERTY FEATURES LIST -->
						
						
						<h1 class="section-title">Property Location</h1>
						<!-- PROPERTY MAP HOLDER -->
						<div id="property_location" class="map col-sm-12"></div>
						

<?php get_template_part ('/includes/single-property/share'); ?>						
						
						<!-- BEING AGENT INFORMATION -->
<?php get_template_part ('/includes/single-property/agent-info'); ?>
						<!-- END AGENT INFORMATION -->
						
						
						<!-- BEGIN SIMILAR PROPERTIES -->
<?php get_template_part ('/includes/single-property/similar'); ?>
						<!-- END PROPERTIES ASSIGNED -->
					<?php endwhile; ?>						
					</div>	
					<!-- END MAIN CONTENT -->
					
					
					<!-- BEGIN SIDEBAR -->
					<div class="sidebar gray col-sm-4">
						
						<!-- BEGIN ADVANCED SEARCH -->
<?php get_template_part ('/includes/single-property/advanced-search'); ?>
						<!-- END ADVANCED SEARCH -->
						
						<!-- BEGIN LATEST NEWS -->
<?php get_template_part ('/includes/single-property/latest-news'); ?>
						<!-- END LATEST NEWS -->
							
						<!-- BEGIN NEWSLETTER -->
<?php get_template_part ('/includes/single-property/newsletter'); ?>
						<!-- END NEWSLETTER -->
						
					</div>
					<!-- END SIDEBAR -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
<?php get_footer(); ?>