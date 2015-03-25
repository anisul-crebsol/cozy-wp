<?php
/**
 * Template Name: Home Slider
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
		
		
		<!-- BEGIN HOME SLIDER SECTION -->
<?php get_template_part ('/includes/home-slider/slider'); ?>
		<!-- END HOME SLIDER SECTION -->
		
		<!-- BEGIN HOME ADVANCED SEARCH -->
<?php get_template_part ('/includes/home-slider/search'); ?>
		<!-- END HOME ADVANCED SEARCH -->
		
		<!-- BEGIN PROPERTIES SLIDER WRAPPER-->
<?php get_template_part ('/includes/home-slider/properties-slider'); ?>
		<!-- END PROPERTIES SLIDER WRAPPER -->
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-8">

		<!-- BEGIN RECENT PROPERTIES SLIDER-->
<?php get_template_part ('/includes/home-slider/recent-properties'); ?>
		<!-- END RECENT PROPERTIES SLIDER -->						
						
		<!-- BEGIN LATEST NEWS-->
<?php get_template_part ('/includes/home-slider/latest-news'); ?>
		<!-- END LATEST NEWS -->	
					</div>
					<!-- END MAIN CONTENT -->
					
					<!-- BEGIN SIDEBAR -->
<?php get_template_part ('/includes/home-slider/sidebar'); ?>
					<!-- END SIDEBAR -->
					
				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		<!-- BEGIN TESTIMONIALS -->
<?php get_template_part ('/includes/home-slider/testimonials'); ?>
		<!-- END TESTIMONIALS -->
		
<?php get_footer(); ?>