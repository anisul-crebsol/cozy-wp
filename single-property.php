<?php
/**
 * @package Cozy
 */
global $wt_cozy;

get_header(); ?>

</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<!-- BEGIN HEADER -->
<?php get_template_part ('/includes/section-header'); ?>
		<!-- END HEADER -->
		
		
		<!-- BEGIN PAGE TITLE/BREADCRUMB -->
<?php get_template_part ('/includes/breadcrumb'); ?>
		<!-- END PAGE TITLE/BREADCRUMB -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-8">
					<?php while ( have_posts() ) : the_post(); 
						$property_types = wp_get_post_terms($post->ID, 'wt-property-types', array("fields" => "names"));
						$property_id = get_post_meta( $post->ID, '_wt_property_id', true);
						$property_price = get_post_meta( $post->ID, '_wt_property_price', true);
						if ($property_price) : $property_price = $property_price; else : $property_price = 0; endif;
						$property_price_eng = number_format($property_price);
						$property_price_symble = get_post_meta( $post->ID, '_wt_property_price_symble', true);
						$property_address = get_post_meta( $post->ID, '_wt_property_address', true);
						$property_city = get_post_meta( $post->ID, '_wt_property_city', true);
						$property_area = get_post_meta( $post->ID, '_wt_property_area', true );
						$property_area_measurement = get_post_meta( $post->ID, '_wt_property_area_measurement', true );
						$property_bedrooms = get_post_meta( $post->ID, '_wt_property_bedrooms', true );
						$property_bathrooms = get_post_meta( $post->ID, '_wt_property_bathrooms', true );
					?>					
						<h1 class="property-title"><?php the_title(); ?> <small><?php echo $property_address; ?>, <?php echo $property_city; ?></small></h1>
						
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
								<?php if($property_area) { ?><li><i class="icon-area"></i> <?php echo $property_area . ' '. $property_area_measurement ; ?></li><?php } ?>
								<?php if($property_bedrooms) { ?><li><i class="icon-bedrooms"></i> <?php echo $property_bedrooms; ?></li><?php } ?>
								<?php if($property_bathrooms) { ?><li><i class="icon-bathrooms"></i> <?php echo $property_bathrooms; ?></li><?php } ?>
							</ul>
							
							<div id="property-id">ID: #<?php echo $property_id; ?></div>
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
								<?php if($property_price) echo "<span>$property_price_symble $property_price_eng</span>"; ?>
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
<?php get_sidebar(); ?>								
					<!-- END SIDEBAR -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
	
<?php get_footer(); ?>