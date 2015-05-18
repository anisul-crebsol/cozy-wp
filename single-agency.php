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
						
<?php while ( have_posts() ) : the_post(); ?>
	
						<!-- BEGIN AGENCY DETAIL -->
<?php get_template_part ('/includes/single-agency/agency-detail'); ?>
						<!-- END AGENCY DETAIL -->

	
<?php echo $property_content1 = do_shortcode(wpautop(get_post_meta( $post->ID, '_wt_agency_description1', true ))); ?>

						<!-- BEGIN GALLERY -->
<?php get_template_part ('/includes/single-agency/gallery'); ?>
						<!-- END GALLERY -->

<?php echo $property_content2 = do_shortcode(wpautop(get_post_meta( $post->ID, '_wt_agency_description2', true ))); ?>

<?php endwhile; ?>

						<!-- BEGIN AGENTS LIST -->
<?php get_template_part ('/includes/single-agency/agents-list'); ?>
						<!-- END AGENTS LIST -->
						
						
						<!-- BEGIN PROPERTIES ASSIGNED -->
<?php get_template_part ('/includes/single-agency/properties-assigned'); ?>	
						<!-- END PROPERTIES ASSIGNED -->
						
						
						<!-- BEGIN CONTACT FORM -->
<?php get_template_part ('/includes/single-agency/contact-form'); ?>	
						<!-- END CONTACT FORM -->
						
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