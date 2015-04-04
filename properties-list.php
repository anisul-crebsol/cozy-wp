<?php
/**
 * Template Name: Properties List
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

<?php get_template_part ('/includes/properties/listing-header'); ?>					

						
						<!-- BEGIN PROPERTY LISTING -->
						<div id="property-listing" class="list-style clearfix">
							<div class="row">
<?php get_template_part ('/includes/properties/property-listing'); ?>	
							</div>
						</div>
						<!-- END PROPERTY LISTING -->
						
						
						<!-- BEGIN PAGINATION -->
<?php get_template_part ('/includes/blog-listing/pagination'); ?>
						<!-- END PAGINATION -->
						
					</div>	
					<!-- END MAIN CONTENT -->
					
					
					<!-- BEGIN SIDEBAR -->
					<div class="sidebar gray col-sm-4">
						
						<!-- BEGIN ADVANCED SEARCH -->
<?php get_template_part ('/includes/properties/advanced-search'); ?>
						<!-- END ADVANCED SEARCH -->
						
						<!-- BEGIN LATEST NEWS -->
<?php get_template_part ('/includes/properties/latest-news'); ?>
						<!-- END LATEST NEWS -->
							
						<!-- BEGIN NEWSLETTER -->
<?php get_template_part ('/includes/properties/newsletter'); ?>
						<!-- END NEWSLETTER -->
						
					</div>
					<!-- END SIDEBAR -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
<?php get_footer(); ?>