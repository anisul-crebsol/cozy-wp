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
						
						<!-- BEGIN AGENCY DETAIL -->
<?php get_template_part ('/includes/single-agency/agency-detail'); ?>
						<!-- END AGENCY DETAIL -->
<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>						
						
						<p class="center">
<?php echo $property_content1 = get_post_meta( $post->ID, '_wt_property_content1', true ); ?></p>
						
						<!-- BEGIN GALLERY -->
<?php get_template_part ('/includes/single-agency/gallery'); ?>
						<!-- END GALLERY -->
						
						
						<p class="center">
<?php echo $property_content2 = get_post_meta( $post->ID, '_wt_property_content2', true ); ?>
						</p>
<?php endwhile; ?>
<?php endif; ?>						
						
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
					<div class="sidebar gray col-sm-4">
						
						<!-- BEGIN ADVANCED SEARCH -->
<?php get_template_part ('/includes/single-agency/advanced-search'); ?>	
						<!-- END ADVANCED SEARCH -->
						
						<!-- BEGIN LATEST NEWS -->
<?php get_template_part ('/includes/single-agency/latest-news'); ?>	
						<!-- END LATEST NEWS -->
							
						<!-- BEGIN NEWSLETTER -->
<?php get_template_part ('/includes/single-agency/newsletter'); ?>	
						<!-- END NEWSLETTER -->
						
					</div>
					<!-- END SIDEBAR -->
					
				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
<?php get_footer(); ?>