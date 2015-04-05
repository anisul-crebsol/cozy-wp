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
						<h1 class="property-title"><?php the_title(); ?> <small>Upper East Side, New York</small></h1>
						
						<div class="property-topinfo">
							<ul class="amenities">
								<li><i class="icon-apartment"></i> Apartment</li>
								<li><i class="icon-area"></i> 2150 Sq Ft</li>
								<li><i class="icon-bedrooms"></i> 4</li>
								<li><i class="icon-bathrooms"></i> 3</li>
							</ul>
							
							<div id="property-id">ID: #025635637</div>
						</div>

						<!-- BEGIN PROPERTY DETAIL SLIDERS WRAPPER -->
						<div id="property-detail-wrapper" class="style1">
							
							<div class="price">
								<i class="fa fa-home"></i>For Sale
								<span>$950,000</span>
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
						
							<?php 
							/*$entries = get_post_meta( get_the_ID(), '_wt_repeat_group', true );

							foreach ( (array) $entries as $key => $entry ) {

							    if ( isset( $entry['image_id'] ) ) {
							        $img = wp_get_attachment_image( $entry['image_id'], 'share-pick', null, array(
							            'class' => 'thumb',
							        ) );
							    }
							    $caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';

							    // Do something with the data
									echo "</div>";
									echo 'test';
									echo "<div class='item'>";
							}*/
							?>

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